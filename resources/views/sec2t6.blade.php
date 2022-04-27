<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0 auto;
            max-width: 1200px;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
        }
        span{
            background-color: darkcyan;
            border-radius: 20px;
            padding: 20px;
            color: white;
            font-size: 20pt;

            margin: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    @foreach($span as $item)
        @if($item % 2==0)
            <span>{{$item}}</span>
        @endif
    @endforeach
</div>

</body>
</html>
