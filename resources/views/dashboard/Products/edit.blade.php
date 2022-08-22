@extends('layouts.dashbord.app')

@include('dashboard.Products.style')


@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Form Row</div>
            <div class="card-body">
                <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Name</label>
                            @foreach ($locales as $locale)
                                <input type="text" name="{{ $locale }}[name]" class="form-control" id="inputName4"
                                    placeholder="Enter ur brand name">
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                            <label>Description</label>
                            @foreach ($locales as $locale)
                            <textarea  class="form-control" name="{{ $locale }}[description]" placeholder="description">
                            Enter text here...
                                </textarea>
                                @endforeach

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputImage4" class="col-form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="inputImage4"
                                placeholder="UPLOAD CATEGORY IMAGE HERE">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputImage4" class="col-form-label">Price</label>
                            @foreach ($locales as $locale)
                            <input type="number" class="form-control " name="{{ $locale }}[price]" placeholder="price">
                            @endforeach

                        </div>
                        <div class="form-group col-md-6">
                            <label>Count</label>
                            @foreach ($locales as $locale)
                            <input type="number" class="form-control " name="{{ $locale }}[count]" placeholder="count">
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Size</label>

                            <select name="size" class="form-control">

                                <option> </option>
                                <option value="s">S</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="xxl">XxL</option>
                                <option value="xxxl">XxxL</option>


                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            @foreach ($locales as $locale)

                            <input type="text" class="form-control " name="{{ $locale }}[status]" placeholder="status">
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                            <label>Colour</label>
                            @foreach ($locales as $locale)
                            <input type="text" class="form-control " name="{{ $locale }}[colour]" placeholder="colour">
                            @endforeach

                        </div>


                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Category Name</label>

                            <select name="category_id" class="form-control">
                                <option >{{ $product->category?->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Brand Name</label>

                            <select name="brand_id" class="form-control">
                                <option>{{ $product->brand?->name }}</option>

                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" >{{ $brand->name }} </option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
    @include('dashboard.Products.script')
@endsection
