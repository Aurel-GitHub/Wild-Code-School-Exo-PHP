<?php



/** exo I */
// $query = "SELECT * FROM friend";
// $statement = $pdo->query($query);
// $friends = $statement->fetchAll();

/** exo II */
// $query2 = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
// $statement = $pdo->exec($query2);

/** exo III - non protégée contre les failles sql */
// $firstname = trim($_POST['firstname']);
// $lastname = trim($_POST['lastname']);
// $query = "INSERT INTO friend (firstname, lastname) VALUES ('$firstname', '$lastname')";
// $pdo->exec($query);

/** exo IV */
// $lastname = trim($_POST['lastname']); // get the data from a form
// $limit = $_GET[‘limit’];
// $query = 'SELECT * FROM friend WHERE lastname=:lastname LIMIT :limit';
// $statement = $pdo->prepare($query);
// $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
// $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
// $statement->execute();
// $friends = $statement->fetchAll();

/** exo V */
// $query = "SELECT * FROM friends";
// $statement = $pdo->prepare($query);
// $friends = $statement->fetchAll(PDO::FETCH_BOTH); // same as $statement->fetchAll()
// var_dump($friends);

require './_connect.php';
$pdo = new \PDO(DSN, USER, PASS);

if ($_POST) {
    /**
     *  Vérification que l'utilsiateur entre bien qqch dans l'input
     *  isset() => renvoie false si la variable n'existe pas
     * !empty() => vérifie que le champs n'est pas vide
    */
    if (isset($_POST['firstname']) && !empty($_POST['firstname'])
     && isset($_POST['lastname']) && !empty($_POST['lastname'])) {
        
        
        /**
         * Supprime les balises HTML et PHP d'une chaine de caractère.
         * Sécu supplémentaire en plus de celui de l'exo
         * afin de lutter une énième fois contre les failles SQL !
         */
        $firstname = strip_tags($_POST['firstname']);
        $lastname = strip_tags($_POST['lastname']);

        $sql1 = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname);';
        $statement = $pdo->prepare($sql1);
        $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $statement->execute();

    // header('Location: index.php');
    } else {
        $_SESSION['erreur'] = "Le formulaire est incomplet !!";
    }  
}
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EXO PDO</title>
</head>
<body>

<form method="post" style="margin: 3%;padding:2.5%;text-align:left">
<div class="message" style="padding-bottom: 1%">
<?php
    if (!empty($_SESSION['erreur'])) {
        echo $_SESSION['erreur'];
        $_SESSION['erreur'] = "";
    } else {
        echo 'Votre formulaire a bien été enregistré par nos services !';
    }
?>
</div>
    <div class="form-group" style="padding-bottom: 1%;">
        <label for="firstname">firstname</label>
        <input type="text" id="firstname" name="firstname" class="form-control">
    </div>
    <div class="form-group" style="padding-bottom: 1%">
        <label for="lastname">lastname</label>
        <input type="text" id="lastname" name="lastname" class="form-control">
    </div>
    <button class="btn btn-outline-success">Valider</button>
    <div class="test" style="padding-left: 50%;">List :
    <br> 
        <?php

            $sql2 = "SELECT * FROM friend";
            $statement = $pdo->query($sql2);
            $lists = $statement->fetchAll();    
            
            foreach ($lists as $list) { 
                echo '<li>'. $list['firstname'].' '.$list['lastname'].'</li>';   
            }
        ?>
    </div>
</form>

</body>
</html>