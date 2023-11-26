<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Notes App') }}</title>
    <!-- Tambahkan link CSS atau CDN yang diperlukan di sini -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Notes App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/notes') }}">Daftar Catatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/notes/create') }}">Tambah Catatan</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Tambahkan script JavaScript atau CDN yang diperlukan di sini -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
