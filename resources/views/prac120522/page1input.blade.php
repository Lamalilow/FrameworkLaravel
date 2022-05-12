<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Ввод данных</h1>
    <form action="user" method="post" >
        @csrf
        <label class="form-label" for="name">ФИО</label>
        <input class="form-control" value="{{session('name')}}" name="name" type="text" placeholder="Иванов Иван Иванович">
        <label class="form-label" for="age">Возраст</label>
        <input class="form-control" type="number" value="{{session('age')}}" name="age" placeholder="18" id="age">
        <label class="form-label" for="country">Страна</label>
        <select class="form-control" name="country" id="country">
            <option value="{{session('country')}}">Значение</option>
            <option value="РОССИЯ">РОССИЯ</option>
            <option value="америка">америка</option>
            <option value="африка">африка</option>
            <option value="европа">европа</option>
        </select>
        <label class="form-label" for="address">Адрес</label>
        <input class="form-control" value="{{session('address')}}" type="text" name="address" placeholder="Энтузиастов 17">
        <label class="form-label" for="hobby">Увлечения</label>
        <input class="form-control" type="text" value="{{session('hobby')}}" name="hobby" placeholder="читать гулять">
        <label class="form-label" for="aboutme">О себе</label>
        <textarea class="form-control" name="aboutme" id="aboutme" cols="30" rows="10" placeholder="я кира йошикаге мне 33 года живу в северной части морио">{{session('aboutme')}}</textarea>
        <input type="submit" placeholder="Отправить">
    </form>
</div>
</body>
</html>
