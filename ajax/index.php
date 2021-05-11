<?php

$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];
$name = $_POST['name'];
$surname = $_POST['surname'];


$logSucs = [
    'email' => $email,
    'пароль' => $password,
    'имя' => $name,
    'фамилия' => $surname,
    'Результат регистрации' => 'успешно'
];

$logSucsLog = date('Y-m-d H:i:s') . ' ' . print_r($logSucs, true);

$logErr = [
    'email' => $email,
    'пароль' => $password,
    'имя' => $name,
    'фамилия' => $surname,
    'Результат регистрации' => 'ошибка'
];

$logErrLog = date('Y-m-d H:i:s') . ' ' . print_r($logErr, true);

if (! empty($_POST)) {

    require(__DIR__ . '/users.php');

	if (!empty($email) && !empty($password) && !empty($passwordRepeat) && !empty($name) && !empty($surname)) {
        foreach ($users as $user) {

            if ($email == $user['email'] && $password == $user['password'] && $passwordRepeat == $user['password']) {
                $response = [
                    "status" => true
                ];
                echo json_encode($response);
                file_put_contents(__DIR__ . '/log.txt', $logSucsLog . PHP_EOL, FILE_APPEND);
                return;

            } else if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
                $response = [
                    "valid" => false
                ];
                echo json_encode($response);
                return;

            } else {
                $response = [
                    "status" => false,
                    "valid" => true,
                ];
                echo json_encode($response);
                file_put_contents(__DIR__ . '/log.txt', $logErrLog . PHP_EOL, FILE_APPEND);
                return;
            }
        }
	}
}
