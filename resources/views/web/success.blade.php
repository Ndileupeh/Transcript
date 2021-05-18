@extends('layout.app')
@section('body')
    <section class="booking-area">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary">Toast Header</strong>
              <small class="text-muted">5 mins ago</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              Some text inside the toast body
            </div>
          
        </div>
        <div class="container card  shadow border-0">
            <div class="booking-form">
                <div class="section-titleV2">
                    <br>
                    
                    <h3>Transcript details</h3>
                    <a href="{{ route('home') }}">
                        <p class="text-danger"># : {{ $task->id }}</p>
                    </a>
                </div>

                

                <div class="bform">
                    <form action="#" class="px-0 px-md-5" method='POST'>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="df-control" disabled id="name" value="{{ $task->name }}"
                                    name="name" placeholder="Name of student *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" disabled id="" value="{{ $task->matricule }}"
                                    name="number" placeholder="Registration Number *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" disabled id="" value="{{ $task->faculty }}"
                                    name="faculty" placeholder="Faculty *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" disabled id="" value="{{ $task->department }}"
                                    name="department" placeholder="Department *">
                            </div>
                            <div class="col-md-4">
                                <select name="degree" disabled id="Degree" value="{{ $task->degree }}" class="df-control">
                                    <option class="df-control">{{ $task->degree }}</option>
                                    <option value="ls" class="df-control">>>Ls</option>
                                    <option value="bsc" class="df-control">>>BSc</option>
                                    <option value="msc" class="df-control">>>MSc</option>
                                    <option value="phd" class="df-control">>>PhD</option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <select name="status" disabled id="Degree" class="df-control">
                                    <option class="df-control">{{ $task->status }}</option>
                                    <option value="current" class="df-control">>>Current</option>
                                    <option value="formal" class="df-control">>>Formal</option>


                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="df-control" disabled id="" value="{{ $task->level }}"
                                    name="level" placeholder="Level*">
                            </div>

                            <div class="col-md-4">
                                <select name="mode" disabled id="Degree" class="df-control">
                                    <option value="0" class="df-control">{{ $task->mode }}</option>
                                    <option value="n" class="df-control">>>Normal</option>
                                    <option value="f" class="df-control">>>Fast</option>
                                    <option value="s" class="df-control">>>Super fast</option>


                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="df-control" value="{{ $task->email }}" disabled id=""
                                    name="email" placeholder="Email">
                            </div>

                            <div class="col-md-4">
                                <input type="number" class="df-control" value="{{ $task->number }}" disabled id=""
                                    name="transnum" placeholder="Number of transcript">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="df-control" disabled value="{{ $task->amount }}" id=""
                                    name="amount" placeholder="Amount">
                            </div>



                            {{-- "d-flex justify-content-center mt-5 w-100" --}}
                            <div class="col-md-12 d-flex justify-content-center mt-5 ">
                                <!-- <input type="submit" name='submit' formaction="payment.php" class="bfs-btn" value="Next"> -->
                                <input type="submit" name='payment' class="bfs-btn btn-success border-succes"
                                    value="SAVE DETAILS">
                            </div>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content card  shadow border-0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                    <h4 class="modal-title">Pay for notifications</h4>
                </div>
                <div class="modal-body">
                    <section class="choose-area section-padding text-center">

                    </section>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
@endsection
<script>
    $(document).ready(function(){
      $('.toast').toast('show');
    });
</script>

