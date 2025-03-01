@extends('admin.admin')

@section('title', 'Manajemen Landing Page - Admin')
@section('header', 'Manajemen Landing Page')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@section('content')

    {{-- INI UNTUK DAFTAR BERITA --}}
    <div class="container mx-auto px-4 py-10">
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
                            <td class="p-2"><img src="{{ asset($item->image) }}" class="w-16 h-16 object-cover"></td>
                            <td class="p-2">{{ $item->title }}</td>
                            <td class="p-2">{{ Str::limit($item->description, 50) }}</td>
                            <td class="p-2"><a href="{{ $item->link }}" target="_blank"
                                    class="text-blue-500">Selengkapnya</a></td>
                            <td class="p-2">
                                <button
                                    class="toggle-trending relative w-16 h-8 flex items-center rounded-full transition-all duration-300 px-1 text-white shadow-lg transform active:scale-95 
                                            bg-{{ $item->is_trending ? 'green' : 'red' }}-500"
                                    data-id="{{ $item->id }}">

                                    <!-- Tombol Bulat -->
                                    <span
                                        class="absolute w-6 h-6 bg-white rounded-full transition-all duration-300 shadow-md"
                                        style="left: {{ $item->is_trending ? 'calc(100% - 1.75rem)' : '0.25rem' }};"></span>

                                    <!-- Teks ON -->
                                    <span class="absolute left-2 text-xs font-bold transition-all duration-300"
                                        style="opacity: {{ $item->is_trending ? '1' : '0' }}; color: #064e3b;">ON</span>

                                    <!-- Teks OFF -->
                                    <span class="absolute right-2 text-xs font-bold transition-all duration-300"
                                        style="opacity: {{ $item->is_trending ? '0' : '1' }}; color: #7f1d1d;">OFF</span>
                                </button>
                            </td>

                            <td class="p-2">
                                <a href="#" class="text-blue-500" onclick="editNews({{ $item->id }})">Edit</a>
                                <button onclick="confirmDelete({{ $item->id }})"
                                    class="bg-red-500 text-white px-2 py-1 rounded">
                                    Hapus
                                </button>
                            </td>

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

                <label for="category" class="block mb-2">Kategori Berita</label>
                <select name="category" id="category" class="w-full p-2 mb-4 border rounded">
                    <option value="Teknologi">Teknologi</option>
                    <option value="Politik">Politik</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Hiburan">Hiburan</option>
                    <option value="Umum">Umum</option>
                </select>

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
            button.addEventListener('click', async function() {
                let newsId = this.getAttribute('data-id');

                let response = await fetch(`/admin/news/${newsId}/trending`, {
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                });

                if (response.ok) {
                    alert('Status trending berhasil diperbarui!');
                    window.location.reload(); // Refresh halaman agar trending section diperbarui
                } else {
                    alert('Gagal memperbarui status trending');
                }
            });
        });

        function confirmDelete(beritaId) {
            if (confirm("Apakah Anda yakin ingin menghapus berita ini?")) {
                fetch(`/admin/berita/${beritaId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.success);
                        location.reload(); // Refresh halaman setelah berhasil menghapus
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
@endsection
