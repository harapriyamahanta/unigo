@extends('layouts.app')
@section('content')
    @include('layouts.navigation')
    <div class="page-content profile-settings">

			<!-- Profile settings -->
        <div class="container">
            

            <div class="setting-widget">
                <div class="widget-title">
                    <h5>Contact Details</h5>
                </div>
                <form action="{{url('/locations/update/'.$locations->id)}}" method="post">
                        @csrf
                    <ul>
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-title item-label">Address</div>
                                <div class="item-input-wrap">
                                    <textarea  name="address" required>{{$locations->address}}</textarea>
                                    <span class="input-clear-button"></span>
                                </div>
                            </div>
                        </li>
                        
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-title item-label">City</div>
                                <div class="item-input-wrap">
                                    <input type="text" name="city"    value="{{$locations->city}}"  required>
                                    <span class="input-clear-button"></span>
                                </div>
                            </div>
                        </li>
                        
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-title item-label">Postal Code</div>
                                <div class="item-input-wrap">
                                    <input type="text" name="pincode"  value="{{$locations->pincode}}" required>
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