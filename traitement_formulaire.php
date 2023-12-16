<?php
//  Acquisition du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mesErr="";
    $zoneFocus ="";
    // Validation de l'email
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    // Création requête préparée
    $stmt = $conn->prepare("INSERT INTO users (email) VALUES (?)");
    // Liaison du paramètre à la requête. "s" indique que le paramètre est une chaîne (string)
    $stmt->bind_param("s", $email); 
    try {
    // Exécution de la requête avec le paramètre lié
    $stmt->execute();
    // Gérer l'erreur lors de l'exécution de la requête avec le paramètre
    catch (Exception $e) 
    }
    // Fermeture de l'instruction préparée + bonne pratique de fermer explicitement. Libère la mémoire et les autres ressources système qui étaient allouées pour cette instruction. Peut améliorer les performances, en particulier sur les serveurs avec beaucoup de trafic ou des scripts longs et complexes.
    $stmt->close();

    } else {
    // Gérer l'erreur d'email non valide
        if ($email == ''){
        $mesErr = "La saisie de l'adresse mail est obligatoire";
        $zoneFocus = 'email';
    }
    }}
?>