@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h6><a href="">New Booking</a> / <a href="">Search result<a> / New Customer</h6>
            </div>
            <!--  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
            </div> -->
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


    {!! Form::open(array('route' => 'bookings.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Customer Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Customer Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>ID No:</strong>
                {!! Form::text('id_no', null, array('placeholder' => 'ID No','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Customer Address:</strong>
                {!! Form::text('address', null, array('placeholder' => 'Customer Address','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>No of Guests:</strong>
                {!! Form::text('guests', null, array('placeholder' => 'No of guests','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Extras:</strong>
                {!! Form::text('extras', null, array('placeholder' => 'Extras','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Paid:</strong>
                {!! Form::text('paid', null, array('placeholder' => 'Paid','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-primary">Create New Customer</button>
        </div>
    </div>
    {!! Form::close() !!}
    

</div>
@endsection