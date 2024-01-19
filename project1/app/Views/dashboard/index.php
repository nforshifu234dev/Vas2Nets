<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Dashboard</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js CSS (if needed) -->
    <!-- Add other CSS files as needed -->
    <style>
        /* Add your custom styles here */
        body {
            padding-top: 56px;
        }
        footer {
            margin-top: 30px;
            padding: 10px 0;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="path-to-your-logo.png" alt="Your Logo" height="30" class="d-inline-block align-top">
            Your Logo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usersDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="guardiansDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guardians
                    </a>
                    <div class="dropdown-menu" aria-labelledby="guardiansDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- Example form for logout -->
                    <form action="<?= site_url('logout') ?>" method="post" class="nav-link">
                        <?= csrf_field() ?>
                        <!-- Add any additional fields or styling as needed -->
                        <button type="submit" class="btn btn-link">Logout</button>
                    </form>
                </li>
                <!-- Add more quick links as needed -->
                <li class="nav-item">
                    <!-- Profile image placeholder -->
                    <div class="profile-img"></div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <!-- Add your tables, charts, and other content here -->
    <h1>Your Dashboard</h1>
    <!-- Add your content here -->
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; <?= date('Y') ?> Your Company</p>
        <p>Admin Menu: <a href="#">Dashboard</a> | <a href="#">Users</a> | <a href="#">Settings</a></p>
        <p>Other Links: <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->
<script src="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
<!-- Chart.js (if needed) -->
<!-- Add other JS files as needed -->

</body>
</html>
