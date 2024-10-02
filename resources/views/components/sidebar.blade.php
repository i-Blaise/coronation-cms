<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Individual
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{ Route::is('home-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Homepage <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home-sec1') }}">Section 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home-sec2') }}">Section 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link {{ Route::is('about-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-user-circle"></i>About Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-sec1') }}">Section 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-sec2') }}">Section 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-sec3') }}">Section 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-sec4') }}">Section 4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-sec5') }}">Section 5</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item ">
                        <a class="nav-link {{ Route::is('pns-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-user-circle"></i> Producs & Solutions Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pns-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pns-sec1') }}">Section 1</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('motor') }}"><i class="fa fa-fw fa-user-circle"></i> Motor Insuance Page <span class="badge badge-success">6</span></a>
                    </li>






                    <li class="nav-divider">
                        Institute
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                        <div id="submenu-10" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Level 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                    <div id="submenu-11" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Level 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Level 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Level 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
