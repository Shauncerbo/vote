@vite(['resources/js/app.js'])

@include(('navbar'))
<style>

.active {
        background-color: #1A253D;
        color: #ffffff !important;
        border-radius: 10px;
    }
    .hero-section {
        background-color: #1A253D;
        color: white;
        padding: 60px 30px; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(250, 250, 250, 0.2);
        margin-top: 100px;
        text-align: left; 
        position: relative; 
        
    }
    
    .hero-title {
        font-size: 2.5em;
        font-weight: 700;
        margin-bottom: 30px;
        font-family: 'Roboto', sans-serif;
    }
    
    .hero-subtitle {
        font-size: 1.2em;
        margin-bottom: 40px;
        opacity: 0.9;
    }
    
    

    .action-buttons {
        margin-top: 30px;
        display: flex;
        gap: 15px; 
    }
    
    .btn {
        padding: 10px 25px;
        border-radius: 5px;
        font-weight: 600;
        text-transform: uppercase;
    }
    
    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    
    .btn-outline-light {
        border: 2px solid white;
        color: white;
        background: transparent;
    }
    
    .navbarlogo {
        position: absolute;
        right: 100px;
        top: 0px;
        height: 300px;
    }
    
    .hero-content {
        max-width: 70%; 
    }
</style>

<div class="container hero-section">
    <div class="card-body">
        <img src="{{ asset('storage/schoolIcon.png') }}" alt="Logo" class="navbarlogo">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to School Voting System</h1>
            <p class="hero-subtitle">Secure, Reliable, and Transparent Voting Solutions</p>
            
            <div class="action-buttons">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('show.signup') }}" class="btn btn-outline-light">Register</a>
            </div>
        </div>
    </div>
</div>