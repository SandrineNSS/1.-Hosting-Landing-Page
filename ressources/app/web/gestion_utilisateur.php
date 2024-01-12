<?php // ... code PHP pour démarrer la session et traiter le formulaire de connexion ...
require_once '../lib/bib_connect.php';
require_once '../lib/bib_application.php';


// Vérifiez si l'utilisateur est connecté et a les droits d'administrateur
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    // Rediriger vers la page de connexion si non-admin
    header('Location: login.php');
    exit;
}

if (isset($_POST['register_user'])) {
    // Récupérer les valeurs du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // Préparer la requête d'insertion pour les utilisateurs
    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, email) VALUES (:nom, :prenom, :email)");
    $stmt->execute([':nom' => $nom, ':prenom' => $prenom, ':email' => $email]);

    if ($stmt->rowCount() > 0) {
        // Inscription réussie
        header('Location: dashboard.php?success=1');
    } else {
        // Erreur lors de l'inscription
        header('Location: dashboard.php?error=1');
    }
}
?>

<!-- Formulaire de connexion HTML -->
<form action="login.php" method="post">
    Email: <input type="email" name="email" required>
    Mot de passe: <input type="password" name="mot_de_passe" required>
    <input type="submit" name="login" value="Connexion">
</form>
