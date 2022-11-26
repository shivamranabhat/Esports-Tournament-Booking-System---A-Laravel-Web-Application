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
            <button type="submit" class="cmn-btn">Sign In</button>
        </div>
    </form>
@endsection

