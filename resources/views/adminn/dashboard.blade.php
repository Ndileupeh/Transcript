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
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                    
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-block"></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <h3 class="widget-title">Earnings</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card-box-shared">
                    <div class="card-box-shared-title">
                        <h3 class="widget-title">My Earnings</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="section-tab section-tab-2">
                            <ul class="nav nav-tabs" role="tablist" id="review">
                                <li role="presentation">
                                    <a href="#earning" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                        Earning
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#report" role="tab" data-toggle="tab" aria-selected="false">
                                        Report
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#statements" role="tab" data-toggle="tab" aria-selected="false">
                                        Statements
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-tab-content mt-5">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show" id="earning">
                                    <div class="row mt-5">
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-1 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-dollar"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">My Balance</h4>
                                                    <span class="info__count">120.20</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-2 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-money"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">My Earning</h4>
                                                    <span class="info__count">255.30</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-3 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-shopping-cart"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">All time sales</h4>
                                                    <span class="info__count">504.10</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-4 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-print"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">All time withdraws</h4>
                                                    <span class="info__count">65.40</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-5 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-balance-scale"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Deducted Commissions</h4>
                                                    <span class="info__count">51.00</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                                            <div class="icon-box icon-box-layout-2 bg-color-6 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-cut"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Deducted Fees</h4>
                                                    <span class="info__count">60.00</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-6 column-lmd-2-half column-md-full">
                                            <div class="chart-item">
                                                <div class="chart-headline margin-bottom-35px">
                                                    <h3 class="widget-title font-size-18">Earning Chart for this month (July)</h3>
                                                </div>
                                                <canvas id="bar-chart"></canvas>
                                                <div class="chart-legend text-center margin-top-40px">
                                                    <ul>
                                                        <li>Earning Chart this month</li>
                                                    </ul>
                                                </div>
                                            </div><!-- end chart-item -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 column-lmd-2-half column-md-full">
                                            <div class="chart-item">
                                                <div class="chart-headline margin-bottom-35px">
                                                    <h3 class="widget-title font-size-18">Earning by Location</h3>
                                                </div>
                                                <div class="world-map">
                                                    <div id="visit-by-locate"></div>
                                                </div>
                                                <div class="progress-bar-wrap mt-4">
                                                    <div class="progress-item">
                                                        <p class="skillbar-title">USA</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="80%">
                                                                <div class="skillbar-bar skillbar-bar-bg-1"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">80%</div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <p class="skillbar-title">UK</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="70%">
                                                                <div class="skillbar-bar skillbar-bar-bg-2"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">70%</div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <p class="skillbar-title">China</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="60%">
                                                                <div class="skillbar-bar skillbar-bar-bg-3"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">60%</div>
                                                    </div>
                                                     <div class="progress-item">
                                                        <p class="skillbar-title">Australia</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="50%">
                                                                <div class="skillbar-bar skillbar-bar-bg-4"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">50%</div>
                                                    </div>
                                                     <div class="progress-item">
                                                        <p class="skillbar-title">Canada</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="40%">
                                                                <div class="skillbar-bar skillbar-bar-bg-5"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">40%</div>
                                                    </div>
                                                     <div class="progress-item">
                                                        <p class="skillbar-title">Russia</p>
                                                        <div class="skillbar-box">
                                                            <div class="skillbar" data-percent="30%">
                                                                <div class="skillbar-bar skillbar-bar-bg-6"></div>
                                                            </div> <!-- End Skill Bar -->
                                                        </div>
                                                        <div class="skill-bar-percent">30%</div>
                                                    </div>
                                                </div>
                                            </div><!-- end chart-item -->
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div><!-- end tab-pane-->
                                <div role="tabpanel" class="tab-pane fade" id="report">
                                    <div class="data-table d-flex align-items-center justify-content-between">
                                        <ul class="data-list d-flex flex-wrap align-items-center">
                                            <li class="theme-btn">Last year</li>
                                            <li class="theme-btn active">this year</li>
                                            <li class="theme-btn">Last month</li>
                                            <li class="theme-btn">this month</li>
                                            <li class="theme-btn">Last week</li>
                                            <li class="theme-btn">this week</li>
                                        </ul>
                                        <div class="data-timer d-flex align-items-center">
                                            <div class="contact-form-action mr-2">
                                                <form>
                                                    <div class="form-group mb-0">
                                                        <span class="la la-calendar-o input-icon"></span>
                                                        <input class="form-control datepicker" type="text" value="04/4/2020">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="data-search">
                                                <button class="theme-btn"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-6 column-td-half">
                                            <div class="icon-box icon-box-layout-2 bg-color-2 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-money"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">My Earning</h4>
                                                    <span class="info__count">255.30</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 column-td-half">
                                            <div class="icon-box icon-box-layout-2 bg-color-3 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-shopping-cart"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">All time sales</h4>
                                                    <span class="info__count">504.10</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 column-td-half">
                                            <div class="icon-box icon-box-layout-2 bg-color-5 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-balance-scale"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Deducted Commissions</h4>
                                                    <span class="info__count">51.00</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 column-td-half">
                                            <div class="icon-box icon-box-layout-2 bg-color-6 d-flex align-items-center">
                                                <div class="icon-element flex-shrink-0">
                                                    <i class="la la-cut"></i>
                                                </div><!-- end icon-element-->
                                                <div class="info-content">
                                                    <h4 class="info__title mb-2">Deducted Fees</h4>
                                                    <span class="info__count">60.00</span>
                                                </div><!-- end info-content -->
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="chart-item">
                                                <div class="chart-headline margin-bottom-35px">
                                                    <h3 class="widget-title font-size-18">Earning Data for the year of (2019)</h3>
                                                </div>
                                                <canvas id="line-chart-2"></canvas>
                                                <div class="chart-legend text-center margin-top-40px">
                                                    <ul>
                                                        <li>Earnings data this year</li>
                                                    </ul>
                                                </div>
                                            </div><!-- end chart-item -->
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </div><!-- end tab-pane-->
                                <div role="tabpanel" class="tab-pane fade" id="statements">
                                    <div class="statement-table table-responsive">
                                        <div class="statement-header pb-4">
                                            <h3 class="widget-title pb-2">Statements</h3>
                                            <p>Showing 1 to 4 of 57 entries</p>
                                        </div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Course info</th>
                                                <th scope="col">Earning</th>
                                                <th scope="col">Commission</th>
                                                <th scope="col">Deduct</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items mb-3">
                                                                <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                                                <li><span class="primary-color mr-1">Date:</span>July 4, 2020, 11:30am</li>
                                                                <li><span class="primary-color mr-1">Tutorial:</span>Creating Responsive SVG</li>
                                                                <li><span class="primary-color mr-1">Price:</span>$79.00</li>
                                                                <li><span class="primary-color mr-1">Order ID:</span>#090909</li>
                                                            </ul>
                                                            <ul class="list-items">
                                                                <li><span class="primary-color font-weight-bold">Purchaser</span></li>
                                                                <li><span class="primary-color mr-1">Name:</span>Kamran Adi</li>
                                                                <li><span class="primary-color mr-1">Address:</span>329 Queensberry Street, North Melbourne VIC 3051, Australia.</li>
                                                                <li><span class="primary-color mr-1">Email:</span>kamranadi@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$55.00</li>
                                                                <li>As per 70.00</li>
                                                                <li>(Percent)</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$24.00</li>
                                                                <li>Rate: 10.00</li>
                                                                <li>Type: Percent</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">Maintenance</li>
                                                                <li class="primary-color">Fees: $12.00</li>
                                                                <li>Type: Fixed</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items mb-3">
                                                                <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                                                <li><span class="primary-color mr-1">Date:</span>July 4, 2020, 11:30am</li>
                                                                <li><span class="primary-color mr-1">Tutorial:</span>Creating Responsive SVG</li>
                                                                <li><span class="primary-color mr-1">Price:</span>$79.00</li>
                                                                <li><span class="primary-color mr-1">Order ID:</span>#090909</li>
                                                            </ul>
                                                            <ul class="list-items">
                                                                <li><span class="primary-color font-weight-bold">Purchaser</span></li>
                                                                <li><span class="primary-color mr-1">Name:</span>Kamran Adi</li>
                                                                <li><span class="primary-color mr-1">Address:</span>329 Queensberry Street, North Melbourne VIC 3051, Australia.</li>
                                                                <li><span class="primary-color mr-1">Email:</span>kamranadi@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$55.00</li>
                                                                <li>As per 70.00</li>
                                                                <li>(Percent)</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$24.00</li>
                                                                <li>Rate: 10.00</li>
                                                                <li>Type: Percent</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">Maintenance</li>
                                                                <li class="primary-color">Fees: $12.00</li>
                                                                <li>Type: Fixed</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items mb-3">
                                                                <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                                                <li><span class="primary-color mr-1">Date:</span>July 4, 2020, 11:30am</li>
                                                                <li><span class="primary-color mr-1">Tutorial:</span>Creating Responsive SVG</li>
                                                                <li><span class="primary-color mr-1">Price:</span>$79.00</li>
                                                                <li><span class="primary-color mr-1">Order ID:</span>#090909</li>
                                                            </ul>
                                                            <ul class="list-items">
                                                                <li><span class="primary-color font-weight-bold">Purchaser</span></li>
                                                                <li><span class="primary-color mr-1">Name:</span>Kamran Adi</li>
                                                                <li><span class="primary-color mr-1">Address:</span>329 Queensberry Street, North Melbourne VIC 3051, Australia.</li>
                                                                <li><span class="primary-color mr-1">Email:</span>kamranadi@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$55.00</li>
                                                                <li>As per 70.00</li>
                                                                <li>(Percent)</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$24.00</li>
                                                                <li>Rate: 10.00</li>
                                                                <li>Type: Percent</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">Maintenance</li>
                                                                <li class="primary-color">Fees: $12.00</li>
                                                                <li>Type: Fixed</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items mb-3">
                                                                <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                                                <li><span class="primary-color mr-1">Date:</span>July 4, 2020, 11:30am</li>
                                                                <li><span class="primary-color mr-1">Tutorial:</span>Creating Responsive SVG</li>
                                                                <li><span class="primary-color mr-1">Price:</span>$79.00</li>
                                                                <li><span class="primary-color mr-1">Order ID:</span>#090909</li>
                                                            </ul>
                                                            <ul class="list-items">
                                                                <li><span class="primary-color font-weight-bold">Purchaser</span></li>
                                                                <li><span class="primary-color mr-1">Name:</span>Kamran Adi</li>
                                                                <li><span class="primary-color mr-1">Address:</span>329 Queensberry Street, North Melbourne VIC 3051, Australia.</li>
                                                                <li><span class="primary-color mr-1">Email:</span>kamranadi@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$55.00</li>
                                                                <li>As per 70.00</li>
                                                                <li>(Percent)</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">$24.00</li>
                                                                <li>Rate: 10.00</li>
                                                                <li>Type: Percent</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="primary-color">Maintenance</li>
                                                                <li class="primary-color">Fees: $12.00</li>
                                                                <li>Type: Fixed</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="page-navigation-wrap padding-top-35px">
                                        <div class="page-navigation-inner d-inline-block">
                                            <div class="page-navigation">
                                                <a href="#" class="page-go page-prev">
                                                    <i class="la la-arrow-left"></i>
                                                </a>
                                                <ul class="page-navigation-nav">
                                                    <li><a href="#" class="page-go-link">1</a></li>
                                                    <li class="active"><a href="#" class="page-go-link">2</a></li>
                                                    <li><a href="#" class="page-go-link">3</a></li>
                                                    <li><a href="#" class="page-go-link">4</a></li>
                                                </ul>
                                                <a href="#" class="page-go page-next">
                                                    <i class="la la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end page-navigation-wrap -->
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
