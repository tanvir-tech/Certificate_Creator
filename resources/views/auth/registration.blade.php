@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-info text-white rounded">
        <form action="registration" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Participant registration</h3>
        <br>
{{-- input  --}}
        <input class="form-control mr-sm-2" type="text" placeholder="Participant name" name="user">
        <br>
        <input class="form-control mr-sm-2" type="email" placeholder="email id" name="email">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="phone no" name="phone">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="Institution" name="institution">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="Your role in the event" name="role">
        <br>
        <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
        <br>
        {{-- submit  --}}
        <button class="btn btn-success" type="submit">Submit</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>











@endsection
