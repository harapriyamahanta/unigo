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
        <div class="sliding custom-title">{{$page}}
            <span class="custom-subtitle">{{$user?->homeaddress?->city}}</span>
        </div>
        <div class="right d-flex">
            <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div>
 <div class="page-content pt-0">

        	<!-- Doctor Profile -->
        	<div class="doctor-profile-tab pb-0">
        		<div class="container">
				 	<div class="tab-col">
					 	<ul class="nav nav-tabs">
						    <li><a href="#OverView" data-bs-toggle="tab" class="active">OverView</a></li>
						    <li><a href="#bookings" data-bs-toggle="tab">Bookings</a></li>
					  	</ul>
				  	</div>

				  	<div class="tab-content">
					    <div class="tab-pane active" id="OverView">
						    <div class="panel panel-default">
						        <div id="collapseOne" class="panel-collapse collapse in">
						          	<div class="panel-body">
						          		<div class="tab-widget">
									      	<div class="left-icon-col">
									      		<span></span>
									      	</div>
									        <div class="right-content-col">
									        	<div class="doctor-widget">
													<div class="doc-info-left">
														<div class="doctor-img">
																<img src="assets/img/doctors/doctor-thumb-06.jpg" class="" alt="User Image">
														</div>
														<div class="doc-info-cont">
															<h4 class="doc-name mb-2">Michelle Fairfax</h4>
															<h5 class="clinic-direction text-small"> <i class="fas fa-map-marker-alt"></i> Gopabandhu Nagar, 4th Lane, Semiliguda, 764036</h5>
															<div class="patient-details-col mt-1"> 
																<span><i class="fas fa-phone-alt"></i> +1 504 368 6874</span>
															</div>
															<div class="patient-details-col mt-1"> 
																<span><i class="fas fa-envol"></i> customer@gmail.com</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-widget">
											<div class="left-icon-col">
									      		<span></span>
									      	</div>

									      	<div class="right-content-col">
									      		<div class="doctor-widget">
									      			<h6>Last Booking</h6>
									      			<div class="mt-3">
										      			<h5 class="list-title mb-1"><i class="material-icons">checkmark_alt</i> Darren Elder</h5>
										      			<span class="sub-title">Plumber</span>
										      			<span class="sub-title">14 Nov 2019 5.00 PM</span>
									      			</div>
									      			<div class="mt-3">
										      			<h5 class="list-title mb-1"><i class="material-icons">checkmark_alt</i>Darren Elder</h5>
										      			<span class="sub-title">Electrician</span>
										      			<span class="sub-title">15 Nov 2019 4.00 PM</span>
									      			</div>
									      		</div>
									      	</div>
										</div>

						          	</div>
						        </div>
						    </div>
						</div>

						<div class="tab-pane" id="bookings">
					      	<div class="panel panel-default">
					        	<div id="collapseTwo" class="panel-collapse collapse">
					          		<div class="panel-body">
						            	<div class="patient-appointments-col">	
			                    			<div class="patient-widget">		
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking Date - 16 Mar 2020</span>
													</div>
													<div>
														<span class="date-col">AC Fitting</span>
													</div>
												</div>	
			                                    <div class="invoice-widget">
			    									<div class="pat-info-left">
			    										<div class="patient-img">
			    											<a href="doctor-profile.html">
			    												<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
			    											</a>
			    										</div>
			    										<div class="pat-info-cont">
			    											<h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
			    											<div class="patient-details-col">
			    												<span class="">Appt Date - 18 Nov 2025 , 14:25 PM</span>
			    											</div>
			                                                <div class="hour-col">
			                                                    <div>
			                                                        <span class="hours">Rs. 50</span>
			                                                    </div>
			                                                </div>
			    										</div>
			    									</div>
			                                    </div>
			                                    <div class="status-col">
			                                    	<div class="status-btn">
			                                            <a href="invoice-view.html" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
			                                        </div>
			                                        <div class="status-btn">
			                                            <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
			                                        </div>
			                                    </div>
											</div>

											<div class="patient-widget">		
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking Date - 22 Aug 2025</span>
													</div>
													<div>
														<span class="date-col">Electrician</span>
													</div>
												</div>	
			                                    <div class="invoice-widget">
			    									<div class="pat-info-left">
			    										<div class="patient-img">
			    											<a href="doctor-profile.html">
			    												<img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
			    											</a>
			    										</div>
			    										<div class="pat-info-cont">
			    											<h4 class="pat-name"><a href="doctor-profile.html">Darren Elder</a></h4>
			    											<div class="patient-details-col">
			    												<span class="">Appt Date - 22 Mar 2020 , 16:30 PM</span>
			    											</div>
			                                                <div class="hour-col">
			                                                    <div>
			                                                        <span class="hours">Rs. 50</span>
			                                                    </div>
			                                                </div>
			    										</div>
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

											<div class="patient-widget">		
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking Date - 07 Feb 2025</span>
													</div>
													<div>
														<span class="date-col">Plumber</span>
													</div>
												</div>	
			                                    <div class="invoice-widget">
			    									<div class="pat-info-left">
			    										<div class="patient-img">
			    											<a href="doctor-profile.html">
			    												<img src="assets/img/doctors/doctor-thumb-03.jpg" class="img-fluid" alt="User Image">
			    											</a>
			    										</div>
			    										<div class="pat-info-cont">
			    											<h4 class="pat-name"><a href="doctor-profile.html">Deborah Angel</a></h4>
			    											<div class="patient-details-col">
			    												<span class="">Appt Date - 22 Mar 2025 , 10:00 AM</span>
			    											</div>
			                                                <div class="hour-col">
			                                                    <div>
			                                                        <span class="hours">Rs. 50</span>
			                                                    </div>
			                                                </div>
			    										</div>
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
					          	</div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
			<!-- Doctor Profile -->

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