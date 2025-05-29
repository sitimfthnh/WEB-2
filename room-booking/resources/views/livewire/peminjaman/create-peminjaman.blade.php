<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Peminjaman</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <flux:select id="pegawai_id" wire:model.defer="pegawai_id" label="Pegawai" placeholder="Pilih Pegawai" required>
            @foreach ($pegawais as $pegawai)
                <flux:select.option value="{{ $pegawai->id }}">
                    {{ $pegawai->nama }}
                </flux:select.option>
            @endforeach
        </flux:select>

        <flux:select id="ruang_id" wire:model.defer="ruang_id" label="Ruang" placeholder="Pilih Ruang" required>
            @foreach ($ruangs as $ruang)
                <flux:select.option value="{{ $ruang->id }}">
                    {{ $ruang->nama }}
                </flux:select.option>
            @endforeach
        </flux:select>

        <flux:input type="date" id="tanggal_pinjam" wire:model.defer="tanggal_pinjam" label="Tanggal Pinjam"
            required />

        <flux:input type="date" id="tanggal_kembali" wire:model.defer="tanggal_kembali" label="Tanggal Kembali"
            required />

        <flux:input type="text" id="keperluan" wire:model.defer="keperluan" label="Keperluan"
            placeholder="Masukkan keperluan peminjaman" required />

        <flux:button type="submit" variant="primary">
            Save
        </flux:button>
    </form>
</div>
