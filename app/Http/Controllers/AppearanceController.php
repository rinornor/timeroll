<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Event\Telemetry\Duration;
use PDF;

class AppearanceController extends Controller
{
     function timetosec($time){
        $parsed = date_parse($time);
        $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
        return $seconds;
    }
    /**
     * Display a listing of the resource.
     */
    public function generatePDF(){
        $appearances = Appearance::where('user_id', Auth::id())->get();
        $data = [
            'title' => 'Appearances',
            'date' =>date('m/d/Y'),
            'appearances' => $appearances
        ];

        $pdf = PDF::loadView('thePDF', $data);
        return $pdf->download('appearances_log.pdf');
    }


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
           

        $request->validate([
            'time_in' => 'required|date',
            'time_out' => 'required|date|after:time_in',
        ]);


        $time_out_sec = $this->timetosec($request->time_out);
        $time_in_sec = $this->timetosec($request->time_in);
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
        $data = Appearance::find($id);
        return view('appearances.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        

        $request->validate([
            'time_in' => 'required|date',
            'time_out' => 'required|date|after:time_in',
        ]);

        $time_out_sec = $this->timetosec($request->time_out);
        $time_in_sec = $this->timetosec($request->time_in);
        $duration = ($time_out_sec - $time_in_sec)/3600;

        $data = Appearance::find($id);
        $data->update(array_merge([$request], ['duration'=>$duration] ));
        return redirect('appearance');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
