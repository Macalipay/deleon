<nav class="navbar navbar-expand navbar-theme">
    <a class="sidebar-toggle d-flex mr-2">
<i class="hamburger align-self-center"></i>
</a>

    <form class="form-inline d-none d-sm-inline-block">
        <input class="form-control form-control-lite" type="text" placeholder="Search projects...">
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-toggle="dropdown">
                    <i class="align-middle fas fa-envelope-open"></i>
                </a>
                
            </li>
    <span class="indicator"></span>
  </a>
            </li>
            <li class="nav-item dropdown ml-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                    <i class="align-middle fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" data-toggle="modal" data-target="#changePhotoModal"><i class="align-middle mr-1 fas fa-fw fa-user"></i> Profile Picture</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#changePasswordModal"><i class="align-middle mr-1 fas fa-fw fa-lock"></i> Change Password</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </li>
        </ul>
    </div>

</nav>