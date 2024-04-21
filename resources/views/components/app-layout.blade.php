<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alkalami&family=Amiri+Quran&family=Amiri:ital@0;1&family=Aref+Ruqaa:wght@400;700&family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Serif+Text:ital@0;1&family=Frijole&family=Geologica:wght@100..900&family=Gulzar&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Kdam+Thmor+Pro&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&family=Lemonada:wght@300;400;500;600&family=Madimi+One&family=Manrope:wght@200;300;400;500;600&family=Merriweather:ital,wght@0,400;0,700;1,300;1,400&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600&family=Noto+Nastaliq+Urdu:wght@400;500;600;700&family=Playpen+Sans:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Rakkas&family=Readex+Pro:wght@200;300;400;500;600&family=Reem+Kufi+Ink&family=Reem+Kufi:wght@400;500;600;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100;200;300;400;500;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Salsa&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&family=Ubuntu:ital,wght@0,300;0,400;1,300&family=Vazirmatn:wght@100;200;300;400;500;600&family=Whisper&display=swap" rel="stylesheet">
    {{--styles & scripts --}}
    @vite('resources/css/app.css', 'resources/js/app.js')

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

    {{-- Header goes here... --}}
    <x-page-header />

    <x-popup-message />


    {{-- Main content goes here ...--}}
    <main>
        {{ $slot }}
    </main>

    {{-- back top  button --}}
    <x-back-top-btn />

</body>
</html>
