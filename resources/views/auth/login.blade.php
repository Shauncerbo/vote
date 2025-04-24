@include('navbar')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])

<style>
    .active-LogIn {
        background-color: #1A253D;
        color: #ffffff !important;
        border-radius: 10px;
    }


</style>

<div class="container-login">
    <div class="card-body">
        <h1 class="card-title text-center mb-2">Log In</h1>
        <p class="text-center mb-4">Enter your credentials to log in</p>

        <form action="{{ route('login.submit') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">Please enter your email.</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <div class="invalid-feedback">Please enter your password.</div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-100 mt-2">Log In</button>
            </div>

            <p class="text-center mt-4">
                Don't have an account?
                <a href="{{ route('show.signup') }}">Register</a>
            </p>

            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</div>
