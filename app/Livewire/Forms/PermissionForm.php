<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Spatie\Permission\Models\Permission;

class PermissionForm extends Form
{
    public ?Permission $permission;

    public $editMode = false;

    #[Rule('required', message: 'Hak Akses harus diisi!')]
    public $name;

    public function setForm(Permission $permission)
    {
        $this->permission = $permission;
        $this->editMode = true;
        $this->name = $permission->name;
    }
    
    public function store()
    {
        try {
            if ($this->editMode) {

                $this->permission->update($this->all());
                request()->session()->flash('success', __('Hak Akses berhasil diupdate'));
                
            } else {

                Permission::create($this->all());
                request()->session()->flash('success', __('Hak Akses berhasil disimpan'));
            }
            $this->reset();

        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            session()->flash('error', 'Terjadi kesalahan saat memperbarui hak akses : ' . $e->getMessage());
        }
    }
}
