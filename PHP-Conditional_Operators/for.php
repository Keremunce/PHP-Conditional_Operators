<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i=0;$i<=10;$i++){
            echo "Deger: $i <br>";
        }

        $meyveler=array("Elma","Armut","Seftali","Cilek");
        $a=count($meyveler);
        
        for($j=0; $j<$a; $j++){
            echo "Meyveniz: $meyveler[$j] <br>";
        }
    ?>
</body>
</html>