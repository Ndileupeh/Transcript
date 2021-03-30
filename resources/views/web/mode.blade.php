@extends('layout.app')
@section('body')
    <section class="booking-area">
        <div class="container card shadow border-0">
            <div class="row booking-form ">
                <div class="col-md-12">
                    <br><br>
                    <h3 class="text-center">Select a payment method below to pay for your transcript
                        <br><a href="{{ route('home') }}" class="text-center text-warning ">Click here to learn more about
                            Platform Service Charge</a> <br><br><br><br>
                        </h3>

                </div>


                <div class="col-md-6 my-4">

                    <div class="shadow" data-toggle="modal" data-target="#myModal">
                        <img class="w-100" src="assets/img/momo.jpeg" alt="">
                        <h3 class="text-center  py-5 text-dark"> pay with momo </h3>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="shadow" data-toggle="modal" data-target="#myModal2">
                        <img class="w-100" src="assets/img/orange.jpg" alt="">
                        <h3 class="text-center py-5 text-dark"> pay with orange</h3>
                    </div>


                </div>
            </div><br>
            <div class="d-flex justify-content-center pb-5 mt-5 w-100">
                <a href="{{ route('payment') }}">
                    <input type="submit" name='submit' class="bfs-btn" value="<-Back"></a>
                <p></p>

            </div>
        </div>
    </section>
    <div class="container">


        <!-- The Modal -->
        <div class="modal " id="myModal">
            <div class="modal-md modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <p class="modal-title text-center text-warning">Make Payments</p>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="bform py-5 card shadow border-0">
                            <div class="preloader"></div>
                            <h3 class='text-center text-warning'>You have 120 seconds to approve payment using your mobile
                                phone <br><br></h3>
                            <p class='text-center'>Enter Momo Number : </p>
                            <form action="applycode.php"
                                class="py-5 d-flex flex-column align-items-center jutify-content-center mx-4 mx-md-5"
                                method='POST'>
                                <div class="">


                                    <div class="col-md-12">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">

                                                <div class="input-group-text">(+237)</div>
                                                <input type="number" class="df-control" name="momo_number" id="momo_number"
                                                    placeholder="Mobile Money Number">
                                            </div>


                                        </div>
                                    </div>
                                    <div
                                        class="py-5 d-flex flex-column align-items-center jutify-content-center mx-4 mx-md-5">
                                        <input type="submit" name='submit' class="bfs-btn " value="Make Payment">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-warning" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- The Modal -->
    <div class="modal " id="myModal2">
        <div class="modal-md modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header pb-2">
                    <p class="modal-title text-center text-warning">Make Payments</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="bform py-5 card shadow border-0">
                        <div class="preloader"></div>
                        <h3 class='text-center text-warning'>You have 120 seconds to approve payment using your mobile
                            phone <br><br></h3>
                        <p class='text-center'>Enter Momo Number : </p>
                        <form action="applycode.php"
                            class="py-5 d-flex flex-column align-items-center jutify-content-center mx-4 mx-md-5"
                            method='POST'>
                            <div class="">


                                <div class="col-md-12">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">

                                            <div class="input-group-text">(+237)</div>
                                            <input type="number" class="df-control" name="momo_number" id="momo_number"
                                                placeholder="Mobile Money Number">
                                        </div>


                                    </div>
                                </div>
                                <div
                                    class="py-5 d-flex flex-column align-items-center jutify-content-center mx-4 mx-md-5">
                                    <input type="submit" name='submit' class="bfs-btn " value="Make Payment">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn bfs-btn btn-warning" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>


@endsection
