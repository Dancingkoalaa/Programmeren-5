@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit & Update Character</h4>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('store-profile', ['user' => Auth::user()]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="">UserName</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </form>

        </div>
    </div>
    @endsection
