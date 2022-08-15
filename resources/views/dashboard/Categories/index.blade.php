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
													<th>Actions</th>



												</tr>
											</thead>
											<tbody>
                                                @foreach ($Categories as $category )


												<tr>
													<td>{{ $category->name }}</td>
													<td> <img src="{{ $category->image }}" alt="" height="50" width="50"></td>
													<td>{{ $category->created_at }}</td>
                                                    <td>
                                                        <a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-info"><i class="fa fa-edit"></i>Edit</button></a>

                                  <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$category->id}}"><i class="fa fa-trash"></i>
                                  Delete</button>



                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure delete <span style="color:red";> {{$category->name}}</span>
                                        </div>
                                        <div class="modal-footer">


<form method="post" action="{{route('categories.destroy',$category->id)}}">
    @csrf
@method('Delete')
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button  type="submit" class="btn btn-danger">Delete</button>
</form>



                                        </div>
                                      </div>
                                    </div>
                                  </div>



                                                        </td>

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
