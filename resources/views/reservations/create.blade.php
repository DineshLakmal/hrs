@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Reservation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'reservations.store','method'=>'POST')) !!}
         @include('reservations.form')
    {!! Form::close() !!}
</div>
    


@endsection