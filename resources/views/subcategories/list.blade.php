@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
     <div class="chat-list-new">
        <div class="container">
        <!-- Pages -->
        <div class="social-media-col pages-list-col">            
                <div class="chat-title">
                        <div class="chat-list-title">
                            <i><a href="{{url('/categories')}}" class="back link">
                                <img src="{{asset('assets/img/left-arrow-big-black.svg')}}" alt=""></a>
                            </i> Back</div>
                           
                        <div class="user">{{count($subcategories)}} Sub Categories</div>
                    </div>
                    <div class="tab-col">
				 	<ul class="nav nav-tabs">
					    <li><a href="#basic-info" data-bs-toggle="tab" class="active">Sub Categories</a></li>  
					    <li><a href="#about-me" data-bs-toggle="tab">Add Sub Category</a></li>
				  	</ul>
			  	</div>
                    <!-- Searchbar with auto Search -->
                    
                    <!-- Searchbar with auto Search end -->
                <div class="tab-content">

			 		<div class="tab-pane" id="about-me">
				    	<div class="panel panel-default">
				    		<div id="collapseOne" class="panel-collapse collapse in">
				          		<div class="panel-body">
				          			<div class="setting-widget">
										<div class="list no-hairlines-md">
											<!-- <div class="widget-title">
												<h5>Add Category</h5>
											</div> -->
											
											<form action="{{url('/store-subcategories')}}" method="post">
                                                @csrf
											  	<ul>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Sub Category Name <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" name="subcategory" required>
                                                                <input type="hidden" name="category" value="{{$category->id}}">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
                                                    
												   
												    <li class="bottom-button">
												    	<button type="submit" class="btn">Next</button>
												    </li>
											  	</ul>
										  	</form>
										</div>
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
                        @foreach($subcategories as $cat)
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
                                        <a href="#" class="dropdown-item">Edit</a>
                                        <a href="#" class="dropdown-item">Delete</a>
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
        <!-- /Pages -->
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