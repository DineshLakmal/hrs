@extends('layouts.app')


@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-6 margin-tb">
            <div class="pull-left">
                <h6>Room Management</h6>
            </div>
        </div>
        <div class="col-md-6 margin-tb">
            <div class="pull-right" align="right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
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
            <th>Room No</th>
            <th>Room Type</th>
            <th>Room Price</th>
            <th>Floor</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($rooms as $rm)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rm->room_no}}</td>
        <td>{{ $room_types[$rm->room_types_id] }}</td>
        <td>{{ $rm->room_price}}</td>
        <td>{{ $rm->floor}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('rooms.show',$rm->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('rooms.edit',$rm->id) }}">Edit</a>

 
            {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $rm->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $rooms->links() !!}
</div>
@endsection
   