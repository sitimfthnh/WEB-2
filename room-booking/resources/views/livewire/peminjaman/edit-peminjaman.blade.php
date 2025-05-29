<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Peminjaman {{ $peminjaman->kode }}</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <flux:input type="text" id="kode" wire:model.defer="kode" label="Kode Peminjaman" placeholder="Masukkan Kode"
            required />

        <flux:input type="text" id="nama_peminjam" wire:model.defer="nama_peminjam" label="Nama Peminjam"
            placeholder="Masukkan Nama Peminjam" required />

        <flux:input type="date" id="tanggal_pinjam" wire:model.defer="tanggal_pinjam" label="Tanggal Pinjam"
            required />

        <flux:input type="date" id="tanggal_kembali" wire:model.defer="tanggal_kembali" label="Tanggal Kembali"
            required />

        <flux:select id="status" wire:model.defer="status" label="Status Peminjaman" placeholder="Pilih Status"
            required>
            <flux:select.option value="Dipinjam">Dipinjam</flux:select.option>
            <flux:select.option value="Kembali">Kembali</flux:select.option>
            <flux:select.option value="Dibooking">Dibooking</flux:select.option>
            <flux:select.option value="Dibatalkan">Dibatalkan</flux:select.option>
        </flux:select>

        <flux:button type="submit" variant="primary">
            Save
        </flux:button>
    </form>
</div>
