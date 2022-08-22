<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-actions -->
						<ul class="user-actions">
							<li>
								<a href="#">
									<i class="icon-event_note"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-rate_review"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-drafts"></i>
									<span class="count-label red"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-assignment_turned_in"></i>
									<span class="count-label"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-photo_camera"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Secured">
									<i class="icon-verified_user"></i>
								</a>
							</li>
						</ul>
						<!-- END .user-actions -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class="active selected">
									<a href="{{ route('home') }}" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
									<ul aria-expanded="false" class="collapse in">

										@if(auth()->user()->user_type=='admin')

										<li >
											<a href="{{ route('categories.index') }}">Category</a>
										</li>

                                        <li  >
											<a href="{{ route('categories.create') }}">Add Category</a>
										</li>

										<li>
											<a href="{{ route('brands.index') }}">Brand</a>
										</li>

                                        <li  >
											<a href="{{ route('brands.create') }}">Add Brand</a>
										</li>

                                        <li>
											<a href="{{ route('products.index') }}">Product</a>
										</li>

                                        <li  >
											<a href="{{ route('products.create') }}">Add Product</a>
										</li>
						@endif



									</ul>
								</li>

							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->
