@extends('layouts.auth')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app/sign-in.css') }}">
@endsection

@section('content')
    <main class="form-signin w-100 m-auto">
        <form action="" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('images/app/logo.svg') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="1">
                    Remember me
                </label>
            </div>
            @error('email')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            @error('password')
                <div class="text-danger m-3">
                    <small>
                        {{ $message }}
                    </small>
                </div>
            @enderror
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign in</button>
            <p class="register-link">Don't have account ? <a href="">Create new account here</a>
            </p>
            <p class="mt-5 mb-3 text-muted">&copy; ShortStoryApp, 2023</p>
        </form>
    </main>
@endsection

@section('scripts')
    @include('partials.sweet-alert')
@endsection
