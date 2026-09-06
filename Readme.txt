# 🩸 BBDMS — Blood Bank Donor Management System

A complete web-based **Blood Bank Donor Management System (BBDMS)** developed using **PHP and MySQL**. The system helps manage blood donors, donor information, blood requests, blood groups, and administrative operations through an easy-to-use web interface.

---

## 📌 Project Overview

**BBDMS (Blood Bank Donor Management System)** is designed to simplify the management of blood donor records and blood bank operations.

The system provides separate functionality for:

* 👤 Donor registration and management
* 🩸 Blood group-based donor search
* 📋 Donor information management
* 📩 Blood request management
* 🔐 Secure admin authentication
* 👨‍💼 Admin dashboard
* 🔄 Profile and password management
* 📞 Contact and blood request functionality

The project is suitable for **academic projects, learning purposes, portfolio development, and demonstrating PHP/MySQL web development skills**.

---

## ✨ Features

### 👤 Donor Management

* Donor registration
* Donor profile management
* View registered donors
* Search donors by blood group
* Display donor details
* Manage donor records through the admin panel

### 🩸 Blood Search

* Search donors according to blood group
* View available donor information
* Easy access to donor records

### 📩 Blood Request System

* Submit blood-related requests
* Manage received requests
* View request information through the system

### 🔐 Authentication & Security

* Admin login system
* Session-based authentication
* Password change functionality
* Admin logout
* Protected administrative pages

> **Security Note:** Default or personal passwords are intentionally not included in this repository.

### 📊 Admin Dashboard

The admin dashboard provides an overview of the blood bank system, including donor-related information and administrative controls.

### 👨‍💼 Admin Panel

The admin panel allows authorized administrators to:

* Manage donors
* View donor records
* Manage blood requests
* View system information
* Update account password
* Manage administrative operations

### 📱 Responsive Interface

The project uses **Bootstrap, CSS, JavaScript, and responsive design techniques** to provide a user-friendly interface across different screen sizes.

---

## 🛠️ Tech Stack

| Technology       | Purpose                   |
| ---------------- | ------------------------- |
| **PHP**          | Backend development       |
| **MySQL**        | Database management       |
| **HTML5**        | Web page structure        |
| **CSS3**         | Styling and layout        |
| **JavaScript**   | Client-side functionality |
| **Bootstrap**    | Responsive UI             |
| **jQuery**       | Front-end interactions    |
| **Font Awesome** | Icons                     |
| **XAMPP**        | Local development server  |
| **Git & GitHub** | Version control           |

---

## 📂 Project Structure

```text
BLOOD-BANK/
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
├── .github/
│   └── workflows/
│
└── └── README.md
```

---

## 💻 Requirements

Before running the project locally, make sure you have:

* **Windows / Linux / macOS**
* **XAMPP**
* **Apache**
* **MySQL**
* A modern web browser
* Git (optional, for cloning/updating the project)

---

## 🚀 Installation & Setup

### 1. Install XAMPP

Install XAMPP and make sure **Apache** and **MySQL** are available.

Start:

```text
Apache
MySQL
```

---

### 2. Clone the Repository

Open PowerShell or Command Prompt:

```bash
cd C:\xampp\htdocs
```

Clone the repository:

```bash
git clone https://github.com/Naresh-Prajapati27/BLOOD-BANK.git
```

The project will be downloaded into:

```text
C:\xampp\htdocs\BLOOD-BANK
```

---

### 3. Locate the Project

The main application is inside:

```text
BLOOD-BANK\bbdms
```

Therefore, the application folder should be available under the XAMPP `htdocs` directory.

---

### 4. Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create a new database named:

```text
bbdms
```

---

### 5. Import the SQL Database

Inside the repository, open:

```text
SQL File/
```

Import:

```text
bbdms.sql
```

into the newly created `bbdms` database.

This will create the required tables and database structure.

---

### 6. Configure Database Connection

The application uses a PHP configuration file for the database connection.

For a standard XAMPP installation, the local configuration uses:

```text
Host: localhost
Username: root
Password: empty
Database: bbdms
```

Make sure your local configuration matches your MySQL setup.

> **Important:** Do not upload personal database credentials, production passwords, API keys, or other secrets to GitHub.

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

> The exact URL can differ if you rename or move the project folder inside `htdocs`.

---

## 🗄️ Database

The project uses **MySQL** as its relational database.

Main database:

```text
bbdms
```

The SQL database structure is provided in:

```text
SQL File/bbdms.sql
```

The database contains the tables required for managing administrators, donors, blood-related requests, and other application data.

---

## 🔐 Authentication

The system includes authentication for administrative functionality.

Administrators can:

* Log in
* Access the dashboard
* Manage donor information
* View requests
* Update their password
* Log out securely

For security reasons, login credentials are **not published in this repository**.

If you are setting up the project locally, create/configure an administrator account through your local database according to your project configuration.

---

## 📸 Main Modules

### Public/User Side

* Home
* About
* Donor List
* Search Donor
* Donor Registration
* Blood Request
* Contact
* Login
* Profile
* Change Password

### Admin Side

* Admin Login
* Dashboard
* Donor Management
* Donor List
* Request Management
* Profile Management
* Password Management
* Logout

---

## 🎯 Use Cases

This system can be used by:

* 🏥 Blood banks
* 🏫 Educational institutions
* 🩸 Donation organizations
* 👨‍💻 Students learning PHP/MySQL
* 📚 Academic project demonstrations
* 💼 Developers building healthcare-related web applications

---

## 🔮 Future Improvements

The project can be further enhanced with modern features such as:

* 📱 Fully modern responsive UI
* 🔎 Advanced donor filtering
* 📍 Location-based donor search
* 🔔 Email/SMS notifications
* 📊 Advanced analytics dashboard
* 📈 Blood inventory management
* 🗺️ Nearby donor discovery
* 🔐 Password hashing using modern algorithms
* 🛡️ Improved input validation and security
* 🧑‍💼 Multiple admin roles and permissions
* 📄 Export donor/request reports
* ☁️ Cloud deployment
* 🔗 REST API integration
* 🤖 AI-powered donor matching and recommendations

---

## 🧪 Local Development

For development, the project can be run using:

```text
XAMPP
Apache
MySQL
PHP
```

Recommended workflow:

```text
Edit Code
   ↓
Run on localhost
   ↓
Test Functionality
   ↓
Commit Changes
   ↓
Push to GitHub
```

---

## 📌 Important Security Notes

Before deploying this application publicly:

* Change all default credentials.
* Never commit passwords to GitHub.
* Never commit API keys or secret tokens.
* Use strong password hashing such as `password_hash()` in new implementations.
* Validate and sanitize user input.
* Use prepared statements for database queries.
* Configure production database credentials outside the public repository.
* Enable HTTPS on production servers.
* Review file upload functionality before public deployment.

---

## 🤝 Contributing

Contributions and improvements are welcome.

### Contribution Workflow

1. Fork the repository.
2. Create a new branch.

```bash
git checkout -b feature/your-feature
```

3. Make your changes.
4. Test the application locally.
5. Commit your changes.

```bash
git add .
git commit -m "Add your feature"
```

6. Push your branch.

```bash
git push origin feature/your-feature
```

7. Open a Pull Request.

---

## 📜 License

This project is intended primarily for **educational and portfolio purposes**.

If you reuse or modify this project, please review the original project files and dependencies for their respective licensing terms.

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
