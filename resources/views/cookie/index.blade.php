@extends('layouts.baselayout')

@section('title', 'Cookies')

@section('menubar')
    Cookie Page
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
    <form action="/cookie" method="post">
        {{ csrf_field() }}
        <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection

@section('footer')
copyright 2021 wang validate.
@endsection