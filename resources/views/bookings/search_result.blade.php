@extends('layouts.app')


@section('content')
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h6><a href="">New Booking</a> / Search result</h6>
                </div>
               <!--  <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('bookings.create') }}"> Create New Booking</a>
                </div> -->
            </div>
        </div>
        <br>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        {!! Form::open(array('url' => 'bookings/create_customer','method'=>'POST','class'=>'')) !!}
        <table class="table table-bordered">
        <tr>
            <th>Select</th>
            <th>Room No</th>
            <th>Room Type</th>
            <th>Room Price</th>
            <th>Floor</th>
            <th>Room Status</th>
        </tr>
        @foreach ($rooms as $rm)
        <tr>
            <td>
                <div class="checkbox">
                  <label><input type="checkbox" name="room_id[]" value="{{ $rm->id}}"></label>
                </div>
            </td>
            <td>{{ $rm->room_no}}</td>
            <td>{{ $room_types[$rm->room_types_id] }}</td>
            <td>{{ $rm->room_price}}</td>
            <td>{{ $rm->floor}}</td>
            <td>Clean</td>
        </tr>
        @endforeach
        </table>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="" align="right">
                    <button type="submit" class="btn btn-success">Book Room/Rooms</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
</div>
@endsection