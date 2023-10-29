<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Event\Telemetry\Duration;

class AppearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appearances = Appearance::where('user_id', Auth::id())->get();
        return view('appearances.index', ['appearances' => $appearances]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appearances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           function timetosec($time){
            $parsed = date_parse($time);
            $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
            return $seconds;
        }

        $request->validate([
            'time_in' => 'required|date',
            'time_out' => 'required|date|after:time_in',
        ]);


        $time_out_sec = timetosec($request->time_out);
        $time_in_sec = timetosec($request->time_in);
        $duration = ($time_out_sec - $time_in_sec)/3600;
        $appearance = Appearance::create(['user_id' => Auth::id(),'date'=>$request->date, 'time_in' => $request->time_in, 'time_out'=> $request->time_out, 'duration'=>$duration]);
        return redirect()->route('appearance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
