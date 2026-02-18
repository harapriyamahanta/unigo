@extends('layouts.guest')
@section('content')
    <div class="page-content change-password-col">
			<div class="list no-hairlines custom-form">				
				<div class="logo">
					<a href="{{url('/login')}}"><img src="assets/img/logo.svg" class="fixigo-logo" alt="FixiGO"></a>
				</div>
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
				<ul class="change-list">
					<li class="item-content item-input">
	                        <div class="item-col">
	                            <div class="item-input-wrap">
	                                <input  placeholder="Email" type="email" name="email" :value="old('email')" required autofocus >
	                                <div class="item-input-icon"><img src="assets/img/email.svg" alt=""></div>
	                            </div>
	                        </div>
	                    </li>
					<li class="item-content item-input">
						<div class="item-col">
							<div class="item-input-wrap submit-btn-col">
								<button type="submit" class="btn btn-submit">Reset password</button>
							</div>
						</div>
	                </li>
				</ul>
                </form>
				<span class="login-back">Go back to login ? <a href="{{url('/login')}}">Login Now!</a></span>
			</div>
		</div>
@endsection
