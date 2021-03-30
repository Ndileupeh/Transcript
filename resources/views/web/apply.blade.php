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
                            <form action="applycode.php" class="px-0 px-md-5" method='POST'>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="df-control" required id="name" name="name"
                                            placeholder="Name of student *">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="number"
                                            placeholder="Registration Number *">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="faculty"
                                            placeholder="Faculty *">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="department"
                                            placeholder="Department *">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="Degree " required id="Degree" class="df-control">
                                            <option class="df-control">Degree Program</option>
                                            <option value="ls" class="df-control">>>Ls</option>
                                            <option value="bsc" class="df-control">>>BSc</option>
                                            <option value="msc" class="df-control">>>MSc</option>
                                            <option value="phd" class="df-control">>>PhD</option>
    
                                        </select>
                                    </div>
                        
                                    <div class="col-md-4">
                                        <select name="Degree " required id="Degree" class="df-control">
                                            <option class="df-control">Student status</option>
                                            <option value="current" class="df-control">>>Current</option>
                                            <option value="formal" class="df-control">>>Formal</option>
    
    
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="level"
                                            placeholder="Level*">
                                    </div>
    
                                    <div class="col-md-4">
                                        <select name="Degree " required id="Degree" class="df-control">
                                            <option value="0" class="df-control">Mode</option>
                                            <option value="n" class="df-control">>>Normal</option>
                                            <option value="f" class="df-control">>>Fast</option>
                                            <option value="s" class="df-control">>>Super fast</option>
    
    
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="df-control" required id="phone" name="email"
                                            placeholder="Email">
                                    </div>
                
                                    <div class="col-md-4">
                                        <input type="number" class="df-control" required id="phone" name="transnum"
                                            placeholder="Number of transcript">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="amount"
                                            placeholder="Amount">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="df-control" required id="phone" name="signature"
                                            placeholder="Signature">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="df-control" required id="phone" name="amount"
                                            placeholder="Amount">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-5 w-100">
                                        <!-- <input type="submit" name='submit' formaction="payment.php" class="bfs-btn" value="Next"> -->
                                <input type="submit" name='submit' class="bfs-btn" value="Next">
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
    </section>
@endsection