<?php
require_once '../lib/bib_connect.php';
require_once '../lib/bib_application.php';


// Vérifier si le formulaire a été soumis
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $mot_de_passe_saisi = $_POST['mot_de_passe'];

    // Requête pour vérifier l'email et récupérer le mot de passe haché
    $stmt = $pdo->prepare("SELECT id, mot_de_passe FROM utilisateurs WHERE email = :email");
    $stmt->execute([':email' => $email]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        if (password_verify($mot_de_passe_saisi, $user['mot_de_passe'])) {
            // Connexion réussie
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php');
            exit;
        }
    }
    
    // Si on arrive ici, c'est que la connexion a échoué
    $_SESSION['error'] = 'Les informations de connexion sont incorrectes.';
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Reste du head -->
</head>
<body>
    <!-- Formulaire de connexion HTML -->
    <form action="login.php" method="post">
        Email: <input type="email" name="email" required>
        Mot de passe: <input type="password" name="mot_de_passe" required>
        <input type="submit" name="login" value="Connexion">
    </form>

    <?php if (isset($_SESSION['error'])): ?>
        <p class="error"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></p>
        <!--  Utilisation de htmlspecialchars lors de l'affichage de toute variable de session. Bonne pratique pour prévenir les attaques XSS (Cross-Site Scripting) lorsque j'affiche du contenu qui pourrait être manipulé par l'utilisateur.-->

    <?php endif; ?>

</body>
</html>
