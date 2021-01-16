@extends('layouts.baselayout')

@section('title', 'Data')

@section('menubar')
　Database
@endsection

@section('content')
    <table class="table table-dark table-hover table-bordered">
        <tr><th>ID</th><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection