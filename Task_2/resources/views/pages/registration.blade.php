@extends('layouts.app')
@section('content')
    <form action="{{route('registration')}}" class="col-md-6" method="post">
            {{csrf_field()}}
            
            <div class="col-md-6 form-group">
                <span>Fast name</span>
                <input type="text" name="fname" value="{{old('fname')}}" class="form-control">
                @error('fname')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <span>Last name</span>
                <input type="text" name="lname" value="{{old('lname')}}" class="form-control">
                @error('lname')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <span>Address</span>
                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                @error('address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <span>Email</span>
                <input type="text" name="email" value="{{old('email')}}"class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <span>Phone</span>
                <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <span>Username</span>
                <input type="text" name="username" value="{{old('username')}}"class="form-control">
                @error('username')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <span>Password</span>
                <input type="password" name="password" value="{{old('password')}}"class="form-control">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <span>Confirm Password</span>
                <input type="password" name="conpassword" value="{{old('conpassword')}}" class="form-control">
                @error('conpassword')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <span>Date of Birth</span>
                <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                @error('dob')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <br>
            <input type="submit" class="btn btn-success" value="Signup" >
    </form>

@endsection