@include('navbar')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css'])

<style>
    .active-SignUp {
        background-color: #1A253D;
        color: #ffffff !important;
        border-radius: 10px;
    }


</style>

<div class="container-fluid mt-3" style="width: 50rem; ">

    <div class="card-body">
        <h1 class="card-title text-center">Registration</h1>
        <p class="text-center mb-4">Fill out the form carefully for registration</p>

        <form action="{{ route('signup-submit') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <h3>School Information</h3>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="number" id="student_id" name="student_id" class="form-control" required>
                    <div class="invalid-feedback">Please enter your student ID.</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="department_id" class="form-label">Department</label>
                    <select id="department_id" name="department_id" class="form-select">
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                        <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
                    @endforeach
    
                    </select>
                </div>
                

            <h3>Personal Information</h3>
            <hr>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="FirstName" class="form-label">First Name</label>
                    <input type="text" id="FirstName" name="FirstName" class="form-control" required>
                    <div class="invalid-feedback">Please enter your first name.</div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="MiddleName" class="form-label">Middle Name</label>
                    <input type="text" id="MiddleName" name="MiddleName" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="LastName" class="form-label">Last Name</label>
                    <input type="text" id="LastName" name="LastName" class="form-control" required>
                    <div class="invalid-feedback">Please enter your last name.</div>
                </div>
            </div>

                <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="Sex" class="form-label">Gender</label>
                    <select id="Sex" name="Sex" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="invalid-feedback">Please select your gender.</div>
                </div>
            </div>
        
            
            <h3>Contact Information</h3>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="contactNumber" class="form-label">Contact Number</label>
                    <input type="tel" id="contactNumber" name="contactNumber" class="form-control">
                </div>
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
