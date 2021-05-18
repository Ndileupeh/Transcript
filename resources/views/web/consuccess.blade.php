@extends('layout.app')

@section('body')


    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success py-5" role="alert">
                        Your complain has been deliveried successfully!!!!! 
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="section-titleV2">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="bform">
                            @csrf
                            <form class="cf" method="post" action="assets/php/mail.php" id="cf">
                                <input type="text" disabled class="df-control" id="matricule" name="matricule" value="{{$complain->matricule}}">
                                <input type="text" disabled class="df-control" name="faculty" id="faculty" value="{{$complain->faculty}}">
                                <input type="email" disabled class="df-control" id="email" name="email" value="{{$complain->email}}">
                 
                                <textarea id="message" name="message" disabled class="df-control" placeholder="{{$complain->message}}" ></textarea>
                                
                                <div class="cf-msg"></div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="contact-form">
                        <div class="section-titleV2">
                            <h3 >Contact information</h3>
                        </div>
                        <div class="cinfo">
                            <div class="single-reserve-contact">
                                <h4>Address:</h4>
                                <p>University of Buea,
                                    P.O.BOX 63 Buea,<br>
                                    South West Region,
                                    Republic of Cameroon.</p>
                            </div>
                            <div class="single-reserve-contact">
                                <h4>Phone:</h4>
                                <p>(+237) 233322760</p>
                                <p>(+237) 233322760</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    
                    <a href="{{ route('home') }}" class="btn-style-b">Next</a>
                </div>
            </div>
        </div>
    </section>

@endsection
