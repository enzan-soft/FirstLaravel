@extends('layouts.baselayout')

@section('title', 'Validator Validator Validator')

@section('menubar')
    Validate Page
@endsection

@section('content')
    @isset($msg)
        <p>{{$msg}}</p>
    @endisset

    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <table>
    <form action="/validator" method="post">
        {{ csrf_field() }}
        @if($errors->has('name'))
        <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
        @endif
        <tr><th>Name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

        @if($errors->has('mail'))
        <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
        @endif
        <tr><th>Mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

        @if($errors->has('age'))
        <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
        @endif
        <tr><th>Age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
        <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('message')}}"></td></tr>

        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection

@section('footer')
copyright 2021 wang validate.
@endsection