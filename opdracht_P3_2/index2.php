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

    if(isset($_POST['submit'])){
        $voornaam = $_POST["voornaam"];
        echo $voornaam ;
        echo "<br>";

        $achternaam = $_POST["achternaam"];
        echo $achternaam;
        echo "<br>"; 

        $geslacht = $_POST["geslacht"];
        echo $geslacht;
        echo "<br>";

        $straat = $_POST["straat"];
        echo $straat;
        echo "<br>";

        $huisnummer = $_POST["huisnummer"];
        echo $huisnummer;
        echo "<br>";

        $stad = $_POST["stad"];
        echo $stad;
        echo"<br>";

        $country = $_POST["country"];
        echo $country;
        echo"<br>";

        $email = $_POST["email"];
        echo $email;
        echo "<br>";

        // $password = $_POST["password"];
        // echo $password;
        // echo "<br>";
    }
    ?>
</body>
</html>