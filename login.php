<?php
    session_start();
    include('includes/config.php');
    if(isset($_POST['connexion'])){
        extract($_POST);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // $error_message = "Adresse email invalide.";
        // }else {
            $email = trim($email); // Removes leading/trailing whitespace
            $userQuery = $cnx->prepare("SELECT * FROM users WHERE email = ?");  
            $userQuery->execute([$email]);
            if($userQuery->rowCount()== 0){
                $error_message = "Compte non trouvé";
            }else{
                $user = $userQuery->fetch();
                if(!password_verify($password , $user['password'])){
                    $error_message = "Mot de passe invalide!";
                }else{
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['id'] = $user['id'];
                    if ($user['role'] == 'admin') {
                        header('Location: admin/admin_dash.php');
                        exit;
                    } else {
                        header('Location: user/user_dash.php');
                        exit;
                    }
                }
            }
        // }
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - ZaytounaAcademy</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <a href="index.php" class="top-left-link"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h2>Se connecter</h2>
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="alert alert-success">Inscription réussie ! Vous pouvez maintenant vous connecter.</div>
                <?php endif; ?>

                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger"><?= $error_message ?></div>
                <?php endif; ?>
                <p>Entrez vos identifiants pour accéder à votre compte</p>
            </div>

            <div class="auth-body">
                <form class="auth-form" method="POST" action="">
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" placeholder="votre@email.com" required>
                    </div>

                    <div class="form-group">
                        <div class="password-header">
                            <label for="password">Mot de passe</label>
                            <a href="#" class="forgot-password">Mot de passe oublié?</a>
                        </div>
                        <input type="password" id="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="connexion">Se connecter</button>
                </form>
            </div>

            <div class="auth-footer">
                <p>Pas encore de compte? <a href="signup.php">S'inscrire</a></p>
                
                <div class="test-account">
                    <p>Pour tester le compte admin:</p>
                    <p>Email: admin@gmail.com</p>
                    <p>Mot de passe: azerty</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>