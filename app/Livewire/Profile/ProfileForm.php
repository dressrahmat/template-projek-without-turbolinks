<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\ProfileForm as Profile;

class ProfileForm extends Component
{
    use WithFileUploads;

    public Profile $form;

    public function mount()
    {
        $profile = auth()->user()->profile;
        if ($profile) {
            $this->form->nama_depan = $profile->nama_depan;
            $this->form->photo_profile = $profile->photo_profile;
            $this->form->nama_belakang = $profile->nama_belakang;
            $this->form->jenis_kelamin = $profile->jenis_kelamin;
            $this->form->tanggal_lahir = $profile->tanggal_lahir;
            $this->form->nomor_telepon = $profile->nomor_telepon;
            $this->form->amanah = $profile->amanah;
            $this->form->agama = $profile->agama;
            $this->form->provinsi = $profile->provinsi;
            $this->form->kota = $profile->kota;
            $this->form->alamat = $profile->alamat;
            $this->form->bio = $profile->bio;
            
        }
        

    }

    public function save()
    {
        if (!is_string($this->form->photo_profile)) {
            $this->validate();
        }
        $this->form->store();
        $this->dispatch('form-created');
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.profile.profile-form')->layout('layouts.app');
    }
}
