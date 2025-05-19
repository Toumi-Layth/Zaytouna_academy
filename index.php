<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTunis - Plateforme Éducative Tunisienne</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>EduTunis</h1>
                </div>
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#" class="nav-link active">Accueil</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">À propos de nous</a></li>
                        <li class="nav-item"><a href="#courses" class="nav-link">Nos cours</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <a href="login.html" class="btn btn-outline">Se connecter</a>
                    <a href="signup.html" class="btn btn-primary">S'inscrire</a>
                </div>
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Apprenez à votre rythme avec <span class="text-primary">EduTunis</span></h1>
                    <p>Découvrez des cours de qualité créés par des experts tunisiens pour développer vos compétences et avancer dans votre carrière.</p>
                    <div class="hero-buttons">
                        <a href="signup.html" class="btn btn-primary">S'inscrire gratuitement <i class="fas fa-chevron-right"></i></a>
                        <a href="login.html" class="btn btn-outline">Se connecter</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://placehold.co/600x400" alt="Étudiants qui apprennent">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section-padding bg-light">
        <div class="container">
            <div class="section-header">
                <h2>À propos de nous</h2>
                <p>EduTunis est une plateforme éducative tunisienne dédiée à offrir des cours de qualité accessibles à tous.</p>
            </div>

            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Cours de qualité</h3>
                    <p>Nos cours sont créés par des experts et constamment mis à jour pour refléter les dernières tendances.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Communauté active</h3>
                    <p>Rejoignez une communauté d'apprenants passionnés et partagez vos connaissances.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Certificats reconnus</h3>
                    <p>Obtenez des certificats reconnus par l'industrie pour valoriser votre parcours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Nos cours populaires</h2>
                <p>Explorez notre sélection de cours dans différents domaines pour développer vos compétences.</p>
            </div>

            <div class="course-cards">
                <div class="course-card">
                    <img src="https://placehold.co/300x200" alt="Développement Web">
                    <div class="course-content">
                        <div class="course-info">
                            <span class="course-level">Débutant</span>
                            <span class="course-rating">4.8 ★★★★★</span>
                        </div>
                        <h3>Développement Web</h3>
                        <p>Apprenez HTML, CSS et JavaScript pour créer des sites web modernes.</p>
                        <a href="#" class="btn btn-primary btn-block">Voir le cours</a>
                    </div>
                </div>

                <div class="course-card">
                    <img src="https://placehold.co/300x200" alt="Marketing Digital">
                    <div class="course-content">
                        <div class="course-info">
                            <span class="course-level">Intermédiaire</span>
                            <span class="course-rating">4.7 ★★★★★</span>
                        </div>
                        <h3>Marketing Digital</h3>
                        <p>Maîtrisez les stratégies de marketing en ligne pour développer votre entreprise.</p>
                        <a href="#" class="btn btn-primary btn-block">Voir le cours</a>
                    </div>
                </div>

                <div class="course-card">
                    <img src="https://placehold.co/300x200" alt="Intelligence Artificielle">
                    <div class="course-content">
                        <div class="course-info">
                            <span class="course-level">Avancé</span>
                            <span class="course-rating">4.9 ★★★★★</span>
                        </div>
                        <h3>Intelligence Artificielle</h3>
                        <p>Découvrez les fondements de l'IA et du machine learning.</p>
                        <a href="#" class="btn btn-primary btn-block">Voir le cours</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-20">
                <a href="#" class="btn btn-outline">Voir tous les cours <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section-padding bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Contactez-nous</h2>
                <p>Vous avez des questions ou des suggestions ? N'hésitez pas à nous contacter.</p>
            </div>

            <div class="contact-container">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" placeholder="Votre nom">
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" id="email" placeholder="votre@email.com">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="4" placeholder="Votre message..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Envoyer le message <i class="fas fa-envelope"></i>
                        </button>
                    </form>
                </div>

                <div class="contact-info">
                    <div class="info-item">
                        <h3>Adresse</h3>
                        <p>123 Rue de l'Innovation, Tunis 1000, Tunisie</p>
                    </div>

                    <div class="info-item">
                        <h3>Email</h3>
                        <p>contact@edutunis.tn</p>
                    </div>

                    <div class="info-item">
                        <h3>Téléphone</h3>
                        <p>+216 71 123 456</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>EduTunis</h3>
                    <p>Plateforme éducative tunisienne dédiée à l'apprentissage en ligne de qualité.</p>
                </div>

                <div class="footer-col">
                    <h4>Liens rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#courses">Cours</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Légal</h4>
                    <ul class="footer-links">
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 EduTunis. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
