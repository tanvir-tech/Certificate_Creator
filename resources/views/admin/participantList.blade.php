@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="container p-5">

    <h3 class="text-center text-warning">Participant List</h3>
    <table class="table table-striped">
        <thead class="bg-warning text-white">
            <tr>
                <th scope="col">Participant ID</th>
                <th scope="col">Event Name</th>
                <th scope="col">Phone NO</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>

    {{-- @foreach ($notices as $notice)

    <tr>
        <th scope="row">{{$notice['id']}}</th>
        <td>{{$notice['title']}}</td>
        <td>{{$notice['department']}}</td>
        <td>
            <a href="deleteNotice/{{$notice['id']}}" class="text-white btn btn-danger">Delete</a>
        </td>
    </tr>

    @endforeach --}}

    <tr>
        <th scope="row">1</th>
        <td>IT quize</td>
        <td>0126768464</td>
        <td>paid</td>
        <td>
            <a href="deleteNotice/#" class="text-white btn btn-danger">Delete</a>
            <a href="deleteNotice/#" class="text-white btn btn-success">Message</a>
        </td>
    </tr>



        </tbody>
    </table>



</div>


</div>
@endsection
