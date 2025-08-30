<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurfectBrew - {{ $title ?? 'Welcome' }}</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Lato&display=swap" rel="stylesheet">
    <style>
        .min-content {
            min-height: min-content;
        }
    </style>
</head>
<body class="bg-amber-50 font-lato">

    <div class="flex items-center justify-center py-8 px-4 min-content">
        <div class="bg-white rounded-3xl shadow-2xl p-8 w-full max-w-md">
            <img src="{{ asset('images/logo.png') }}" alt="PurfectBrew Logo" class="mx-auto w-28 mb-5 rounded-xl">
            <h2 class="text-2xl font-poppins font-bold text-amber-900 mb-6 text-center">{{ $heading ?? 'Welcome' }}</h2>

            {{ $slot }}
        </div>
    </div>

</body>
</html>