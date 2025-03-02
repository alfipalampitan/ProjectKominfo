@extends('admin.admin')

@section('title', 'Users - Admin')
@section('header', 'Manajemen User')

@section('content')
    <div class="container mx-auto py-6 px-4 md:py-10">
        <h1 class="text-xl md:text-2xl font-bold mb-4">Manajemen User</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4 text-sm md:text-base">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.users.store') }}" method="POST" class="mb-6 bg-white p-4 md:p-6 rounded shadow-md">
            @csrf
            <div class="mb-3">
                <label for="name" class="block font-semibold text-sm md:text-base">Nama:</label>
                <input type="text" name="name" class="w-full p-2 border rounded text-sm md:text-base" required>
            </div>
            <div class="mb-3">
                <label for="email" class="block font-semibold text-sm md:text-base">Email:</label>
                <input type="email" name="email" class="w-full p-2 border rounded text-sm md:text-base" required>
            </div>
            <div class="mb-3">
                <label for="password" class="block font-semibold text-sm md:text-base">Password:</label>
                <input type="password" name="password" class="w-full p-2 border rounded text-sm md:text-base" required>
            </div>
            <div class="mb-3">
                <label for="role" class="block font-semibold text-sm md:text-base">Role:</label>
                <select name="role" class="w-full p-2 border rounded text-sm md:text-base">
                    <option value="user">User Biasa</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded text-sm md:text-base">Tambah User</button>
        </form>

        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-md text-sm md:text-base">
                <thead>
                    <tr class="bg-gray-200 text-left text-xs md:text-sm">
                        <th class="p-2">Nama</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Role</th>
                        <th class="p-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b text-xs md:text-sm">
                            <td class="p-2">{{ $user->name }}</td>
                            <td class="p-2">{{ $user->email }}</td>
                            <td class="p-2">{{ ucfirst($user->role) }}</td>
                            <td class="p-2 text-center">
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-xs md:text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
