<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurfectBrew - {{ $title ?? 'Welcome' }}</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Lato&display=swap" rel="stylesheet">
</head>
<body class="bg-amber-50 flex items-center justify-center min-h-screen font-lato">

    <div class="bg-white rounded-3xl shadow-2xl p-10 w-full max-w-md text-center">
        <img src="{{ asset('images/logo.png') }}" alt="PurfectBrew Logo" class="mx-auto w-36 mb-6 rounded-xl">
        <h2 class="text-3xl font-poppins font-bold text-amber-900 mb-8">{{ $heading ?? 'Welcome' }}</h2>

        {{ $slot }}
    </div>

</body>
</html>
