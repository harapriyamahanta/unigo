	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="utf-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
	    <title>FixiGO - Dashboard</title>

	    <!-- Favicons -->
	    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
	    
	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		 <!-- Swiper CSS -->
	    <link rel="stylesheet" href="{{asset('assets/plugins/swiper/css/swiper.min.css')}}">

		<!-- Circle CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/circle.css')}}">

		<!-- Main CSS -->
	    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	</head>
<body>
    <div class="main-wrapper">
        <div class="side-menu" id="sidebar-menu">
        	<div class="close-btn"><span class="material-icons">close</span></div>
            <ul>
                <li>
                    <a class="" href="{{url('/dashboard')}}">
                    	<span class="material-icons">dashboard</span>
						Dashboard
					</a>
                </li>
                <li>
                	<a class="" href="{{url('/locations')}}">
                		<span class="material-icons">map</span>
                		Locations           		
                	</a>
                </li>
                <li>
                    <a class="all-customers.html" href="{{url('/vendors')}}">
                    	<span class="material-icons">person</span>
						Vendors
                    </a>
                </li>
                <!-- <li>
                    <a class="" href="serviceman.html">
                    	<span class="material-icons">access_time</span>
						Service Man
                    </a>
                </li> -->

                <!-- <li>
                    <a class="" href="zones.html">
                    	<span class="material-icons">access_time</span>
						Zones
                    </a>
                </li> -->
                <li>
                    <a class="" href="{{url('/categories')}}">
                    	<span class="material-icons">access_time</span>
						Categories
                    </a>
                </li>
                <!-- <li>
                    <a class="" href="bookings.html">
                    	<span class="material-icons">access_time</span>
						Bookings
                    </a>
                </li>
                <li>
                    <a class="" href="transactions.html">
                    	<span class="material-icons">access_time</span>
						Transactions
                    </a>
                </li> -->
                <!-- <li>
                    <a class="" href="reviews.html">
                    	<span class="material-icons">access_time</span>
						Reviews
                    </a>
                </li>
                <li>
                    <a class="" href="reports.html">
                    	<span class="material-icons">access_time</span>
						Reports
                    </a>
                </li>  -->
                <!-- <li>
                    <a class="" href="banners.html">
                    	<span class="material-icons">pages</span>
						Banners
                    </a>
                </li>
				<li>
                    <a class="" href="advertisements.html">
                    	<span class="material-icons">message</span>
						Advertisements
                    </a>
                </li>
                <li>
                    <a class="" href="notifications.html">
                    	<span class="material-icons">message</span>
						Notifications
                    </a>
                </li> -->
                <!-- <li>
                    <a class="" href="taxes.html">
                    	<span class="material-icons">insert_drive_file</span>
						Taxes
                    </a>
                </li>
                <li>
                    <a class="" href="invoices.html">
                    	<span class="material-icons">insert_drive_file</span>
						Invoices
                    </a>
                </li>             
                <li>
                    <a class="" href="blog.html">
                    	<span class="material-icons">insert_drive_file</span>
						Blog
                    </a>
                </li>
                <li>
                    <a class="" href="pages.html">
                    	<span class="material-icons">insert_drive_file</span>
						Pages
                    </a>
                </li>            -->
				<!-- <li>
                    <a class="" href="profile-settings.html">
                    	<span class="material-icons">settings</span>
						Profile Settings
                    </a>
                </li>
                <li>
                    <a class="" href="social-media.html">
                    	<span class="material-icons">share</span>
						Social Media
                    </a>
                </li>
                <li>
                    <a class="" href="change-password.html">
                    	<span class="material-icons">lock_open</span>
						Change Password
                    </a>
                </li> -->
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        	<a href="route('logout')" class="sidebar-logout"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" > <span><img src="assets/img/open-account-logout.svg" alt=""></span>Log Out</a>
                            </form>
            <!-- <a class="sidebar-logout" href="login.html"><span><img src="assets/img/open-account-logout.svg" alt=""></span>Logout</a> -->
        </div>
        <div class="home">
            
             @yield('content')
        </div>
    </div>
        <!-- jQuery JS -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
   
	 @yield('customScript')

     <!-- Custom JS -->
    <script src="{{asset('assets/js/script.js')}}"></script>

    </body>
</html>
