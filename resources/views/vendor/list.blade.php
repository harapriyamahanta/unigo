@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
      <div class="container">	        	
	        	<!-- Search tag -->
	        	<div class="search-tag">                	
					<h6>06 Active Plumbers</h6>
					<span>In Sunabeda HAL Township</span>
				</div>
	        	<!-- /Search tag -->
				<div class="tab-col m-t-20 p-b-0">
				 	<ul class="nav nav-tabs">
					    <li><a href="#active-vendor" data-bs-toggle="tab" class="active">Active Vendor</a></li>  
					    <li><a href="#inactive-vendor" data-bs-toggle="tab">Inactive Vendor</a></li>
					    <li><a href="#pending-vendor" data-bs-toggle="tab">Pending Vendor</a></li>
					    <li><a href="#blocked-vendor" data-bs-toggle="tab">Blocked Vendor</a></li>
				  	</ul>
			  	</div>
				<!-- Tab Content -->
				<div class="tab-content">
					<!-- Tab Active User -->
				    <div class="tab-pane active" id="active-vendor">
					    <div class="panel panel-default">
					        <div id="collapseOne" class="panel-collapse collapse in">
					        <!-- Panel Body Start -->
					          	<div class="panel-body">

					            	<div class="focused segments mt-0 pb-0 search-doctor">
										<div class="focused-content">
											<div class="swiper-container">
												@foreach($vendors as $vendor)
												<!-- User Panel Start -->
												<div class="doctor-widget">
													<div class="patient-top-details">
														<div>
															<span class="invoice-id">Cust ID - FGU0025</span>
														</div>
														<div>
														  <span class="date-col">
														    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
														        <i class="material-icons">more_vert</i>
														      </a>
														      <div class="dropdown-menu dropdown-menu-end header_drop_icon">
														          <a href="#" class="dropdown-item">Inactive</a>
														          <a href="#" class="dropdown-item">Delete</a>
														      </div>
														  </span>
														</div>
													</div>
													<div class="doc-info-left">
														<div class="doctor-img">
															<a href="vendor-profile.html">
																<img src="assets/img/doctors/doctor-thumb-06.jpg" class="img-fluid" alt="User Image">
															</a>
														</div>
														<div class="doc-info-cont">
															<h4 class="doc-name">
																<a href="vendor-profile.html">{{$vendor->userdetail?->first_name}} {{$vendor->userdetail?->last_name}}</a>
															</h4>
															<div class="patient-details-col">
																<span>{{$vendor->userdetail?->usercategory?->name}}</span>
																<span class="doc-experince">5+ Exp</span>
															</div>
															<div class="patient-details-col mt-3 mb-1">
																<span><i class="fas fa-map-marker-alt"></i> {{$vendor->useraddress?->address}}</span>
															</div>																	
															<div class="patient-details-col">
																<span><i class="fas fa-phone-alt"></i> {{$vendor->userdetail?->phone}}</span>
															</div>		
														</div>
													</div>
													<div class="doc-info-right">
														<div class="clini-infos">
															<ul>
																<li>Booking: 05</li>
																<li>
																	<div class="rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="d-inline-block average-rating">17</span>
																</div>
																</li>
															</ul>
														</div>
														<div class="clinic-booking">
															<div class="clinic-btn">
																<a class="apt-btn" href="{{url('edit-vendor/'.$vendor->id)}}">Edit Profile</a>
															</div>
														</div>
													</div>
												</div>
												@endforeach
												<!-- User Panel End -->
												<!-- User Panel Start -->
												<div class="doctor-widget">
													<div class="patient-top-details">
														<div>
															<span class="invoice-id">Cust ID - FGU0025</span>
														</div>
														<div>
														  <span class="date-col">
														    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
														        <i class="material-icons">more_vert</i>
														      </a>
														      <div class="dropdown-menu dropdown-menu-end header_drop_icon">
														          <a href="#" class="dropdown-item">Inactive</a>
														          <a href="#" class="dropdown-item">Delete</a>
														      </div>
														  </span>
														</div>
													</div>
													<div class="doc-info-left">
														<div class="doctor-img">
															<a href="vendor-profile.html">
																<img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
															</a>
														</div>
														<div class="doc-info-cont">
															<h4 class="doc-name">
																<a href="vendor-profile.html">Ramesh Swain</a>
															</h4>
															<div class="patient-details-col">
																<span>Carpenter</span>
																<span class="doc-experince">15+ Exp</span>
															</div>
															<div class="patient-details-col mt-3 mb-1">
																<span><i class="fas fa-map-marker-alt"></i> Qr.No: B-198, HAL Township</span>
															</div>																	
															<div class="patient-details-col">
																<span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
															</div>		
														</div>
													</div>
													<div class="doc-info-right">
														<div class="clini-infos">
															<ul>
																<li>Booking: 17</li>
																<li>
																	<div class="rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="d-inline-block average-rating">05</span>
																</div>
																</li>
															</ul>
														</div>
														<div class="clinic-booking">
															<div class="clinic-btn">
																<a class="apt-btn" href="vendor-dashboard.html">View Profile</a>
															</div>
														</div>
													</div>
												</div>
												<!-- User Panel End -->
												<!-- User Panel Start -->
												<div class="doctor-widget">
													<div class="patient-top-details">
														<div>
															<span class="invoice-id">Cust ID - FGU0025</span>
														</div>
														<div>
														  <span class="date-col">
														    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
														        <i class="material-icons">more_vert</i>
														      </a>
														      <div class="dropdown-menu dropdown-menu-end header_drop_icon">
														          <a href="#" class="dropdown-item">Inactive</a>
														          <a href="#" class="dropdown-item">Delete</a>
														      </div>
														  </span>
														</div>
													</div>
													<div class="doc-info-left">
														<div class="doctor-img">
															<a href="vendor-profile.html">
																<img src="assets/img/doctors/doctor-thumb-08.jpg" class="img-fluid" alt="User Image">
															</a>
														</div>
														<div class="doc-info-cont">
															<h4 class="doc-name">
																<a href="vendor-profile.html">Ramesh Swain</a>
															</h4>
															<div class="patient-details-col">
																<span>Plumber</span>
																<span class="doc-experince">5+ Exp</span>
															</div>
															<div class="patient-details-col mt-3 mb-1">
																<span><i class="fas fa-map-marker-alt"></i> Qr.No: B-198, HAL Township</span>
															</div>																	
															<div class="patient-details-col">
																<span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
															</div>		
														</div>
													</div>
													<div class="doc-info-right">
														<div class="clini-infos">
															<ul>
																<li>Booking: 02</li>
																<li>
																	<div class="rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="d-inline-block average-rating">04</span>
																</div>
																</li>
															</ul>
														</div>
														<div class="clinic-booking">
															<div class="clinic-btn">
																<a class="apt-btn" href="vendor-dashboard.html">View Profile</a>
															</div>
														</div>
													</div>
												</div>
												<!-- User Panel End -->
											</div>
										</div>
									</div>

					          	</div>
					          <!-- Panel Body End -->
					        </div>
					    </div>
				    </div>
				    <!-- Tab Active User End -->

				    <!-- Tab Inactive User -->
				    <div class="tab-pane" id="inactive-vendor">
					    <div class="panel panel-default">
					        <div id="collapseOne" class="panel-collapse collapse in">
					          	<div class="panel-body">
					            	<div class="focused segments mt-0 pb-0 search-doctor">
										<div class="focused-content">
											<div class="swiper-container">
												<!-- User Panel Start -->
												<div class="doctor-widget">
													<div class="patient-top-details">
														<div>
															<span class="invoice-id">Cust ID - FGU0025</span>
														</div>
														<div>
														  <span class="date-col">
														    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
														        <i class="material-icons">more_vert</i>
														      </a>
														      <div class="dropdown-menu dropdown-menu-end header_drop_icon">
														          <a href="#" class="dropdown-item">Inactive</a>
														          <a href="#" class="dropdown-item">Delete</a>
														      </div>
														  </span>
														</div>
													</div>
													<div class="doc-info-left">
														<div class="doctor-img">
															<a href="vendor-profile.html">
																<img src="assets/img/doctors/doctor-thumb-08.jpg" class="img-fluid" alt="User Image">
															</a>
														</div>
														<div class="doc-info-cont">
															<h4 class="doc-name">
																<a href="vendor-profile.html">Ramesh Swain</a>
															</h4>
															<div class="patient-details-col">
																<span>Plumber</span>
																<span class="doc-experince">5+ Exp</span>
															</div>
															<div class="patient-details-col mt-3 mb-1">
																<span><i class="fas fa-map-marker-alt"></i> Qr.No: B-198, HAL Township</span>
															</div>																	
															<div class="patient-details-col">
																<span><i class="fas fa-phone-alt"></i> +91 988 560 2324</span>
															</div>		
														</div>
													</div>
													<div class="doc-info-right">
														<div class="clini-infos">
															<ul>
																<li>Booking: 25</li>
																<li>
																	<div class="rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<span class="d-inline-block average-rating">20</span>
																</div>
																</li>
															</ul>
														</div>
														<div class="clinic-booking">
															<div class="clinic-btn">
																<a class="apt-btn" href="vendor-dashboard.html">View Profile</a>
															</div>
														</div>
													</div>
												</div>
												<!-- User Panel End -->
												
											</div>
										</div>
									</div>
					          	</div>
					        </div>
					    </div>
			    	</div>
			       <!-- Tab Inactive User End -->
			       <!-- Tab pending  -->
				  	<div class="tab-pane" id="pending-vendor">
					    <div class="panel panel-default">
					        <div id="collapseOne" class="panel-collapse collapse in">
					          	<div class="panel-body">
					          	</div>
					    	</div>
			    		</div>
					</div>
				<!-- Tab pending end -->
				<!-- Tab pending  -->
				  	<div class="tab-pane" id="blocked-vendor">
					    <div class="panel panel-default">
					        <div id="collapseOne" class="panel-collapse collapse in">
					          	<div class="panel-body">
					          	</div>
					    	</div>
			    		</div>
					</div>
				<!-- Tab pending end -->
				</div>
				<!-- Tab Content End -->
				<!-- Filter -->
				<div class="doctor-filter">
					<img src="assets/img/filter.svg" alt="">
				</div>
				<!-- /Filter -->
	        </div>

    

@endsection
@section('customScript')

<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <!-- Bootstrap Datepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Circle CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/circle.css')}}">


   <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
@endsection