# Zaytouna_academy
zaytouna_academy is a PHP-based web application for managing online courses. It features an admin dashboard that allows administrators to manage courses, users, and monitor recent activities. Users can register, view courses, and enroll. The platform is styled using Bootstrap and custom CSS.  


## 🌐 Features

### 👤 User Features
- Register and log in securely
- Browse available courses
- View detailed course information
- Buy courses
- Profile management

### 🛠️ Admin Features
- Secure login for administrators
- Add, edit, and delete courses
- Manage users and change roles (admin/user)
- Track number of students per course
- Upload course images and files
- View recent activities:
  - New user registrations
  - New course publications
  - User role updates

## 🧱 Tech Stack

- **Frontend:** HTML5, CSS3, Bootstrap,js, Font Awesome
NOTE: The frontend was initially generated using AI tools and customized to fit the project’s needs.
- **Backend:** PHP (Vanilla)
- **Database:** MySQL
- **Tools:** phpMyAdmin, XAMPP (local dev)

## 🧑‍💻 Roles and Permissions

| Role      | Permissions |
|-----------|-------------|
| **Admin** | Full access to manage users and courses, and view activities |
| **User**  | Can register, view and enroll in courses |

## 🗃️ Database Structure Overview

- `users`: Stores user info (username, email, hashed password, role)
- `courses`: Stores course data (title, description, price, category, etc.)
- `enrollments`: Links users to courses
- `activity_log`: Tracks admin-related actions

## 📌 Setup Instructions

1. **Clone or Download** this repository.
2. Import the provided SQL database into **phpMyAdmin**.
3. Configure your database settings in `config.php`.
4. Start your server using **XAMPP** or another local server.
5. Navigate to `localhost/your-folder-name` in your browser.

## 🔐 Admin Access

To access the admin dashboard, use credentials with the `role` set to `admin` in the `users` table.

## 📑 Notes

- Passwords are stored securely using PHP’s `password_hash()`.
- Make sure `enctype="multipart/form-data"` is used in forms with file uploads.
- IDs auto-increment and are not reused after deletion.
- Activities are logged manually with custom PHP logic.




