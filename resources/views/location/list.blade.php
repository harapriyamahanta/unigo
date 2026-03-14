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
        <div class="sliding custom-title">{{$page}}</div>
        <div class="right d-flex">
            <a href="javascript:void(0)" onClick="openAdd()" class="link icon-only" title="Add Locality"><i class="material-icons">add</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div> 
    <div class="chat-list-new">
        <div class="container">
        <!-- Pages -->
        <div class="social-media-col pages-list-col">         
                <div class="chat-title">
                        <div class="chat-list-title">
                            <i><a href="{{url('/zones')}}" class="back link">
                                <img src="{{asset('assets/img/left-arrow-big-black.svg')}}" alt=""></a>
                            </i> Back</div>
                           
                        <div class="user">{{count($locations)}} Locations</div>
                    </div>
				</div>
                    <!-- Searchbar with auto Search -->
                    <form class="searchbar">
                        <div class="search_chat has-search">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control chat_input" id="search-chat" type="text" placeholder="">
                        </div>
                    </form>
                    <!-- Searchbar with auto Search end -->
                <div class="list">
                    <ul>
                        @foreach($locations as $loc)
                        <li>
                            <span class="item-link item-content">
                                <div class="item-avatar">
                                    <span class="material-icons">pages</span>
                                </div>
                                <div class="item-cat">
                                    <div class="item-title">
                                        {{$loc->address}}, {{$loc->city}}, {{$loc->pincode}}
                                    </div>
                                </div>
                                <div class="right d-flex">                    
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header_drop_icon">
                                        <a href="javascript:void(0)" onClick="openEdit({{$loc}})" class="dropdown-item">Edit</a>
                                        <a href="{{url('/locations/delete/'.$loc->id)}}" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </span>
                        </li>
                        @endforeach
                                           
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Pages -->
        <!-- Category popup -->
                <div class="modal fade" id="zone-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-widget-title title">Add Location</h5>
                                <a class="link popup-close close popup-close-right" href="#" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div class="popup custom-filter-popup">
                                    <div class="setting-widget">
                                        <div class="list no-hairlines-md">         
                                            <div class="file-upload">
                                                <a href="#" class="file-upload-img">
                                                    <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
                                                    <span class="cam-icon"><img src="assets/img/placeholder-small.svg" alt=""></span>
                                                </a>
                                            </div>
                                            <form action="{{url('/store-location')}}" method="post">
                                                @csrf
												<input type="hidden" id="zone_id" name="id" />
												<input type="hidden" value="{{$zone->id}}" name="zone_id" />
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address</div>
											        	<div class="item-input-wrap">
											          		<input type="text"  id="address" name="address" required />
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>

												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address2</div>
											        	<div class="item-input-wrap">
											          		<input type="text" id="address2"  name="address2"  />
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">City</div>
											        	<div class="item-input-wrap">
											          		<input type="text" id="city" name="city" value="{{Request->get('zone')}}" readonly>
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											   
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Pin Code</div>
											        	<div class="item-input-wrap">
											          		<input type="text" id="pincode" name="pincode" required>
											          		<span class="input-clear-button"></span>
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
                </div>
            <!-- /Add Category popup -->
    </div> 
	<!-- <div class="chat-list-new">
        <div class="container">
        
        <div class="social-media-col pages-list-col">            
                <div class="chat-title">
                        <div class="chat-list-title">
                            <i><a href="{{url('dashboard')}}" class="back link">
                                <img src="assets/img/left-arrow-big-black.svg" alt=""></a>
                            </i> Back</div>
                           
                        <div class="user">{{count($locations)}} Location</div>
                    </div>
                    
                    
                    
                <div class="tab-content">

			 		 <div class="tab-pane" id="about-me">
				    	
						<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">
				          			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Contact Details</h5>
										</div>
										<form action="{{url('/store-location')}}" method="post">
                                                @csrf
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Locality</div>
											        	<div class="item-input-wrap">
											          		<textarea  name="address" required></textarea>
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">District</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="city" required>
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											   
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Pin Code</div>
											        	<div class="item-input-wrap">
											          		<input type="text" name="pincode" required>
											          		<span class="input-clear-button"></span>
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
					<div class="tab-pane" id="upload-location">
				    	
						<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">
				          			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Contact Details</h5>
										</div>
										<form action="{{url('/upload-location')}}" method="post" enctype="multipart/form-data">
                                                @csrf
											<ul>
												<li class="item-content item-input" style="border:1px solid red;">
											      	<div class="item-col">
											        	<div class="item-title item-label">Excel File Upload</div>
											        	<div class="item-input-wrap" >
											          		<input type="file"  name="import_file"  required />
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
												
											</ul>
											<ul>
												<li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Save</button>
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

					<div class="tab-pane active" id="basic-info">
				      	<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">
                        <form class="searchbar">
                        <div class="search_chat has-search">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control chat_input" id="search-chat" type="text" placeholder="">
                        </div>
                    	</form>
				    <div class="list">
                    <ul>
                        @foreach($locations as $loc)
                        <li>
                            <span class="item-link item-content">
                                <div class="item-avatar">
                                    <span class="material-icons">pages</span>
                                </div>
                                <div class="item-cat">
                                    <div class="item-title">
                                        {{$loc->address}}, {{$loc->city}}, {{$loc->pincode}}
                                    </div>
                                </div>
                                <div class="right d-flex">                    
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header_drop_icon">
                                        <a href="{{url('/locations/edit/'.$loc->id)}}" class="dropdown-item">Edit</a>
                                        <a href="{{url('/locations/delete/'.$loc->id)}}" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </span>
                        </li>
                        @endforeach
                                              
                    </ul>
                </div>
				          		</div>
				          	</div>
				        </div>
			      	</div>



			 	</div>
                
            </div>
        </div>
        
    </div> -->

    

@endsection
@section('customScript')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
function openEdit (item){
    //console.log(item,'item');
    $('#zone-modal').modal('show');
    $('#zone_id').val(item.id);
    $('.title').html('Edit Location');
    $('.addZoneBtn').html('Update Location');
    $('#address').val(item.address);
	$('#address2').val(item.address2);
	$('#city').val(item.city);
    $('#pincode').val(item.pincode);
}
function openAdd (){
   // console.log(item,'item');
    $('#zone-modal').modal('show');
    $('#zone_id').val('');
    $('.title').html('Add Location');
    $('.addZoneBtn').html('Add Location');
    $('#address').val('');
	$('#address2').val('');
	$('#city').val('');
    $('#pincode').val('');
}
</script>
@endsection