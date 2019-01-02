@extends('layouts.app')
    @section('content')
        <div class="jumbotron">
            <h1>This is the contact us page</h1>
            <div class="container">
                {!! Form::open(['method'=>'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Your Name')}}
                        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Your Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('phone', 'Your Number')}}
                        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'Your Phone Number'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'YourEmail')}}
                        {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Your Email'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('message', 'Your Message')}}
                        {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Your Message'])}}
                    </div>
                    {{Form::submit('SEND THE INQUIRY', ['class'=>'btn btn-outline-dark float-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
    @endsection