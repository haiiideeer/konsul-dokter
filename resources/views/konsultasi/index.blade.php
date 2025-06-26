<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Konsultasi
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <a href="{{ route('konsultasi.create') }}" class="text-blue-600 font-bold mb-4 inline-block">+ Tambah Konsultasi</a>

        <table class="table-auto w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Keluhan</th>
                    <th class="px-4 py-2">Dokter</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($konsultasis as $item)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $item->nama_pasien }}</td>
                    <td class="px-4 py-2">{{ $item->email }}</td>
                    <td class="px-4 py-2">{{ $item->keluhan }}</td>
                    <td class="px-4 py-2">{{ $item->dokter }}</td>
                    <td class="px-4 py-2">{{ $item->tanggal }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('konsultasi.edit', $item->id) }}" class="text-indigo-600">Edit</a> |
                        <form action="{{ route('konsultasi.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
