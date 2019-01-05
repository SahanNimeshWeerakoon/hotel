<?php 
    $yourName = __('header.yourname');
    $yourNumber = __('header.yourphone');
    $yourEmail = __('header.youremail');
    $yourMessage = __('header.yourmessage');
    $send = __('header.sendInq');
?>

@extends('layouts.app')
    @section('content')
        <div class="jumbotron">
            <h1>This is the contact us page</h1>
            <div class="container">
                {!! Form::open(['method'=>'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', "$yourName")}}
                        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>"$yourName"])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('phone', "$yourNumber")}}
                        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>"$yourNumber"])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', "$yourEmail")}}
                        {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>"$yourEmail"])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('message', "$yourMessage")}}
                        {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>"$yourMessage"])}}
                    </div>
                    {{Form::submit("$send", ['class'=>'btn btn-outline-dark float-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
    @endsection