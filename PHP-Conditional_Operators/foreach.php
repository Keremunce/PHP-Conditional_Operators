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
    $kisiler=array("Ali"=>"Muhendis","mehmet"=>"Mimar");
    //x= ali&mehmet 
    //value=muhenids&mimar
        foreach($kisiler as $x =>$value){
            echo "$x isimli kişinin meslegi : $value <br>";
        }
        $isim=array("Ali","veli","mehmet","hakan");
        foreach($isim as $value){
            echo"$value <br>";
        }
    ?>    
</body>
</html>