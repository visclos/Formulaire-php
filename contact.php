<?php

$nom = $_GET["lastName"];

$prenom = $_GET["fisrtName"];

$email = $_GET['email'];

$téléphone = $_GET["téléphone"];

$adresse = $_GET["adresse"];

if(empty($_GET["lastName"])){
    echo "Champs manquants";
}
if(empty($_GET['email'])){
    echo "Champs manquants";
}
if(empty($_GET["téléphone"])){
    echo "Champs manquants";
}
if(empty($_GET["adresse"])){
    echo "Champs manquants";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>

    <table>
 <tr>
    <td>nom</td>
    <td>prenom</td>
    <td>email</td>
    <td>telephone</td>
    <td>adresse</td>
</tr>
<tr>
    <td><?php echo $nom ?> </td>
    <td><?php echo $prenom ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $téléphone ?></td>
    <td><?php echo $adresse ?> </td>
</tr>
</table>
</body>
</html>