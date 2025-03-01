@extends('admin.admin')

@section('title', 'Dashboard - Admin')
@section('header', 'Dashboard')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>

    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

        <div class="container mx-auto py-5 flex justify-around gap-2">
            <div class="bg-white p-4 rounded shadow-xl w-1/2 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Informasi User</h2>
            
                <div class="my-10 text-center">
                    <h2 class="text-lg font-semibold">Admin</h2>
                    <p class="text-4xl font-bold count-up text-red-400" data-count="{{ $usersData['admin'] }}">0</p>
                </div>
            
                <div class="my-10 text-center">
                    <h2 class="text-lg font-semibold">User Biasa</h2>
                    <p class="text-4xl font-bold count-up text-blue-500" data-count="{{ $usersData['user'] }}">0</p>
                </div>
                <script>
                    function startCountUp() {
                        const counters = document.querySelectorAll(".count-up");
                
                        counters.forEach(counter => {
                            let start = 0;
                            let end = parseInt(counter.getAttribute("data-count"));
                            let duration = 1000; // Durasi animasi dalam milidetik
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
                        });
                    }
                
                    // Memastikan animasi berjalan saat elemen masuk ke layar
                    const observer = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                startCountUp();
                                observer.disconnect(); // Agar tidak berulang saat di-scroll
                            }
                        });
                    }, { threshold: 0.5 });
                
                    observer.observe(document.querySelector(".count-up"));
                </script>
            </div>

            <div class="bg-white p-4 rounded shadow-xl w-1/2 text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Grafik User</h2>
                <div class="flex justify-center my-10">
                    <div class="w-52">
                        <canvas id="userChart"></canvas>
                    </div>
                </div>

                <script>
                    const ctx = document.getElementById('userChart').getContext('2d');
                    const userChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Admin', 'User'],
                            datasets: [{
                                data: [{{ $usersData['admin'] }}, {{ $usersData['user'] }}],
                                backgroundColor: ['#FF6384', '#36A2EB'],
                                hoverBackgroundColor: ['#FF6384', '#36A2EB']
                            }]
                        }
                    });
                </script>
            </div>
        </div>
        <div class="container mx-auto py-5 flex justify-around gap-2">
            <div class="bg-white p-6 rounded shadow-xl w-1/2 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide mb-6">Informasi Berita</h2>
            
                <div class="my-5">
                    <h3 class="text-xl font-semibold">Total Berita</h3>
                    <p class="text-5xl font-bold text-green-600 count-up" data-count="{{ $totalBerita }}">0</p>
                </div>
            
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-gray-100 rounded">
                        <h3 class="text-lg font-semibold">Teknologi</h3>
                        <p class="text-4xl font-bold text-blue-400 count-up" data-count="{{ $newsByCategory['Teknologi'] ?? 0 }}">0</p>
                    </div>
                    <div class="p-4 bg-gray-100 rounded">
                        <h3 class="text-lg font-semibold">Politik</h3>
                        <p class="text-4xl font-bold text-red-700 count-up" data-count="{{ $newsByCategory['Politik'] ?? 0 }}">0</p>
                    </div>
                    <div class="p-4 bg-gray-100 rounded">
                        <h3 class="text-lg font-semibold">Olahraga</h3>
                        <p class="text-4xl font-bold text-blue-700 count-up" data-count="{{ $newsByCategory['Olahraga'] ?? 0 }}">0</p>
                    </div>
                    <div class="p-4 bg-gray-100 rounded">
                        <h3 class="text-lg font-semibold">Hiburan</h3>
                        <p class="text-4xl font-bold text-orange-600 count-up" data-count="{{ $newsByCategory['Hiburan'] ?? 0 }}">0</p>
                    </div>
                    <div class="p-4 bg-gray-100 rounded col-span-2">
                        <h3 class="text-lg font-semibold">Umum</h3>
                        <p class="text-4xl font-bold text-amber-900 count-up" data-count="{{ $newsByCategory['Umum'] ?? 0 }}">0</p>
                    </div>
                </div>
            </div>
            
            <script>
                function startCountUp() {
                    const counters = document.querySelectorAll(".count-up");
            
                    counters.forEach(counter => {
                        let start = 0;
                        let end = parseInt(counter.getAttribute("data-count"));
                        let duration = 3000; // Ubah durasi ke 3 detik biar lebih lambat
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
                    });
                }
            
                // Memastikan animasi berjalan saat elemen masuk ke layar
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            startCountUp();
                            observer.disconnect(); // Agar tidak berulang saat di-scroll
                        }
                    });
                }, { threshold: 0.5 });
            
                observer.observe(document.querySelector(".count-up"));
            </script>
            
            

            <div class="bg-white p-4 rounded shadow w-2/3 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide mb-6">Statistik Berita</h2>
                <canvas id="beritaChart"></canvas>
            </div>
            
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const ctx = document.getElementById('beritaChart').getContext('2d');
            
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Total Berita', @foreach ($categories as $category) '{{ $category }}', @endforeach],
                            datasets: [{
                                label: 'Jumlah Berita',
                                data: [
                                    {{ $totalBerita }},
                                    @foreach ($newsByCategory as $count) {{ $count }}, @endforeach
                                ],
                                backgroundColor: ['#4CAF50','#36A2EB', '#f21414', '#1b18c3', '#fe9d00', '#5a2703']
                            }]
                        }
                    });
                });
            </script>
            

            </div>
        </div>
    </div>
@endsection
