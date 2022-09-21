<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php   
    

    for ($liczby = -11; $liczby <= 11; $liczby++) {
        if($liczby % 5 == 0){
        continue;}
    

        echo $liczby ."<br>";
    }




?>


    </body>
</html>