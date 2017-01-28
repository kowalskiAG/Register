<?php
$host = 'localhost';
$database = 'users';
$user = 'root';
$password = '';

// подключаемся к серверу
$link = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysqli_error($link));
if($link == true) {
    mysql_select_db($database, $link) or die("Подключения к базе нет");
    //Считываем данные отправленные из формы
if (isset($_POST['login'])){ 
    $login = $_POST['login']; 
    if ($login == ''){
        unset($login);
    } 
}
if (isset($_POST['password'])){ 
    $password = $_POST['password']; 
    if ($password == ''){
        unset($password);
    } 
}
if(isset($_POST['rep_pass'])){
    $rep_pass = $_POST['rep_pass'];
    if($rep_pass == ''){
        unset($rep_pass);
    }
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
    if($email == ''){
        unset($email);
    }
}
if($password != $rep_pass){
    echo 'Пароли не совпадают';
}
 else {
    $pass = md5(md5($password));
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail ($email) указан неверно.\n";
}
 else {
    $email = trim(htmlspecialchars(stripcslashes($email)));
}
$login = trim(htmlspecialchars(stripcslashes($login)));    

$result = mysql_query("SELECT id_user FROM user WHERE login='$login'");
$myrow = mysql_fetch_array($result);
    if(!empty($myrow['id_user'])){
        exit("Пользователь с таким логином уже существует");
    }  
   // INSERT INTO `user`(`id_user`, `login`, `hash`, `mail`) VALUES ([value-1],[value-2],[value-3],[value-4])
$res = mysql_query("INSERT INTO user (login, hash, mail) VALUES ('$login', '$pass', '$email')");
   if (!$res) {
    die('Неверный запрос: ' . mysql_error());
}
 else {
        echo 'Регистрации прошла';        
}
}
 else mysql_close($link);