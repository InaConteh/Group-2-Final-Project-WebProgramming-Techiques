# LionSport Agency Management System

A web-based application for managing football players, contracts, and agency operations. This system includes user authentication (Login/Register), a dashboard for managing players (CRUD operations), and a public-facing website.

## Prerequisites

- **XAMPP** (or any PHP/MySQL environment)
- **Web Browser**

## Installation & Setup

### 1. Configure Environment

1.  Ensure **Apache** and **MySQL** are running in XAMPP Control Panel.
2.  Clone or move this project folder to your web server's document root (e.g., `C:\xampp\htdocs\WebProgramingTechniques`).
    - _Note: If you are using a different folder name, adjust the URL accordingly._

### 2. Database Setup

The system includes automated scripts to set up the database and tables.

1.  **Open your browser** and navigate to the project folder.
2.  **Run the Setup Script**:

    - URL: `http://localhost/WebProgramingTechniques/setup_db.php`
    - This script creates the `lionsport_db` database and the required tables (`users`, `players`).
    - _Expected Output:_ "Table users created successfully", "Table players created successfully".

3.  **Seed Sample Users (Optional)**:
    - Run the sample users script to add default admin and user accounts.
    - URL: `http://localhost/WebProgramingTechniques/add_sample_users.php`
    - _Expected Output:_ Confirmation of created users.

### 3. Usage

#### Public Access

- **Home Page**: `http://localhost/WebProgramingTechniques/index.php`
- Browse services, about us, and contact pages.

#### Admin/User Access

1.  Click **Login** in the navigation bar or go to `login.php`.
2.  **Default Credentials** (if you ran `add_sample_users.php`):
    - **Admin 1**: `admin1@gmail.com` / `password123`
    - **Admin 2**: `admin2@gmail.com` / `password123`
    - **User 1**: `user1@gmail.com` / `password123`
    - **User 2**: `user2@gmail.com` / `password123`

#### Dashboard Features

- **View Players**: See a list of all players in the database.
- **Add Player**: Click "+ Add New Player" to register a new talent.
- **Edit/Delete**: Use the action buttons on the player list to manage records.

## File Structure

- `db.php`: Database connection settings.
- `setup_db.php`: Creates database and tables.
- `index.php`: Main landing page (dynamic).
- `login.php` / `register.php`: Authentication pages.
- `dashboard.php`: Protected area for player management.
- `add_player.php` / `edit_player.php`: Forms for CRUD operations.
- `style.css`: Main stylesheet.

## Troubleshooting

- **Database Connection Error**: Check `db.php` and ensure your MySQL username/password matches your XAMPP settings (default: root/empty).
- **404 Not Found**: Ensure the folder is correctly placed in `htdocs` or properly linked.
