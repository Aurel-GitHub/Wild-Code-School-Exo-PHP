<?php

require './_connect.php';

$pdo = new \PDO(DSN, USER, PASS);

if ($_POST) {
    /**
     *  Vérification que l'utilsiateur entre bien qqch dans l'input
     *  isset() => renvoie false si la variable n'existe pas
     * !empty() => vérifie que le champs n'est pas vide
     * strlen pour limiter le nbre de caractères un  preg_match($var, $REGEX) 
     * aurait pu faire l'affaire également ...
    */

    if (isset($_POST['firstname']) && !empty($_POST['firstname'])
     && isset($_POST['lastname']) && !empty($_POST['lastname'])
     && strlen($_POST['firstname']) < 45 && strlen($_POST['firstname']) > 3
     && strlen($_POST['lastname']) < 45 && strlen($_POST['firstname']) > 3
     && isset($_POST['email']) && !empty($_POST['email']) 
     && strlen($_POST['email']) < 45 && strlen($_POST['email']) > 3
     && isset($_POST['telephone']) && !empty($_POST['telephone']) 
     && strlen($_POST['telephone']) < 45 && strlen($_POST['telephone']) > 3
     && isset($_POST['option_choix']) && !empty($_POST['option_choix']) 
     && strlen($_POST['option_choix']) < 45 && strlen($_POST['option_choix']) > 3
     && isset($_POST['message']) && !empty($_POST['message']) 
     && strlen($_POST['message']) < 45 && strlen($_POST['message']) > 3){
         
        /**
         * strip_tag => Supprime les balises HTML et PHP d'une chaine de caractère.
         * Sécu supplémentaire en plus de celui de l'exo
         * afin de lutter une énième fois contre les failles SQL !
         */
        $firstname = strip_tags($_POST['firstname']);
        $lastname = strip_tags($_POST['lastname']);
        $email = filter_var(strip_tags($_POST['email']), FILTER_VALIDATE_EMAIL  );
        $telephone = filter_var(strip_tags($_POST['telephone']), FILTER_VALIDATE_INT);
        $option_choix = strip_tags($_POST['option_choix']);
        $message = strip_tags($_POST['message']);

        $sql1 = 'INSERT INTO friend (firstname, lastname, email, telephone, option_choix, message)
         VALUES (:firstname, :lastname, :email, :telephone, :option_choix, :message);';
        $statement = $pdo->prepare($sql1);
        $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->bindValue(':telephone', $telephone, PDO::PARAM_INT);
        $statement->bindValue(':option_choix', $option_choix, PDO::PARAM_STR);
        $statement->bindValue(':message', $message, PDO::PARAM_STR);
        $statement->execute();

        header('Location: succes.php');
         
        
        
        
    } else {
        $_SESSION['erreur'] = "Le formulaire est incomplet et ou incorrect !!";
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
    }
?>
</div>
    <div class="form-group" style="padding-bottom: 1%;">
        <label for="firstname">Nom</label>
        <input   type="text" id="firstname" name="firstname" class="form-control">
    </div>
    <div class="form-group" style="padding-bottom: 1%">
        <label for="lastname">Prénom</label>
        <input   type="text" id="lastname" name="lastname" class="form-control">
    </div>
    <div class="form-group" style="padding-bottom: 1%">
    <label for="email">Email </label>
    <input   type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group" style="padding-bottom: 1%">
  <label for="example-tel-input" class="col-2 col-form-label" ">Telephone</label>
    <input   class="form-control" type="tel" id="telephone" name="telephone">
</div>
<div class="form-group" style="padding-bottom: 1%">
  <label for="sel1">Option</label>
  <select   class="form-control" id="option_choix" name="option_choix">
    <option>Inscription</option>
    <option>Demande de renseignements</option>
    <option>Désinscription</option>
    <option>Demande de réinisitalisation du compte</option>
  </select>
</div> 
<div class="form-group" style="padding-bottom: 1%;">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea   class="form-control" id="message" name="message" placeholder="Votre message ici ..." style="width: 25%;"></textarea>
</div>
    <button class="btn btn-outline-success">Créer</button>
    <br> 
<div  class="test" style="padding-left: 50%;text-align:center">Liste :

<?php

$sql2 = "SELECT * FROM friend ";
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