<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body>
    <x-navbar></x-navbar>

    <main>
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