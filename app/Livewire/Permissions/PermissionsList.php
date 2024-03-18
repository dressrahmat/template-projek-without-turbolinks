<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class PermissionsList extends Component
{
    use WithPagination;

    public function delete(Permission $permission)
    {
        $permission->delete();
        request()->session()->flash('success', __('Hak Akses berhasil dihapus'));
    }

    #[On('form-created')]
    public function render()
    {
        $data = Permission::latest()->paginate(5);
        return view('livewire.permissions.permissions-list', compact('data'));
    }
}
