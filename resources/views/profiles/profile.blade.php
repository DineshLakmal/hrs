@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <img src="{{ asset('uploads/avatars/'.$user->avatar) }}" style="width:150px; height:auto; float:left; border-radius:4%; margin-right:25px;">
            <h3>{{ $user->name }}'s Profile</h3>
            <form enctype="multipart/form-data" action="{{ url('profile') }}" method="POST">
                <label>Update Profile Image</label>
                <br>
                <input type="file" name="avatar" required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br><br>
                <input type="submit" class="btn btn-sm btn-primary pull-right" value="Update your profile image">
            </form>
        </div>
    </div>
</div>
@endsection