<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Ubuntu&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Charm:wght@400;700&family=Oxygen:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <x-navbar></x-navbar>

    <main class="bg-blue-400">
        {{-- profile kadis --}}
        <section class="flex flex-col sm:flex-row items-center container mx-auto px-4 py-10">
            <div class="w-full sm:w-1/2 flex justify-center border-b-4">
                <img src="{{ asset('img/pngwing.com.png') }}" alt="Logo" class="w-full sm:w-8/12">
            </div>
            <div class="w-full sm:w-1/2 text-center sm:text-left">
                <h1 class="text-4xl sm:text-5xl font-bold uppercase font-audiowide">
                    Mesut Ozil
                </h1>
                <p class="text-xl font-bold font-charm">Jabatan Kepala Dinas</p>
                <p class="font-mono mt-10">
                    "Era digital bukan sekadar tantangan, tetapi peluang. Mari manfaatkan dengan bijak!"
                </p>
            </div>
        </section>
    </main>

    <x-footer2></x-footer2>
</body>
</html>