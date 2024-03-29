<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RolesList extends Component
{
    use WithPagination;

    #[On('form-created')]
    public function render()
    {
        $data = Role::latest()->paginate(5);
        return view('livewire.roles.roles-list', compact('data'));
    }
}
