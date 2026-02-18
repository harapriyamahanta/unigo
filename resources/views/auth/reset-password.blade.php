@extends('layouts.guest')
@section('content')
    <div class="page-content change-password-col">
			<div class="list no-hairlines custom-form">
				<!-- <div class="back-btn"><a href="index.html" class="back link">
	                <img src="{{asset('assets/img/left-arrow-big-black.svg')}}" alt=""></a>
	            </div> -->
	            <div class="register-icon">
	                <img src="{{asset('assets/img/register-top-img.png')}}" alt="">
	            </div>
				<div class="logo">
					<a href="{{url('/login')}}"><img src="{{asset('assets/img/logo.svg')}}" alt=""></a>
				</div>
                <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
				<ul class="change-list">
                    <li class="item-content item-input">
						<div class="item-col">
							<div class="item-input-wrap">
								<input type="email" id="email" class="block mt-1 w-full"  name="email" :value="old('email', $request->email)"  autofocus autocomplete="username">
								
							</div>
						</div>
					</li>
					<li class="item-content item-input">
						<div class="item-col">
							<div class="item-input-wrap">
								<input type="password" id="password" name="password" required autocomplete="new-password"  placeholder="Password">
								<div class="item-input-icon"><img src="{{asset('assets/img/lock-icon.svg')}}" alt=""></div>
							</div>
						</div>
					</li>
					<li class="item-content item-input">
						<div class="item-col">
							<div class="item-input-wrap">
								<input id="password_confirmation" 
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
								<div class="item-input-icon"><img src="{{asset('assets/img/lock-icon.svg')}}" alt=""></div>
							</div>
						</div>
					</li>
					<li class="item-content item-input">
						<div class="item-col">
							<div class="item-input-wrap submit-btn-col">
								<button type="submit" class="btn btn-submit">Change password</button>
							</div>
						</div>
	                </li>
				</ul>
				<span class="login-back">Go back to login ? <a href="{{url('/login')}}">Login Now!</a></span>
			</div>
		</div>
@endsection
