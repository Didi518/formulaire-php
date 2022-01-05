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
    if(str($firstName) < 3) {
        $Err = "Le prénom doit comporter 3 lettres au moins.";
        echo '<div class="alert">'.$Err.'</div>';
    }
    ?>
</body>

</html>