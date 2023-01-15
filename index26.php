<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seperate Even and Odd</title>
</head>
<body>
    <h1>Seperate Even and Odd Numbers</h1>
    <form action="#" method="POST">
        <label>Write any number to tell Even and Odd numbers in between the provided number.</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

//FOR LOOP
if(isset($_POST['submit'])){
    $N1 = $_POST['n1'];
    echo "<br>";                
    echo "Even Numbers:";
    for($i=2;$i<=$N1;$i++ && $i++){  
        echo "&nbsp;".$i;  
    }
    echo "<br>";
    echo "Odd Numbers:";
        for($i=1;$i<=$N1;$i++ && $i++){
            echo "&nbsp;".$i;
        }            
}

//WHILE LOOP
if(isset($_POST['submit'])){
    $N1 = $_POST['n1'];
    echo "<br>";                
    echo "Even Numbers:";
    $i=2;
    while($i<=$N1){
        echo "&nbsp;".$i; 
        $i++ && $i++;
    }    
    echo "<br>";
    echo "Odd Numbers:";
    $i=1;
    while($i<=$N1){
        echo "&nbsp;".$i;
        $i++ && $i++;
    }        
}


//DO WHILE LOOP
if(isset($_POST['submit'])){
    $N1 = $_POST['n1'];
    echo "<br>";                
    echo "Even Numbers:";
    $i=2;
    do{
        echo "&nbsp;".$i;
        $i++ && $i++;
    }while($i<=$N1);        
    echo "<br>";
    echo "Odd Numbers:";
    $i=1;
    do{
        echo "&nbsp;".$i;
        $i++ && $i++;
    }while($i<=$N1);
}

?>
