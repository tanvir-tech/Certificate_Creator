@extends('master/master')
@section("content")


<div class="container p-5 ">
    @if(Session::has('user'))
    <h3 class="text-center">
        Welcome {{Session::get('user')['name']}}.
    </h3>
    <div class="row p-1 d-flex justify-content-center">
        @foreach ($events as $event)
        <div class="card text-center col-sm-3 m-1 gradient-cart ">
          <div class="card-header text-light">
            Event id : {{$event['id']}}
            <br>
            Title : {{$event['title']}}
            <br>
          </div>
          {{-- image-link  --}}
          {{-- <img class="card-img-top img-thumbnail" src="{{asset('gallery/'.$event['gallery'])}}" alt="Card image cap"> --}}
          <div class="card-body bg-secondary text-white">

            <h5 class="card-title">{{$event['description']}}</h5>

            <p class="card-text">
                Date : {{$event['date']}}
                <br>
                Time : {{$event['time']}}
                <br>
                Venue : {{$event['venue']}}

            </p>
            <a href="detail/{{$event['id']}}" class="btn btn-warning btn-sm">Detail</a>
          </div>
          <div class="card-footer text-danger">{{$event['fee']}} BDT</div>
        </div>



        @endforeach


    </div>
@else
    <h3 class="text-center">
        <a class="nav-link" href="/login">Login to participate</a>
    </h3>
@endif

</div>


@endsection
