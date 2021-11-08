@extends('master/master')
@section("content")


<div class="container p-5">
    @if(Session::has('user'))
    <h3 class="text-center">
        Thank you, {{Session::get('user')['name']}} for participating at our seminar.
    </h3>
@else
    <h3 class="text-center">
        <a class="nav-link" href="/registration">Register to participate</a>
    </h3>
@endif

</div>


@endsection
