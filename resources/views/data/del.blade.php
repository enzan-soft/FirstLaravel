@extends('layouts.baselayout')

@section('title', 'Delete Data')

@section('menubar')

@endsection

@section('content')
<div class="col-md-5">
    <form action="/data/del" method="post">
    {{ csrf_field() }}
    <table class="table table-dark table-hover table-bordered">
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>{{__('messages.name')}}</th><td>{{$form->name}}</td></tr>
        <tr><th>{{__('messages.email')}}</th><td>{{$form->mail}}</td></tr>
        <tr><th>{{__('messages.age')}}</th><td>{{$form->age}}</td></tr>
    </table>
    <button type="submit" class="btn btn-primary">Delete</button>
    </form>
</div>
@endsection

@section('footer')
Copyright 2021 wang.
@endsection