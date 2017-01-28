<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="style/style.css" type="text/css">
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" charset="utf-8"></script>
         <script type="text/javascript" src="js/validate.js" charset="utf-8"></script>
        <title>Forms</title>
    </head>
    <body>
        <div class="form_box">
             <h2> Авторизация</h2>
             <form name=" author" action="register.php" method="POST" class="rf">
                <div class="field">
                    <lable>Логин </lable>
                    <input type="text" name="login" id="login" class="rfield"/><br>
                </div>
                <div class="field">
                    <lable>Пароль</lable>
                    <input type="password" name="password" class="rfield"/></br>
                </div>
                <div class="field">
                    <lable>Подтвердите пароль:</lable>
                    <input type="password" name="rep_pass" class="rfield"/><br>
                </div>
                <div class="field">
                    <lable>Email </lable>
                    <input type="text" name="email" class="rfield"/><br>
                </div>
                <div class="field">
                    <input name="submit" type="submit" value="Отправить" class="btn_submit disabled"/>
                </div>   
            </form>
        </div>
    <script>
        
    </script>
    </body>
</html>
