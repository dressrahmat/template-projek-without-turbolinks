<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleForm extends Form
{
    public ?Role $role;

    public $editMode = false;

    #[Rule('required', message: 'Hak Akses harus diisi!')]
    public $name;

    #[Rule('required|array', message: 'Hak Akses harus diisi!')]
    public $permissions;

    public function setForm(Role $role)
    {
        $this->role = $role;

        $this->name = $role->name;
        $this->permissions = $role->permissions;
    }

    public function store()
    {
        $role = Role::create($this->except('role'));
        $role->syncPermissions($this->permissions);
        $this->reset();
    }

    public function update()
    {
        $this->role->update($this->except('role'));
    }
}
