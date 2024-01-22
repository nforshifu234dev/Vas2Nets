# MiSchools - School Enrollment System

## Table of Contents
1. [Overview](#overview)
2. [Technologies Used](#technologies-used)
    - [CodeIgniter Framework](#codeigniter-framework)
    - [PHP Version](#php-version)
    - [NFSFU234FormValidation Library](#nfsfu234formvalidation-library)
    - [REST Countries API](#rest-countries-api)
3. [Features](#features)
    - [User Features](#user-features)
    - [Admin Features](#admin-features)
    - [Shared Features](#shared-features)
4. [Routes](#routes)
    - [Regular Users and Students](#regular-users-and-students)
    - [Admin Routes](#admin-routes)
5. [Additional Information](#additional-information)
    - [Developer](#developer)
    - [Contact Information](#contact-information)
    - [Licensing](#licensing)
6. [Screenshots](#screenshots)

## Overview
MiSchools is a comprehensive school enrollment system developed by NFORSHIFU234 Dev. It allows users to register as students, send inquiries through the contact form, and provides administrators with tools to manage users, students, and contact messages. The application features a secure login system with role-based access restrictions.

## Technologies Used
### CodeIgniter Framework
MiSchools utilizes the CodeIgniter framework for building a robust and scalable backend.

### PHP Version
The application requires PHP version 8.2 and above for compatibility.

### NFSFU234FormValidation Library
Form validation is implemented using the NFSFU234FormValidation library, providing Ajax loading and error displaying for a seamless user experience.

### REST Countries API
The REST Countries API is integrated for retrieving and displaying country names and call codes in the enrollment form.

## Features

### User Features
1. **Enrollment:** Users can register as students, providing necessary information during the enrollment process.
2. **Contact Form:** Allows users to send inquiries and messages to administrators.

### Admin Features
1. **User Management:** Administrators can create new users and students.
2. **Dashboard:** An interactive dashboard displays statistics and key information.
3. **Contact Messages:** Admins can view and manage contact messages, including unread and unreplied ones.

### Shared Features
1. **Form Validation:** Implemented using the [NFSFU234FormValidation library](https://nfsfu234-form-validation.netlify.app/), providing Ajax loading and error displaying.

## Routes

### Regular Users and Students
- `/enroll`: Enrollment feature for user registration as students.
- `/contact`: Contact form for communication.
- `/login`: Secure login system with role-based access.

### Admin Routes
- `/dashboard`: Interactive dashboard displaying key statistics.
- `/users`: User management for administrators.
- `/users/new/`: Create New Users (regular and admins ).
- `/students`: View and manage student information.
- `/students/new/`: Create/Enroll a new student.
- `/guardians`: View and manage student guardians information.
- `/messages/`: View and manage contact messages.

## Additional Information

### Developer
- **Name:** NFORSHIFU234 Dev 🖤👨🏾‍💻 || Shifu-Nfor Nyuiring-yoh Rhagninyui
- **Username:** nforshifu234dev
- **Social Media:** [@nforshifu234.dev](https://www.linktr.ee/nforshifu234dev/)

### Contact Information
- **X (Twitter):** [@nforshifu234dev](https://x.com/nforshifu234dev)
- **GitHub:** [NFORSHIFU234Dev](https://github.com/nforshifu234dev)
- **Instagram:** [@nforshifu234dev](https://www.instagram.com/nforshifu234dev)

### Licensing
All rights and images used in this project belong to NFORSHIFU234 Dev.

## Screenshots
*Insert screenshots here*

*Screenshot 1: Dashboard*
![Dashboard](path/to/dashboard-screenshot.png)

*Screenshot 2: Contact Form*
![Contact Form](path/to/contact-form-screenshot.png)

*Screenshot 3: User Enrollment*
![User Enrollment](path/to/user-enrollment-screenshot.png)