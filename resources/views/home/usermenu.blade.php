@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h5 style="text-align: center"><b>User Panel</b></h5>
    <hr><br>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="text-align: center">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{route('myprofile')}}"><i class="icon-user"></i> MY PROFILE &nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link" href="{{route('user_order')}}"><i class="icon-sporting"></i> MY ORDERS &nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link" href="{{route('myreviews')}}"><i class="icon-comment"></i> MY REVIEWS &nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link" href="{{route('user_courses')}}"><i class="icon-new-2"></i> MY COURSE &nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link" href="{{route('logout')}}"><i class="revicon-logout"></i>LOGOUT &nbsp;&nbsp;&nbsp;</a>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp

            @if($userRoles->contains('admin'))
                <a class="nav-item nav-link active" href="{{route('adminhome')}}" target="_blank"><i class="icon-home-1"></i> ADMIN PANEL &nbsp;&nbsp;&nbsp;</a>
            @endif
        </div><br><hr>
    </div>
</nav>
@endauth
