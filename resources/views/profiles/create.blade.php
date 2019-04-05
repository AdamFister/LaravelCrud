@extends('layout')

@section('content')

<h1>Create a new profile</h1>

<form method="POST" action="/profiles">
    {{ csrf_field() }}
    <div>
        <input type="text" class="form-control" name="name" placeholder="Profile name">
    </div>
    <br>
    <div>
        <textarea class="form-control" name="instruments" placeholder="Instruments"></textarea>
    </div>
    <br>
    <div>
        <textarea class="form-control" name="influences" placeholder="Influences"></textarea>
    </div>
    <br>
    <div>
        <button class="btn btn-success" type="submit">Create profile</button>
    </div>
</form>

@endsection