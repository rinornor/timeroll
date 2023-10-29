<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appearance;
use Illuminate\Support\Facades\Auth;

class ShowAppearances extends Component
{

    public function delete(Appearance $appearance){
        $appearance->delete();
    }
    public function render()
    {
        return view('livewire.show-appearances', ['appearances' => Appearance::where('user_id', Auth::id())->get()]);
    }
}
