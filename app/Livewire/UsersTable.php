<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTable extends Component
{
    public $users;
    public $name, $email, $password, $role;
    public $roles;

    public function mount()
    {
        $this->users = User::all();
        $this->roles = Role::all();
    }

     public function store()
    {
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $user->assignRole($this->role);
        $this->resetInputFields();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.users-table');
    }

     private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role = '';
    }
}
