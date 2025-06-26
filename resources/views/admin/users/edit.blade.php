<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Role User</h2>
    </x-slot>

    <div class="py-4 px-6">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2">Nama:</label>
                <input type="text" value="{{ $user->name }}" disabled class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Role:</label>
                <select name="role" class="border p-2 w-full">
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <button class="bg-green-600 text-white px-4 py-2">Simpan</button>
        </form>
    </div>
</x-app-layout>
