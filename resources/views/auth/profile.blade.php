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
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="race" value="{{$user->email}}" class="form-control">
                </div>


                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update Character</button>
                </div>

            </form>

        </div>
    </div>
    @endsection
