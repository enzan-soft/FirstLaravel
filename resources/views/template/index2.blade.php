<html>
<head>
    <title>Template/Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#f6f6f6;
        margin: -20px 0px -30px 0px;}
    </style>
</head>
<body>
    <h1>Blade Index</h1>
    @if($msg != '')
    <p>こんにちは、{{$msg}} さん</p>
    @else
    <p>お名前を入力してください。</p>
    @endif
    <form method="POST" action="/newhello3">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
    @isset($arrary_data)
    <ol>
    @foreach($arrary_data as $item)
    <li>{{$item}}
    @endforeach
    @endisset
    </ol>
</body>
</html>
