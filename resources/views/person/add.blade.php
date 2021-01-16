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

<form action="/person/add" method="post">
  {{ csrf_field() }}  
  <table class="table">    
    <tr><th>Name</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>Age</th><td><input type="number" name="age" value="{{old('age')}}"></td></tr>
    <tr><th>Mail</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
  <table>
  <input type="submit" value="add">
</form>

@endsection

@section('footer')
Copyright 2021 wang.
@endsection