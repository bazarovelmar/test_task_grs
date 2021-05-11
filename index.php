<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

    <div class="row pt-5 bg-info text-dark" style="width: 100%; height: 548px;">

        <div id="successMess" class="col-md-6 offset-md-4 text-white" style="font-size: 35px"></div>

        <div class="col-md-6 offset-md-3">

            <form class="pt-5 pb-5 pl-5 pr-5" method="post" action="/" id="sendForm">
                <div class="text-danger text-center bg-danger text-white" id="errorMess"></div>

                <label for="inputName" class="form-label">Имя</label>
                <input type="text" class="form-control" id="inputName">

                <label for="inputSurname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="inputSurname">

                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" size="30" name="email">

                <label for="password" class="form-label">Пароль</label>
                <input id="password" class="form-control" size="30" name="password" type="password">

                <label for="passwordRepeat" class="form-label">Повторите пароль</label>
                <input id="passwordRepeat" class="form-control" size="30" name="passwordRepeat" type="password">

                <button class="btn btn-dark mt-3" type="button" id="sendBtn">Отправить</button>
                <div id="results" class="resultMessage"></div>

            </form>

        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="ajax/ajaxSendForm.js"></script>
</body>
</html>