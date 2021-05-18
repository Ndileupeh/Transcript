@extends('layout.app')
@section('body')
    <section class="booking-area">
        <div class="container card  shadow border-0">
            <div class="booking-form">
                <div class="section-titleV2">
                    <br>
                    <h3>Apply now</h3>
                    <a href="index.php">
                        <p>More information</p>
                    </a>
                </div>
                <div class="bform">
                    <form class="px-0 px-md-5" method='post'>
                        @csrf
                        <div id="transcript_details" class="row">
                            <div class="col-md-8">
                                <input type="text" class="df-control" required id="name" name="name"
                                    placeholder="Name of student *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" required id="" name="matricule"
                                    placeholder="Registration Number *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" required id="" name="faculty" placeholder="Faculty *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" required id="" name="department"
                                    placeholder="Department *">
                            </div>
                            <div class="col-md-4">
                                <select name="degree" required id="Degree" class="df-control">
                                    <option class="df-control">Degree Program</option>
                                    <option value="Ls" class="df-control">>>Ls</option>
                                    <option value="BSc" class="df-control">>>BSc</option>
                                    <option value="MSc" class="df-control">>>MSc</option>
                                    <option value="phD" class="df-control">>>PhD</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select name="status" required id="status" class="df-control">
                                    <option class="df-control">Student status</option>
                                    <option value="current" class="df-control">>>Current</option>
                                    <option value="former" class="df-control">>>Former</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" required id="level" name="level" placeholder="Level*">
                            </div>

                            <div class="col-md-4">
                                <select name="mode" required id="mode" class="df-control">
                                    <option value="" class="df-control">Mode</option>
                                    <option value="normal" class="df-control">>>Normal</option>
                                    <option value="fast" class="df-control">>>Fast</option>
                                    <option value="superfast" class="df-control">>>Super fast</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="df-control" required id="" name="email" placeholder="Email">
                            </div>

                            <div class="col-md-4">
                                <input type="number" class="df-control" required id="" name="number"
                                    placeholder="Number of transcript">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="df-control" required id="" name="amount" placeholder="Amount">
                            </div>
                            

                            <div class="col-md-4">
                                <label for="myCheck" class="text-warning py-2 text-center">Where will you like to collect your transcript: <input type="checkbox" id="myCheck" onclick="myFunction()"></label>
                                
                            </div>
                                <div id="text" style="display:none" class="col-md-8">
                                    <div class="col-md-12">
                                        <input type="location" class="df-control" id="" name="location"
                                            placeholder=" Enter location">
                                    </div> 
                               
                                <div class="col-md-12">
                                    <input type="address" class="df-control" id="" name="address"
                                        placeholder="address for delivery">
                                </div>   
                            </div>
                        </div>

                        <div id="payent_method" class="row d-none ">
                            <div class="col-md-12">
                                <br><br>
                                <h3 class="text-center">Select a payment method below to pay for your transcript
                                    <br><a href="{{ route('home') }}" class="text-center text-warning ">Click here to learn more about
                                        Platform Service Charge</a> <br><br><br><br>
                                    </h3>
                            </div>
            
            
                            <div class="col-md-6 my-4">
                                <label for='momo1' class="shadow" id="momo">
                                    <img class="w-100" src="assets/img/momo.jpeg" alt="">
                                    <h3 class="text-center  py-5 text-dark"> pay with momo </h3>
                                </label>
                                <input type="radio" checked name="method" class="d-none toggler" id="momo1" value="momo">
                            </div>
                            
                            <div  class="col-md-6 my-4">
                                <label for='orange1' id="orange">
                                    <img class="w-100" src="assets/img/orange.jpg" alt="">
                                    <h3 class="text-center py-5 text-dark"> pay with orange</h3>
                                </label>
                                <input type="radio" name="method" class="d-none toggler" id="orange1" value="orange">
                            </div>

                            <div class="col-md-12">
                                <input type="number" class="df-control" required id="" name="number"
                                    placeholder="Enter phone number to process payment with">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-5 w-100">
                            <button id="next" type="button" class="bfs-btn">NEXT</button>
                        </div>

                        <div class="d-flex justify-content-between mt-5 w-100">
                            <button id="previous" type="button" class="bfs-btn d-none">PREVIOUS</button>
                            <button id="submit" type="submit" class="bfs-btn d-none">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('script')

<script>
    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

    $('#next , #previous').on('click', function(){
        $('#payent_method').toggleClass('d-none');
        $('#transcript_details').toggleClass('d-none');
        $('#next').toggleClass('d-none');
        $('#previous').toggleClass('d-none');
        $('#submit').toggleClass('d-none');
    })

    $('.toggler').on('change', function(){
        val = $(this).val();
        $('#momo, #orange').removeClass('shadow');
        $('#'+val).addClass('shadow');
    })

</script>
@endsection
