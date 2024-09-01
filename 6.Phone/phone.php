<!DOCTYPE html>
<html>
<head>
    <title>Phone Details</title>

    <style>
        .body{
         background-color: rgb(249, 160, 175);
         text-align: center;
         font-family: Arial;
        }

        #h2{
        color: aliceblue;  
        }
    </style>
    
</head>

<body class="body">
    <h2 id="h2">Order Details</h2>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$ptype=$_POST["Smartphone"];
$name=$_POST["name"];
$email=$_POST["email"];
$pnumber=$_POST["pnumber"];

echo "Phone Type: $ptype<br>";
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Phone Number: $pnumber<br>";
}
?>
</body>
</html>