@extends('master/master')
@section("content")

<div class="container p-5">

    <h3 class="text-center text-info">Participants List </h3>
    <table class="table table-striped">
        <thead class="bg-info text-white">
            <tr>
                <th scope="col">Record ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Paid</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Send Email</th>
            </tr>
        </thead>
        <tbody>

    @foreach ($records as $record)

    <tr>
        <th scope="row">{{$record->id}}</th>
        <td>{{$record->name}}</td>
        <td>{{$record->phone}}</td>
        <td>{{$record->paid}}</td>
        <td>{{$record->transaction_id}}</td>
        <td>
            <a href="sendmail/{{$record->id}}" class="text-white btn btn-danger">Message</a>
        </td>
    </tr>

    @endforeach



        </tbody>
    </table>



</div>
@endsection
