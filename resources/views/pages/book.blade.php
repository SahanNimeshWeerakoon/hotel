<?php 
    $yourName = __('header.yourname');
    $yourNumber = __('header.yourphone');
    $yourEmail = __('header.youremail');

    $nic = __('header.nic');
    $checkin = __('header.checkin');
    $checkout = __('header.checkout');
    $ac = __('header.acnum');
    $nonac = __('header.nonacnum');
    $book = __('header.reserve');
?>

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
                                {{Form::label('name', "$yourName")}}
                                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>"$yourName"])}}
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('phone', "$yourNumber")}}
                                {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>"$yourNumber"])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('email', "$yourEmail")}}
                                {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>"$yourEmail"])}}
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('nic', "$nic")}}
                                {{Form::text('nic', '', ['class'=>'form-control', 'placeholder'=>"$nic"])}}
                            </div>
                            <div class="col-md-2">
                                    {{Form::label('cid', "$checkin")}}
                                    {{Form::date('cid', '', ['class'=>'form-control', 'placeholder'=>"$checkin"])}}
                                </div>
                                <div class="col-md-2">
                                    {{Form::label('cod', "$checkout")}}
                                    {{Form::date('cod', '', ['class'=>'form-control', 'placeholder'=>"$checkout"])}}
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{Form::label('nonac', "$ac")}}
                                {{Form::number('nonac', '', ['class'=>'form-control', 'min'=>'0', 'placeholder'=>"$ac"])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('acRoom', "$nonac")}}
                                {{Form::number('acRoom', '', ['class'=>'form-control', 'min'=>'0', 'placeholder'=>"$nonac"])}}
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                    {{Form::submit("$book", ['class'=>'btn btn-outline-dark'])}}
                {!!Form::close()!!}
            </div>
        </div>
    @endsection