<?php

namespace App\Livewire\Management\Usuario;

use Livewire\Component;

class UsuarioComponent extends Component
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
