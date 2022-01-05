<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    $firstName = $_POST["prenom"];
    $lastName = $_POST["nom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $data = [$firstName, $lastName, $mail, $tel, $adresse];
    $Err = "";

    function validatePhoneNumber ($string) {  //création fonction pour valider le tél
        $phoneNumberArr = str_split($string); //création tableau avec str pour séparer les chiffres
        if($phoneNumberArr[0] != 0) {   //si le premier chiffre != 0 alors...
            return false;
        }
        foreach($phoneNumberArr as $value) { //la foreach !! trop puissante mdr
            if(!is_numeric($value)) { // vérif que chaque caractère = numérique
                return false;
            }
        }
        if(strlen($string) != 10) { //vérif taille du numéro
            return false;
        }
        return true;
    }

    for($i = 0; $i <= 4; $i++){
        if (!($data[$i])) {
            $Err = "Champs manquant(s)";
            echo '<div class="alert">'.$Err.'</div>';
            break;
        }
        
    }
    if(!$Err){
        print_r($data);
    }
    if(strlen($firstName) < 3) {
        $Err = "Le prénom doit comporter 3 lettres au moins.";
        echo '<div class="alert">'.$Err.'</div>';
        }  elseif(!ctype_alpha($firstName)){
                $Err = "Le prénom contient des caracteres non autorises";
                echo'<div class="alert">'.$Err.'</div>';
        } elseif(!ctype_alpha($lastName)){
                $Err = "Le nom contient des caracteres non autorises";
                echo'<div class="alert">'.$Err.'</div>';
        } elseif(validatePhoneNumber($tel) === false){
                $Err = "Le numero de telephone ne doit contenir que des chiffres";
                echo'<div class="alert">'.$Err.'</div>';
    }
        
    ?>
</body>
</html>