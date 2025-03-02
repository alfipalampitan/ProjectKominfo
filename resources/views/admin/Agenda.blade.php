@extends('admin.admin')

@section('title', 'Manajemen Agenda - Admin')
@section('header', 'Manajemen Agenda')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4 text-center sm:text-left">Manajemen Agenda Landing Page</h2>

        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.agenda.update') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" name="title" value="{{ $agenda->title }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg">{{ $agenda->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Gambar Saat Ini:</label>
                @if (!empty($agenda->image))
                    <img src="{{ asset('storage/' . $agenda->image) }}" alt="Current Image" class="w-40 rounded-lg">
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Upload Gambar Baru:</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Card Grid Management -->
            <h3 class="text-xl font-bold mt-6">Kelola Card Agenda</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Judul Card {{ $i }}:</label>
                        <input type="text" name="titlecard{{ $i }}" value="{{ $agenda->{'titlecard' . $i} }}" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Deskripsi Card {{ $i }}:</label>
                        <textarea name="descriptioncard{{ $i }}" class="w-full p-2 border border-gray-300 rounded-lg">{{ $agenda->{'descriptioncard' . $i} }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Gambar Card {{ $i }} Saat Ini:</label>
                        @if (!empty($agenda->{'imgcard' . $i}))
                            <img src="{{ asset('storage/' . $agenda->{'imgcard' . $i}) }}" alt="Card Image {{ $i }}" class="w-40 rounded-lg">
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Upload Gambar Card {{ $i }}:</label>
                        <input type="file" name="imgcard{{ $i }}" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>
                @endfor
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg w-full sm:w-auto">Simpan Perubahan</button>
        </form>
    </div>
@endsection
