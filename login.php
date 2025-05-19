<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - EduTunis</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="auth-container">
        <div class="auth-back-link">
            <a href="index.html"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
        </div>

        <div class="auth-card">
            <div class="auth-header">
                <h2>Se connecter</h2>
                <p>Entrez vos identifiants pour accéder à votre compte</p>
            </div>

            <div class="auth-body">
                <form class="auth-form">
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

                    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                </form>
            </div>

            <div class="auth-footer">
                <p>Pas encore de compte? <a href="signup.html">S'inscrire</a></p>
                
                <div class="test-account">
                    <p>Pour tester le compte admin:</p>
                    <p>Email: admin@edutunis.tn</p>
                    <p>Mot de passe: admin123</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>