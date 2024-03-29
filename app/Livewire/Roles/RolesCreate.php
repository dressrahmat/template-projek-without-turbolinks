<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Livewire\Forms\RoleForm;
use App\Livewire\Roles\RolesList;
use Spatie\Permission\Models\Permission;

class RolesCreate extends Component
{
    public RoleForm $form;

    public function save()
    {
        $this->validate();
        
        try {
            $simpan = $this->form->store();
            $this->dispatch('sweet-alert', icon: 'success', title: 'data berhasil disimpan');
            $this->dispatch('set-reset');
        } catch (\Throwable $th) {
            $this->dispatch('sweet-alert', icon: 'error', title: 'data gagal disimpan' . $th->getMessage());
        }

        $this->dispatch('form-created')->to(RolesList::class);
    }
    public function render()
    {
        $permissions = Permission::get();
        return view('livewire.roles.roles-create', compact('permissions'));
    }
}
