@extends('layouts.dashbord.app')

@section('content')
<!-- BEGIN .main-content -->
<div class="main-content">
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <div class="stats-widget-header">
                            <i class="icon-facebook"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h6 class="title">Facebook</h6>
                                </li>
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h4 class="total">5,600</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <div class="stats-widget-header">
                            <i class="icon-twitter"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h6 class="title">Twitter</h6>
                                </li>
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h4 class="total">3,500</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Followers">47</a>
                        <div class="stats-widget-header">
                            <i class="icon-googleplus"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h6 class="title">Google</h6>
                                </li>
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h4 class="total">2,800</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Posts">12</a>
                        <div class="stats-widget-header">
                            <i class="icon-rss"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h6 class="title">Blog</h6>
                                </li>
                                <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                    <h4 class="total">7,000</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- END: .main-content -->

@endsection
