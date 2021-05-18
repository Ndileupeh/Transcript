<!DOCTYPE html>
<html lang="en">
@extends('layout.app')
@section('style')
<style>
    .main{
        background-image: none;
    }
</style>
@endsection
@section('body')

<div class="bform">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success " role="alert">
                <h4 class="text-center pt-4">Check your transcript</h4>
                
            </div>
        </div>
        <div class="col-lg-12 text-center d-flex justify-content-center">
            
            <div class="col-lg-2"></div>
            <div class="col-lg-8 card shadow ">
                
            <img src="{{ asset('upload/trans/' . $task->image)}}" alt="">
        </div>
        <div class="col-lg-2"></div>
        </div>
        <div class="col-md-12 d-flex justify-content-center mt-5 ">
            <div class="col-md-3"></div>
            <!-- <input type="submit" name='submit' formaction="payment.php" class="bfs-btn" value="Next"> -->
            <div class="col-md-4 ">
                <div class="btn-box">
                    <a href="{{route('contact')}}" class="btn theme-btn my-5 py-2 btn-danger text-white">Complain</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-box">
                    <a href="{{route('apply')}}" class="btn theme-btn my-5 py-2 btn-success text-white">OK</a>
                </div>
            </div>
                
        </div>
        
        
        
    </div>
</div>

</body>

</html>
@endsection
