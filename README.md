# 🩸 BBDMS — Blood Bank Donor Management System

A web-based **Blood Bank Donor Management System (BBDMS)** developed using **PHP and MySQL**. The system provides functionality for donor registration, donor search, blood requests, user account management, and administrative operations.

This project is built for **academic learning, portfolio development, and demonstrating PHP/MySQL web development skills**.

---

## 📌 Project Overview

BBDMS is designed to simplify the management of blood donor information and blood-related requests through a web-based interface.

The system provides separate functionality for:

* 👤 Donor registration and management
* 🩸 Blood group-based donor search
* 📋 Donor profile management
* 📩 Blood request submission and management
* 🔐 User and admin authentication
* 👨‍💼 Admin dashboard
* 🔄 Profile and password management
* 📞 Contact functionality
* 🛡️ Session-based access protection

---

## ✨ Features

### 👤 Donor Management

* Donor registration
* User login and logout
* Donor profile management
* Profile update
* View donor list
* Search donors by blood group
* Display donor information
* Admin donor management

### 🩸 Blood Search

* Search donors according to blood group
* View available donor information
* Easy access to donor records

### 📩 Blood Request System

* Submit blood requests
* View submitted requests
* Request management through the admin panel
* Display request information

### 🔐 Authentication & Account Management

* User login
* Admin login
* Session-based authentication
* User password change
* Admin password change
* Logout functionality
* Protected user pages
* Protected admin pages

> **Security Note:** Personal passwords and login credentials are not included in this repository.

### 📊 Admin Dashboard

The admin dashboard provides access to important administrative functionality, including:

* Donor management
* Donor list
* Blood request management
* Request details
* Admin profile
* Password management
* Logout

### 📱 Responsive Interface

The project uses **HTML, CSS, Bootstrap, JavaScript, jQuery, and Font Awesome** to provide a user-friendly web interface.

---

## 🛠️ Tech Stack

| Technology       | Purpose                       |
| ---------------- | ----------------------------- |
| **PHP**          | Backend development           |
| **MySQL**        | Database management           |
| **HTML5**        | Web page structure            |
| **CSS3**         | Styling and layout            |
| **JavaScript**   | Client-side functionality     |
| **Bootstrap**    | Responsive UI                 |
| **jQuery**       | Front-end interactions        |
| **Font Awesome** | Icons                         |
| **XAMPP**        | Local development environment |
| **Git & GitHub** | Version control               |

---

## 📂 Project Structure

```text
BLOOD-BANK/
│
├── .github/
│   └── workflows/
│
├── SQL File/
│   └── bbdms.sql
│
├── bbdms/
│   │
│   ├── admin/
│   │   ├── css/
│   │   ├── fonts/
│   │   ├── img/
│   │   ├── includes/
│   │   ├── js/
│   │   ├── dashboard.php
│   │   ├── donor-list.php
│   │   ├── login.php
│   │   └── ...
│   │
│   ├── css/
│   ├── images/
│   ├── includes/
│   ├── js/
│   ├── webfonts/
│   │
│   ├── index.php
│   ├── about.php
│   ├── donor-list.php
│   ├── login.php
│   ├── logout.php
│   ├── profile.php
│   ├── search-donor.php
│   ├── sign-up.php
│   ├── contact.php
│   ├── contact-blood.php
│   ├── request-received.php
│   └── change-password.php
│
└── README.md
```

---

## 💻 Requirements

Before running the project locally, make sure you have:

* Windows, Linux, or macOS
* XAMPP
* Apache
* MySQL
* PHP
* A modern web browser
* Git (optional)

---

## 🚀 Installation & Setup

### 1. Install XAMPP

Install XAMPP and make sure the following services are available:

```text
Apache
MySQL
```

Start both services from the XAMPP Control Panel.

---

### 2. Clone the Repository

Open Command Prompt or PowerShell:

```bash
cd C:\xampp\htdocs
```

Clone the repository:

```bash
git clone https://github.com/Naresh-Prajapati27/BLOOD-BANK.git
```

The repository will be downloaded as:

```text
C:\xampp\htdocs\BLOOD-BANK
```

---

### 3. Locate the Application

The main application is located inside:

```text
BLOOD-BANK\bbdms
```

Therefore, the project structure under XAMPP should look like:

```text
C:\xampp\htdocs\BLOOD-BANK\bbdms
```

---

### 4. Create the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create a database named:

```text
bbdms
```

---

### 5. Import the SQL Database

Inside the repository, open:

```text
SQL File\
```

Import:

```text
bbdms.sql
```

into the `bbdms` database.

This will create the database tables and required structure.

---

### 6. Configure Database Connection

Configure the application's database connection according to your local MySQL setup.

For a standard XAMPP installation, the typical configuration is:

```text
Host: localhost
Username: root
Password: empty
Database: bbdms
```

> **Important:** If your MySQL installation uses a different username or password, update the local configuration accordingly.

---

## 🌐 Run the Project

After starting Apache and MySQL, open:

```text
http://localhost/BLOOD-BANK/bbdms/
```

