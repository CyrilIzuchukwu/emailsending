        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="" href="{{ route('admin_dashboard') }}" aria-expanded="false">
                            <i class="material-icons">grid_view</i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="" href="{{ route('add_mail') }}" aria-expanded="false">
                            <i class="material-icons">trending_up</i>
                            <span class="nav-text">Add Mail </span>
                        </a>
                    </li>

                    <li><a class="" href="{{ route('registered-mails.index') }}" aria-expanded="false">
                            <i class="material-icons">description</i>
                            <span class="nav-text">Registered Mails</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <i class="material-icons"> app_registration </i>
                            <span class="nav-text">Mails</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('compose-mail.index') }}">Compose</a></li>
                        </ul>
                    </li>



                    <li><a href="{{ route('profile_setting') }}" class="" aria-expanded="false">
                            <i class="bi bi-gear-wide"></i>
                            <span class="nav-text">Settings</span>
                        </a>
                    </li>



                    <li><a class="" href="{{ route('feedbacks') }}" aria-expanded="false">
                            <i class="material-icons"> table_chart </i>
                            <span class="nav-text">Feedbacks</span>
                        </a>
                    </li>

                    <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class aria-expanded="false">
                            <i class="material-icons"> logout </i>
                            <span class="nav-text">Logout</span>
                        </a>

                    </li>
                    <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>

                </ul>
            </div>
        </div>
