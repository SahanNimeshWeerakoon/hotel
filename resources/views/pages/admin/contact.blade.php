@extends('layouts.app')
    @section('content')
        <div class="container">
            <h1>INQUIRIES</h1>
            @if (count($inquiries)>0)
                <table class="table table-info">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th></th>
                    </tr>
                    @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{$inquiry->created_at}}</td>
                        <td>{{$inquiry->name}}</td>
                        <td>{{$inquiry->message}}</td>
                        <td>
                            <a href="/admincontact/{{$inquiry->id}}" class="btn btn-outline-danger">REMOVE</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            @endif
        </div>
    @endsection