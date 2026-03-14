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
                            <a class="" href="{{url('/zones')}}">
                                <span class="material-icons">pages</span>
                                City
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{url('/categories')}}">
                                <span class="material-icons">pages</span>
                                Categories
                            </a>
                        </li>                   
                        <li>
                            <a class="" href="#">
                                <span class="material-icons">person</span>
                                User Management
                            </a>
                        </li>
                        <li>
                            <a class="p-l-40" href="{{url('staff')}}">
                                System User                 
                            </a>
                            <a class="p-l-40" href="{{url('customers')}}">
                                Customers                   
                            </a>
                            <a class="p-l-40" href="{{url('vendors')}}">
                                Vendors
                            </a>
                            <a class="p-l-40" href="{{url('roles')}}">
                                Roles
                            </a>
                        </li>                   
                        <li>
                            <a class="" href="{{url('bookings')}}">
                                <span class="material-icons">access_time</span>
                                Bookings
                            </a>
                        </li>
                         <li>
                            <a class="" href="{{url('/banners')}}">
                                <span class="material-icons">pages</span>
                                Banners
                            </a>
                        </li>
                        <li>
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
                        </li>
                        <li>
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
                        </li>
                    </ul>
	        </div>

        
            
             @yield('content')
        
    </div>

     @yield('customScript')
        <!-- jQuery JS -->
    <!-- jQuery JS -->
	    

    </body>
</html>
