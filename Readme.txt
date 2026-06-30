BLOOD BANK DONOR MANAGEMENT SYSTEM

PROJECT OVERVIEW:

The Blood Donor Management System is a web-based application developed using PHP, MySQL, HTML, CSS, and JavaScript. 
It helps manage blood donors, recipients, and blood stock efficiently. 
The system allows users to register as donors, view available blood groups, and request for blood when needed. 
Administrators can manage donor details, blood requests, and maintain the overall database of the blood bank.

----------------------------------------
FEATURES:
----------------------------------------
1. Donor Registration and Login
2. Admin Login Panel
3. Manage Blood Groups and Donor Records
4. Search Donors by Blood Group and Location
5. Request for Blood and Manage Requests
6. Responsive Design and Easy Navigation
7. Secure Database Connection and Validation

----------------------------------------
TECHNOLOGIES USED:
----------------------------------------
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Server: XAMPP or WAMP (Apache + MySQL)
- Tools: VS Code / Sublime Text / Notepad++

----------------------------------------
INSTALLATION STEPS:
----------------------------------------
1. Download and install XAMPP or WAMP server.
2. Copy the project folder into the "htdocs" directory (for XAMPP).
   Example: C:\xampp\htdocs\BloodBank
3. Open phpMyAdmin from your browser: http://localhost/phpmyadmin
4. Create a new database named: bloodbank
5. Import the SQL file provided with the project (bloodbank.sql).
6. Open the project in your browser:
   http://localhost/BloodBank
7. Login using admin credentials (if provided in SQL file).

----------------------------------------
ADMIN LOGIN DETAILS:
----------------------------------------
Username: admin
Password: admin13
(Note: Change credentials after first login for security.)

----------------------------------------
COMMON ERRORS AND FIXES:
----------------------------------------
- "HTTP ERROR 500" → Check your PHP version and enable display_errors in php.ini.
- "SQLSTATE[HY000] [2002] No such file or directory" → Update database host in 'includes/config.php' to 'localhost'.
- "Index file not found" → Make sure index.php is in the project root folder.
- "502 Bad Gateway" → Restart Apache and MySQL from XAMPP Control Panel.

----------------------------------------
PROJECT STRUCTURE:
----------------------------------------
/BBDMS
│
├── index.php
├── about.php
├── contact.php
├── admin/
│   ├── dashboard.php
│   ├── manage-donors.php
│   └── manage-requests.php
├── includes/
│   ├── config.php
│   └── header.php
├── css/
│   └── style.css
├── js/
│   └── script.js
└── sql/
    └── bbdms.sql

----------------------------------------
CONCLUSION:

The Blood Bank Donor Management System is an efficient solution for managing blood donation and requests online. 
It helps connect donors and recipients easily while keeping records organized and accessible for administrators.

DEVELOPER:

Project Developed By: Naresh Prajapati
Technology Used: PHP, MySQL, HTML, CSS, JavaScript

Hosting Link:

https://nareshindus.gt.tc/
