<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

       <div class="page-content change-password-col register-col">
    		<div class="list no-hairlines custom-form">                                
    			<div class="logo">
    				<a href="index.html"><img src="assets/img/logo.svg" class="fixigo-logo" alt="doccure"></a>
    			</div>
                <div class="register-inner-col">
                    <div class="top-title">
                        <div>
                            <h3>Login</h3>
                        </div>
                        <div>
                            <a href="register.html">Are you Vendor?</a>
                        </div>
                    </div>
    				<ul class="change-list">
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-input-wrap">
                                    <input type="text" name="email" placeholder="Email or username">
                                    <div class="item-input-icon"><img src="assets/img/email.svg" alt=""></div>
                                </div>
                            </div>
                        </li>
    					<li class="item-content item-input">
    						<div class="item-col">
    							<div class="item-input-wrap">
    								<input type="password"  name="password" placeholder="Password">
    								<div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
    							</div>
    						</div>
    					</li>
                        <li class="col-50 save-password">
                        </li>
                        <li class="col-50 forgot-password">
                            <a href="forgot-password.html">Forgot Password ?</a>
                        </li>
    					<li class="item-content item-input">
    						<div class="item-input-wrap submit-btn-col">
    							<button type="submit" class="btn btn-submit">Login Now</button>
    						</div>
    	                </li>
    				</ul>
    				<span class="login-back">Don't have an login ? <a href="register.html">Signup Now!</a></span>
                </div>
    		</div>
    	</div>
    </form>
</x-guest-layout>
