        <!-- Nav header start -->
        <div class="nav-header">
            <a href="{{ route('admin_dashboard') }}" class="brand-logo">
                <img src="{{ asset('xhtml/images/logo/logo.png') }}" class="logo-abbr" alt="">
                <img src="{{ asset('xhtml/images/logo/logo-text.png') }}" class="brand-title" alt="">

                <img src="{{ asset('xhtml/images/logo/logo.png') }}" class="logo-color" alt="">
            </a>


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect x="11" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect x="22" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect width="4" height="4" rx="2" fill="#2A353A" />
                        <rect y="11" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A" />
                        <rect y="22" width="4" height="4" rx="2" fill="#2A353A" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Nav header end -->

        <!-- Header start -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
                            <div class="nav-item d-flex align-items-center">

                            </div>
                            <div class="dz-side-menu">
                                <div class="search-coundry d-flex align-items-center">
                                    <img src="images/United.png" alt="">

                                </div>

                                <ul>
                                    <li class="nav-item dropdown header-profile">
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                            <img src="{{ asset('xhtml/images/profile/pic1.jpg') }}" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
                <a href="{{ route('profile_setting') }}" class="dropdown-item ai-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <span class="ms-2">Profile </span>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                </a>
                <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
            </div>
            </li>
            </ul>
        </div>
        </div>
        </div>
        </nav>
        </div>
        </div>
        <!-- Header end  -->
