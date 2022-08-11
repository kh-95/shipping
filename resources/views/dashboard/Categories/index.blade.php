@extends('layouts.dashbord.app')

@include('dashboard.Categories.style')


@section('content')
					<!-- BEGIN .main-content -->
					<div class="main-content">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Basic Datatable</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>

													<th>Name</th>
													<th>Image</th>
													<th>Created_at</th>

												</tr>
											</thead>
											<tbody>
                                                @foreach ($Categories as $category )


												<tr>
													<td>{{ $category->name }}</td>
													<td>{{ $category->image }}</td>
													<td>{{ $category->created_at }}</td>

												</tr>
                                                @endforeach


											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->



					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->

		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		@include('dashboard.Categories.script')

	@endsection
