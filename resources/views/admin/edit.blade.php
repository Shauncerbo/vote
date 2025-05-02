@vite(['resources/js/app.js', 'resources/css/app.css'])

<!DOCTYPE html>
<div class="container mt-5" style="max-width: 800px; margin: 0 auto;">

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center">Edit Department</h1>
            <p class="text-center">Manage this department</p>



            <form action={{ route('departments.update',$departments->department_id) }} method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" id="department_name" name="department_name" class="form-control" value="{{ old('deparment_name', $departments->department_name) }}" required>
                        <div class="invalid-feedback">Please enter a post title.</div>
                    </div>


                <button type="submit" class="btn btn-primary w-100">Update Post</button>
            </form>
        </div>
    </div>
</div>
