<!doctype html>
<html lang="en">
{{-- shift + alt + f -> sirve para ordenar codigo --}}
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title') - Laravel app</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->

    <ul class="nav justify-content-end">
        {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li> --}}
        @if (auth()->check())
            <h4>Bienvenido <b>{{auth()->user()->name}}</b> </h4>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.destroy') }}">cerrar sesion</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.index') }}">iniciar sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register.index') }}">Registrarse</a>
            </li>
        @endif
        {{-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> --}}
    </ul>

    @yield('content')

</body>

</html>
