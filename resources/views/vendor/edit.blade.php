@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
    <div class="page-content profile-settings">

			<!-- Profile settings -->
			<div class="container">
				<div class="tab-col">
				 	<ul class="nav nav-tabs">
					    <li><a href="#basic-info" data-bs-toggle="tab" class="active">Basic Info</a></li>
					    <li><a href="#contact-details" data-bs-toggle="tab">Contact Details</a></li>
					    <li><a href="#categories" data-bs-toggle="tab">Sub Categories</a></li>
					    <li><a href="#vehicle" data-bs-toggle="tab">Vehicle Details</a></li>
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
											<form action="{{url('/update-vendor/'.$vendor->id)}}" method="post">
                                                @csrf
                                                <input type="hidden"  name="section" value="userdetail" />
											  	<ul>
											  		<li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">First Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="first_name" required value="{{$vendor?->userdetail?->first_name}}">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Last Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="last_name" required value="{{$vendor?->userdetail?->last_name}}">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												   
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">E-mail <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="email" name="email" readonly value="{{$vendor?->email}}">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Phone Number</div>
												        	<div class="item-input-wrap">
												          		<input type="tel" name="phone" value="{{$vendor?->userdetail?->phone}}">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 gender">
												      	<div class="item-col">
												        	<div class="item-title item-label">Gender</div>
												        	<div class="item-input-wrap input-dropdown-wrap">
												          		<select name="gender">
												            		<option value="Male" @if($vendor?->userdetail?->gender=='Male') selected @endif >Male</option>
												            		<option value="Female" @if($vendor?->userdetail?->gender=='Female') selected @endif>Female</option>
												          		</select>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 dob">
												      	<div class="item-col">
												        	<div class="item-title item-label">Date Of Birth</div>
												        	<div class="item-input-wrap date-picker-col">
												          		<input type="text" name="dob" id="date" data-select="datepicker" value="{{$vendor?->userdetail?->dob}}">
										            			<span class="calendar-icon"><img src="{{asset('assets/img/icon-metro-calendar-big.svg')}}" alt=""></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Update</button>
					                                        </div>
					                                        <!-- <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                         -->
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
										<form action="{{url('/update-vendor/'.$vendor->id)}}" method="post">
                                                @csrf
                                                <input type="hidden"  name="section" value="address" />
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 1</div>
											        	<div class="item-input-wrap">
											          		<textarea name="address">{{$vendor?->useraddress?->address}}</textarea>
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <!-- <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 2</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li> -->
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">City</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="city" value="{{$vendor?->useraddress?->city}}">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">State</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="state" value="{{$vendor?->useraddress?->state}}">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">District</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="country" value="{{$vendor?->useraddress?->district}}">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Postal Code</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="pincode" value="{{$vendor?->useraddress?->pincode}}">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <!-- <li class="item-content item-input">
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
											    </li> -->
											     <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Update</button>
					                                        </div>
					                                        <!-- <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                         -->
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
											<h5>Select Sub Cateogries</h5>
										</div>
										<form action="{{url('/update-vendor/'.$vendor->id)}}" method="post">
                                                @csrf
                                                <input type="hidden"  name="section" value="subcategory" />
                                                <input type="hidden"  name="user_category_id" value="{{$vendor->userdetail?->category_id}}" />
											<ul>
                                                @foreach($subcategories as $subcat)
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="custom-control custom-checkbox">
												          	<input type="checkbox" name="userSubcat[]"   @if(in_array($subcat->id,$usersubcat)) checked  @endif    value="{{$subcat->id}}" class="custom-control-input" id="cctv">
												          	<label class="custom-control-label" for="cctv">{{$subcat->name}}</label>
												        </div>
											      	</div>
											    </li>
                                                @endforeach
											    											    
											     <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Update</button>
					                                        </div>
					                                        <!-- <div class="status-btn">
					                                            <button type="reset" class="btn view-eye">Clear</button>
					                                        </div>	                                         -->
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



    <!-- Bootstrap Datepicker CSS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection