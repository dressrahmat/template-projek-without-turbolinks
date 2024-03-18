<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Forms\PermissionForm;
use Spatie\Permission\Models\Permission;

class PermissionsForm extends Component
{
    public PermissionForm $form;
    public $editMode = false;

    public function save()
    {
        
        $this->validate();

        $this->form->store();
        $this->dispatch('form-created');

        $this->cancel();
    }

    #[On('edit-form')]
    public function editForm($id)
    {
        $permission = Permission::findOrFail($id);
        $this->form->setForm($permission);

        $this->editMode = true;
    }

    public function cancel()
    {
        $this->form->reset();
        $this->editMode = false;
    }

    public function render()
    {
        return view('livewire.permissions.permissions-form');
    }
}
