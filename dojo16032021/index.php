<?php


function message(int $number) : string
{
    if (($number %3 === 0)&&($number %5 === 0)) {
        return "fizzbuzz";
    } elseif ($number %3 === 0) {
        return "fizz";
    } elseif ($number %5 === 0) {
        return "buzz";
    } else {
        return "$number";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <div>
            <label for="numéro">Number :</label>
            <input type="number" id="number" name="number">
        </div>
        
        <div class="button">
            <br>
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>

</html>