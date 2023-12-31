<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">Jackos Barbershop Admin Dashboard</a>
    </div>
    <div class="navbar-end">
        <!-- Profile Button -->
        <a href="{{ route('profile.edit') }}" class="btn btn-ghost btn-circle">
            <img src="{{ asset('images/profile-user.png') }}" alt="Logout Image" class="h-5 w-5">
        </a>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <img src="{{ asset('images/logout.png') }}" alt="Logout Image" class="h-5 w-5">
                </div>
            </button>
        </form>
    </div>
</div>