@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('admin.sidebar')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>



<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- DataTables Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css">


<style>
    li a.active-position, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
    }

    .row{
        margin-top: 10px;
      
    }
    .text{

        margin-top: 5px;
        font: bold;
    }

    .card {
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border: 1px solid #ddd;
    }

    .card-header {
        background: #fafbfc;
        border-bottom: 1px solid #eee;
        padding: 1rem 1.5rem;
    }

    .card-body {
        background: #fff;
        padding: 1.5rem;
    }

    .table th, .table td {
        vertical-align: middle !important;
        border-top: none !important;
        border-bottom: 1px solid #eee !important;
    }

    .table thead th {
        background: #f8f9fa;
        font-weight: 600;
        border-bottom: 2px solid #e5e7eb !important;
    }

    .table tbody tr {
        transition: background 0.2s;
    }

    .table tbody tr:hover {
        background: #f6f8fa;
    }

    .dataTables_filter input {
        border-radius: 20px !important;
        border: 1px solid #ccc;
        padding: 8px 15px;
        outline: none;
        width: 200px;
        transition: all 0.3s ease;
        margin-bottom: 10px;
    }

    .btn-primary, .btn-warning, .btn-danger, .btn-secondary {
        border-radius: 6px;
        font-weight: 500;
    }

    .btn-primary {
        background: #2563eb;
        border: none;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-warning {
        background: #fbbf24;
        border: none;
        color: #fff;
    }

    .btn-warning:hover {
        background: #f59e42;
    }

    .btn-danger {
        background: #ef4444;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background: #dc2626;
    }

    .btn-secondary {
        background: #6c757d;
        border: none;
        color: #fff;
    }

    .btn-secondary:hover {
        background: #495057;
    }

    .badge-na {
        background: #6c757d;
        color: #fff;
        border-radius: 8px;
        padding: 2px 10px;
        font-size: 0.9em;
        font-weight: 500;
    }
</style>

@include('admin.modals.addUser-modal')

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage User</p>
    </div>
</nav>

<div class="container-fluid mt-5" style="margin-left: 250px; padding-top: 70px;">
    <div class="card ">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="mb-0">Users List</h3>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#addUserModal" >
                            <i class="fas fa-plus me-1"></i>Add User
                        </button>
                        <button class="btn btn-primary " onclick="window.location.href='{{ route('userTypes.index') }}'">
                            <i class="fas fa-plus me-1"></i>Add User Type
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
         
           
            <table id="UsersTable" class="table">
                <thead>
   
                    <tr>
                        <th>Full Name</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user)
                    <tr>
                        <td>{{$user->full_name ?? 'N/A'}}</td>
                        <td>{{$user->Sex ?? 'N/A'}}</td>
                        <td>{{$user->ContactNumber ?? 'N/A'}}</td>
                        <td>{{$user->email ?? 'N/A'}}</td>
                        <td>
                            @if($user->userType->userType_name ?? false)
                                {{$user->userType->userType_name}}
                            @else
                                <span class="badge-na">N/A</span>
                            @endif
                        </td>
                        <td>{{$user->department->department_name ?? 'N/A'}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" title="Delete"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-secondary btn-sm" title="More"><i class="fas fa-ellipsis-h"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
         
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#UsersTable').DataTable(); 
    });
</script>
