<x-fluxui-layout>
    <x-fluxui-container>
        <h1 class="text-2xl font-bold mb-4">Tambah Barang</h1>

        <form method="POST" action="{{ route('barang.store') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-semibold">Nama Barang</label>
                <x-fluxui-input name="nama_barang" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kode Barang</label>
                <x-fluxui-input name="kode_barang" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kategori</label>
                <x-fluxui-input name="kategori" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Merk</label>
                <x-fluxui-input name="merk" />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Model</label>
                <x-fluxui-input name="model" />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Tahun Pembelian</label>
                <x-fluxui-input name="tahun_pembelian" type="number" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kondisi</label>
                <select name="kondisi" class="border p-2 rounded w-full" required>
                    <option value="Baik">Baik</option>
                    <option value="Rusak Ringan">Rusak Ringan</option>
                    <option value="Rusak Berat">Rusak Berat</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Jumlah</label>
                <x-fluxui-input name="jumlah" type="number" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Lokasi Penyimpanan</label>
                <x-fluxui-input name="lokasi_penyimpanan" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Keterangan</label>
                <textarea name="keterangan" class="border p-2 rounded w-full"></textarea>
            </div>

            <x-fluxui-button type="submit">Simpan</x-fluxui-button>
        </form>
    </x-fluxui-container>
</x-fluxui-layout>
