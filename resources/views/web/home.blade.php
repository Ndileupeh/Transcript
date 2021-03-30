@extends('layout.app')
{{-- @section('bod') --}}


<section class="hero-area heroV2">
    <img src="assets/img/graphic/hero-2.png" alt="" class="hero-graphic-bg wow fadeInDown" data-delay=".99s"
        data-wow-duration="2s">
    <div class="container">
        <div class="hero-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h2 class="wow fadeInUp" data-delay=".5s">We belive good food offer great smile</h2>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-delay=".99s">The Dfoody is a
                            neighborhood restaurant serving
                            seasonal global cuisine driven by the faire.</p>
                        <a href="#consult" class="btn-style-a smoothscroll wow fadeInUp" data-delay="0.85s">BOOK A
                            TABLE</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-img">
                        {{-- <img src="assets/img/section-img/hero2.png" alt="" class="wow slideInUp" data-wow-duration="2s" --}}
                        {{-- data-delay=".99s"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about2-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about2-img">
                    <img src="assets/img/section-img/about-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-text about1-text a2text">
                    <div class="section-titleV2">
                        <h3>About Dfoddy</h3>
                    </div>
                    <p>Dfoody is a place where cooked food is sold to the public, and where people sit down to eat
                        it. It is also a place where people go to enjoy the time and to eat a meal. Some restaurants
                        are a chain, meaning that there are restaurants which have the same name and serve and where
                        people the same food. time and to eat a meal. Some restaurants are a chain, time and to eat
                        a meal. Some restaurants are a chain.</p>
                    <a href="#" class="btn-style-b">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="most-popular-food-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-titleV2">
                    <h3>Most Popular Food</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="most-poplar-food-wrappper">
                    <div class="popular-food-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-food-box">

                                <div class="sbf-info">
                                    <h4 class="single-reserve-contact">Normal Mode</h4>
                                    <ul class="sbfi-ratings">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>


                                    <div class="single-reserve-contact">
                                        <h5 class="text-success">Current Students:</h5>
                                        <p>1000CFA</p>
                                    </div>
                                    <div class="single-reserve-contact">
                                        <h5 class="text-success">Formal Student:</h5>
                                        <p> 2000CFA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-food-box">
                                <div class="sbf-info">
                                        <h4 class="single-reserve-contact">Normal Mode</h4>
                                        <ul class="sbfi-ratings">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
    
    
                                        <div class="single-reserve-contact">
                                            <h5 class="text-success">Current Students:</h5>
                                            <p>2000CFA</p>
                                        </div>
                                        <div class="single-reserve-contact">
                                            <h5 class="text-success">Formal Student:</h5>
                                            <p> 3000CFA</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-food-box">
                                <div class="sbf-info">
                                        <h4 class="single-reserve-contact">SuperFast Mode</h4>
                                        <ul class="sbfi-ratings">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
    
    
                                        <div class="single-reserve-contact">
                                            <h5 class="text-success">Current Students:</h5>
                                            <p>3000CFA</p>
                                        </div>
                                        <div class="single-reserve-contact">
                                            <h5 class="text-success">Formal Student:</h5>
                                            <p> 5000CFA</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 
<section class="food-video-area fva-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="youtube-videoplay-button">
                    <a class="button is-play btn-Vplay play-1" href="https://www.youtube.com/watch?v=pIuCqUnvHdk">
                        <div class="button-outer-circle has-scale-animation"></div>
                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                        <div class="button-icon is-play">
                            <svg height="100%" width="100%" fill="#b99165;">
                                <polygon class="triangle" points="5,0 30,15 5,30"></polygon>
                                <path class="path" d="M5,0 L30,15 L5,30z" fill="none" stroke="#b99165;"
                                    stroke-width="1"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="testimonial2-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial2-img">
                    <img src="assets/img/section-img/testimonial2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-titleV2">
                    <h3>Our Customer Says</h3>
                </div>
                <div class="testimonial-wrapper wow fadeIn" data-wow-delay=".50s">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="st-text">
                                    <p>We visited this place for breakfast and dinner. The place is very
                                        conveniently located (on the highway ) with ample parking space. The food at
                                        both the meals was tasty and definitely worth the price. Good quantity
                                        served per portion. Service as also good.</p>
                                    <h4>Thomas Paul <span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="st-text">
                                    <p>We visited this place for breakfast and dinner. The place is very
                                        conveniently located (on the highway ) with ample parking space. The food at
                                        both the meals was tasty and definitely worth the price. Good quantity
                                        served per portion. Service as also good.</p>
                                    <h4>Thomas Paul <span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="st-text">
                                    <p>We visited this place for breakfast and dinner. The place is very
                                        conveniently located (on the highway ) with ample parking space. The food at
                                        both the meals was tasty and definitely worth the price. Good quantity
                                        served per portion. Service as also good.</p>
                                    <h4>Thomas Paul <span>Customer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="booking-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="booking-form">
                    <img src="assets/img/bg/booking-form-bg.jpg" alt="" class="bform-bg">
                    <div class="section-titleV2">
                        <h3>Make A reservation</h3>
                        <p>You can call us directly at 888-88888</p>
                    </div>
                    <div class="bform">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="df-control" id="name" name="name" placeholder="Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="df-control" id="phone" name="phone" placeholder="Phone *">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="df-control" id="date" name="date">
                                </div>
                                <div class="col-md-6">
                                    <select name="time" id="time" class="df-control">
                                        <option value="0">00.00</option>
                                        <option value="1">01.00</option>
                                        <option value="2">02.00</option>
                                        <option value="3">03.00</option>
                                        <option value="4">04.00</option>
                                        <option value="5">05.00</option>
                                        <option value="6">06.00</option>
                                        <option value="7">07.00</option>
                                        <option value="8">08.00</option>
                                        <option value="9">09.00</option>
                                        <option value="10">10.00</option>
                                        <option value="11">11.00</option>
                                        <option value="12">12.00</option>
                                        <option value="13">13.00</option>
                                        <option value="14">14.00</option>
                                        <option value="15">15.00</option>
                                        <option value="16">16.00</option>
                                        <option value="17">17.00</option>
                                        <option value="18">18.00</option>
                                        <option value="19">19.00</option>
                                        <option value="20">20.00</option>
                                        <option value="21">21.00</option>
                                        <option value="22">22.00</option>
                                        <option value="23">23.00</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="df-control" id="seat" name="seat" placeholder="Seat *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="df-control" id="email" name="email"
                                        placeholder="Email *">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="msg" id="msg" class="df-control" placeholder="Message *"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="bfs-btn" value="Submit Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @endsection --}}
