<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - EduTunis</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h1 class="sidebar-logo">EduTunis</h1>
                <button class="sidebar-close"><i class="fas fa-times"></i></button>
            </div>

            <div class="sidebar-user">
                <div class="avatar">
                    <img src="https://placehold.co/100" alt="Mohamed Trabelsi">
                </div>
                <div class="user-info">
                    <p class="user-name">Mohamed Trabelsi</p>
                    <p class="user-role">Étudiant</p>
                </div>
            </div>

            <nav class="sidebar-nav">
                <a href="#" class="sidebar-link active">
                    <i class="fas fa-home"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-book-open"></i>
                    <span>Mes cours</span>
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <a href="index.html" class="btn btn-outline btn-block">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Header -->
            <header class="dashboard-header">
                <button class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Tableau de bord</h1>
                <div class="header-actions">
                    <button class="header-btn">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="header-btn notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge"></span>
                    </button>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <h2>Bonjour, Mohamed Trabelsi</h2>
                    <p>Bienvenue sur votre tableau de bord. Continuez votre apprentissage!</p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="stat-info">
                            <p class="stat-title">Cours inscrits</p>
                            <h3 class="stat-value">3</h3>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <p class="stat-title">Heures d'apprentissage</p>
                            <h3 class="stat-value">12.5</h3>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-info">
                            <p class="stat-title">Certificats</p>
                            <h3 class="stat-value">1</h3>
                        </div>
                    </div>
                </div>

                <!-- My Courses Section -->
                <section class="dashboard-section">
                    <h3 class="section-title">Mes cours</h3>
                    <div class="enrolled-courses">
                        <div class="enrolled-course-card">
                            <div class="course-header">
                                <div class="course-title-wrapper">
                                    <h4>Introduction au Développement Web</h4>
                                    <p class="course-last-access">
                                        <i class="fas fa-clock"></i> Dernier accès: Hier
                                    </p>
                                </div>
                                <img src="https://placehold.co/100" alt="Développement Web">
                            </div>
                            <div class="course-progress">
                                <div class="progress-header">
                                    <span>Progression</span>
                                    <span>75%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 75%;"></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Continuer</a>
                        </div>

                        <div class="enrolled-course-card">
                            <div class="course-header">
                                <div class="course-title-wrapper">
                                    <h4>Marketing Digital pour Débutants</h4>
                                    <p class="course-last-access">
                                        <i class="fas fa-clock"></i> Dernier accès: Il y a 3 jours
                                    </p>
                                </div>
                                <img src="https://placehold.co/100" alt="Marketing Digital">
                            </div>
                            <div class="course-progress">
                                <div class="progress-header">
                                    <span>Progression</span>
                                    <span>30%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 30%;"></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Continuer</a>
                        </div>

                        <div class="enrolled-course-card">
                            <div class="course-header">
                                <div class="course-title-wrapper">
                                    <h4>Bases de Données SQL</h4>
                                    <p class="course-last-access">
                                        <i class="fas fa-clock"></i> Dernier accès: Il y a 1 semaine
                                    </p>
                                </div>
                                <img src="https://placehold.co/100" alt="Bases de Données SQL">
                            </div>
                            <div class="course-progress">
                                <div class="progress-header">
                                    <span>Progression</span>
                                    <span>10%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 10%;"></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">Continuer</a>
                        </div>
                    </div>
                </section>

                <!-- Recommended Courses -->
                <section class="dashboard-section">
                    <div class="section-header-with-action">
                        <h3 class="section-title">Cours recommandés</h3>
                        <a href="#" class="btn btn-outline btn-sm">Voir tout</a>
                    </div>

                    <div class="recommended-courses">
                        <div class="recommended-course-card">
                            <img src="https://placehold.co/300x200" alt="JavaScript Avancé">
                            <div class="course-content">
                                <h4>JavaScript Avancé</h4>
                                <p class="course-instructor">Par Ahmed Ben Ali</p>
                                <div class="course-rating">
                                    <span class="rating-stars">★</span>
                                    <span class="rating-value">4.8</span>
                                    <span class="students-count">(1245 étudiants)</span>
                                </div>
                                <a href="#" class="btn btn-outline btn-block">Voir le cours</a>
                            </div>
                        </div>

                        <div class="recommended-course-card">
                            <img src="https://placehold.co/300x200" alt="Design UX/UI">
                            <div class="course-content">
                                <h4>Design UX/UI</h4>
                                <p class="course-instructor">Par Sonia Mansour</p>
                                <div class="course-rating">
                                    <span class="rating-stars">★</span>
                                    <span class="rating-value">4.9</span>
                                    <span class="students-count">(987 étudiants)</span>
                                </div>
                                <a href="#" class="btn btn-outline btn-block">Voir le cours</a>
                            </div>
                        </div>

                        <div class="recommended-course-card">
                            <img src="https://placehold.co/300x200" alt="Python pour la Data Science">
                            <div class="course-content">
                                <h4>Python pour la Data Science</h4>
                                <p class="course-instructor">Par Karim Mejri</p>
                                <div class="course-rating">
                                    <span class="rating-stars">★</span>
                                    <span class="rating-value">4.7</span>
                                    <span class="students-count">(2341 étudiants)</span>
                                </div>
                                <a href="#" class="btn btn-outline btn-block">Voir le cours</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
