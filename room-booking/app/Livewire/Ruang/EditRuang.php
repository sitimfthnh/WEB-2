<?php

namespace App\Livewire\Ruang;

use App\Models\Ruang;
use Livewire\Component;

class EditRuang extends Component
{
    public $ruang;
    public $kode, $nama, $status;

    public function mount(Ruang $ruang)
    {
        $this->ruang = $ruang;
        $this->kode = $ruang->kode;
        $this->nama = $ruang->nama;
        $this->status = $ruang->status;
    }

    public function save()
    {
        $this->validate([
            'kode' => 'required',
            'nama' => 'required',
            'status' => 'required',
        ]);

        $this->ruang->update([
            'kode' => $this->kode,
            'nama' => $this->nama,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Ruang berhasil diperbarui.');

        return redirect()->route('ruang.index');
    }

    public function render()
    {
        return view('livewire.ruang.edit-ruang');
    }
}
