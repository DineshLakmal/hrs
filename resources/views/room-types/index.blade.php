@extends('layouts.app')


@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-6 margin-tb">
            <div class="pull-left">
                <h6>Room Types Management</h6>
            </div>
        </div>
        <div class="col-md-6 margin-tb">
            <div class="pull-right" align="right">
                <a class="btn btn-success" href="{{ route('room-types.create') }}"> Create New Room Type</a>
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
            <th>Room Type</th>
            <th>max_no_persons</th>
            <th width="180px">Action</th>
        </tr>
    @foreach ($roomTypes as $rmt)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rmt->room_type}}</td>
        <td>{{ $rmt->max_no_persons}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('rooms.edit',$rmt->id) }}">Edit</a>

 
            {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $rmt->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $roomTypes->links() !!}
</div>
@endsection
   