<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/superheroes">Superheroes</a></li>
                        <li class="nav-item"><a class="nav-link" href="/artists">Artists</a></li>
                        <li class="nav-item"><a class="nav-link" href="/addSuperhero">Add a superhero</a></li>
                        <li class="nav-item"><a class="nav-link" href="/addArtist">Add an artist</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>