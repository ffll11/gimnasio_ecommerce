<?php

namespace App\Livewire\Management\Usuarios;

use Livewire\Component;

class UsuariosComponent extends Component
{
    public $users;

    public function mount(){

        $this->users = auth()->user();
    }
    public function render()
    {

        return view('livewire.management.usuarios.usuarios-component');
    }
}
