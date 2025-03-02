@extends('admin.admin') 

@section('title', 'Manajemen Landing Page Header - Admin')
@section('header', 'Manajemen  Header')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Pengaturan Halaman</h1>

        @if (session('success'))
            <div class="p-3 mb-4 text-green-700 bg-green-200 rounded">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            
            <!-- Pilihan Background -->
            <div class="mb-4">
                <label class="block text-lg font-medium">Pilih Warna Background:</label>
                <select name="background" class="mt-1 px-4 sm:w-1/4 md:w-full w-full 2xl:w-1/4 border rounded">
                    <option value="bg-white-500" {{ session('background') == 'bg-white-500' ? 'selected' : '' }}>White</option>
                    <option value="bg-slate-500" {{ session('background') == 'bg-slate-500' ? 'selected' : '' }}>Slate</option>
                    <option value="bg-gray-500" {{ session('background') == 'bg-gray-500' ? 'selected' : '' }}>Gray</option>
                    <option value="bg-blue-500" {{ session('background') == 'bg-blue-500' ? 'selected' : '' }}>Blue</option>
                    <option value="bg-green-500" {{ session('background') == 'bg-green-500' ? 'selected' : '' }}>Green</option>
                    <option value="bg-gray-100" {{ session('background') == 'bg-gray-100' ? 'selected' : '' }}>Default</option>
                </select>
            </div>

            <!-- Pilihan Font -->
            <div class="mb-4">
                <label class="block text-lg font-medium">Pilih Gaya Font:</label>
                <select name="font" class="mt-1 px-4 sm:w-1/4 md:w-full w-full 2xl:w-1/4 border rounded">
                    <option value="font-sans" {{ session('font') == 'font-sans' ? 'selected' : '' }}>Sans</option>
                    <option value="font-serif" {{ session('font') == 'font-serif' ? 'selected' : '' }}>Serif</option>
                    <option value="font-mono" {{ session('font') == 'font-mono' ? 'selected' : '' }}>Monospace</option>
                    <option value="font-audiowide" {{ session('font') == 'font-audiowide' ? 'selected' : '' }}>Audiowide</option>
                    <option value="font-charm" {{ session('font') == 'font-charm' ? 'selected' : '' }}>Charm</option>
                    <option value="font-oxygen" {{ session('font') == 'font-oxygen' ? 'selected' : '' }}>Oxygen</option>
                    <option value="font-ubuntu" {{ session('font') == 'font-ubuntu' ? 'selected' : '' }}>Ubuntu</option>
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Simpan Pengaturan
            </button>
        </form>
    </div>
@endsection
