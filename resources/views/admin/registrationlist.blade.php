@extends('master/master')
@section("content")



    <h3 class="text-center text-info">Participants List </h3>
    {{-- search  --}}
    <form class="form-inline my-2 my-lg-0" action="searchRegistrationlist" method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Event ID" aria-label="Search" name="query">
        <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br>

    <table class="table table-striped">
        <thead class="bg-info text-white">
            <tr>
                <th scope="col">Record ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                {{-- <th scope="col">Event</th> --}}
                <th scope="col">Paid</th>
                <th scope="col">Payment_Token</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Verified</th>
                <th scope="col">Send Email</th>
            </tr>
        </thead>
        <tbody>

    @foreach ($records as $record)

    <tr>
        <th scope="row">{{$record->id}}</th>
        <td>{{$record->name}}</td>
        <td>{{$record->phone}}</td>
        {{-- <td>#----change----</td> --}}
        <td>{{$record->paid}}</td>
        <td>{{$record->payment_token}}</td>
        <td>{{$record->transaction_id}}</td>
        <td>{{$record->verified}}</td>
        <td>
            {{-- {{$record->id}} --}}
            <a href="mailbox" class="text-white btn btn-warning">Message</a>
            <a href="verify/{{$record->payment_token}}" class="text-white btn btn-success">Verify</a>
        </td>
    </tr>
{{-- @php
    dd($record);
@endphp --}}

    @endforeach



        </tbody>
    </table>


@endsection
