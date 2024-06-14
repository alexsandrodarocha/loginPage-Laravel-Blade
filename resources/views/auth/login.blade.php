@extends('layouts.auth')
@section('content')
<main class="form-signin w-100 m-auto">

    <form method="POST" action="{{ route ('login.index') }}" class="text-center">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <!-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">
                {{ $error }}
            </li>

            @endforeach
        </ul>
        @endif -->

        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
        </div>
        <!-- @error('email')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror -->

        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <!-- @error('password')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror -->

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2017–2024</p>
    </form>
</main>
@endsection
