@vite('app.css', 'app.js')

<style>
    .modal-header {
        background-color: #1A253D;
        color: white;
    }

    .modal-body h3 {
        margin-top: 15px;
        font-size: 20px;
        color: #1A253D;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .btn-save {
        background-color: #1ABC9C;
        color: white;
    }

    .btn-save:hover {
        background-color: #169f87;
    }
</style>
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('create-user') }}" method="POST">
                    @csrf
                
                    <!-- Personal Info -->
                    <h3>Personal Information</h3>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="FirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName">
                        </div>
                        <div class="col-md-4">
                            <label for="MiddleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="MiddleName" name="MiddleName">
                        </div>
                        <div class="col-md-4">
                            <label for="LastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="LastName" name="LastName">
                        </div>
                
                        <div class="col-md-2">
                            <label for="Age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="Age" name="Age">
                        </div>
                        <div class="col-md-2">
                            <label for="Sex" class="form-label">Sex</label>
                            <select class="form-control" id="Sex" name="Sex">
                                <option selected disabled>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="userType_id" class="form-label">UserType</label>
                            <select class="form-control" id="userType_id" name="userType_id">
                                <option selected disabled>Choose...</option>
                                @foreach ($userTypes as $userType)
                                    <option value="{{ $userType->userType_id }}">{{ $userType->userType_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="department_id" class="form-label">Department</label>
                            <select class="form-control" id="department_id" name="department_id">
                                <option selected disabled>Choose...</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
               
                    <h3>Contact Information</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="ContactNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="ContactNumber" name="ContactNumber">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                
               
                    <h3>Account Information</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                
                   
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-save">Save User</button>
                    </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 