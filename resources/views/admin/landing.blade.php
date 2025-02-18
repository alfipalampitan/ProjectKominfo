@extends('admin.admin')

@section('title', 'Manajemen Landing Page - Admin')
@section('header', 'Manajemen Landing Page')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4">Manajemen Landing Page</h2>

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


    {{-- INI UNTUK YANG AGENDA --}}
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4">Manajemen Agenda Landing Page</h2>

        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.agenda.update') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" name="title" value="{{ $agenda->title }}"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg">{{ $agenda->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Gambar Saat Ini:</label>
                @if (!empty($agenda->image))
                    <img src="{{ asset('storage/' . $agenda->image) }}" alt="Current Image" class="w-40">
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Upload Gambar Baru:</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Card Grid Management -->
            <h3 class="text-xl font-bold mt-6">Kelola Card Agenda</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Judul Card {{ $i }}:</label>
                        <input type="text" name="titlecard{{ $i }}"
                            value="{{ $agenda->{'titlecard' . $i} }}" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Deskripsi Card {{ $i }}:</label>
                        <textarea name="descriptioncard{{ $i }}" class="w-full p-2 border border-gray-300 rounded-lg">{{ $agenda->{'descriptioncard' . $i} }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Gambar Card {{ $i }} Saat Ini:</label>
                        @if (!empty($agenda->{'imgcard' . $i}))
                            <img src="{{ asset('storage/' . $agenda->{'imgcard' . $i}) }}"
                                alt="Card Image {{ $i }}" class="w-40">
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Upload Gambar Card {{ $i }}:</label>
                        <input type="file" name="imgcard{{ $i }}"
                            class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>
                @endfor
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan Perubahan</button>
        </form>
    </div>

    {{-- INI UNTUK DAFTAR BERITA --}}
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Daftar Berita</h2>

        <button onclick="toggleForm()" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</button>

        <div class="mt-4 bg-white shadow-md rounded p-4">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Gambar</th>
                        <th class="p-2">Judul</th>
                        <th class="p-2">Deskripsi</th>
                        <th class="p-2">Link</th>
                        <th class="p-2">Trending</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $item)
                        <tr class="border-b">
                            <td class="p-2"><img src="{{ asset('storage/' . $item->image) }}"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="p-2">{{ $item->title }}</td>
                            <td class="p-2">{{ Str::limit($item->description, 50) }}</td>
                            <td class="p-2"><a href="{{ $item->link }}" target="_blank"
                                    class="text-blue-500">Selengkapnya</a></td>
                            <td class="p-2">
                                <button
                                    class="toggle-trending bg-{{ $item->is_trending ? 'green' : 'red' }}-500 text-white px-2 py-1 rounded"
                                    data-id="{{ $item->id }}">
                                    {{ $item->is_trending ? 'ON' : 'OFF' }}
                                </button>
                            </td>
                            <td class="p-2">Edit | Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- INI FORM TAMBAH BERITA (HIDDEN BY DEFAULT) --}}
    <div class="container mx-auto p-4 hidden" id="formBerita">
        <h2 class="text-2xl font-bold mb-4">Tambah Berita</h2>

        <div class="bg-white shadow-md rounded p-4">
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="block mb-2">Judul Berita</label>
                <input type="text" name="title" class="w-full border p-2 mb-4" required>

                <label class="block mb-2">Deskripsi</label>
                <textarea name="description" class="w-full border p-2 mb-4" required></textarea>

                <label class="block mb-2">Gambar</label>
                <input type="file" name="image" class="w-full border p-2 mb-4" required>

                <label class="block mb-2">Link Berita</label>
                <input type="url" name="link" class="w-full border p-2 mb-4" required>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                <button type="button" onclick="toggleForm()"
                    class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
            </form>
        </div>
    </div>
    

    {{-- SCRIPT UNTUK MENAMPILKAN FORM TAMBAH BERITA --}}
    <script>
        function toggleForm() {
            let form = document.getElementById('formBerita');
            form.classList.toggle('hidden');
        }

        document.querySelectorAll('.toggle-trending').forEach(button => {
            button.addEventListener('click', function() {
                let newsId = this.getAttribute('data-id');
                fetch(`/admin/news/${newsId}/trending`, {
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.textContent = data.status ? 'ON' : 'OFF';
                            this.classList.toggle('bg-green-500', data.status);
                            this.classList.toggle('bg-red-500', !data.status);
                        }
                    });
            });
        });
    </script>


@endsection
