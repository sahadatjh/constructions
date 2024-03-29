<div class="left-side-menu">

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('assets/admin/images/logo-sm-dark.png') }}" alt="" height="24">
                <!-- <span class="logo-lg-text-light">Minton</span> -->
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="20">
                <!-- <span class="logo-lg-text-light">M</span> -->
            </span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="logo logo-light text-center">
            <span class="logo-sm">
                {{-- <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="24"> --}}
                <img src="{{ asset('assets/admin/images/logo-short1.png') }}" alt="" height="44">
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="" height="20"> --}}
                <img src="{{ asset('assets/admin/images/logo-full.png') }}" alt="" height="48">
            </span>
        </a>
    </div>

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="#" class="text-reset dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Nik Patel</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-reset">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#masterdata" data-bs-toggle="collapse" aria-expanded="false" aria-controls="masterdata" class="waves-effect">
                        <i class=" fas fa-network-wired"></i>
                        <span class="badge bg-success rounded-pill float-end">3</span>
                        <span> Masterdata </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="masterdata">
                        <ul class="nav-second-level">
                            <li><a href="{{ route('admin.masterdata.packages.index')}}"><i class=" fas fa-arrow-right"> </i> Packages</a></li>
                            <li><a href="{{ route('admin.masterdata.agents.index')}}"><i class=" fas fa-arrow-right"> </i> Agents</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#preRegistration" data-bs-toggle="collapse" aria-expanded="false" aria-controls="preRegistration" class="waves-effect">
                        <i class="fas fa-handshake"></i>
                        <span class="badge bg-success rounded-pill float-end">3</span>
                        <span> Pre Registraion </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="preRegistration">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.hajjis.pre_registrations.create')}}"><i class=" fas fa-arrow-right"> </i> Add New Hajji</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.hajjis.pre_registrations.index')}}"><i class=" fas fa-arrow-right"> </i> Pre register hajjis</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#runningHajji" data-bs-toggle="collapse" aria-expanded="false" aria-controls="runningHajji" class="waves-effect">
                        <i class="fas fa-mosque"></i>
                        <span> Running Hajji </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="runningHajji">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.hajjis.running_hajjis.index')}}"><i class=" fas fa-arrow-right"> </i> Running Hajji List</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#archives" data-bs-toggle="collapse" aria-expanded="false" aria-controls="archives" class="waves-effect">
                        <i class="fas fa-archive"></i>
                        <span> Archives </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="archives">
                        <ul class="nav-second-level">
                            <li><a href="#"><i class=" fas fa-arrow-right"> </i> Completed Hajji List</a></li>
                            <li><a href="#"><i class=" fas fa-arrow-right"> </i> Transfered Hajji List</a></li>
                            <li><a href="#"><i class=" fas fa-arrow-right"> </i> Canceled Hajji List</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#payments" data-bs-toggle="collapse" aria-expanded="false" aria-controls="payments" class="waves-effect">
                        <i class="fas fa-dollar-sign"></i>
                        <span> Payments</span><span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="payments">
                        <ul class="nav-second-level">
                            <li><a href="{{ route('admin.payments.duelist') }}"><i class=" fas fa-arrow-right"> </i> Due List</a></li>
                            <li><a href="{{ route('admin.payments.index') }}"><i class=" fas fa-arrow-right"> </i> Take Payments</a></li>
                        </ul>
                    </div>
                </li> --}}

                

                {{-- <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarMultilevel2">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel3" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarMultilevel3">
                                    Third Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#sidebarMultilevel4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sidebarMultilevel4">
                                                Item 2 <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel4">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>