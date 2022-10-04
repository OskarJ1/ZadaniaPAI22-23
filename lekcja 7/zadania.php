<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
   


<form action="zadania.php" method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">

<h1>formularz</h1>

Login: <input type="text" name="login"  required style="color: #600000; background-color: pink; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">

<br><br>

Haslo: <input type="password" name="haslo" required style="color: #600000; background-color: pink; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">

<br><br>

<p><input type="checkbox" name="Zapamiętaj mnie"  required value="1"  style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zapamietaj mnie

</p>

<br>

<input type="submit" value="Zakończ" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">



</form>
<?php

if(isset($_POST['login'])){
    echo "Twoj login to: " . htmlspecialchars($_POST['login']) . ". ";
}else{
    echo "login:";
}

if(isset($_POST['haslo'])){
    echo "twoje haslo to: " . $_POST['haslo'] . ". ";
}

?>






    </body>
</html>