@extends('layout.app')

@section('body')


    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="section-titleV2">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="bform">
                            
                            <form class="cf" method="post" >
                                @csrf
                                <input type="text" class="df-control"  required id="matricule" name="matricule" placeholder="Matricule *">
                                <input type="text" class="df-control" name="faculty" required id="faculty" placeholder="faculty *">
                                <input type="email" class="df-control" required id="email" name="email" placeholder="Email *">
                                <textarea required id="message" name="message" class="df-control" placeholder="Message *"></textarea>
                                <button type="submit" id="submit" name="submit" class="bfs-btn">Submit
                                    complain</button>
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
            </div>
        </div>
    </section>

@endsection
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
        var user_lat, user_lng;
        var map;
    
        function initMap() {
            map = new google.maps.Map(document.getElementById('googleMap'), {
                center: {
                    lat: -37.815340,
                    lng: 144.963230
                },
                zoom: 15,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: -37.815340,
                    lng: 144.963230
                },
                map: map,
                title: 'Voidcoders'
            });
        }
    </script>