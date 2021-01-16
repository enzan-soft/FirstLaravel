@extends('layouts.baselayout')

@section('title', 'Edit Data')

@section('menubar')

@endsection

@section('content')
<div class="col-md-5">
    <form action="/data/edit" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$form->name}}">
            @if($errors->has('name'))
            {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">{{__('messages.email')}}</label>
            <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Enter email" value="{{$form->mail}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @if($errors->has('mail'))
            {{$errors->first('mail')}}
            @endif
        </div>

        <div class="form-group">
            <label>{{__('messages.age')}}</label>
            <input type="text" class="form-control" name="age" placeholder="" value="{{$form->age}}">
            @if($errors->has('age'))
            {{$errors->first('age')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('footer')
Copyright 2021 wang.
@endsection