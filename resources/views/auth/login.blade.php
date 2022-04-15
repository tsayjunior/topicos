@extends('layouts.app')

@section('title', 'Login')

@section('content')


<div class="card">

    <div class="card-body">
        
    <h1 text-align: center>iniciar sesion</h1>
        <form method="post" action>
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">correo</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @error('message')
            <div class="alert alert-danger" role="alert">*
                {{$message}}
            </div>
            @enderror
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection