<?php
require_once "header.php";

if(!is_null(getCurrentUser())) header("location:index.php");

if(isset($_REQUEST['send_data']))
{
    $errors = [];
    $data = [
        "login" => trim($_POST['login']),
        'password'=> trim($_POST['password'])
    ];
        foreach($data as $key => $value)
        {
            if(empty($value))
            {
                $errors[] = "field $key is empty";
            }
           
        }

        for($i = 0; $i < count($list); $i++)
        {
          if($data['login'] == $list[$i]['login'])
          {
            if($data['password'] == $list[$i]['password'])
            {
                $_SESSION['login'] = $data['login'];
            }
          }
        }
      

       
}

 require_once "header.php";
 if(!empty($errors))
 {
    foreach($errors as $error)
    {
        echo "".$error."<br>";
    }
 }
?>

        <h4>Авторизация</h4>
        <!--. 3. Форма входа на сайт-->
        <form  method="post">
            Логин: <input type="text" name="login">
            Пароль: <input type="password" name="password">
            <button type="submit" name="send_data">Войти</button>
        </form>
        <p>Введите логин и пароль</p>
        <br>
        <a href="/gallery.php">Перейти в фотогалерею без авторизации<br>
        (Добавление фото возможно только для авторизованных пользователей)</a>
<? require_once "footer.php"?>