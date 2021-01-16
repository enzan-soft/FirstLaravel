@extends('layouts.baselayout')

@section('title', 'Add New Data')

@section('menubar')

@endsection

@section('content')

<table class="table">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Mail</th>
    <th>Age</th>
    <th>Board</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->getData() }}</td>
    <td>{{ $item->mail }}</td>
    <td>{{ $item->age }}</td>
    <td>
    @if($item->board != null)
      {{ $item->board->getData() }}
    @endif
    </td>
  <tr>
  @endforeach
<table>

@endsection

@section('footer')
Copyright 2021 wang.
@endsection