@extends('layouts.app')
    @section('content')
        <div class="jumbotron">
            <div class="container">
                <h1>This is the Book a room page</h1>
                {!!Form::open(['method'=>'POST'])!!}
                    {{Form::hidden('status', '1')}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::label('name', 'Your Name')}}
                                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Your Name'])}}
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('phone', 'Your Phone Number')}}
                                {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'Your Phone Number'])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('email', 'Your Email')}}
                                {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Your Email'])}}
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('nic', 'Your NIC')}}
                                {{Form::text('nic', '', ['class'=>'form-control', 'placeholder'=>'Your National Identity Card Number'])}}
                            </div>
                            <div class="col-md-2">
                                    {{Form::label('cid', 'Check In Date')}}
                                    {{Form::date('cid', '', ['class'=>'form-control', 'placeholder'=>'Your Check In Date'])}}
                                </div>
                                <div class="col-md-2">
                                    {{Form::label('cod', 'Check Out Date')}}
                                    {{Form::date('cod', '', ['class'=>'form-control', 'placeholder'=>'Your Check Out Date'])}}
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('nonac', 'Number of non A/C rooms')}}
                                {{Form::number('nonac', '', ['class'=>'form-control', 'min'=>'0', 'placeholder'=>'Number Of non A/C Rooms Purchasing'])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('acRoom', 'Number of A/C rooms')}}
                                {{Form::number('acRoom', '', ['class'=>'form-control', 'min'=>'0', 'placeholder'=>'Number Of A/C Rooms Purchasing'])}}
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                    {{Form::submit('BOOK ROOMS', ['class'=>'btn btn-outline-dark'])}}
                {!!Form::close()!!}
            </div>
        </div>
    @endsection