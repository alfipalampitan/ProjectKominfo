<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<footer class="bg-blue-600 text-white py-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

            <!-- Kolom 1: Icon & Maps -->
            <div class="text-center md:text-left">
                <!-- Icon -->
                <div class="flex justify-center md:justify-start space-x-4 mb-4">
                    <a href="https://facebook.com" class="iconbg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com" class="iconbg">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com" class="iconbg">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com" class="iconbg">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                <!-- Maps -->
                <div class="w-full h-48 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.2516414522406!2d115.25268469999999!3d-2.4228438999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de538e9fc955557%3A0x4399e706a5825eba!2sDinas%20Komunikasi%2C%20Informatika%20dan%20Persandian%20Hulu%20Sungai%20Utara!5e0!3m2!1sid!2sid!4v1739081061610!5m2!1sid!2sid" width="720" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Kolom 2: List Informasi -->
            <div>
                <h2 class="text-lg font-bold mb-3">Informasi</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-400 transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-gray-400 transition">Layanan</a></li>
                    <li><a href="#" class="hover:text-gray-400 transition">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-gray-400 transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>

        </div>

        <div class="mt-8 text-center text-gray-400 text-sm">
            &copy; {{ date('Y') }} Anak Magang KomInfo Amuntai. All rights reserved.
        </div>
    </div>
</footer>
