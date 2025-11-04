<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Presença')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="">
    <div class="container mt-4">
            <header class="d-flex justify-content-center align-items-center mb-4">
                <h1>Sistema de Presença - Palestras</h1>
            </header>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!-- <h1>Palestras</h1> -->
                    <nav>
                        <a class="btn btn-primary" href="{{ route('palestras.index') }}">Listar</a>
                        <a class="btn btn-primary" href="{{ route('palestras.create') }}">Nova Palestra</a>
                    </nav>
                </div>
            
                @if(session('sucesso'))
                <div class="alert alert-success">{{ session('sucesso') }}</div>
                @endif
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
            <footer class="text-center text-muted mt-3">
                <p>Fatec Prudente - Programação Web (Laravel)</p>
            </footer>
    </div>
</body>
</html>