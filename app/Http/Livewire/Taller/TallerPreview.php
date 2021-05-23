<?php

namespace App\Http\Livewire\Taller;

use Livewire\Component;
use App\Models\Taller;
use DateTime;


class TallerPreview extends Component
{

    public $tallerActual;

    protected $listeners = ['visualizar'];

    public function visualizar(array $tallerSeleccionado)
    {
        $this->tallerActual = Taller::Find($tallerSeleccionado["id"]);
        $this->dispatchBrowserEvent('onContentChanged', ["slideActual" => $tallerSeleccionado['slideActual']]);
    }

    public function render()
    {
        return view('livewire.taller.taller-preview');
    }
}
