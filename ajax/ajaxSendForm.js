$("#sendBtn").on("click", function () {
    var email = $("#email").val().trim();
    var password = $("#password").val().trim();
    var passwordRepeat = $("#passwordRepeat").val().trim();
    var name = $("#inputName").val().trim();
    var surname = $("#inputSurname").val().trim();
    var pattern = /^([a-z0-9_\.-])+[@][a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;


    if(email == "") {
        $("#errorMess").text("Введите email");

    } else if(!(pattern.test(email))) {

        $("#errorMess").text("Некорректный email");
    } else if (name == "") {
        $("#errorMess").text("Введите имя");

    } else if (surname == "") {
        $("#errorMess").text("Введите фамилию");

    } else if (password == "") {
        $("#errorMess").text("Введите пароль");

    } else if (passwordRepeat !== password) {
        $("#errorMess").text("Пароли не совпадают");

    }

    $.ajax({
        url: 'ajax/index.php',
        type: 'POST',
        cache: false,
        dataType: 'json',
        data: {'email': email, 'password': password, 'passwordRepeat': passwordRepeat, 'name': name, 'surname': surname},
        success (data) {
            if (data.status) {

                $("#sendForm").remove();
                $("#successMess").text("Успешная регистрация!");

            } else if (!data.valid) {

                $("#errorMess").text("Некорректный email");

            } else if (!data.status) {

                $("#errorMess").text("");
                $("#errorMess").text("Неверный логин или пароль");

            }
        }
    })
});

