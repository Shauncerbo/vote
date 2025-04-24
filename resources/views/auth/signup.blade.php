@include('navbar')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])

<style>
    .active-SignUp {
        background-color: #1A253D;
        color: #ffffff !important;
        border-radius: 10px;
    }


</style>

<div class="container-register">
    <div class="card-body">
        <h1 class="card-title text-center">Registration</h1>
        <p class="text-center mb-4">Fill out the form carefully for registration</p>

        <form action="#" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="newusername" class="form-label">Username</label>
                <input type="text" id="newusername" name="newusername" class="form-control" required>
                <div class="invalid-feedback">Please enter a username.</div>
            </div>

            <div class="mb-3">
                <label for="newpassword" class="form-label">Password</label>
                <input type="password" id="newpassword" name="newpassword" class="form-control" required>
                <div class="invalid-feedback">Please enter a password.</div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-100 mt-2">Register</button>
            </div>

            <p class="text-center mt-4">
                Already have an account?
                <a href="{{ route('login') }}">Sign in</a>
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
