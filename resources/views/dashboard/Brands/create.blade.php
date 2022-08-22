@extends('layouts.dashbord.app')

@include('dashboard.Brands.style')


@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Form Row</div>
            <div class="card-body">
                <form action="{{ route('brands.store') }}" method="post" >
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Name</label>
                            @foreach ($locales as $locale)
                                <input type="text" name="{{ $locale }}[name]" class="form-control" id="inputName4"
                                    placeholder="Enter ur brand name">
                            @endforeach
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName4" class="col-form-label">Type</label>

                            <select name="type" class="form-control">

                                <option> </option>
                                <option value="featured">Featured</option>
                                <option value="top">Top</option>
                            </select>

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
    @include('dashboard.Categories.script')
@endsection
