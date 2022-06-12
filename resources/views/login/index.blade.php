@extends('layouts.main')

@section('container')
<section class="py-5 d-flex align-items-center bg-dark">
<div class="container">
<div class="row justify-content-center">    
    <div class="col-lg-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mt-5 mb-4 fw-normal text-light">Login</h1>
            <form action="/login" method="POST">    
                @csrf    
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Usernmae" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Login</button>
            </form>
            <small class="d-block mt-2 text-light">Don't have an account yet ? <a href="/register" class="text-decoration-none">Create an account</a></small>
        </main>
    </div>
</div>
</div>
</section>
@endsection