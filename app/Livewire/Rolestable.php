<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Rolestable extends Component
{
    public $roles;
    public $name;

     public function mount()
    {
        $this->roles = Role::all();
    }

    public function store()
    {
        Role::create(['name' => $this->name]);
        $this->resetInputFields();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.rolestable');
    }

     private function resetInputFields()
    {
        $this->name = '';
    }
}
