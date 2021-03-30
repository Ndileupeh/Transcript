@extends('layout.header')
@section('body')


<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<div class="dashboard-content-wrap">
    <div class="container-fluid">
        
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card-box-shared">
                    <div class="card-box-shared-title">
                        <h3 class="widget-title">Modes</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="section-tab section-tab-2 clearfix">
                            <ul class="nav nav-tabs float-right" role="tablist" id="review">
                                <li role="presentation">
                                    <a href="{{ route('home') }}" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                        Back
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#report" role="tab" data-toggle="tab" aria-selected="false">
                                        Current Student
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#statements" role="tab" data-toggle="tab" aria-selected="false">
                                        Formal Students
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-tab-content mt-5">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show" id="earning">
                                    <div class="row mt-5">
                                        <div class="col-lg-12 card-box-shared-title">
                                            <h3 class="widget-title text-center ">Current Students</h3>
                                        </div>
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            
                                            <div class="icon-box icon-box-layout-2 bg-color-1 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-dollar"></i>
                                                </div><!-- end icon-element-->
                                                
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Normal</h4>
                                                    <span class="info__count">1000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-2 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-money"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Fast</h4>
                                                    <span class="info__count">2000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-3 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-shopping-cart"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Super fast</h4>
                                                    <span class="info__count">3000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12 card-box-shared-title">
                                            <h3 class="widget-title text-center">Formal Students</h3>
                                        </div>
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-4 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-print"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Normal</h4>
                                                    <span class="info__count">2000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-5 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-balance-scale"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Fast</h4>
                                                    <span class="info__count">3000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-6 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-cut"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Super fast</h4>
                                                    <span class="info__count">5000.0</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        
                                    </div><!-- end row -->
                                </div><!-- end tab-pane-->
                                
                              
                            </div><!-- end tab-content -->
                        </div><!-- end dashboard-tab-content -->
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        
    </div><!-- end container-fluid -->
</div><!-- end dashboard-content-wrap -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>


@endsection
