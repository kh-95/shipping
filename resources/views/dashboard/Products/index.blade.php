@extends('layouts.dashbord.app')

@include('dashboard.Products.style')


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
                                    <th>Description</th>
                                    <th>price</th>
                                    <th>Colour</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Count</th>
                                    <th>Rate</th>
                                    <th>Size</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td> <img src="{{ $product->image }}" alt="" height="50" width="50">
                                        </td>

                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->colour }}</td>
                                        <td><a href="{{ route('brands.index', $product->brand_id) }}"
                                                class="btn btn-info">{{ $product->brand?->name }}</a></td>
                                        <td><a href="{{ route('categories.index', $product->category_id) }}"
                                                class="btn btn-info">{{ $product->category?->name }}</a></td>
                                        <td>{{ $product->status }}</td>
                                        <td>{{ $product->count }}</td>
                                        <td>{{ $product->rate }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}"><button
                                                    class="btn btn-info"><i class="fa fa-edit"></i>Edit</button></a>

                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{ $product->id }}"><i class="fa fa-trash"></i>
                                                Delete</button>



                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure delete <span style="color:red";>
                                                                {{ $product->name }}</span>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="post"
                                                                action="{{ route('products.destroy', $product->id) }}">
                                                                @csrf
                                                                @method('Delete')
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
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
