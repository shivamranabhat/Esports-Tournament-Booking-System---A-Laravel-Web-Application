@extends('layouts.layout')
@section('title','Register')
@section('page-name')
    <form method="POST" action="/users">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input placeholder="Enter your Email"  id="email" name="email" type="email" lass="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email">
            @error('email')
               <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input placeholder="Enter your password" id="password" lass="form-control @error('password') is-invalid @enderror" name="password" type="password" value="{{old('password')}}" required autocomplete="new-password">
            @error('password')
            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input placeholder="Confirm your password" id="password_confirmation" name="password_confirmation" type="password" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="rounded cmn-btn" id="register-btn">Sign Up</button>
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
        <p>Already have an account? <a href="/login">Sign In</a></p>
     </div>
@endsection