### Admin Panel

```text
http://localhost/BLOOD-BANK/bbdms/admin/
```

> The URL may be different if you rename or move the repository folder inside `htdocs`.

---

## 🗄️ Database

The project uses **MySQL** as its relational database.

Database name:

```text
bbdms
```

SQL file:

```text
SQL File/bbdms.sql
```

The database stores information required for donor management, user accounts, blood requests, administrative operations, and related application functionality.

---

## 🔐 Authentication

The system provides authentication for both users and administrators.

### User

Users can:

* Register
* Log in
* Access their account
* View and update profile information
* Change their password
* Submit blood requests
* View received requests
* Log out

### Admin

Administrators can:

* Log in
* Access the admin dashboard
* Manage donors
* View donor information
* Manage blood requests
* View request details
* Manage their profile
* Change their password
* Log out

Login credentials are intentionally **not published in this repository**.

---

## 📋 Main Modules

### Public / User Side

* 🏠 Home
* ℹ️ About
* 🩸 Donor List
* 🔎 Search Donor
* 📝 Donor Registration
* 📩 Blood Request
* 📞 Contact
* 🔐 Login
* 👤 Profile
* 🔑 Change Password
* 📋 Request Received
* 🚪 Logout

### Admin Side

* 🔐 Admin Login
* 📊 Dashboard
* 👥 Donor Management
* 🩸 Donor List
* 📩 Blood Request Management
* 📋 Request Details
* 👤 Admin Profile
* 🔑 Password Management
* 🚪 Logout

---

## 🧪 Local Testing

The application was tested locally using **XAMPP, Apache, MySQL, and a web browser**.

The following major functionality was tested:

### User Side

* ✅ Home page
* ✅ About page
* ✅ Donor List
* ✅ Donor Search
* ✅ Donor Registration
* ✅ User Login
* ✅ User Dashboard
* ✅ Blood Request
* ✅ Blood Request Submission
* ✅ Request Received
* ✅ User Profile
* ✅ Profile Update
* ✅ User Password Change
* ✅ Logout
* ✅ Login with Updated Password
* ✅ User Session Protection
* ✅ Contact Form

### Admin Side

* ✅ Admin Login
* ✅ Admin Dashboard
* ✅ Admin Donor List
* ✅ Donor Details
* ✅ Admin Blood Request Management
* ✅ Request Details
* ✅ Admin Profile
* ✅ Admin Password Change
* ✅ Login with Updated Admin Password
* ✅ Admin Logout
* ✅ Admin Session Protection

---

## 🎯 Use Cases

This project can be used for:

* 🏥 Blood bank management demonstrations
* 🏫 Academic projects
* 👨‍💻 PHP/MySQL learning
* 📚 Database management practice
* 💼 Portfolio development
* 🩸 Blood donor management concepts
* 🌐 Web application development practice

---

## 🔮 Future Improvements

Possible future enhancements include:

* 📍 Location-based donor search
* 🔎 Advanced donor filtering
* 🔔 Email/SMS notifications
* 📊 Advanced analytics dashboard
* 🩸 Blood inventory management
* 🗺️ Nearby donor discovery
* 👥 Multiple admin roles and permissions
* 📄 Donor/request report export
* 🔐 Improved password security
* 🛡️ Additional input validation
* ☁️ Cloud deployment
* 🔗 REST API integration
* 📱 Further UI improvements

---

## 🔒 Security Notes

Before deploying the project to a production environment:

* Never commit passwords to GitHub.
* Never commit API keys or secret tokens.
* Use strong password hashing for production authentication.
* Validate and sanitize user input.
* Use prepared SQL statements.
* Keep production database credentials outside the public repository.
* Enable HTTPS on production servers.
* Review authentication and authorization before deployment.
* Review any file upload functionality before public deployment.

---

## 🧑‍💻 Local Development Workflow

A simple development workflow for the project:

```text
Edit Code
    ↓
Run on Localhost
    ↓
Test Functionality
    ↓
Review Changes
    ↓
Commit Changes
    ↓
Push to GitHub
```

---

## 🤝 Contributing

Contributions and improvements are welcome.

### Contribution Workflow

1. Fork the repository.
2. Create a new branch:

```bash
git checkout -b feature/your-feature
```

3. Make your changes.
4. Test the application locally.
5. Stage the changes:

```bash
git add .
```

6. Commit the changes:

```bash
git commit -m "Add your feature"
```

7. Push the branch:

```bash
git push origin feature/your-feature
```

8. Open a Pull Request.

---

## 📜 License

This project is intended primarily for **educational and portfolio purposes**.

If you reuse or modify this project, review the original project files and third-party dependencies for their respective licensing terms.

---

## 👨‍💻 Author

**Naresh Prajapati**

GitHub:

https://github.com/Naresh-Prajapati27

Project Repository:

https://github.com/Naresh-Prajapati27/BLOOD-BANK

---

## ⭐ Support

If you find this project useful, consider giving the repository a ⭐ on GitHub.

---

### 🩸 BBDMS — Making Blood Donor Management Simpler
