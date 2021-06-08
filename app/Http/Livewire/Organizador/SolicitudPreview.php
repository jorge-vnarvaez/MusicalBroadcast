<?php

namespace App\Http\Livewire\Organizador;

use Livewire\Component;
use App\Models\SolicitudTaller;

class SolicitudPreview extends Component
{

    public $solicitudActual;

    protected $listeners = ["visualizarSolicitud"];

    public function visualizarSolicitud(array $solicitudSeleccionada) {
       $this->solicitudActual = SolicitudTaller::find($solicitudSeleccionada["id"]);
    }

    public function render()
    {
        return view('livewire.organizador.solicitud-preview');
    }
}
