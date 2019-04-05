@extends('layout')

@section('content')

<h1 class='title'>Edit profile</h1>

<form method="POST" action="/profiles/{{ $profile->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input class="form-control" type="text" class="input" name="name" placeholder="Name" value="{{ $profile->name }}">
        </div>
    </div>
<br>
    <div class="field">
        <label class="label" for="instruments">Instruments</label>

        <div class="control">
            <textarea class="form-control" name="instruments" class="textarea">{{ $profile->instruments }}</textarea>
        </div>
    </div>
<br>
<div class="field">
        <label class="label" for="influences">Influences</label>

        <div class="control">
            <textarea class="form-control" name="influences" class="textarea">{{ $profile->influences }}</textarea>
        </div>
    </div>
<br>
    <div class="field">
        <div class="control">
            <button type="submit" class="btn btn-primary">Update profile</button>
        </div>
    </div>
</form>
<br>

<form method="POST" action="/profiles/{{ $profile->id }}">
    @method('DELETE')
    @csrf
    <div class="field">
        <div class="control">
            <button type="submit" class="btn btn-danger">Delete profile</button>
        </div>
    </div>
</form>

@endsection