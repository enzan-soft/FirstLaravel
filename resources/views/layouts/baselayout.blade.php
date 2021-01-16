<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {margin:5px;font-family: "Hiragino Kaku Gothic ProN","Hiragino Sans","Meiryo UI",sans-serif;}
    h1 {font-size:50pt; text-align:right; color:#f6f6f6;
        margin:0px 10px 0px 0px; letter-spacing:-4pt;}
    ul {font-size:12pt;}
    hr {margin:25px 100px; border-top: 1px dashed #ddd;}
    .menutitle {font-size:16pt; font-weight:bold; margin:0px;}
    .content {margin:10px;}
    .footer {text-align:right; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc;}
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
        <p class="menutitle">※メニュー</p>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>