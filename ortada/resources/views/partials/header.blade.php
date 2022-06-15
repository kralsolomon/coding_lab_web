<section id="header">
    <a href="#"><img src="img/logo.svg" width="50px" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="/home">Home</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/about">About</a></li>


            <li class="nav-item dropdown" style="padding-left: 0px">
                <a  style="margin-left: 0px" class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i> User Management
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

            @if(Auth::check() && Auth::user()->is_admin == 0)
                <li><h4 class="dropdown-item">{{ Auth::user()->name }}</h4></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>

            @elseif(Auth::check() && Auth::user()->is_admin == 1)
                <li><a class="dropdown-item" href="{{route('admin-view')}}">Admin</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            @else
                <li><a class="dropdown-item" href="{{route('user.signup')}}">Sign Up</a></li>
                <li><a class="dropdown-item" href="{{route('user.signin')}}">Sign In</a></li>
            @endif

            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                </ul>
            </li>
        </ul>
    </div>
</section>
