@extends('layouts.app')


@section('content')
    <div class="container">
         <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Reservations</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('reservations.create') }}"> Create New Reservations</a>
                </div>
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
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reservation->name}}</td>
            <td>{{ $reservation->email}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('reservations.show',$reservation->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('reservations.edit',$reservation->id) }}">Edit</a>

     
                {!! Form::open(['method' => 'DELETE','route' => ['reservations.destroy', $reservation->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table> 


        {!! $reservations->links() !!}
    </div>
    
@endsection