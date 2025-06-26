<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Panel
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        <div class="bg-white p-6 rounded shadow">
            <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
            <p>Anda login sebagai <strong>{{ Auth::user()->role }}</strong>.</p>

            <hr class="my-4">

            <p>Halaman ini hanya bisa diakses oleh admin.</p>
        </div>
    </div>
</x-app-layout>
