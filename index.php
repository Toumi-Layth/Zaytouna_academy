<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaytouna Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <?php include ('includes/nav_bar.php') ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Apprenez à votre rythme avec <span class="text-primary">Zaytouna Academy</span></h1>
                    <p>Découvrez des cours de qualité créés par des experts tunisiens pour développer vos compétences et avancer dans votre carrière.</p>
                    <div class="hero-buttons">
                        <a href="signup.php" class="btn btn-primary">S'inscrire gratuitement <i class="fas fa-chevron-right"></i></a>
                        <a href="login.php" class="btn btn-outline">Se connecter</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="assets/images/edu.avif" alt="Étudiants qui apprennent" onerror="this.onerror=null;this.src='https://placehold.co/400x300?text=Image+non+trouvée';">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section-padding bg-light">
        <div class="container">
            <div class="section-header">
                <h2>À propos de nous</h2>
                <p>Zaytouna Academy est une plateforme éducative tunisienne dédiée à offrir des cours de qualité accessibles à tous.</p>
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
            <div class="d-flex flex-row gap-4">
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
                </div>
            </div>
            <div class="text-center mt-20">
                <a href="all_courses_guest.php" class="btn btn-outline">Voir tous les cours <i class="fas fa-chevron-right"></i></a>
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
                        <p>contact@ZaytounaAcademy.tn</p>
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
    <?php include ('includes/footer.php') ?>
</body>
</html>