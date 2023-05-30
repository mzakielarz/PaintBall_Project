@extends('layout')

@section('title','Registration')
@section('content')
    <div class='container'>
        <form class="ms-auto me-auto mt-3" style="width: 400px">
            <div class="mb-3">
              <label class="form-label" style="color: aliceblue">Full Name</label>
              <input type="email" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: aliceblue">Email address</label>
                <input type="email" class="form-control" name="email">

              </div>
            <div class="mb-3">
              <label class="form-label" style="color: aliceblue">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
           <a href="{{route('login')}}" ><button type="submit" class="btn btn-primary">Submit</button></a>
          </form>
    </div>

@endsection
