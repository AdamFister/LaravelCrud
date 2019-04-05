@extends('layout')

@section('content')
<div class="row">
        
        <div class="col"><h1>Musicians</h1></div>
        <div class="col"></div>
        <div class="col"><a href="/profiles/create" class="btn btn-primary">Create profile</a></div>
        
</div>
   
    <div class="row">
        
        <div class="col"><h3>Name</h3></div>
        <div class="col"><h3>Instruments</h3></div>
        <div class="col"><h3>Influences</h3></div>
        <div class="col"></div>
        
       
    </div>

    @foreach($profiles as $profile)
    <div class="row">
        <div class="col">{{ $profile->name }}</div>
        <div class="col">{{ $profile->instruments }}</div>
        <div class="col">{{ $profile->influences }}</div>
        <div class="col"><a href="/profiles/{{ $profile->id }} /edit" class="btn btn-success btn-sm">Edit</a></div>
    </div>

    @endforeach

@endsection