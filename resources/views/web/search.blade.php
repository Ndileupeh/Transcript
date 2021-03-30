@extends('layout.app')

@section('body')
    <section class="booking-area">
        <div class="container card shadow border-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="booking-form">
                        <div class="section-titleV2 mb-3">
                            <h3>Enter code</h3>
                            <a class="mb-5" href="index.php">More information</a>

                        </div>
                        <div class="bform">
                            <form action="applycode.php" class="px-0 px-md-5" method='POST'>
                                <div class="d-flex flex-column align-items-center jutify-content-center mx-4 mx-md-5">
                                    <input type="number" class="df-control" required id="name" name="name"
                                        placeholder="Enter code *">
                                    <input type="submit" name='submit' class="bfs-btn" value="Next">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
