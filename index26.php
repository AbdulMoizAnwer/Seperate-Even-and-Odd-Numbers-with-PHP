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
?>
