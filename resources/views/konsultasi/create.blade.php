<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Konsultasi
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('konsultasi.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Nama Pasien</label>
                <input type="text" name="nama_pasien" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Keluhan</label>
                <textarea name="keluhan" class="w-full border px-3 py-2" required></textarea>
            </div>

            <div class="mb-4">
                <label>Dokter</label>
                <input type="text" name="dokter" class="w-full border px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="w-full border px-3 py-2" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2">Simpan</button>
        </form>
    </div>
</x-app-layout>
