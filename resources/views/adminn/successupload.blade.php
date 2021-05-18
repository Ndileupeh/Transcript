<!DOCTYPE html>
<html lang="en">
@extends('layout.another')
@section('content')



    <section class="login-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success " role="alert">
                        <h4 class="text-center">transcript has been uploaded successfully</h4>
                        <p class="text-center">transcript has been uploaded successfully</p>
                    </div>
                </div>
                <div class="col-lg-7 mx-auto">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title text-center">
                            <h3 class="widget-title font-size-25 text-center">Transcript</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="contact-form-action">
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Transcript id<span
                                                        class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="integer" disabled name="transid"
                                                        placeholder="Enter transcript id">
                                                    <span class="la la-envelope input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Upload Image<span
                                                        class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group ">
                                                    <<input type="file" name="image" id="image">


                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-4 "></div>
                                        <div class="col-lg-4 ">
                                            <div class="btn-box">

                                                <a href="{{ route('uploaded') }}"><input class="theme-btn" type="button"
                                                        value="continue" name="submit"></a>

                                                {{-- <button class="theme-btn" type="submit">login account</button> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4 "></div>

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form -->
                        </div>
                    </div>
                </div><!-- end col-lg-7 -->
                <div class="col-lg-4">
                    <img src="assets/img/food-menu/dinner.jpg" alt="logo" width="350px" height="400px">

                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end login-area -->
@endsection

</body>

</html>
