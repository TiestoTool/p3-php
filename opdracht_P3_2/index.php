<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="index2.php">
        <input type="text" placeholder = " voornaam" name="voornaam"> <br> <input type="text" placeholder = "achternaam" name="achternaam">
        <br>
        <br>

    <!-- man -->
    <div>
        <input type="radio" id = "man" name="geslacht" value="man">
        <label for="man"> man</label>
    </div>
    <!-- vrouw -->
    <div>
        <input type="radio" id = "vrouw" name="geslacht" value="vrouw">
        <label for="vrouw">vrouw</label>
    </div>
    <input type="text" placeholder = "straat" name="straat"> <br> <input type="number" placeholder = "huisnummer" name="huisnummer">
    <input type="text" placeholder ="stad" name="stad">

    <!-- select-label -->
    <div>
        <label for="country-select"></label>
        <select name="country" id="country-select">
            <option value="">country</option>
            <option name="country" value="Nederland">Nederland</option>
            <option name="country" value="Duitsland">Duitsland</option>
            <option name="country" value="België">België</option>
            <option name="country" value="Frankrijk">Frankrijk</option>
        </select>
    </div>
    <!-- email -->
    <input type="email" placeholder = "email" name="email">
    <input type="password" placeholder = "wachtwoord" name="password">
    <button type="submit" name="submit">send</button>
    </form>
</body>
</html>