<?php
if(isset($_POST['inscription'])){
    extract($_POST);
    if($username && $email && $password){
        include('includes/config.php');
        $res_select = $cnx->prepare("SELECT * from users where email = ?");
        $res_select->execute([$email]);
        $res_username= $cnx->prepare("SELECT * from users where username = ?");
        $res_username->execute([$username]);
        if ($res_select->rowCount() > 0) {
            $error_message = "Vous êtes déjà inscrit!";
        }elseif ($res_username->rowCount() > 0) {
            $error_message = "Ce nom d'utilisateur est déjà pris.";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Adresse e-mail invalide.";
        } elseif ($password !== $confirm_password) {
            $error_message = "Les mots de passe ne correspondent pas.";
        } else {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $cnx->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $pass]);
            $user_id = $cnx->lastInsertId(); 
            $cnx->exec("INSERT INTO activities (type, reference_id) VALUES ('new_user', $user_id)");
            header('Location:login.php?success=1');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - EduTunis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <a href="index.php" class="top-left-link"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
    <div class="auth-container">

        <div class="auth-card">
            <div class="auth-header">
                <h2>Créer un compte</h2>
                <p>Inscrivez-vous pour accéder à tous nos cours</p>
            </div>

            <div class="auth-body" >

                <?php if(isset($error_message)): ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>


                <form class="auth-form" method="post" action="">
                    <div class="form-group">
                        <label for="fullName">Nom d'utilisateur</label>
                        <input type="text" id="fullName" placeholder="Votre nom d'utilisateur" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" placeholder="votre@email.com" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" placeholder="••••••••" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirmer le mot de passe</label>
                        <input type="password" id="confirmPassword" placeholder="••••••••" name="confirm_password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name='inscription'>S'inscrire</button>
                </form>
            </div>

            <div class="auth-footer">
                <p>Vous avez déjà un compte? <a href="login.php">Se connecter</a></p>
            </div>
        </div>
    </div>
</body>
</html>
