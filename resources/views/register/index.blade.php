@extends('layouts.main')

@section('container')
<section class="py-5 d-flex align-items-center bg-dark">
    <div class="container">
<div class="row justify-content-center">    
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-4 mt-5 fw-normal text-light">Registration</h1>
            <form action="/register" method="POST">
                @csrf
            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Input Your Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Input Your Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input Your Email" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Input Your Password" required value="{{ old('password') }}">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
            </form>
            <small class="d-block mt-2 text-light">Have an account yet ? <a href="/login" class="text-decoration-none">Login</a></small>
        </main>
    </div>
</div>
</div>
</section>
@endsection