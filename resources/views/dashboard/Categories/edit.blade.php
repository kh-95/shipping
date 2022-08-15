@extends('layouts.dashbord.app')

@include('dashboard.Categories.style')


@section('content')



<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">Form Row</div>
        <div class="card-body">
            <form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName4" class="col-form-label">Name</label>

                    @foreach ($locales as $locale )
                    <input type="text" name="{{$locale}}[name]" class="form-control" id="inputName4" placeholder="Enter ur category name" value="{{ $category->name }}">
                    @endforeach
                </div>
                <div class="form-group col-md-6">
                    <label for="inputImage4" class="col-form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage4" placeholder="UPLOAD CATEGORY IMAGE HERE" value="{{ $category->image}}">
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
</div>
@include('dashboard.Categories.script')

@endsection
