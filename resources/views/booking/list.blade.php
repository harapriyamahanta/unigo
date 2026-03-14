@extends('layouts.app')
@section('content')

<div class="navbar two-action no-hairline">
    <div class="navbar-inner d-flex align-items-center">
        <div class="left">
            <a href="#" class="link icon-only">
                <i class="custom-hamburger">
                    <span><b></b></span>
                </i>
            </a>
        </div>
        <div class="sliding custom-title">All Bookings</div>
        <div class="right d-flex">
            <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div>
		
<div class="page-content header-bg">
    <!-- Search -->
            <div class="top-search">
                <div class="container">
                    <div class="search-area">
                        <form action="search">
                            <div class="list inset">
                                <ul>
                                    <li class="d-flex">
                                        <div class="item-icon">
                                            <i class="search-icon fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="item-col">
                                            <input type="text" placeholder="Search By Location or Pin Code">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /search -->
    <div class="container">	        	
        <!-- Search tag -->
        <div class="search-tag">                	
            <h6>16 All Bookings</h6>
            <span>In Sunabeda HAL Township</span>
        </div>
        <!-- /Search tag -->
        <div class="tab-col m-t-20 p-b-0">
            <ul class="nav nav-tabs">
                <li><a href="#all-bookings" data-bs-toggle="tab" class="active">All Bookings</a></li>  
                <li><a href="#pending" data-bs-toggle="tab">Pending</a></li>
                <li><a href="#accepted" data-bs-toggle="tab">Accepted</a></li>
                <li><a href="#assigned" data-bs-toggle="tab">Assigned</a></li>
                <li><a href="#ontheway" data-bs-toggle="tab">On The Way</a></li>
                <li><a href="#ongoing" data-bs-toggle="tab">On Going</a></li>
                <li><a href="#cancel" data-bs-toggle="tab">Cancel</a></li>
                <li><a href="#completed" data-bs-toggle="tab">Completed</a></li>
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab bookings -->
            <div class="tab-pane active" id="all-bookings">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                    <!-- Panel Body Start -->
                        <div class="panel-body">
                            <div class="patient-appointments-col">	
                                <div class="patient-widget">		
                                    <div class="patient-top-details">
                                        <div>
                                            <span class="invoice-id">Booking ID : FGB162020</span>
                                        </div>
                                        <div>
                                            <span class="doc-department">Plumbing</span>
                                        </div>
                                    </div>	
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Dr. Ruby Perrin</a> 
                                                </h4>
                                                <p class="text-small">Qr.No: B-198, HAL Township</p>
                                                <div class="pat-contact">
                                                            <span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Darren Elder</a> 
                                                    <span class="doc-department">(Plumber)</span>
                                                </h4>
                                                <p class="text-small">Semiliguda, Block Office</p>
                                                <div class="doc-department">
                                                    <i class="fas fa-phone-alt"></i> +91 950 345 3355
                                                    <span class="doc-experince">9+ Exp</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li>22 Nov 2025</li>
                                                <li>4:30 PM</li>
                                            </ul>
                                        </div>													
                                    </div>
                                    <div class="status-col">
                                        <div class="status-btn">
                                            <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
                                        </div>
                                        <div class="status-btn">
                                            <a href="{{url('booking-invoice/1')}}" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                        </div>		                                        
                                    </div>
                                    
                                </div>

                            <div class="patient-widget">		
                                    <div class="patient-top-details">
                                        <div>
                                            <span class="invoice-id">Booking ID : FGB162020</span>
                                        </div>
                                        <div>
                                            <span class="doc-department">Plumbing</span>
                                        </div>
                                    </div>	
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Dr. Ruby Perrin</a> 
                                                </h4>
                                                <p class="text-small">Qr.No: B-198, HAL Township</p>
                                                <div class="pat-contact">
                                                    <span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Darren Elder</a> 
                                                    <span class="doc-department">(Plumber)</span>
                                                </h4>
                                                <p class="text-small">Semiliguda, Block Office</p>
                                                <div class="doc-department">
                                                    <i class="fas fa-phone-alt"></i> +91 950 345 3355
                                                    <span class="doc-experince">9+ Exp</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li>22 Nov 2025</li>
                                                <li>4:30 PM</li>
                                            </ul>
                                        </div>													
                                    </div>
                                    <div class="status-col">
                                        <div class="status-btn">
                                            <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
                                        </div>
                                        <div class="status-btn">
                                            <a href="invoice-view.html" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                        </div>		                                        
                                    </div>
                                    
                                </div>								
                        </div>

                        </div>
                        <!-- Panel Body End -->
                    </div>
                </div>
            </div>
            <!-- Tab bookings End -->

            <!-- Tab pending -->
            <div class="tab-pane" id="pending">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="patient-appointments-col">	
                                <div class="patient-widget">		
                                    <div class="patient-top-details">
                                        <div>
                                            <span class="invoice-id">Booking ID : FGB162020</span>
                                        </div>
                                        <div>
                                            <span class="doc-department">Plumbing</span>
                                        </div>
                                    </div>	
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Dr. Ruby Perrin</a> 
                                                </h4>
                                                <p class="text-small">Qr.No: B-198, HAL Township</p>
                                                <div class="pat-contact">
                                                            <span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-widget border-bottom">
                                        <div class="pat-info-left">
                                            <div class="patient-img">
                                                <a href="#">
                                                    <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                </a>
                                            </div>
                                            <div class="pat-info-cont">
                                                <h4 class="pat-name">
                                                    <a href="#">Darren Elder</a> 
                                                    <span class="doc-department">(Plumber)</span>
                                                </h4>
                                                <p class="text-small">Semiliguda, Block Office</p>
                                                <div class="doc-department">
                                                    <i class="fas fa-phone-alt"></i> +91 950 345 3355
                                                    <span class="doc-experince">9+ Exp</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li>22 Nov 2025</li>
                                                <li>4:30 PM</li>
                                            </ul>
                                        </div>													
                                    </div>
                                    <div class="status-col">
                                        <div class="status-btn">
                                            <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Pending</a>
                                        </div>
                                        <div class="status-btn">
                                            <a href="invoice-view.html" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                        </div>		                                        
                                    </div>
                                    
                                </div>
                                                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab pending End -->
            <!-- Tab accepted  -->
            <div class="tab-pane" id="accepted">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab accepted end -->
        <!-- Tab assigned  -->
            <div class="tab-pane" id="assigned">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab assigned end -->
        <!-- Tab ontheway  -->
            <div class="tab-pane" id="ontheway">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab ontheway end -->
        <!-- Tab ongoing  -->
            <div class="tab-pane" id="ongoing">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab ongoing end -->
        <!-- Tab cancel  -->
            <div class="tab-pane" id="cancel">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab cancel end -->
        <!-- Tab completed  -->
            <div class="tab-pane" id="completed">
                <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tab completed end -->
        </div>
        <!-- Tab Content End -->
        <!-- Filter -->
        <div class="doctor-filter">
            <img src="assets/img/filter.svg" alt="">
        </div>
        <!-- /Filter -->
    </div>
</div>

	</div>
@endsection
@section('customScript')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Bootstrap Datepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.datepicker2.js')}}"></script>

	<!-- Swiper JS -->
    <script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection

