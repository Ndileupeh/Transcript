@extends('layout.another')

@section('content')
<div class="">
    <div class="container-fluid my-5">

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card-box-shared">
                    <div class="card-box-shared-title">
                        <h3 class="widget-title text-center">Delivery Service</h3>
                    </div>
                    <div class="card-box-shared-body clearfix">
                        <div class="section-tab section-tab-2 float-right py-3">
                            <ul class="nav nav-tabs" role="tablist" id="review">
                                <li role="presentation">
                                    <a href="#report" role="tab" data-toggle="tab" aria-selected="true" >
                                        All transcript
                                    </a>
                                </li>
                                
                                <li role="presentation">
                                    
                                    <a class="btn btn-sm py-2 text-white btn-success" onclick="window.print()">Save666</a>
                                        
                                    
                                </li>
                                
                            </ul>
                        </div>
                        <div class="statement-table  purchase-table table-responsive mb-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">N/0</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Date</th>
                                        
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transcripts as $transcript)
                                    <tr>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->id}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->name}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->location}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->email}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->address}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->number}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="statement-info">
                                                <ul class="list-items">
                                                    <li>{{$transcript->created_at->format('d/m/Y')}}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        
                                        <td>
                                           <a class="btn btn-sm text-white btn-danger">VIEW</a>
                                        </td>
                                    </tr>
                                
                                    @endforeach
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