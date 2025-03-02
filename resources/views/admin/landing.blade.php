@extends('admin.admin')

@section('title', 'Manajemen Landing Page Header - Admin')
@section('header', 'Manajemen  Header')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4">Manajemen Header Landing Page</h2>

        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.landing.update') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" name="title" value="{{ $landingPage->title }}"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg">{{ $landingPage->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Gambar Saat Ini:</label>
                <img src="{{ asset('storage/' . $landingPage->image) }}" alt="Current Image" class="w-40">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Upload Gambar Baru:</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan Perubahan</button>
        </form>
    </div>
@endsection
