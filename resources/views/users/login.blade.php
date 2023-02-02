@extends('layouts.layout')
@section('title','Login')
@section('page-name')
    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input placeholder="Enter your Email" type="email" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
         @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input placeholder="Enter your password" type="password" id="password" name="password" value="{{old('password')}}">
            @error('password')
            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
         @enderror
        </div>
        <div class="form-group recover">
            <p>Forgot your password? <a href="#">Recover Password</a></p>
        </div>
        <div class="form-group">
            <button type="submit" class="rounded cmn-btn">Sign In</button>
        </div>
    </form>
    <div class="or">
        <p>And</p>
    </div>
    <div class="sign-in">
        <p>Follow Us on</p>
    </div>
    <div class="reg-with">
        <div class="social-area d-flex justify-content-center">
            <a href="javascript:void(0)"><img src="images/social-icon-1.png" alt="image"></a>
            <a class="google" href="javascript:void(0)"><img src="images/instagram.png" alt="image"></a>
            <a class="google" href="javascript:void(0)"><img src="images/twitter.png" alt="image"></a>
        </div>
    </div>
    <div class="account">
        <p>Already have an account? <a href="/register">Sign Up</a></p>
     </div>
@endsection

