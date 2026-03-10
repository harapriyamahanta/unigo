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
			<div class="sliding custom-title">All Vendors
				<!-- <span class="custom-subtitle">Plumber</span> -->
			</div>
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