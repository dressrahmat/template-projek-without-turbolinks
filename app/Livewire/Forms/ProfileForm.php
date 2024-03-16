<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Profile;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\File;

class ProfileForm extends Form
{
    use WithFileUploads;
    
    #[Rule('required')]
    public $nama_depan;
    
    #[Rule('required')]
    public $nama_belakang;

    #[Rule('nullable|image')]
    public $photo_profile;

    #[Rule('required')]
    public $jenis_kelamin;

    #[Rule('nullable')]
    public $tanggal_lahir;

    #[Rule('nullable')]
    public $nomor_telepon;

    #[Rule('nullable')]
    public $amanah;

    #[Rule('nullable')]
    public $agama;

    #[Rule('nullable')]
    public $provinsi;

    #[Rule('nullable')]
    public $kota;

    #[Rule('nullable')]
    public $alamat;

    #[Rule('nullable')]
    public $bio;

    public function store()
    {
        $data = $this->all();
        $data['id_user'] = auth()->user()->id;
        // Profile::updateOrCreate($data);
        // Periksa apakah profil pengguna sudah ada atau belum
        $profile = Profile::where('id_user', $data['id_user'])->first();

        try {

            if ($data['photo_profile'] && !is_string($data['photo_profile'])) { 
                // Periksa jika gambar diunggah dan merupakan instance dari UploadedFile
                $folderPath = 'uploads/profile/';
                $fileName = time().'.'.$data['photo_profile']->getClientOriginalExtension();
                $data['photo_profile']->storeAs('public/'.$folderPath, $fileName);
                $data['photo_profile'] = 'storage/'.$folderPath.$fileName;
            }

            // Jika profil sudah ada, lakukan pembaruan data
            if ($profile) {
                // Dapatkan path foto profil lama
                $oldPhotoPath = public_path($profile->photo_profile);
                // Lakukan pembaruan data profil
                
                // Periksa apakah ada file foto baru yang diunggah
                if ($data['photo_profile'] && !is_string($data['photo_profile'])) {
                    // Hapus foto profil lama dari storage
                    if ($oldPhotoPath) {
                        // Hapus gambar sebelumnya jika ada
                        if (File::exists($oldPhotoPath)) {
                            File::delete($oldPhotoPath);
                        }
                    }

                    // Simpan foto profil baru
                    $profile->update(['photo_profile' => $data['photo_profile']]);
                }
                
                $profile->update($data);
            } else {
                // Jika profil belum ada, lakukan pembuatan profil baru
                
                Profile::create($data);
            }

            // Tampilkan pesan sukses kepada pengguna
            request()->session()->flash('success', __('Profile berhasil disimpan'));

            // Reset semua input setelah pembaruan berhasil
            // $this->reset();
        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            session()->flash('error', 'Terjadi kesalahan saat memperbarui profil: ');
        }

        request()->session()->flash('success', __('Profile berhasil disimpan'));
    }
}
