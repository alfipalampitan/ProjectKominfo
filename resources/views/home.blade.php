<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Charm:wght@400;700&family=Oxygen:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <x-navbar></x-navbar>
    <main class="bg-white" style="box-sizing: border-box">
        <!-- Hero Section -->
        @php
            $landingPage = \App\Models\LandingPage::first();
        @endphp

        <section class="flex flex-col sm:flex-row items-center container mx-auto px-4 py-10 mt-10">
            <div data-aos="fade-right" class="w-full sm:w-1/2 flex justify-center">
                <img src="{{ asset('storage/' . $landingPage->image) }}" alt="Logo" class="w-full sm:w-8/12">
            </div>
            <div data-aos="fade-left" class="w-full sm:w-1/2 text-center sm:text-left">
                <h1 class="text-4xl sm:text-5xl font-bold uppercase font-audiowide">
                    {{ $landingPage->title }}
                </h1>
                <p class="mt-5 font-mono">
                    {{ $landingPage->description }}
                </p>
            </div>
        </section>


        <!-- Agenda Hari Ini -->
        <section class="container mx-auto px-4 py-10">
            <div class="flex flex-col-reverse sm:flex-row items-center">
                <div data-aos="fade-right" class="w-full sm:w-1/2">
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
                            <p class="text-center text-gray-600 mt-2">Harus Selalu Bijak Untuk menggunakan Teknologi.
                            </p>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <button class="bg-blue-400 border text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                            Cek Agenda Lainnya
                        </button>
                    </div>
                </div>

                <div data-aos="fade-left" class="w-full sm:w-1/2 flex justify-center">
                    <img src="{{ asset('img/gates-7584115_1280.png') }}" alt="Logo" class="w-full sm:w-8/12">
                </div>
            </div>
        </section>

        <!-- Trending Hari Ini -->
        <section
            class="container mx-auto px-4 py-10 bg-slate-100 rounded-2xl hover:-translate-y-4 transition-transform hover:shadow-xl">
            <div class="flex flex-col sm:flex-row items-center">
                <div data-aos="fade-right" class="w-full sm:w-1/2 flex justify-center">
                    <img src="{{ asset('img/man-4365597_1920.png') }}" alt="Logo" class="w-full sm:w-8/12">
                </div>
                <div data-aos="fade-left" class="w-full sm:w-1/2">
                    <h1 class="text-3xl sm:text-5xl font-bold text-center sm:text-left font-audiowide text-red-600 ">
                        Trending Hari Ini
                    </h1>
                    <p class="mt-5 text-center sm:text-left font-mono">
                        Dunia teknologi terus berkembang dengan inovasi seperti kecerdasan buatan (AI), jaringan 5G, dan
                        blockchain yang semakin luas penggunaannya. Perangkat pintar semakin canggih, sementara
                        metaverse
                        dan realitas virtual terus menghadirkan pengalaman digital baru. Pantau terus perkembangan
                        teknologi
                        untuk tetap update dengan tren terkini! 🚀
                    </p>

                    <div x-data="{
                        currentSlide: 0,
                        slides: [
                            { image: '{{ asset('img/Poster teknologi.jpg') }}', title: 'Kembangkan Teknologi Raih Prestasi', description: 'Ayoo sama sama Membuat Teknologi jadi Makin Berkembang.' },
                            { image: '{{ asset('img/melestarikan budaya di era digitalisasi.jpg') }}', title: 'Era Digital Bukan Halangan', description: 'Harus Selalu Bijak Untuk menggunakan Teknologi.' },
                            { image: '{{ asset('img/gates-7584115_1280.png') }}', title: 'Teknologi Masa Depan', description: 'Inovasi teknologi berkembang pesat.' },
                            { image: '{{ asset('img/computer-8671934_1280.png') }}', title: 'Perkembangan AI', description: 'Artificial Intelligence semakin canggih.' }
                        ],
                        autoSlideInterval: null,
                        next() {
                            this.currentSlide = (this.currentSlide + 2) % this.slides.length;
                        },
                        prev() {
                            this.currentSlide = (this.currentSlide - 2 + this.slides.length) % this.slides.length;
                        },
                        startAutoSlide() {
                            this.autoSlideInterval = setInterval(() => { this.next(); }, 3000);
                        },
                        stopAutoSlide() {
                            clearInterval(this.autoSlideInterval);
                        }
                    }" x-init="startAutoSlide()"
                        class="relative w-full max-w-4xl mx-auto overflow-hidden mt-6">

                        <!-- Carousel Wrapper -->
                        <div class="flex transition-transform duration-500"
                            :style="'transform: translateX(-' + (currentSlide * 50) + '%);'">

                            <template x-for="(slide, index) in slides" :key="index">
                                <div class="w-1/2 flex-shrink-0 px-3">
                                    <div class="bg-white shadow-lg rounded-lg overflow-hidden h-72">
                                        <img :src="slide.image" alt="Slide Image" class="w-full h-40 object-cover">
                                        <div class="p-4">
                                            <h2 class="text-lg font-bold text-gray-800" x-text="slide.title"></h2>
                                            <p class="text-gray-600 text-sm mt-2" x-text="slide.description"></p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Navigation Buttons -->
                        <button @click="prev(); stopAutoSlide(); startAutoSlide()"
                            class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-3 rounded-full shadow-md hover:bg-gray-900 transition">
                            ❮
                        </button>

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
            </div>
        </section>

        {{-- Berita hari Ini --}}
        <section class="pb-4">
            <div data-aos="fade-up" x-data="{
                currentSlide: 0,
                slidesToShow: 4,
                containerWidth: 0,
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
                        this.slidesToShow = 4;
                    } else if (window.innerWidth >= 768) {
                        this.slidesToShow = 3;
                    } else if (window.innerWidth >= 640) {
                        this.slidesToShow = 2;
                    } else {
                        this.slidesToShow = 1;
                    }
                    this.updateContainerWidth();
                },
            
                updateContainerWidth() {
                    this.containerWidth = 100 / this.slidesToShow;
                    this.$nextTick(() => {
                        this.currentSlide = 0; // Reset posisi setelah ukuran berubah
                    });
                }
            }" x-init="updateSlidesToShow();
            startAutoSlide();
            window.addEventListener('resize', () => {
                updateSlidesToShow();
                $nextTick(() => updateContainerWidth());
            })"
                class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">

                <h1 class="text-3xl sm:text-5xl font-bold text-center font-audiowide">
                    Berita kita hari ini
                </h1>

                <div class="relative max-w-full overflow-hidden mx-auto mt-6" @mouseover="stopAutoSlide()"
                    @mouseleave="startAutoSlide()">
                    <div class="flex transition-transform duration-500"
                        :style="'transform: translateX(-' + (currentSlide * containerWidth) + '%);'">

                        <template x-for="(slide, index) in slides" :key="index">
                            <div :style="'width:' + containerWidth + '%'" class="flex-shrink-0 px-2">
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
                        Cek Berita Lainnya
                    </button>
                </div>
            </div>
        </section>

    </main>

    <x-footer2></x-footer2>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi (1 detik)
            once: true, // Hanya berjalan sekali
            delay: 200 // Waktu delay sebelum mulai
        });
    </script>

</body>

</html>
