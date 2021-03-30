@extends('layout.footer')
@section('body')
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href="index.html">
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_clubinfo.html">
                                <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                <span class="mm-text">Club Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="packages.html">
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href="personal_training.html">
                                <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                <span class="mm-text">Personal Training</span>
                            </a>
                        </li>
                        <li class="menu-dropdown active">
                            <a href="#">
                                <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                <span class="mm-text">News</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active">
                                    <a href="news.html">
                                        <i class="text-primary menu-icon fa fa-inbox"></i> News
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_addnews.html">
                                        <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                <span class="mm-text">Events</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="events_list.html">
                                        <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                    </a>
                                </li>
                                <li>
                                    <a href="event_item.html">
                                        <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                <span class="mm-text">Course Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="admin_courseschedule.html">
                                        <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href="courses.html">
                                        <i class="text-success fa fa-fw fa-indent"></i> Courses
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_rooms.html">
                                        <i class="text-info fa fa-fw fa-star"></i> Rooms
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_trainers.html">
                                        <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Users</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="admin_userlist.html">
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_userprofile.html">
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="add_users.html">
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_userpayment.html">
                                        <i class="text-danger fa fa-fw fa-money"></i> Payments
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_coupon.html">
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Gallery</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="add_gallery.html">
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_timings.html">
                                <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                <span class="mm-text">Class Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_login.html">
                                <i class="text-danger menu-icon fa fa-sign-in"></i>
                                <span class="mm-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="404.html">
                                <i class="text-warning menu-icon fa fa-anchor"></i>
                                <span class="mm-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank.html">
                                <i class="text-default menu-icon fa fa-file-o"></i>
                                <span class="mm-text">Blank</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-primary menu-icon fa fa-sitemap"></i>
                                <span class="mm-text">Menu Levels</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-danger fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                <span class="mm-text">FAQ</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="faq.html">
                                        <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                    </a>
                                </li>
                                <li class="active" id="active">
                                    <a href="add_faq.html">
                                        <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> News
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!--section ends-->
    <!-- /.content -->
    <!-- ./wrapper -->
    <!-- global js -->
    
@endsection