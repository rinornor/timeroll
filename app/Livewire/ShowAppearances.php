<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowAppearances extends Component
{

    public function delete(Appearance $appearance){
        $appearance->delete();
    }
    


    

    /**
     * Update the specified resource in storage.
     */
  



    
    public function render()
    {
        return view('livewire.show-appearances', ['appearances' => Appearance::where('user_id', Auth::id())->get()]);
    }
}
