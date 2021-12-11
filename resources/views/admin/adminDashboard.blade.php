@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-6 jumbotron gradient-admin  text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/createEvent">Creat an EVENT</a>
        </h1>
    </div>
    <div class="col-lg-6 jumbotron gradient-admin  text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/registrationlist">Registration List</a>
        </h1>
    </div>
    <div class="col-lg-6 jumbotron gradient-admin  text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/mailbox">Send Message</a>
        </h1>
    </div>
    <div class="col-lg-6 jumbotron gradient-admin text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/sendtopaidusers">Send certificates</a>
            to all paid participants
        </h1>
    </div>

</div>











</div>
@endsection
