<?php

namespace App\Livewire\Permissions;

use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;

class PermissionsDelete extends ModalComponent
{
    public Permission $permission;

    public function mount(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function delete()
    {
        // Gate::authorize('delete', $this->permission);

        $this->permission->delete();

        // $this->redirect('permissions');
        $this->forceClose()->closeModal();
        $this->skipPreviousModal()->destroySkippedModals();
        request()->session()->flash('success', __('Hak Akses berhasil dihapus'));
        
    }

    public function render()
    {
        return view('livewire.permissions.permissions-delete');
    }
}
