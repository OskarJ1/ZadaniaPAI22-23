<!DOCTYPE html>
    <head>
        <title>PAI zadanie funkcje</title>
        <meta charset="utf-8">
    </head>
    <body>

    <form action="./funckej.php" method="POST">
        Podaj wiek: <input type="number" name="n" value="n">
        <input type="submit" value="wyslij">
</form>
    
    <?php

if(isset($_POST['n'])){
    echo "Tu podajesz swoj wiek: " . htmlspecialchars($_POST['n']) . "<br>";
    $n= $_POST['n'];
wiek($n); }

function wiek($n) {
    if($n<=18) {
        echo "Jestes za młody";
    }
    elseif($n<=45) {
        echo "Jesteś dorosły";
    }
    else {
        echo "Jesteś stary";
    }

}

    ?>
    </body>
</html>