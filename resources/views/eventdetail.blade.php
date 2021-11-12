@extends('master/master')
@section("content")


    <div class="row p-5">

        <div class="col-lg-6">
            {{-- <img src="{{asset('gallery/'.$item['gallery'])}}" alt="Product Image"> --}}
            {{$event['title']}}
        </div>

        <div class="col-lg-6">



            <h2 class="text-primary">{{$event['title']}}</h2>
            <p>{{$event['description']}}</p>
            <h5 class="text-danger">{{$event['fee']}} BDT</h5>
            <p class="card-text">
                Date : {{$event['date']}}
                <br>
                Time : {{$event['time']}}
                <br>
                Venue : {{$event['venue']}}

            </p>

            {{-- <a href="#" class="btn btn-success btn-sm">Buy now</a><br><br> --}}

<form action="/participate" method="POST">
            @csrf
            <input type="hidden" name="event_id" value={{$event['id']}}>
            <button class="btn btn-warning" type="submit">Participate</button>
            {{-- <a href="cart/{{$item['id']}}" class="btn btn-warning btn-sm">Add to CART</a> --}}
</form><br><br>

            <a href="/home" class="btn btn-info btn-sm rounded-circle">Go back</a>



        </div>
    </div>




@endsection
