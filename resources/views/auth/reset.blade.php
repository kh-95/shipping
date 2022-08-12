@extends('auth.master')
@section('content')

		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<form action="index.html">
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
										<a href="#" class="login-logo">
											<img src="/dashbord/img/unify.png" alt="Unify Admin Dashboard" />
										</a>

										<h5>Forgot Password?</h5>
										<p class="info">In order to receive your access code by email, please enter the address you provided during the registration process.</p>

										<div class="input-group">
											<span class="input-group-addon" id="emial"><i class="icon-account_circle"></i></span>
											<input type="email" class="form-control" placeholder="Email Address">
										</div>
										<div class="actions clearfix">
                                            <form  action="{{ route('reset') }}" method="POST" >
                                                {{ csrf_field() }}


                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </form>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="login-slider">
										<a href="javacsript:void(0)">
											<img src="img/play-button.svg" class="play-icon" alt="play video" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

        @endsection
