<?php

namespace App\Livewire\Peminjaman;

use App\Models\Peminjaman;
use App\Models\Pegawai;
use App\Models\Ruang;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreatePeminjaman extends Component
{
    #[Validate('required|exists:pegawais,id')]
    public $pegawai_id = '';

    #[Validate('required|exists:ruangs,id')]
    public $ruang_id = '';

    #[Validate('required|date')]
    public $tanggal_pinjam = '';

    #[Validate('required|date|after_or_equal:tanggal_pinjam')]
    public $tanggal_kembali = '';

    #[Validate('required|string|max:255')]
    public $keperluan = '';

    public function save()
    {
        $this->validate();

        Peminjaman::create([
            'pegawai_id' => $this->pegawai_id,
            'ruang_id' => $this->ruang_id,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => $this->tanggal_kembali,
            'keperluan' => $this->keperluan,
        ]);

        session()->flash('message', 'Peminjaman berhasil ditambahkan.');

        // Reset form / redirect ke list
        $this->redirectRoute('peminjaman.index');
    }

    public function render()
    {
        return view('livewire.peminjaman.create-peminjaman', [
            'pegawais' => Pegawai::all(),
            'ruangs' => Ruang::all(),
        ]);
    }
}
