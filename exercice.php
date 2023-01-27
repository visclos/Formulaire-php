<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire php</title>
</head>
<body>
    <form action="contact.php" >
        <label for="nom">Entrer votre nom:</label>
        <input type="text" name="lastName" id="name">
        <label for="prénom">Entrer votre prénom:</label> 
        <input type="text" id="prenom" name="fisrtName">
        <label for="email">Entrer votre email:</label> 
        <input type="text" id="email" name="email">
        <label for="téléphone">Entrer votre téléphone:</label> 
        <input type="tel" id="telephone" name="téléphone">
        <label for="adresse">Entrer votre adresse:</label> 
        <input id="adresse" name="adresse">
        <button class="envoyer" type="submit">envoyer</button>
        <button class="annuler" type="reset">annuler</button>
    </form>
    
</body>
</html>