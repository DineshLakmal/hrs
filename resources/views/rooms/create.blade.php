@extends('layouts.app')


@section('content')
<div class="container">
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <h6><a class="" href="{{ route('rooms.index') }}"> View All rooms</a> / Add New Room</h6>
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


    {!! Form::open(array('route' => 'rooms.store','method'=>'POST')) !!}
         @include('rooms.form')
    {!! Form::close() !!}
</div>
@endsection