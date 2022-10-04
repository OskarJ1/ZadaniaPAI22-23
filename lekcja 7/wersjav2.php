<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

<form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">

    <h1>formularz</h1>

    Login: <input type="text" name="login"  required style="color: #600000; background-color: pink; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">

    <br><br>

    Haslo: <input type="password" name="password" required style="color: #600000; background-color: pink; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">

    <br><br>

    <p><input type="checkbox" name="save"  required value="1"  style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zapamietaj mnie

    </p>

    <br>

    <input type="submit" value="Zakończ" name="loginButton" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">

</form>

	</br>
	</br>

	<form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">

        <h1>Zadanie 2</h1>

		Pseudonim: <input type="text" name="pseudonim" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br>

        <br><br>

		Komentarz: <textarea type="textarea" name="komentarz" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></textarea></br>

        <br><br>

		<button type="submit" name="kom" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zostaw komentarz</button>
        
        <br><br>

	</form>

    <form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">

    
	<h2>Zadanie 3</h2>
	<form method="POST">
	
        <label for="zwierze">Zwierze:</label>
		<select id="zwierze" name="zwierze">
			<option selected disabled>--Wybierz zwierze--</option>
			<option>Owca</option>
			<option>Koń</option>
			<option>Krowa</option>
		</select>


		<p style="margin-bottom: 0px;">Płeć:</p>
		<input type="radio" name="plec" id="mezczyzna" value="Mężczyzna">
		<label for="mezczyzna">Mężczyzna</label>

		<input type="radio" name="plec" id="kobieta" value="Kobieta">
		<label for="kobieta">Kobieta</label>

		<input type="radio" name="plec" id="inna" value="Inna">
		<label for="inne">Inna</label>

        

		<p style="margin-bottom: 0px;">Hodowca</p>
		<input type="checkbox" name="hodowca" value="Jan">
		<label>Oskar</label>

		<input type="checkbox" name="hodowca" value="Stefan">
		<label>Borys</label>

		<input type="checkbox" name="hodowca" value="Blair">
		<label>Mateusz</label></br>

		<button type="submit" name="hodowla">Wpisz dane</button>
	</form>


<?php

if(isset($_POST['loginButton'])) {
    login();
}

if(isset($_POST['kom'])) {
    kom();
}

if(isset($_POST['hodowla'])) {
    ankieta();
}

function login() {
    $login = $_POST['login'];
    $password = $_POST['password'];

    echo "</br>Witaj ".$login.'!</br>Twoje hasło to '.sha1($password);

    if(isset($_POST['save'])) {
        echo "</br>Zaznaczyłeś checkboxa!";
    }
}

function kom() {
    $pseudonim = $_POST['pseudonim'];
    $komentarz = $_POST['komentarz'];

    echo "</br>Pseudonim: ".$pseudonim."</br>Komentarz bez HTML: ".htmlentities($komentarz)."</br>Komentarz z HTML: ".$komentarz;
}
function ankieta() {
    $zwierze = $_POST['zwierze'];
    $plec = $_POST['plec'];
    $hodowca = $_POST['hodowca'];


    echo "</br>Jesteś: ".$zwierze.".</br>Twoja płeć to: ".$plec.".</br>Twój hodowca to: ".$hodowca;

}
?>