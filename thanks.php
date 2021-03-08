<!DOCTYPE html>
<html>
<head>
    <title>Page de réponse </title>
    <meta charset="x-UTF-16LE-BOM">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet">
</head>

<p style="margin: 15%">
    <?php

    echo 'Merci ' .$_POST["prenom"].' '.$_POST["nom"].' de nous avoir contacté à propos de "'.$_POST["sujet"].'".';
    echo'<br><br>';
    echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST["email"].' ou par téléphone au 
    '.$_POST["telephone"].' dans les plus brefs délais pour traiter votre demande :';
    echo'<br><br>';
    echo $_POST["message"];
    ?>

    
</p>



</html>