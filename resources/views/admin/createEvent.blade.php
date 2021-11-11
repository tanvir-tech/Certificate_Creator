@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-info text-white rounded">
        <form action="createEvent" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Create a new event</h3>
        <br>
{{-- input  --}}
        <input class="form-control mr-sm-2" type="text" placeholder="Title" name="title">
        <br>
        <textarea class="form-control" id="description" name="description" rows="8"></textarea>
        <br>
        <input type="date" placeholder="Date" name="date">
        &nbsp
        <input type="time" placeholder="time" name="time">
        <br>
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="Venue" name="venue">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="fee" name="fee">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="coupon" name="coupon">
        <br>

        {{-- submit  --}}
        <button class="btn btn-success" type="submit">Create</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>











@endsection
