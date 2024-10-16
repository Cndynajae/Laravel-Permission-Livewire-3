<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionTable extends Component
{
    public $permissions;
    public $name;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function store()
    {
        Permission::create(['name' => $this->name]);
        $this->resetInputFields();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.permission-table');
    }

     private function resetInputFields()
    {
        $this->name = '';
    }
}
