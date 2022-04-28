<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

        li{
            padding: 17px;
        }
        li:before {
            padding-right:10px;
            font-weight: bold;
            color: #C0C0C0;
            content: "\1412";
            transition-duration: 0.5s;
        }
        li:hover:before {
            color: #337AB7;
            content: "\12125";
        }
        a{
            text-decoration: none;
            color: #006dad;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <ul class="list-group">
        @foreach($li as $item)
            <li class="list-group-item"><a target="_blank" href="https://{{$item}}.com/">{{$item}}</a></li>
        @endforeach
    </ul>
</body>
</html>
