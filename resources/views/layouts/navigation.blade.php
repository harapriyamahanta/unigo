 <div class="navbar two-action no-hairline">
                <div class="navbar-inner d-flex align-items-center">
                    <div class="left">
                        <a href="#" class="link icon-only">
                        	<i class="custom-hamburger">
                        		<span><b></b></span>
                        	</i>
                        </a>
                    </div>
                    <div class="sliding custom-title">{{$page ?? 'Dashboard'}}</div>
                    <div class="right d-flex">
                        <a href="notifications.html" class="link icon-only">
                        	<i class="material-icons">notifications</i>
                        </a>
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
                        	<i class="material-icons">more_vert</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end header_drop_icon">
                        	<a href="doctor-profile.html" class="dropdown-item">My Profile</a>
                        	<a href="profile-settings.html" class="dropdown-item">Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        	<a href="route('logout')" role="button"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item cursor-pointer">Log Out</a>
                            </form>
                    	</div>
                    </div>
                </div>
            </div>