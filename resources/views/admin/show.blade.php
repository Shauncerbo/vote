@vite(['resources/js/app.js'])

<!DOCTYPE html>
<div class="container mt-5" style="max-width: 800px; margin: 0 auto;">

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center">{{ $departments->department_name }}</h1>


            <div class="text-center mt-4">
                <a  href="{{ route('departments.index') }}" class="btn btn-secondary">Back to Department List</a>
            </div>
        </div>
    </div>
</div>
