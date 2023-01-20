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
            <button type="submit" class="cmn-btn" id="register-btn">Sign Up</button>
        </div>
    </form>
@endsection
