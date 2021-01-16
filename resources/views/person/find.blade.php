@extends('layouts.baselayout')

@section('title', 'Add New Data')

@section('menubar')

@endsection

@section('content')

<form action="/person/find" method="post">
  {{ csrf_field() }}
  <input type="text" name="input" value="{{ $input }}">
  <input type="submit" value="find">
</form>

<table class="table">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Mail</th>
    <th>Age</th>
  </tr>
  @if(isset($item))
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->getData() }}</td>
    <td>{{ $item->mail }}</td>
    <td>{{ $item->age }}</td>
  </tr>
  @endif
<table>

@endsection

@section('footer')
Copyright 2021 wang.
@endsection