<?php

require_once 'model/UserProvider.php';

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {

        $error = 'Пользователь с указанными учетными данными не найден';
    } elseif ($user->getUsername() == $username) {
       $_SESSION['user'] = $user;

        header("Location: /?controller=tasks");

    }
}
var_dump($_POST);
//die();


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header('Location: /');
}
require_once 'view/signin.php';
