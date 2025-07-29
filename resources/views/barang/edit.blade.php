<x-fluxui-layout>
    <x-fluxui-container>
        <h1 class="text-2xl font-bold mb-4">✏️ Edit Barang Elektronik</h1>

        <form method="POST" action="{{ route('barang.update', $barang->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-semibold">Nama Barang</label>
                <x-fluxui-input name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kode Barang</label>
                <x-fluxui-input name="kode_barang" value="{{ old('kode_barang', $barang->kode_barang) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kategori</label>
                <x-fluxui-input name="kategori" value="{{ old('kategori', $barang->kategori) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Merk</label>
                <x-fluxui-input name="merk" value="{{ old('merk', $barang->merk) }}" />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Model</label>
                <x-fluxui-input name="model" value="{{ old('model', $barang->model) }}" />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Tahun Pembelian</label>
                <x-fluxui-input type="number" name="tahun_pembelian" value="{{ old('tahun_pembelian', $barang->tahun_pembelian) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Kondisi</label>
                <select name="kondisi" class="border p-2 rounded w-full" required>
                    <option value="Baik" {{ $barang->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                    <option value="Rusak Ringan" {{ $barang->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                    <option value="Rusak Berat" {{ $barang->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Jumlah</label>
                <x-fluxui-input type="number" name="jumlah" value="{{ old('jumlah', $barang->jumlah) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Lokasi Penyimpanan</label>
                <x-fluxui-input name="lokasi_penyimpanan" value="{{ old('lokasi_penyimpanan', $barang->lokasi_penyimpanan) }}" required />
            </div>

            <div>
                <label class="block mb-1 font-semibold">Keterangan</label>
                <textarea name="keterangan" class="border p-2 rounded w-full">{{ old('keterangan', $barang->keterangan) }}</textarea>
            </div>

            <x-fluxui-button type="submit">💾 Simpan Perubahan</x-fluxui-button>
        </form>
    </x-fluxui-container>
</x-fluxui-layout>
