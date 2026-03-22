@extends('layouts.app')
@section('content')
   
         <div class="home">

	            <div class="navbar two-action no-hairline">
	                <div class="navbar-inner d-flex align-items-center">
	                    <div class="left">
	                        <a href="#" class="link icon-only">
	                        	<i class="custom-hamburger">
	                        		<span><b></b></span>
	                        	</i>
	                        </a>
	                    </div>
	                    <div class="sliding custom-title">Dashboard</div>
	                    <div class="right d-flex">
	                        <a href="notifications.html" class="link icon-only">
	                        	<i class="material-icons">notifications</i>
	                        </a>
	                        <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
	                        	<i class="material-icons">more_vert</i>
	                        </a>
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
													<input type="text" class="autocomplete" placeholder="Search By Location or Pin Code">
												</div>
											</li>
										</ul>
									</div>
			                    </form>
			                </div>
		            	</div>
		        	</div>
		        	<!-- /search -->		
					<!-- /categories -->
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
											<a href="categories.html"><img src="assets/icons/taxi.png" alt="Hire Taxi"></a>
											<div class="text">
												Taxi
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="driver.html"><img src="assets/icons/driver.png" alt="Hire Driver"></a>
											<div class="text">
												Driver
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html"><img src="assets/icons/auto.png" alt="Hire Auto"></a>
											<div class="text">
												Auto
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html"><img src="assets/icons/electronics.png" alt="Electronics"></a>
											<div class="text">
												Electronics
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html"><img src="assets/icons/carpenter.png" alt="Carpenter"></a>
											<div class="text">
												Carpenter
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html"><img src="assets/icons/plumber.png" alt=""></a>
											<div class="text">
												Plumber
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html">
												<img src="assets/icons/painting.png" alt="">
											</a>
											<div class="text">
												Painter
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html">
												<img src="assets/icons/interior-design.png" alt="Interior Design">
											</a>
											<div class="text">
												Interior
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<a href="categories.html">
												<img src="assets/icons/photography.png" alt="Event Management">
											</a>
											<div class="text">
												Photography
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /categories -->

					<!-- Recent Booking -->
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
										<!-- profile start -->
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking ID - FGPL0025</span>
													</div>
													<div>
														<span class="date-col">Plumber</span>
													</div>
												</div>												
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="customer-profile.html">
															<img src="assets/img/doctors/doctor-thumb-06.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
														<div class="doc-info-cont">
														<h4 class="doc-name">
															<a href="customer-profile.html">Ramesh Swain</a>
														</h4>
														<p class="text-small">Qr.No: B-198, HAL Township</p>
														<h5 class="doc-department">
															Plumber: <a href="vendor-profile.html">Prabhakar Dash</a>
															<span class="doc-experince">9+ Exp</span>
														</h5>
														<div class="pat-contact">
																<p><i class="fas fa-phone"></i> +91 988 560 2324</p>
														</div>										
													</div>												
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-calendar-alt"></i> 28-Nov-2025</li>
															<li>
																<i class="far fa-clock"></i> 9.00 a.m - 11 a.m
															</li>
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
										<!-- /profile start -->
										<!-- profile start -->
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking ID - FGPL0028</span>
													</div>
													<div>
														<span class="date-col">Electrican</span>
													</div>
												</div>												
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="customer-profile.html">
															<img src="assets/img/doctors/doctor-thumb-08.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
														<div class="doc-info-cont">
														<h4 class="doc-name">
															<a href="customer-profile.html">Kalyani Nayak</a>
														</h4>
														<p class="text-small">Semiliguda, Koraput</p>
														<h5 class="doc-department">
															Electrican: <a href="vendor-profile.html">Manoj Sahu</a>
															<span class="doc-experince">4+ Exp</span>
														</h5>
														<div class="pat-contact">
																<p><i class="fas fa-phone"></i> +91 988 560 2324</p>
														</div>										
													</div>												
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-calendar-alt"></i> 28-Nov-2025</li>
															<li>
																<i class="far fa-clock"></i> 2.00 p.m - 4:30 p.m
															</li>
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
										<!-- /profile start -->
										<!-- profile start -->
										<div class="swiper-slide">
											<div class="doctor-widget">
												<div class="patient-top-details">
													<div>
														<span class="invoice-id">Booking ID - FGPL0025</span>
													</div>
													<div>
														<span class="date-col">Plumber</span>
													</div>
												</div>												
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="customer-profile.html">
															<img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
														</a>
													</div>
														<div class="doc-info-cont">
														<h4 class="doc-name">
															<a href="vendor-profile.html">Nandini Mahapatro</a>
														</h4>
														<p class="text-small">Qr.No: B-198, HAL Township</p>
														<h5 class="doc-department">
															Plumber: <a href="#">Prabhakar Dash</a>
															<span class="doc-experince">9+ Exp</span>
														</h5>
														<div class="pat-contact">
																<p><i class="fas fa-phone"></i> +91 988 560 2324</p>
														</div>										
													</div>												
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-calendar-alt"></i> 28-Nov-2025</li>
															<li>
																<i class="far fa-clock"></i> 9.00 a.m - 11 a.m
															</li>
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
										<!-- /profile start -->
										
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- end Recent Booking -->
		        </div>
	        </div>
        

