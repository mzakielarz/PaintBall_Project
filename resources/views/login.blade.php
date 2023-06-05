@extends('layout')

@section('title','Login')

@section('content')
    <div class='container-fluid' style="background-image: url('img/delfinisko.jpg'); background-size: cover; height: 100vh;">
        <div class="row justify-content-center align-items-center" style="height: 80vh;">
            <form class="ms-auto me-auto" style="width: 400px" action="/usersMenu" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(0, 0, 0)">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:rgb(0, 0, 0)">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
