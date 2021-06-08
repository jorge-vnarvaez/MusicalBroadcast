<?php

namespace App\Http\Livewire\Organizador;

use Livewire\Component;

class Solicitud extends Component
{

    public $solicitud;

    public function mostrarSolicitud() {
        $this->emit("visualizarSolicitud", array("id" => $this->solicitud->id));
    }

    public function render()
    {
        return view('livewire.organizador.solicitud');
    }
}
