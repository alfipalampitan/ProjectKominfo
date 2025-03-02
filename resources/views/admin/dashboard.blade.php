@extends('admin.admin')

@section('title', 'Dashboard - Admin')
@section('header', 'Dashboard')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <div class="container mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded shadow-xl text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Informasi User</h2>
                <div class="my-6">
                    <h2 class="text-lg font-semibold">Admin</h2>
                    <p class="text-4xl font-bold count-up text-red-400" data-count="{{ $usersData['admin'] }}">0</p>
                </div>
                <div class="my-6">
                    <h2 class="text-lg font-semibold">User Biasa</h2>
                    <p class="text-4xl font-bold count-up text-blue-500" data-count="{{ $usersData['user'] }}">0</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow-xl text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Grafik User</h2>
                <div class="flex justify-center my-6">
                    <div class="w-40 md:w-52">
                        <canvas id="userChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div class="bg-white p-6 rounded shadow-xl text-center">
                <h2 class="text-4xl font-semibold font-audiowide mb-6">Informasi Berita</h2>
                <div class="my-5">
                    <h3 class="text-xl font-semibold">Total Berita</h3>
                    <p class="text-5xl font-bold text-green-600 count-up" data-count="{{ $totalBerita }}">0</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($newsByCategory as $category => $count)
                        <div class="p-4 bg-gray-100 rounded">
                            <h3 class="text-lg font-semibold">{{ $category }}</h3>
                            <p class="text-4xl font-bold count-up {{ $categoryColors[$category] ?? 'text-gray-600' }}" data-count="{{ $count }}">0</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow-xl text-center">
                <h2 class="text-4xl font-semibold font-audiowide mb-6">Statistik Berita</h2>
                <canvas id="beritaChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const userChartCtx = document.getElementById('userChart').getContext('2d');
            new Chart(userChartCtx, {
                type: 'pie',
                data: {
                    labels: ['Admin', 'User'],
                    datasets: [{
                        data: [{{ $usersData['admin'] }}, {{ $usersData['user'] }}],
                        backgroundColor: ['#FF6384', '#36A2EB']
                    }]
                }
            });

            const beritaChartCtx = document.getElementById('beritaChart').getContext('2d');
            new Chart(beritaChartCtx, {
                type: 'bar',
                data: {
                    labels: [
                        @foreach ($newsByCategory as $category => $count)
                            '{{ $category }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Jumlah Berita',
                        data: [
                            @foreach ($newsByCategory as $count)
                                {{ $count }},
                            @endforeach
                        ],
                        backgroundColor: ['#4CAF50', '#36A2EB', '#f21414', '#1b18c3', '#fe9d00',
                            '#5a2703'
                        ]
                    }]
                }
            });
        });

        function startCountUp(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let counter = entry.target;
                    let start = 0;
                    let end = parseInt(counter.getAttribute("data-count"));
                    let duration = 2000; // Durasi animasi (2 detik)
                    let step = end / (duration / 16); // 16ms per frame (60fps)

                    function updateCounter() {
                        start += step;
                        if (start >= end) {
                            counter.innerText = end; // Set angka akhir
                        } else {
                            counter.innerText = Math.floor(start);
                            requestAnimationFrame(updateCounter);
                        }
                    }

                    updateCounter();
                    observer.unobserve(counter); // Hentikan observer agar tidak berulang
                }
            });
        }

        // Buat observer untuk semua elemen ".count-up"
        const observer = new IntersectionObserver(startCountUp, {
            threshold: 0.5
        });
        document.querySelectorAll(".count-up").forEach(counter => observer.observe(counter));
    </script>

@endsection
