@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
        
			<div class="container">
	            <div class="page-content">
	            	<div class="patient-details">
						<div class="inner-patient-detaials">
							<div class="patient-col">
								<div class="inner-patient-col">
									<div class="progress-col">
										 <div class="c100 p80 small">
						                    <span class="pat-img"><img src="assets/img/dentist-1.svg" alt="dentist"></span>
						                    <div class="slice">
						                        <div class="bar"></div>
						                        <div class="fill"></div>
						                    </div>
						                </div>
									</div>
									<h6>Service Man</h6>
									<h4>1300+</h4>
									<span class="date">March 16, 2020</span>
								</div>
							</div>
							<div class="patient-col">
								<div class="inner-patient-col">
									<div class="progress-col">
										 <div class="c100 p40 small">
						                    <span class="pat-img"><img src="assets/img/patient.svg" alt="patient"></span>
						                    <div class="slice">
						                        <div class="bar"></div>
						                        <div class="fill"></div>
						                    </div>
						                </div>
									</div>
									<h6>Total Drivers</h6>
									<h4>160</h4>
									<span class="date">March 16, 2020</span>
								</div>
							</div>
						</div>
					</div>					
					<!-- home -->
					<div class="specialist-slider segments">
						<div class="container">
							<div class="section-title">
								<h3>Trending Categories
									<a href="categories.html" class="see-all-link">View All</a>
								</h3>
							</div>
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/kidneys.svg" alt="Electronics">
											<div class="text">
												<a href="#">Electronics</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/brain.svg" alt="">
											<div class="text">
												<a href="#">Home</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/cardiology.svg" alt="">
											<div class="text">
												<a href="#">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/dentist.svg" alt="">
											<div class="text">
												<a href="#">Pest</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/kidneys.svg" alt="">
											<div class="text">
												<a href="#">Events</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/brain.svg" alt="">
											<div class="text">
												<a href="#">Document</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<img src="assets/img/cardiology.svg" alt="">
											<div class="text">
												<a href="#">Photography</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /dashboard -->

					<!-- focused -->
					<div class="focused segments">
						<div class="container">
							<div class="focused-content">
								<div class="section-title">
									<h3>
										Recent Booking
										<a href="search-doctor.html" class="see-all-link">View All</a>
									</h3>
								</div>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking ID - PT0025</span>
													</div>
													<div>
														<span class="date-col">Plumber</span>
													</div>
												</div>												
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="doctor-profile.html">
															<img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
													<div class="doc-info-cont">
														<h4 class="doc-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
														<div class="doc-location">
																<p><i class="fas fa-map-marker-alt"></i> Qr.No: B-186, HAL Township, Sunabeda</p>
															</div>
														
														<div class="doc-info">
															<div class="status-col">
				                                        <div class="status-btn">
				                                            <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
				                                        </div>
				                                        
				                                    </div>
															<div class="doc-location">
																<p><i class="fas fa-map-marker-alt"></i> Sunabeda, HAL</p>
															</div>
														</div>
													</div>
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-calendar"></i> 28-Nov-2025</li>
															<li><i class="far fa-money-bill-alt"></i> Rs.50</li>
														</ul>
													</div>
													<div class="clinic-booking">
														<div class="clinic-btn">
															<a class="apt-btn" href="patient-date-time.html">Booking Details</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="doctor-profile.html">
															<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
													<div class="doc-info-cont">
														<h4 class="doc-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
														<p class="doc-speciality">MDS - Periodontology, BDS</p>
														<h5 class="doc-department">
															<span class="speciality-img"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"></span> Dentist
															<span class="doc-experince">9+ Exp</span>
														</h5>
														<div class="doc-info">
															<div class="rating">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
																<span class="d-inline-block average-rating">(47)</span>
															</div>
															<div class="doc-location">
																<p><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
															</div>
														</div>
													</div>
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-thumbs-up"></i> 98%</li>
															<li><i class="far fa-money-bill-alt"></i> $300 - $1000</li>
														</ul>
													</div>
													<div class="clinic-booking">
														<div class="clinic-btn">
															<a class="apt-btn" href="patient-date-time.html">Book Appointment</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="doctor-profile.html">
															<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
													<div class="doc-info-cont">
														<h4 class="doc-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
														<p class="doc-speciality">MDS - Periodontology, BDS</p>
														<h5 class="doc-department">
															<span class="speciality-img"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"></span> Dentist
															<span class="doc-experince">9+ Exp</span>
														</h5>
														<div class="doc-info">
															<div class="rating">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
																<span class="d-inline-block average-rating">(47)</span>
															</div>
															<div class="doc-location">
																<p><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
															</div>
														</div>
													</div>
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-thumbs-up"></i> 98%</li>
															<li><i class="far fa-money-bill-alt"></i> $300 - $1000</li>
														</ul>
													</div>
													<div class="clinic-booking">
														<div class="clinic-btn">
															<a class="apt-btn" href="patient-date-time.html">Book Appointment</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="doctor-profile.html">
															<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
													<div class="doc-info-cont">
														<h4 class="doc-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
														<p class="doc-speciality">MDS - Periodontology, BDS</p>
														<h5 class="doc-department">
															<span class="speciality-img"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"></span> Dentist
															<span class="doc-experince">9+ Exp</span>
														</h5>
														<div class="doc-info">
															<div class="rating">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
																<span class="d-inline-block average-rating">(47)</span>
															</div>
															<div class="doc-location">
																<p><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
															</div>
														</div>
													</div>
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-thumbs-up"></i> 98%</li>
															<li><i class="far fa-money-bill-alt"></i> $300 - $1000</li>
														</ul>
													</div>
													<div class="clinic-booking">
														<div class="clinic-btn">
															<a class="apt-btn" href="patient-date-time.html">Book Appointment</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- end focused -->
	            </div>
            </div>
        

@endsection
@section('customScript')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>
<!-- Swiper JS -->
    <script src="assets/plugins/swiper/js/swiper.min.js"></script>

@endsection