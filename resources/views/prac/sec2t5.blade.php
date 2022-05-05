<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            max-width: 1200px;
            margin: 0 auto;

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
            transition: 0.4s;
            border: 1px;
            border-radius: 20px;

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
        <div class="block p-6 btn btn-secondary   "><a  class="text-decoration-none text-warning" target="_blank" href="https://{{$item}}.com/">{{$item}}</a></div>
    @endforeach
</div>

</body>
</html>
