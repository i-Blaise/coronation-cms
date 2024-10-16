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

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('motor-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-user-circle"></i> Motor Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motor-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motor') }}">Motor Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('travel-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-user-circle"></i> Travel Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('travel-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('travel') }}">Travel Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('house-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-user-circle"></i> Home Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('house-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('house-insurance') }}">Home Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('blogs-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fa fa-fw fa-user-circle"></i> Insights<span class="badge badge-success">7</span></a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blogs-all') }}">All Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-blog') }}">Add New Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('careers-*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fa fa-fw fa-user-circle"></i> Careers<span class="badge badge-success">8</span></a>
                        <div id="submenu-8" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('careers-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('careers-section1') }}">Section 1</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-divider">
                        Institute
                    </li>
                    {{-- <li class="nav-item">
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
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-user-circle"></i> Motor Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pns-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motor') }}">Motor Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-user-circle"></i> Engineer Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pns-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motor') }}">Travel Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-user-circle"></i> Marine Insuance Page <span class="badge badge-success">6</span></a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pns-header') }}">Header</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motor') }}">House Insurance</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
