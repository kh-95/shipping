@extends('auth.master')
@section('content')
		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="POST" action="{{ route('login') }}">
                     @csrf
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
										<a href="#" class="login-logo">
											<img src="/dashbord/img/unify.png" alt="Unify Admin Dashboard" />
										</a>
										<div class="input-group">
											<span class="input-group-addon" id="email"><i class="icon-account_circle"></i></span>
											<input type="text" class="form-control" name ="email" placeholder="email" aria-label="email" aria-describedby="email">
										</div>
										<br>
										<div class="input-group">
											<span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
											<input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password">
										</div>
										<div class="actions clearfix">
											<a href="/dashbord/forgot-pwd.html">Lost password?</a>
									  	<button type="submit"  class="btn btn-primary">Login</button>
									  </div>
									  <div class="or"></div>
									  <div class="mt-4">

									  	<a href="{{ route('register') }}" class="additional-link">Don't have an Account? <span>Create Now</span></a>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="login-slider"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
@endsection
