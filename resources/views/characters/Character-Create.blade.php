@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Character</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('add-character') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="">Character Name</label>
                    <input type="text" name="Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Character Race</label>
                    <input type="text" name="Race" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Character Proficiency</label>
                    <input type="text" name="Proficiency" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image (Added later)</label>
                    <input type="file" name="icon" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image (Added later)</label>
                    <input type="file" name="portrait" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Save Character</button>
                </div>
            </form>

        </div>
    </div>
@endsection
