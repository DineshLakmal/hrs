@extends('layouts.app')


@section('content')
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h6><a href="">New Booking</a> / Bookings</h6>
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


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Guests</th>
                <th>Extras</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Total Charge</th>
                <th>Paid</th>
                <!-- <th width="280px">Action</th> -->
            </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->name}}</td>
            <td>{{ $booking->guests}}</td>
            <td>{{ $booking->extras}}</td>
            <td>{{ $booking->check_in}}</td>
            <td>{{ $booking->check_out}}</td>
            <td>{{ $booking->total_charge}}</td>
            <td>{{ $booking->paid}}</td>
           
           <!--  <td>
                <a class="btn btn-info" href="{{ route('bookings.show',$booking->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>

     
                {!! Form::open(['method' => 'DELETE','route' => ['bookings.destroy', $booking->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td> -->
        </tr>
        @endforeach
        </table> 


        {!! $bookings->links() !!}
    </div>
@endsection