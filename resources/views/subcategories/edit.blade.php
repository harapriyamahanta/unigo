@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
    <div class="page-content profile-settings">

			<!-- Profile settings -->
        <div class="container">
            

            <div class="setting-widget">
                <div class="widget-title">
                    <h5>Edit Category</h5>
                </div>
                <form action="{{url('/sub-category/update/'.$subcategory->id)}}" method="post">
                    @csrf
                    <ul>
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-title item-label">Name <span>*</span></div>
                                <div class="item-input-wrap">
                                    <input type="text" name="subcategory"  value="{{$subcategory->name}}" required>
                                    <span class="input-clear-button"></span>
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
			<!-- Profile settings -->
	</div>

@endsection
@section('customScript')



    <!-- Bootstrap Datepicker CSS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection