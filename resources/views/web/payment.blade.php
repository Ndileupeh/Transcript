<!DOCTYPE html>
<html lang="en">

@extends('layout.app')
@section('body')

    <section class="booking-area">
        <div class="container card shadow border-0 ">
            <div class="row booking-form ">
                <div class="col-md-12 ">
                    
                    <div class="section-titleV2 py-5">
                        <br>
                        <h3 class="wow fadeInUp" data-wow-duration="2s" data-delay=".99s">Select a payment method below to pay for your transcript</h3>
                            <br><a href="{{route('home')}}" class="text-center text-warning py-5 ">Click here to learn more about
                                Platform Service Charge</a> 
                        
                    </div>
                    <h3 class="text-center text-grey ">
                        </h3>

                </div>


                <div class="col-md-6 py-5">
                    <a href="{{ route('mode')}}">
                        <div class="">
                            <img src="assets/img/payamgo-logo-on-app.png" alt="" width="420px" height="250px">
                            <h3 class="text-center shadow  py-5 text-dark"> pay with payamGo </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 py-5">
                    <a href="">
                        <div class="">
                            <img src="assets/img/express_exchange.png" alt="" width="424px" height="410px">
                            <h3 class="text-center shadow py-5 text-dark"> pay with payamGo</h3>
                        </div>
                    </a>

                </div>
            </div><br>
            <div class="d-flex justify-content-center py-5 mt-5 w-100">
                <a href="{{ route('apply') }}">
                    <input type="submit" name='submit' class="bfs-btn" value="<-Back"></a>
                <p></p>

            </div>
        </div>
    </section>

@endsection

        
</body>
</html>
