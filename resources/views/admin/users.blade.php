@extends('admin.admin')

@section('title', 'Users - Admin')
@section('header', 'Manajemen User')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Manajemen User</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.users.store') }}" method="POST" class="mb-4 bg-white p-4 rounded shadow">
            @csrf
            <div class="mb-2">
                <label for="name" class="block font-semibold">Nama:</label>
                <input type="text" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-2">
                <label for="email" class="block font-semibold">Email:</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-2">
                <label for="password" class="block font-semibold">Password:</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-2">
                <label for="role" class="block font-semibold">Role:</label>
                <select name="role" class="w-full p-2 border rounded">
                    <option value="user">User Biasa</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah User</button>
        </form>

        <table class="w-full bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Nama</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Role</th>
                    <th class="p-2">Aksi</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b">
                        <td class="p-2 text-center">{{ $user->name }}</td>
                        <td class="p-2 text-center">{{ $user->email }}</td>
                        <td class="p-2 text-center">{{ ucfirst($user->role) }}</td>
                        <td class="p-2 text-center">
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
