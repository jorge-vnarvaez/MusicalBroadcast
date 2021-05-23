<?php

namespace App\Http\Livewire\Taller;

use Livewire\Component;
use DateTime;
use App\Models\Taller;

class Talleres extends Component
{

    public $talleres;

    public function mount()
    {
        $this->talleres = Taller::orderBy('TAL_Horario', 'asc')
            ->where('TAL_Horario', '>', new DateTime())
            ->where('TAL_Aforo', '>', 0)
            ->get();
    }

    public function render()
    {
        return view('livewire.taller.talleres');
    }
}
