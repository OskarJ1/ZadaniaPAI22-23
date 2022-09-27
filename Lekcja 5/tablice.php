<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php   
    
    $papere[0] = "ksioazka";
    $papere[1] = "macias";
    $papere[2] = "tytul";

    for($j=2; $j >= 0; --$j){
        echo "$papere[$j] <br>"; }



    $nazwy['takie'] = "takie o to jest"; 
    $nazwy['siakie'] = "siakie o to jest";   
    $nazwy['makie'] = "makie o to jest";      


    foreach($nazwy as $item => $description){
        echo "$item: $description <br>";
    }

    echo $nazwy['takie'] . "<br>" . $nazwy['makie'];

?>


    </body>
</html>