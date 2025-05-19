<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - EduTunis</title>
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
                <h2>Créer un compte</h2>
                <p>Inscrivez-vous pour accéder à tous nos cours</p>
            </div>

            <div class="auth-body">
                <form class="auth-form">
                    <div class="form-group">
                        <label for="fullName">Nom complet</label>
                        <input type="text" id="fullName" placeholder="Votre nom complet" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" placeholder="votre@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" placeholder="••••••••" required>
                        <p class="form-hint">Le mot de passe doit contenir au moins 6 caractères</p>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirmer le mot de passe</label>
                        <input type="password" id="confirmPassword" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </form>
            </div>

            <div class="auth-footer">
                <p>Vous avez déjà un compte? <a href="login.html">Se connecter</a></p>
            </div>
        </div>
    </div>
</body>
</html>
