@extends('layouts.baselayout')

@section('title', 'Child')

@section('menubar')
    @parent
    インデクスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent

    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです'])

    @isset($users)
        @each('components.item', $users, 'item')
    @endisset

    @isset($message)
        <p>Controller Value <br> 'message' = {{$message}}</p>
    @endisset

    @isset($view_message)
        <p>View Composer Value <br> 'view_message' = {{$view_message}}</p>
    @endisset

    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright 2021 wang.
@endsection