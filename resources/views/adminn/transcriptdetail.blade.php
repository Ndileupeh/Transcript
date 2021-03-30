@extends('layout.header')
@section('body')


    <div class="dashboard-content-wrap">
        <div class="container-fluid">


            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title text-center">My Dashboard Profile</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Dashboad</h3>
                        </div>
                        <div class="card-box-shared-body clearfix">
                            <div class="section-tab section-tab-2 float-right py-3">
                                <ul class="nav nav-tabs" role="tablist" id="review">
                                    <li role="presentation">
                                        <a href="#report" role="tab" data-toggle="tab" aria-selected="false">
                                            All
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#earning" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                            Pending
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#report" role="tab" data-toggle="tab" aria-selected="false">
                                            Processing
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#statements" role="tab" data-toggle="tab" aria-selected="false">
                                            Completed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="statement-table purchase-table table-responsive mb-2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Amount/ <br> Mode</th>
                                            
                                            <th scope="col">Number Of <br>Transcript</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html"
                                                                class="d-inline-block primary-color">
                                                                Building Instagram
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span
                                                                class="badge btn bg-success text-white p-1">Completed</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html"
                                                                class="d-inline-block primary-color">
                                                                 Creation Course
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-info text-white p-1">On Hold</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html"
                                                                class="d-inline-block primary-color">
                                                                Affiliates
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-danger text-white p-1">Cancelled</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>#090909</li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="course-details.html" class="d-inline-block">
                                                                <img src="images/small-img.jpg" alt="">
                                                            </a>
                                                            <a href="course-details.html"
                                                                class="d-inline-block primary-color">
                                                                Zero to Hero
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>$79.00</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>July 12, 2019</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><span class="badge bg-danger text-white p-1">Cancelled</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->


@endsection
