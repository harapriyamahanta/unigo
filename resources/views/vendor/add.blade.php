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
			<div class="sliding custom-title">Vendor Onboard
				<span class="custom-subtitle">{{$category->name}}</span>
			</div>
			<div class="right d-flex">
				<a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
				<a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
				@include('layouts.navigation')
			</div>
		</div>
	</div>
    <div class="page-content profile-settings">

			<!-- Profile settings -->
			<div class="container">
				<div class="tab-col">
				 	<ul class="nav nav-tabs">
					    <li><a href="#basic-info" data-bs-toggle="tab" class="active">Basic Info</a></li>
					    <!-- <li><a href="#contact-details1"  data-bs-toggle="tab">Contact Details</a></li>
					    <li><a href="#categories1" data-bs-toggle="tab">Categories</a></li>
					    <li><a href="#vehicle1" data-bs-toggle="tab">Vehicle Details</a></li> -->
				  	</ul>
			  	</div>

			 	<div class="tab-content">
			 		<div class="tab-pane active" id="basic-info">
				    	<div class="panel panel-default">
				    		<div id="collapseOne" class="panel-collapse collapse in">
				          		<div class="panel-body">
				          			<div class="setting-widget">
										<div class="list no-hairlines-md">
											<div class="widget-title">
												<h5>Basic Information</h5>
											</div>
											<div class="file-upload">
												<a href="doctor-profile.html" class="file-upload-img">
													<img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
													<span class="cam-icon"><img src="assets/img/placeholder-small.svg" alt=""></span>
												</a>
											</div>
											<form action="{{url('/store-vendor')}}" method="post">
                                                @csrf
												<input type="hidden" name="category_id" value="{{Request::get('category')}}" />
											  	<ul>
											  		<li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">First Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="first_name" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Last Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="last_name" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Username <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="username" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Password <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="Password" name="password" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">E-mail <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="email" name="email" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Phone Number</div>
												        	<div class="item-input-wrap">
												          		<input type="tel" name="phone" >
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 gender">
												      	<div class="item-col">
												        	<div class="item-title item-label">Gender</div>
												        	<div class="item-input-wrap input-dropdown-wrap">
												          		<select name="gender">
												            		<option value="Male">Male</option>
												            		<option value="Female">Female</option>
												          		</select>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 dob">
												      	<div class="item-col">
												        	<div class="item-title item-label">Date Of Birth</div>
												        	<div class="item-input-wrap date-picker-col">
												          		<input type="text" name="dob" id="date" data-select="datepicker">
										            			<span class="calendar-icon"><img src="{{asset('assets/img/icon-metro-calendar-big.svg')}}" alt=""></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Save</button>
					                                        </div>
					                                        <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                        
				                                    	</div>
													</li>
											  	</ul>
										  	</form>
										</div>
								    </div>
				          		</div>
				          	</div>
				    	</div>
					</div>

					<div class="tab-pane" id="contact-details">
				      	<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">
				          			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Contact Details</h5>
										</div>
										<form>
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 1</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 2</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">City</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">State</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">District</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Postal Code</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Upload Documents</div>
											        	<div class="item-input-wrap">
											        		<div class="file-upload-multiple">
											          			<input type="file" id="choose" placeholder="Click here to upload images" multiple="multiple" />
											          			<span class="placeholder-text">Click here to upload images</span>
											          		</div>
														    <div id="uploadPreview"></div>
											        	</div>
											      	</div>
											    </li>
											     <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Save</button>
					                                        </div>
					                                        <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                        
				                                    	</div>
												</li>
											</ul>
										</form>
							      	</div>
				          		</div>
				          	</div>
				        </div>
			      	</div>

				    <div class="tab-pane" id="categories">
				      	<div class="panel panel-default">
				        	<div id="collapseThree" class="panel-collapse collapse">
				          		<div class="panel-body">
				          			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Select Cateogries</h5>
										</div>
										<form>
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="cctv">
												          	<label class="custom-control-label" for="cctv">CCTV Installation & Repair</label>
												        </div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="refrigerator">
												          	<label class="custom-control-label" for="refrigerator">
															Refrigerator Repair</label>
												        </div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="microwave">
												          	<label class="custom-control-label" for="microwave">Microwave Oven Repair</label>
												        </div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="chimney">
												          	<label class="custom-control-label" for="chimney">Chimney Repair</label>
												        </div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="geyser">
												          	<label class="custom-control-label" for="geyser">
															Electric Geyser Repair</label>
												        </div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" class="custom-control-input" id="Washing Machine">
												          	<label class="custom-control-label" for="Washing Machine">Washing Machine Repair</label>
												        </div>
											      	</div>
											    </li>											    
											     <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Save</button>
					                                        </div>
					                                        <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                        
				                                    	</div>
												</li>
											</ul>
										</form>
							      	</div>
				          		</div>
				          	</div>
				        </div>
				    </div>

				    <div class="tab-pane" id="vehicle">
					  	<div class="panel panel-default">
					    	<div id="collapseFour" class="panel-collapse collapse">
					      		<div class="panel-body">
					      			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Vehicle Details</h5>
										</div>
										<div class="awards-experience">
											<form class="append-col">
												<ul class="awards-details">
													<li class="item-content item-input trash-icon-for-tab">
														<span class="trash-icon"></span>
													</li>
													<li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Brand Name</div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Year</div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												        	</div>
												      	</div>
												    </li>
												</ul>
											</form>
											<span class="add-btn"></span>
										</div>
										<div class="membership-experience">
											<div class="widget-title">
												<h5>Memberships</h5>
											</div>
											<form class="append-col">
												<ul class="membership-details">
													<li class="item-content item-input trash-icon-for-tab">
														<span class="trash-icon"></span>
													</li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Driving Licence</div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												        	</div>
												      	</div>
												    </li>
												</ul>
											</form>
											<span class="add-btn"></span>
										</div>

											    	<div class="status-col mt-4">
				                                    	<div class="status-btn">
				                                            <a href="#" class="btn success">Save</a>
				                                        </div>
				                                        <div class="status-btn">
				                                            <a href="#" class="btn view-eye">Clear</a>
				                                        </div>	                                
			                                    	</div>
																				
							      	</div>
					      		</div>
					      	</div>
					    </div>
					</div>
			 	</div>
			</div>
			<!-- Profile settings -->
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