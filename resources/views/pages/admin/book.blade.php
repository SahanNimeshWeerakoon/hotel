@extends('layouts.app')
    @section('content')
        <div class="container">
            <h1>BOOKINGS</h1>
            @if (count($bookings)>0)
                <table class="table table-success">
                    <tr>
                        <th>Booked Date</th>
                        <th>Name</th>
                        <th>Checkin Date</th>
                        <th>Checkout Date</th>
                        <th></th>
                    </tr>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{$booking->created_at}}</td>
                        <td>{{$booking->name}}</td>
                        <td>{{$booking->cid}}</td>
                        <td>{{$booking->cod}}</td>
                        <td>
                            <a href="/adminbook/{{$booking->id}}" class="btn btn-outline-danger">REMOVE</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            @endif
        </div>
    @endsection