<?php

namespace App\Livewire\Permissions;

use Livewire\Component;

class PermissionsIndex extends Component
{
    public function render()
    {
        return view('livewire.permissions.permissions-index')->layout('layouts.app', ['title' => 'Permissions']);
    }
}
