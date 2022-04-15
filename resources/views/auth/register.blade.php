@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="card">

        <div class="card-body">

            <h1 text-align: center>Registrarse</h1>
            <form method="Post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                @error('name')
                    <div class="alert alert-danger" role="alert">*
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="email" class="form-label">correo</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                @error('email')
                    <div class="alert alert-danger" role="alert">*
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                @error('password')
                    <div class="alert alert-danger" role="alert">*
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="passwordConfirmation" class="form-label">Confirmación</label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation"
                        required>
                </div>
                {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
