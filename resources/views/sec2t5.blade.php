<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            max-width: 1200px;
            margin: 0 auto;

        }
        a{
            text-decoration: none;
            color: olive;
            font-family: 'Nunito', sans-serif;
            font-size: 40px;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
        }
        .block{
            margin-bottom: 20px;
            background: darkblue;
            padding: 20px;
            transition: 0.4s;

        }

        .block:hover{
            background: darkgoldenrod;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    @foreach($div as $item)
        <div class="block"><a target="_blank" href="https://{{$item}}.com/">{{$item}}</a></div>
    @endforeach
</div>

</body>
</html>
