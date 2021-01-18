
@extends('layouts.baselayout')

@section('title', 'Add New Data')

@section('menubar')

@endsection

@section('content')

@if(count($errors) > 0)
<div>
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<p>{{ $session_data }}</p>

<form action="/session" method="post">
  {{ csrf_field() }}  
  <input type="text" name="input">
  <input type="submit" value="send">
</form>

@endsection

@section('footer')
Copyright 2021 wang.
@endsection