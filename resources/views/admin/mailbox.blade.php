@extends('master/master')
@section("content")
<div class="justify-content-center">
    <div class="container text-center p-3">
        <h4>Send Mail</h4>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/sendmailfrombox" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>
            <label for="dept">Target people :</label>
            <select class="form-control col-lg-4" id="paymentstatus" name="paymentstatus">
                <option value=1>Paid</option>
                <option value=0>Unpaid</option>
            </select>
        <br>
        </h3>

        <input type="number" name="eventid" id="eventid" placeholder="Event ID">
        <br>
        <br>
        <textarea class="form-control" id="subject" name="subject" rows="1" placeholder="Subject"></textarea>
        <br>
        <h3>Message :</h3>
        <textarea class="form-control" id="message" name="message" rows="12"></textarea>
        <br>

        <button class="btn btn-success" type="submit">Send Message</button>
    </form>


</div>
@endsection
