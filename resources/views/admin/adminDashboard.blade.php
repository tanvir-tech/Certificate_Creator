@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-4 bg-warning text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/createEvent">Creat an EVENT</a>
        </h1>
    </div>
    <div class="col-lg-4 bg-success text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/participantlist">Participant List</a>
        </h1>
    </div>
    <div class="col-lg-4 bg-warning text-info rounded p-5">
        <h1>
            <a class="nav-link" href="/mailbox">Send Message</a>
        </h1>
    </div>

</div>


<div class="container col-lg-6 bg-warning text-danger p-5">
        <h3>
            <a class="nav-link" href="/sendtopaidusers">Send certificates</a>
        </h3>
        <br><br>
        to all paid participants
</div>










</div>
@endsection
