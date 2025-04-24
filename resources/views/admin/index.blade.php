@vite(['resources/css/app.css', 'resources/js/app.js',  'resources/css/admin.css'])
<style>
    li a.active, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
        
    }
</style>

@auth

@include('admin.sidebar')


<div class="content-wrapper">
<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage Department</p>
    </div>
</nav>
    
  
    <div class="department-container border p-3 mb-2" style="background-color: #F8FAFF; border-color: #D6E4FF;">
        <div class="d-flex justify-content-between align-items-center">
            <h3 style="color: #2C3E50;">sample</h3>
            <div>
                <a href="#" class="btn btn-info btn-sm" style="background-color: #3498DB;">Show</a>
                <a href="#" class="btn btn-warning btn-sm" style="background-color: #F39C12;">Edit</a>
                <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('#')
                    <button type="submit" class="btn btn-danger btn-sm" style="background-color: #E74C3C;">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endauth