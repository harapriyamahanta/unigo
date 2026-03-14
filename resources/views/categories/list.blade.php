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
        <div class="sliding custom-title">Categories</div>
        <div class="right d-flex">
            <a href="javascript:void(0)" onClick="openAdd()" class="link icon-only" title="Add Category"><i class="material-icons">add</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div> 
    <div class="chat-list-new">
        <div class="container">
        <!-- Pages -->
        <div class="social-media-col pages-list-col">         
                
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
                        @foreach($categories as $cat)
                        <li>
                            <span class="item-link item-content">
                                <div class="item-avatar">
                                    <span class="material-icons">pages</span>
                                </div>
                                <div class="item-cat">
                                    <div class="item-title">
                                       <a href="{{url('sub-categories/'.$cat->id)}}">{{$cat->name}}</a>
                                    </div>
                                </div>
                                <div class="right d-flex">                    
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end header_drop_icon">
                                        <a href="javascript:void(0)" onClick="openEdit({{$cat}})" class="dropdown-item">Edit</a>
                                        <a href="{{url('/category/delete/'.$cat->id)}}" class="dropdown-item">Delete</a>
                                        <a href="{{url('/create-vendor?category='.$cat->id)}}" class="dropdown-item">Onboard Vendor</a>
                                        <a href="{{url('/sub-categories/'.$cat->id)}}" class="dropdown-item">Add Sub Category</a>
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
                                            
                                           <form action="{{url('/store-category')}}" method="post">
                                            <!-- <div class="file-upload">
                                                <a href="#" class="file-upload-img">
                                                    <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
                                                    <span class="cam-icon"><img src="assets/img/placeholder-small.svg" alt=""></span>
                                                </a>
                                            </div> -->
                                                @csrf
                                                <div class="item-input-wrap file-upload-img file-upload" >
                                                    <div class="file-upload">
                                                        <!-- <a href="#" class="file-upload-img1" > -->
                                                            <img id="output" src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="300" height="300" alt="User Image">
                                                            <!-- <span class="cam-icon"><img src="assets/img/placeholder-small.svg" alt=""></span> -->
                                                        <!-- </a> -->
                                                    </div>
                                                    <input type="file"  name="image" accept="image/*" onchange="loadFile(event)" required />
                                                    <span class="input-clear-button"></span>
                                                </div>
                                                <input type="hidden" id="zone_id" name="id" />
											  	<ul>
												    <li class="item-content-full item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" id="category" name="category" required>
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    
												   
												     <li class="bottom-button">
												    	<div class="status-col">
					                                    	<div class="status-btn">
					                                            <button type="submit" class="btn success">Save</button>
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
                </div>
            <!-- /Add Category popup -->
    </div>

    

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
    $('.title').html('Edit Category');
    $('.addZoneBtn').html('Update Category');
    $('#category').val(item.name);
}
function openAdd (){
   // console.log(item,'item');
    $('#zone-modal').modal('show');
    $('#zone_id').val('');
    $('.title').html('Add Category');
    $('.addZoneBtn').html('Add Category');
    $('#category').val('');
}
</script>

@endsection