<?php

namespace App\Livewire\Peminjaman;

use App\Models\Peminjaman;
use Livewire\Component;

class EditPeminjaman extends Component
{
    public $peminjaman;
    public $kode, $nama_peminjam, $ruangan, $tanggal, $status;

    public function mount(Peminjaman $peminjaman)
    {
        $this->peminjaman = $peminjaman;
        $this->kode = $peminjaman->kode;
        $this->nama_peminjam = $peminjaman->nama_peminjam;
        $this->ruangan = $peminjaman->ruangan;
        $this->tanggal = $peminjaman->tanggal;
        $this->status = $peminjaman->status;
    }

    public function save()
    {
        $this->validate([
            'kode' => 'required',
            'nama_peminjam' => 'required',
            'ruangan' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required'
        ]);

        $this->peminjaman->update([
            'kode' => $this->kode,
            'nama_peminjam' => $this->nama_peminjam,
            'ruangan' => $this->ruangan,
            'tanggal' => $this->tanggal,
            'status' => $this->status
        ]);

        session()->flash('message', 'Peminjaman berhasil diperbarui.');
        return redirect()->route('peminjaman.index');
    }

    public function render()
    {
        return view('livewire.peminjaman.edit-peminjaman');
    }
}
