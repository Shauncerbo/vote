

<style>
    .modal-header {
        background-color: #1A253D;
        color: white;
    }

    .modal-title {
        color: white;
    }

    .btn-close {
        filter: invert(1); /* Makes the close button visible on dark background */
    }
</style>

<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel"> Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
          
                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="department_name" class="form-label">Department Name</label>
                        <input type="text" name="department_name" class="form-control" id="department_name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Department</button>
                </form>
                
            </div>
        </div>
    </div>
</div>