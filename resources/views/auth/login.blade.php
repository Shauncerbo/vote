@include('navbar')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])

<style>
    html, body {
    overflow: hidden; /* Disables scrolling completely */
    height: 100%;
    margin: 0;
    padding: 0;
}
    .login-page {
        display: flex;
        min-height: 100vh; /* Changed from height to min-height */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
    }

    .left-side {
        flex: 1;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center; /* This centers vertically */
        align-items: center;
        padding: 2rem;
        position: relative;
        overflow: hidden;
    }

    .university-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1A253D;
        margin-bottom: 0.5rem;
        letter-spacing: 0.5px;
    }

    .university-tagline {
        color: #506183;
        font-size: 1rem;
        font-weight: 500;
        font-style: italic;
    }

    .right-side {
        flex: 1;
        background-color: #1A253D;
        background-image: linear-gradient(135deg, #1A253D 0%, #0f192e 100%);
        display: flex;
        justify-content: center;
        align-items: center; /* This centers vertically */
        padding: 2rem;
    }

    .login-card {
        background-color: #ffffff;
        padding: 2.5rem;
        border-radius: 12px;
        width: 100%;
        max-width: 420px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        margin-top: -2rem; /* This pulls the card up slightly */
    }

    .login-title {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        color: #1A253D;
        font-weight: 700;
    }
    
    .input-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        color: #4b5563;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .form-input {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 1.5px solid #e5e7eb;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.2s ease;
        background-color: #f9fafb;
    }

    .form-input:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        outline: none;
        background-color: #ffffff;
    }

    .login-btn {
        width: 100%;
        background-color: #1A253D;
        color: white;
        border: none;
        padding: 0.875rem;
        font-size: 1rem;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 1rem;
        font-weight: 600;
        transition: all 0.2s ease;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 6px rgba(26, 37, 61, 0.2);
    }

    .invalid-feedback {
        color: #ef4444;
        font-size: 0.85rem;
        margin-top: 0.25rem;
        display: none;
    }

    .is-invalid .invalid-feedback {
        display: block;
    }

    .error-list {
        background-color: #fee2e2;
        border-radius: 6px;
        padding: 0.75rem 1rem;
        margin-top: 1.5rem;
        border-left: 4px solid #ef4444;
    }

    .error-item {
        color: #b91c1c;
        font-size: 0.875rem;
        margin: 0.375rem 0;
    }
</style>

<div class="login-page">
    <div class="left-side">
        <img src="{{ asset('images/SALFORD.png') }}" alt="Logo">
        <h2 class="university-title">INOVATECH UNIVERSITY</h2>
        <p class="university-tagline">Shaping the future one moment at a time.</p>
    </div>

    <div class="right-side">
        <div class="login-card">
            <h1 class="login-title">Welcome Back!</h1>
            <p class="login-subtitle">Sign in to access your account</p>

            <form action="{{ route('login.submit') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="input-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-input" placeholder="your.email@example.com" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" placeholder="••••••••" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>

                <button type="submit" class="login-btn">Sign In</button>

                <p class="text-center mt-4">
                    Don't have an account?
                    <a href="{{ route('show.signup') }}" class="register-link">Create Account</a>
                </p>

                @if ($errors->any())
                    <div class="error-list">
                        @foreach ($errors->all() as $error)
                            <p class="error-item">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

<script>
// Form validation script
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>