@extends('admin.admin')

@section('title', 'Dashboard - Admin')
@section('header', 'Dashboard')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>

    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

        <div class="container mx-auto py-10 flex justify-around gap-2">
            <div class="bg-white p-4 rounded shadow-xl w-1/2 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Informasi User</h2>
            
                <div class="my-10 text-center">
                    <h2 class="text-lg font-semibold">Admin</h2>
                    <p class="text-4xl font-bold count-up" data-count="{{ $usersData['admin'] }}">0</p>
                </div>
            
                <div class="my-10 text-center">
                    <h2 class="text-lg font-semibold">User Biasa</h2>
                    <p class="text-4xl font-bold count-up" data-count="{{ $usersData['user'] }}">0</p>
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
        <div class="container mx-auto py-10 flex justify-around gap-2">
            <div class="bg-white p-4 rounded shadow-xl w-1/2 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Informasi Berita</h2>
            </div>

            <div class="bg-white p-4 rounded shadow-xl w-1/2 mx-auto text-center">
                <h2 class="text-4xl font-semibold font-audiowide">Statistik Berita</h2>

                <canvas id="radarChart"></canvas>

<script>
    const ctxRadar = document.getElementById('radarChart').getContext('2d');
    new Chart(ctxRadar, {
        type: 'radar',
        data: {
            labels: ['Klik', 'Komentar', 'Like', 'Share', 'Durasi Baca'],
            datasets: [{
                label: 'Engagement Berita',
                data: [85, 60, 75, 50, 90], // Data dari backend
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: '#36A2EB'
            }]
        }
    });
</script>

            </div>
        </div>
    </div>
@endsection
