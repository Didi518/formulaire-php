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
    $firstName = $_GET["prenom"];
    $lastName = $_GET["nom"];
    $mail = $_GET["mail"];
    $tel = $_GET["tel"];
    $adresse = $_GET["adresse"];
    $data = [$firstName, $lastName, $mail, $tel, $adresse];
    $Err = "";

    for($i = 0; $i <= 4; $i++){
        if (!($data[$i])) {
            $Err = "Champs Manquants";
            echo '<div class="alert">'.$Err.'</div>';
            break;
        }
    }
    if(!$Err){
        print_r($data);
    }
    ?>
</body>

</html>