@endsection
@section('customScript')
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
	    
	    <!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Swiper JS -->
	    <script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}"></script>

	     <!-- Custom JS -->
	    <script src="{{asset('assets/js/script.js')}}"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1/dist/css/bootstrap-dark.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" type="module"></script>
<script>
import Autocomplete from "https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-autocomplete@master/autocomplete.js";
  const opts = {
    onSelectItem: console.log,
  };
  var src = [];
  for (let i = 0; i < 50; i++) {
    src.push({
      title: "Option " + i,
      id: "opt" + i,
      data: {
        key: i,
      },
    });
  }
  Autocomplete.init("input.autocomplete", {
    items: src,
    valueField: "id",
    labelField: "title",
    highlightTyped: true,
    onSelectItem: console.log,
  });
  document.getElementById("enableButton").addEventListener("click", (e) => {
    e.preventDefault();
    const el = document.getElementById("autocompleteInput");
    const inst = Autocomplete.getInstance(el);
    if (inst.isDisabled()) {
      inst.enable();
    } else {
      inst.disable();
    }
  });
  // We can use regular objects as source and customize label
  new Autocomplete(document.getElementById("autocompleteRegularInput"), {
    items: {
      opt_some: "Some",
      opt_value: "Value",
      opt_here: "Here is a very long element that should be truncated",
      opt_dia: "çaça"
    },
    onRenderItem: (item, label) => {
      return label + " (" + item.value + ")";
    },
  });
  new Autocomplete(document.getElementById("autocompleteDatalist"), opts);
  new Autocomplete(document.getElementById("autocompleteRemote"), opts);
  new Autocomplete(document.getElementById("autocompleteLiveRemote"), opts);
</script>
<style>
  /* highlightTyped use mark */
  .autocomplete-menu mark {
    text-decoration: underline;
    background: none;
    color: currentColor;
    padding: 0;
  }

  /* Optional nicer scrollbars */
  .autocomplete-menu {
    --scroller-color: 0, 0%;
    --scroller-color-lightness: 80%;
    --scroller-bg-lightness: 90%;
    --scroller-hover-factor: 0.8;
    --scroller-thumb: hsl(var(--scroller-color), var(--scroller-color-lightness));
    /* Replicate hover for webkit */
    --scroller-thumb-hover: hsl(var(--scroller-color), calc(var(--scroller-color-lightness) * var(--scroller-hover-factor)));
    --scroller-background: hsl(var(--scroller-color), calc(var(--scroller-bg-lightness)));
    scrollbar-color: var(--scroller-thumb) var(--scroller-background);
    scrollbar-width: thin;
  }

  .autocomplete-menu::-webkit-scrollbar {
    width: 8px;
  }

  .autocomplete-menu::-webkit-scrollbar-track {
    background: var(--scroller-background);
  }

  .autocomplete-menu::-webkit-scrollbar-thumb {
    background: var(--scroller-thumb);
  }

  .autocomplete-menu::-webkit-scrollbar-thumb:hover {
    background: var(--scroller-thumb-hover);
  }
</style>

@endsection