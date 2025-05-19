<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - EduTunis</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar admin-sidebar">
            <div class="sidebar-header">
                <h1 class="sidebar-logo">EduTunis Admin</h1>
                <button class="sidebar-close"><i class="fas fa-times"></i></button>
            </div>

            <div class="sidebar-user">
                <div class="avatar">
                    <img src="https://placehold.co/100" alt="Admin">
                </div>
                <div class="user-info">
                    <p class="user-name">Admin</p>
                    <p class="user-role">Administrateur</p>
                </div>
            </div>

            <nav class="sidebar-nav">
                <a href="#overview" class="sidebar-link active">
                    <i class="fas fa-home"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="#users" class="sidebar-link">
                    <i class="fas fa-users"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <a href="#courses" class="sidebar-link">
                    <i class="fas fa-book-open"></i>
                    <span>Gestion des cours</span>
                </a>
                <a href="#settings" class="sidebar-link">
                    <i class="fas fa-cog"></i>
                    <span>Paramètres</span>
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
                <!-- Overview Section -->
                <section id="overview" class="admin-section active">
                    <!-- Stats Cards -->
                    <div class="stats-cards">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <p class="stat-title">Utilisateurs</p>
                                <h3 class="stat-value">5</h3>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon green">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="stat-info">
                                <p class="stat-title">Cours</p>
                                <h3 class="stat-value">5</h3>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon purple">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="stat-info">
                                <p class="stat-title">Cours actifs</p>
                                <h3 class="stat-value">3</h3>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon orange">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="stat-info">
                                <p class="stat-title">Utilisateurs actifs</p>
                                <h3 class="stat-value">4</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <h3>Activité récente</h3>
                        </div>
                        <div class="admin-card-body">
                            <div class="activity-list">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="activity-content">
                                        <p class="activity-title">Nouvel utilisateur inscrit</p>
                                        <p class="activity-desc">Leila Karoui s'est inscrite il y a 2 jours</p>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon green">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="activity-content">
                                        <p class="activity-title">Nouveau cours publié</p>
                                        <p class="activity-desc">JavaScript Avancé a été créé il y a 5 jours</p>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon purple">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="activity-content">
                                        <p class="activity-title">Utilisateur mis à jour</p>
                                        <p class="activity-desc">Ahmed Ben Ali est devenu administrateur il y a 1 semaine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Access -->
                    <div class="admin-grid">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <h3>Utilisateurs récents</h3>
                            </div>
                            <div class="admin-card-body">
                                <table class="admin-table">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Rôle</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mohamed Trabelsi</td>
                                            <td><span class="badge badge-outline">user</span></td>
                                            <td>12/04/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Sonia Mansour</td>
                                            <td><span class="badge badge-outline">user</span></td>
                                            <td>23/05/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Ahmed Ben Ali</td>
                                            <td><span class="badge">admin</span></td>
                                            <td>05/01/2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#users" class="btn btn-outline btn-block mt-10">Voir tous les utilisateurs</a>
                            </div>
                        </div>

                        <div class="admin-card">
                            <div class="admin-card-header">
                                <h3>Cours récents</h3>
                            </div>
                            <div class="admin-card-body">
                                <table class="admin-table">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Instructeur</th>
                                            <th>Statut</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Introduction au Développement Web</td>
                                            <td>Ahmed Ben Ali</td>
                                            <td><span class="badge">Publié</span></td>
                                        </tr>
                                        <tr>
                                            <td>Marketing Digital pour Débutants</td>
                                            <td>Sonia Mansour</td>
                                            <td><span class="badge">Publié</span></td>
                                        </tr>
                                        <tr>
                                            <td>JavaScript Avancé</td>
                                            <td>Ahmed Ben Ali</td>
                                            <td><span class="badge badge-secondary">Brouillon</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#courses" class="btn btn-outline btn-block mt-10">Voir tous les cours</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Users Management Section -->
                <section id="users" class="admin-section">
                    <div class="section-header-with-action">
                        <h2 class="section-title">Liste des utilisateurs</h2>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Ajouter un utilisateur
                        </button>
                    </div>

                    <div class="admin-card">
                        <div class="admin-card-body p-0">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th>Statut</th>
                                        <th>Date d'inscription</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mohamed Trabelsi</td>
                                        <td>mohamed@example.com</td>
                                        <td><span class="badge badge-outline">user</span></td>
                                        <td><span class="badge badge-success">Actif</span></td>
                                        <td>12/04/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-user-shield"></i> Définir comme admin</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sonia Mansour</td>
                                        <td>sonia@example.com</td>
                                        <td><span class="badge badge-outline">user</span></td>
                                        <td><span class="badge badge-success">Actif</span></td>
                                        <td>23/05/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-user-shield"></i> Définir comme admin</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ahmed Ben Ali</td>
                                        <td>ahmed@example.com</td>
                                        <td><span class="badge">admin</span></td>
                                        <td><span class="badge badge-success">Actif</span></td>
                                        <td>05/01/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-user"></i> Définir comme utilisateur</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Leila Karoui</td>
                                        <td>leila@example.com</td>
                                        <td><span class="badge badge-outline">user</span></td>
                                        <td><span class="badge badge-secondary">Inactif</span></td>
                                        <td>17/06/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-user-shield"></i> Définir comme admin</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Karim Mejri</td>
                                        <td>karim@example.com</td>
                                        <td><span class="badge badge-outline">user</span></td>
                                        <td><span class="badge badge-success">Actif</span></td>
                                        <td>30/03/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-user-shield"></i> Définir comme admin</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Courses Management Section -->
                <section id="courses" class="admin-section">
                    <div class="section-header-with-action">
                        <h2 class="section-title">Liste des cours</h2>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Ajouter un cours
                        </button>
                    </div>

                    <div class="admin-card">
                        <div class="admin-card-body p-0">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Instructeur</th>
                                        <th>Étudiants</th>
                                        <th>Statut</th>
                                        <th>Date de création</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Introduction au Développement Web</td>
                                        <td>Ahmed Ben Ali</td>
                                        <td>145</td>
                                        <td><span class="badge">Publié</span></td>
                                        <td>10/02/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-eye-slash"></i> Mettre en brouillon</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Marketing Digital pour Débutants</td>
                                        <td>Sonia Mansour</td>
                                        <td>87</td>
                                        <td><span class="badge">Publié</span></td>
                                        <td>15/03/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-eye-slash"></i> Mettre en brouillon</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Bases de Données SQL</td>
                                        <td>Karim Mejri</td>
                                        <td>62</td>
                                        <td><span class="badge">Publié</span></td>
                                        <td>05/04/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-eye-slash"></i> Mettre en brouillon</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>JavaScript Avancé</td>
                                        <td>Ahmed Ben Ali</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">Brouillon</span></td>
                                        <td>20/06/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-eye"></i> Publier</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Design UX/UI</td>
                                        <td>Sonia Mansour</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">Brouillon</span></td>
                                        <td>12/07/2023</td>
                                        <td class="actions-cell">
                                            <div class="dropdown">
                                                <button class="dropdown-btn">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><i class="fas fa-edit"></i> Modifier</a>
                                                    <a href="#"><i class="fas fa-eye"></i> Publier</a>
                                                    <a href="#" class="text-danger"><i class="fas fa-trash"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Settings Section -->
                <section id="settings" class="admin-section">
                    <h2 class="section-title">Paramètres</h2>

                    <div class="admin-card mb-20">
                        <div class="admin-card-header">
                            <h3>Paramètres du site</h3>
                        </div>
                        <div class="admin-card-body">
                            <div class="settings-tabs">
                                <div class="tabs-header">
                                    <button class="tab-btn active" data-tab="general">Général</button>
                                    <button class="tab-btn" data-tab="appearance">Apparence</button>
                                    <button class="tab-btn" data-tab="notifications">Notifications</button>
                                </div>

                                <div class="tab-content active" id="general">
                                    <form class="settings-form">
                                        <div class="form-group">
                                            <label for="site-name">Nom du site</label>
                                            <input type="text" id="site-name" value="EduTunis">
                                        </div>

                                        <div class="form-group">
                                            <label for="site-description">Description du site</label>
                                            <textarea id="site-description" rows="3">Plateforme éducative tunisienne dédiée à l'apprentissage en ligne de qualité.</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="contact-email">Email de contact</label>
                                            <input type="email" id="contact-email" value="contact@edutunis.tn">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                    </form>
                                </div>

                                <div class="tab-content" id="appearance">
                                    <form class="settings-form">
                                        <div class="form-group">
                                            <label for="primary-color">Couleur principale</label>
                                            <div class="color-picker">
                                                <input type="color" id="primary-color" value="#3b82f6">
                                                <span class="color-value">#3b82f6</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="logo">Logo du site</label>
                                            <div class="logo-upload">
                                                <img src="https://placehold.co/100" alt="Logo" class="logo-preview">
                                                <button type="button" class="btn btn-outline">Changer le logo</button>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                    </form>
                                </div>

                                <div class="tab-content" id="notifications">
                                    <form class="settings-form">
                                        <div class="setting-item">
                                            <div class="setting-info">
                                                <h4>Notifications par email</h4>
                                                <p>Recevoir des notifications par email</p>
                                            </div>
                                            <div class="setting-control">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="setting-item">
                                            <div class="setting-info">
                                                <h4>Notifications de nouveaux utilisateurs</h4>
                                                <p>Être notifié lorsqu'un nouvel utilisateur s'inscrit</p>
                                            </div>
                                            <div class="setting-control">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="setting-item">
                                            <div class="setting-info">
                                                <h4>Notifications de nouveaux cours</h4>
                                                <p>Être notifié lorsqu'un nouveau cours est créé</p>
                                            </div>
                                            <div class="setting-control">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="admin-card">
                        <div class="admin-card-header">
                            <h3>Sécurité</h3>
                        </div>
                        <div class="admin-card-body">
                            <form class="settings-form">
                                <div class="form-group">
                                    <label for="current-password">Mot de passe actuel</label>
                                    <input type="password" id="current-password">
                                </div>

                                <div class="form-group">
                                    <label for="new-password">Nouveau mot de passe</label>
                                    <input type="password" id="new-password">
                                </div>

                                <div class="form-group">
                                    <label for="confirm-password">Confirmer le mot de passe</label>
                                    <input type="password" id="confirm-password">
                                </div>

                                <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
