@extends('layout')

@section('title','Login')

@section('content')
    <div class='container-fluid' style="background-color:rgb(51, 48, 48); background-size: cover; height: 100vh;">
        <div class="row justify-content-center align-items-center" style="height: 80vh;">
            <form class="ms-auto me-auto" style="width: 400px" action="/usersMenu" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(255, 255, 255)">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(255, 255, 255)">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
