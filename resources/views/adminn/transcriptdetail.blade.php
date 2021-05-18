@extends('layout.header')
@section('body')


    <div class="dashboard-content-wrap">
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Applied Transcript</h3>
                        </div>
                        <div class="card-box-shared-body clearfix">
                            <div class="section-tab section-tab-2 float-right py-3">
                                <ul class="nav nav-tabs" role="tablist" id="review">
                                    <li role="presentation">
                                        <a href="#report" role="tab" data-toggle="tab" aria-selected="false">
                                            All transcript
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Amount/ <br> Mode</th>

                                            <th scope="col">Number Of <br>Transcript</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Barcode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transcripts as $transcript)
                                            <tr>
                                                <th scope="row">
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->id }}</li>
                                                        </ul>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->name }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->matricule }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->email }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->amount }} / {{ $transcript->mode }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->number }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{ $transcript->created_at->format('d/m/Y') }}</li>
                                                        </ul>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>
                                                                @if ($transcript->transcriptstatus == 'Pending')
                                                                    <span
                                                                        class="badge btn bg-danger text-white p-1">Pending</span>
                                                                @elseif($transcript->transcriptstatus == 'Processing')
                                                                    <span
                                                                        class="badge btn bg-warning text-white p-1">Processing</span>
                                                                @elseif($transcript->transcriptstatus == 'Completed')
                                                                    <span
                                                                        class="badge btn bg-success text-white p-1">Completed</span>
                                                                @else
                                                                    <span
                                                                        class="badge btn bg-success text-white p-1">Completed</span>
                                                                @endif


                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm text-white btn-danger">VIEW</a>
                                                </td>

                                                <td>
                                                    <div class="statement-info">
                                                        <a class="btn btn-sm text-white btn-success" data-toggle="modal"
                                                            data-target="#myModal2" id="btn_generate">Barcode</a>
                                                    </div>
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

    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                    <h4 class="modal-title text-center"> Verify Email</h4>
                </div>
                <div class="modal-body">
                    <br>
                    <section class="testimonial-area section-bg padding-top-120px padding-bottom-110px">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-heading text-center">
                                        <h5 class="section__meta">Email</h5>

                                        <div class="statement-info">
                                            <ul class="list-items">
                                                <li id="text_input">{{ $transcript->name }}</li>
                                            </ul>
                                        </div>
                                        <br>
                                        {{-- <svg id="barcode"></svg> --}}
                                        <h3 class='text-center'></h3>


                                        <span class="section-divider"></span>
                                        <a href=""><input type="button" value='print' class="btn btn-success btn-xm"></a>
                                    </div><!-- end section-heading -->

                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

        <script type="text/javascript">
		
            document.getElementById("btn_generate").addEventListener('click', function(){
                var text = document.getElementById('text_input').value;
                JsBarcode("#barcode", text);
            });
        </script>
</div @endsection
