@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('department-admin.sidebar')

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage User Types</p>
    </div>
</nav>

<div class="container" style="margin-top: 100px; margin-left: 250px;">

            <div class="card">
                <div class="card-header">
                    <h5>Need approval</h5>
                </div>
                <div class="card-body">
                    @if (isset($studentregistrations) && $studentregistrations->count())
                    @foreach ($studentregistrations as $studentregistration)
                            <div class="border p-3 mb-3" style="background-color: #F8FAFF; border-color: #D6E4FF;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 style="color: #2C3E50;">{{ $studentregistration->full_name }}</h3>
                                    <div>
                                        <form action="{{ route('declineVoter', $studentregistration->student_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this registration?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" style="background-color: #E74C3C;">
                                                Decline
                                            </button>
                                        </form>
                                        <form action="{{ route('approveUser', $studentregistration->student_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to aprrove this registration?');">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm" >
                                                Aprrove
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="mt-2">
                                    <p><strong>Student ID:</strong> {{ $studentregistration->student_id }}</p>
                                    <p><strong>Department:</strong> {{ $studentregistration->department->department_name ?? 'N/A' }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info mt-3" role="alert">
                            No registrations awaiting approval.
                        </div>
                    @endif
                </div>
            </div>
