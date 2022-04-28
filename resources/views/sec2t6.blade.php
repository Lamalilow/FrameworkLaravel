<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <span class="btn btn-secondary   "><a class="text-decoration-none text-warning" target="_blank" href="https://{{$item}}.com/">{{$item}}</a></span>
        @endif
    @endforeach
</div>

</body>
</html>
