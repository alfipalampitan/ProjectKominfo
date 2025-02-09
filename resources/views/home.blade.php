<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Charm:wght@400;700&family=Oxygen:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-blue-400">
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="flex flex-col sm:flex-row items-center container mx-auto mt-12 px-4 py-10">
        <div class="w-full sm:w-1/2 flex justify-center">
            <img src="{{ asset('img/computer-8671934_1280.png') }}" alt="Logo" class="w-full sm:w-8/12">
        </div>
        <div class="w-full sm:w-1/2 text-center sm:text-left">
            <h1 class="text-4xl sm:text-5xl font-bold uppercase font-audiowide">
                Bersama Kominfosandi Membangun Teknologi untuk Negeri
            </h1>
            <p class="mt-5 font-mono">
                Dinas Komunikasi dan Informatika dan Persandian Membangun Teknologi untuk Negeri
            </p>
        </div>
    </section>

    <!-- Agenda Hari Ini -->
    <section class="container mx-auto px-4 py-10">
        <div class="flex flex-col-reverse sm:flex-row items-center">
            <div class="w-full sm:w-1/2">
                <h1 class="text-3xl sm:text-5xl font-bold text-center sm:text-right font-audiowide ">
                    Agenda Hari Ini
                </h1>
                <p class="mt-5 text-center sm:text-right font-mono">
                    🚀 Agenda Teknologi Hari Ini: Menjelajahi Inovasi, Tren, dan Masa Depan Digital.
                    Teknologi terus berkembang dengan pesat, menghadirkan peluang dan tantangan baru setiap harinya.
                </p>

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                    <div class="card1">
                        <img src="{{ asset('img/Poster teknologi.jpg') }}" alt="Logo" class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Kembangkan Teknologi Raih Prestasi</h3>
                        <p class="text-center text-gray-600 mt-2">Ayoo sama sama Membuat Teknologi jadi Makin
                            Berkembang.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button class="bg-blue-400 border text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Cek Agenda Lainnya
                    </button>
                </div>
            </div>

            <div class="w-full sm:w-1/2 flex justify-center">
                <img src="{{ asset('img/gates-7584115_1280.png') }}" alt="Logo" class="w-full sm:w-8/12">
            </div>
        </div>
    </section>

    <!-- Berita Hari Ini -->
    <section class="container mx-auto px-4 py-10">
        <div class="flex flex-col sm:flex-row items-center">
            <div class="w-full sm:w-1/2 flex justify-center">
                <img src="{{ asset('img/man-4365597_1920.png') }}" alt="Logo" class="w-full sm:w-8/12">
            </div>
            <div class="w-full sm:w-1/2">
                <h1 class="text-3xl sm:text-5xl font-bold text-center sm:text-left font-audiowide ">
                    Berita kita hari ini
                </h1>
                <p class="mt-5 text-center sm:text-left font-mono">
                    Dunia teknologi terus berkembang dengan inovasi seperti kecerdasan buatan (AI), jaringan 5G, dan
                    blockchain yang semakin luas penggunaannya. Perangkat pintar semakin canggih, sementara metaverse
                    dan realitas virtual terus menghadirkan pengalaman digital baru. Pantau terus perkembangan teknologi
                    untuk tetap update dengan tren terkini! 🚀
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mt-6">
                    <div class="card1">
                        <img src="{{ asset('img/Poster teknologi.jpg') }}" alt="Logo" class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Kembangkan Teknologi Raih Prestasi</h3>
                        <p class="text-center text-gray-600 mt-2">Ayoo sama sama Membuat Teknologi jadi Makin
                            Berkembang.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mt-6">
                    <div class="card1">
                        <img src="{{ asset('img/Poster teknologi.jpg') }}" alt="Logo" class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Kembangkan Teknologi Raih Prestasi</h3>
                        <p class="text-center text-gray-600 mt-2">Ayoo sama sama Membuat Teknologi jadi Makin
                            Berkembang.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                    <div class="card1">
                        <img src="{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}" alt="Logo"
                            class="w-full rounded-lg">
                        <h3 class="text-lg font-semibold text-center mt-2">Era Digital Bukan Halangan Bijak Gunakan
                            Teknologi</h3>
                        <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.</p>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button class="bg-blue-400 border text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Cek Berita Lainnya
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Trending hari Ini --}}
    <section class="mb-5">
        <div x-data="{
            currentSlide: 0,
            slidesToShow: 4, // Default untuk desktop
            slides: [
                { image: '{{ asset('img/Dirgahayu RI 79 Live Instagram Design Canva.jpg') }}', title: 'Hari Kemerdekaan', description: 'Ayo Rayakan Hari Kemerdekaan Republik Indonesia ke 79.' },
                { image: '{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}', title: 'Melestarikan Budaya', description: 'Jaga budaya kita tetap hidup di era digitalisasi.' },
                { image: '{{ asset('img/gates-7584115_1280.png') }}', title: 'Teknologi Masa Depan', description: 'Inovasi teknologi berkembang pesat.' },
                { image: '{{ asset('img/computer-8671934_1280.png') }}', title: 'Perkembangan AI', description: 'Artificial Intelligence semakin canggih.' },
                { image: '{{ asset('img/gates-7584115_1280.png') }}', title: 'Keamanan Siber', description: 'Lindungi data pribadimu dengan keamanan terbaru.' },
                { image: '{{ asset('img/gates-7584115_1280.png') }}', title: 'Dunia Digital', description: 'Internet membawa perubahan besar.' }
            ],
            autoSlideInterval: null,
        
            next() {
                if (this.currentSlide < this.slides.length - this.slidesToShow) {
                    this.currentSlide++;
                } else {
                    this.currentSlide = 0;
                }
            },
        
            prev() {
                if (this.currentSlide > 0) {
                    this.currentSlide--;
                } else {
                    this.currentSlide = this.slides.length - this.slidesToShow;
                }
            },
        
            startAutoSlide() {
                this.autoSlideInterval = setInterval(() => { this.next(); }, 3000);
            },
        
            stopAutoSlide() {
                clearInterval(this.autoSlideInterval);
            },
        
            updateSlidesToShow() {
                if (window.innerWidth >= 1024) {
                    this.slidesToShow = 4; // Desktop
                } else if (window.innerWidth >= 768) {
                    this.slidesToShow = 3; // Tablet
                } else if (window.innerWidth >= 640) {
                    this.slidesToShow = 2; // HP Medium
                } else {
                    this.slidesToShow = 1; // HP Kecil
                }
            }
        }" x-init="updateSlidesToShow();
        startAutoSlide();
        window.addEventListener('resize', updateSlidesToShow)" class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">

            <h1 class="text-3xl sm:text-5xl font-bold text-center font-audiowide">
                Trending Hari Ini
            </h1>

            <div class="relative overflow-hidden w-full max-w-6xl mx-auto mt-6 overflow-x-hidden"
                @mouseover="stopAutoSlide()" @mouseleave="startAutoSlide()">
                <div class="flex transition-transform duration-500"
                    :style="'transform: translateX(-' + (currentSlide * (100 / slidesToShow)) + '%);'">

                    <template x-for="(slide, index) in slides" :key="index">
                        <div :class="{
                            'w-1/4': slidesToShow === 4,
                            'w-1/3': slidesToShow === 3,
                            'w-1/2': slidesToShow === 2,
                            'w-full': slidesToShow === 1
                        }"
                            class="flex-shrink-0 px-2">
                            <div
                                class="group relative bg-white shadow-lg rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                                <img :src="slide.image" alt="Slide Image" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h2 class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-all duration-300"
                                        x-text="slide.title"></h2>
                                    <p class="text-gray-600 text-sm mt-2" x-text="slide.description"></p>
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                                <div
                                    class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href="#"
                                        class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm shadow-md hover:bg-blue-700 transition-all duration-300">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Tombol Sebelumnya -->
                <button @click="prev(); stopAutoSlide(); startAutoSlide()"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-3 rounded-full shadow-md hover:bg-gray-900 transition">
                    ❮
                </button>

                <!-- Tombol Berikutnya -->
                <button @click="next(); stopAutoSlide(); startAutoSlide()"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-3 rounded-full shadow-md hover:bg-gray-900 transition">
                    ❯
                </button>
            </div>

            <div class="text-center mt-5">
                <button class="bg-blue-400 border text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Cek Yang Lagi Trending!
                </button>
            </div>
        </div>
    </section>

    <x-footer2></x-footer2>

</body>

</html>
