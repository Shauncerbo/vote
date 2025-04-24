@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/sidebar.css'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">    

<style>

</style>

<nav>
    <ul>
        <img src="{{ asset('storage/schoolIcon.png') }}" alt="Logo" class="sidebar-logo">

        <li><a class="active" href='#'><i class="fas fa-cog"></i> Manage</a></li>
        <li><a class="active-voters" href={{ route('voters-DeptAdmin') }}><i class="fas fa-id-card"></i> Voters</a></li>
        <li><a class="active-candidates" href={{ route('candidates-DeptAdmin') }}><i class="fas fa-user-tie"></i> Candidates</a></li>
        <li><a class="active-elections" href={{ route('elections-DeptAdmin') }}><i class="fas fa-vote-yea"></i> Elections</a></li>
        <li><a class="active-account" href={{ route('manageAcc-DeptAdmin') }}><i class="fas fa-user-edit"></i> Manage Account</a></li>


        <div class="sidebar-bottom">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-button">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </ul>
</nav>
