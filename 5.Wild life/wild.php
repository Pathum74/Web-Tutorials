<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wild.css">
    <title>Wild Life</title>
</head>
<body>
    <h1>WildLife in Sri Lanka</h1>
    <img src="img/img.png" alt="">
    <p><i>Discover the diverse and <b>stunning</b> wildlife of 
        sri lanka.Form majestic elephants to colorful birds,Sri Lanka is a
        paradise for nature enthusiasts.
    </i></p>

    <table border="2">
        <tr>
            <th rowspan="2">Species</th>
            <th colspan="2">Details</th>
            <th rowspan="2">Details</th>
        </tr>

        <tr>
            <th>Habitat</th>
            <th>Diet</th>
        </tr>

        <tr>
            <td>Elephant</td>
            <td>Forest</td>
            <td>Herbivore</td>
            <td><input type="button" value="Show Details" onclick="view(1)"></td>
        </tr>

        <tr>
            <td>Peacock</td>
            <td>Jungle</td>
            <td>Omnivore</td>
            <td><input type="button" value="Show Details" onclick="view(2)"></td>
        </tr>

    </table><br><br>

    <form name="form1" method="get" action="">
       <fieldset style="width: 100%;">
        <legend>What You Can Do for Terrestrial WildLife</legend>

        Preferred Species:<input type="text" name="Species"><br><br>
        Suggestions to Protect:<input type="text" name="Protect"><br><br>

        <input type="submit" value="Submit">

       </fieldset>
       
    </form>

    <h2>It is our moral duty to protect the wild life.</h2>
    

    <script src="wild.js"></script>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["Species"])&& isset($_GET["Protect"]))
{
    $Species=$_GET["Species"];
    $Protect=$_GET["Protect"];

    echo "Lets Protect : $Species<br>";
    echo "Comment : $Protect<br>";
}
?>

