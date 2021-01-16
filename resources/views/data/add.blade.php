@extends('layouts.baselayout')

@section('title', 'Add New Data')

@section('menubar')

@endsection

@section('content')
<div class="col-md-5">
    <form action="/data/add" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            @if($errors->has('name'))
            {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">{{__('messages.email')}}</label>
            <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('mail')}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @if($errors->has('mail'))
            {{$errors->first('mail')}}
            @endif
        </div>

        <div class="form-group">
            <label>{{__('messages.age')}}</label>
            <input type="text" class="form-control" name="age" placeholder="" value="{{old('age')}}">
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