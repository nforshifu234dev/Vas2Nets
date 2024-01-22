<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/" target="_blank">
            <img src="<?= base_url('images/logo.png') ?>" alt="MiSchools Logo" height="65" class="d-inline-block align-top">
            <!-- - MiSchools -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usersDropdown">
                        <a class="dropdown-item" href="/users/">View All</a>
                        <a class="dropdown-item" href="/users/new/">Create</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                        <a class="dropdown-item" href="/students/">View All</a>
                        <a class="dropdown-item" href="/students/new/">Create</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="guardiansDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guardians
                    </a>
                    <div class="dropdown-menu" aria-labelledby="guardiansDropdown">
                        <a class="dropdown-item" href="/guardians/">View All</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/messages/" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <!-- Example form for logout -->
                    <form action="<?= site_url('logout') ?>" method="post" class="nav-link">
                        <?= csrf_field() ?>
                        <!-- Add any additional fields or styling as needed -->
                        <button type="submit" class="btn btn-link bg-danger text-white">Logout</button>
                    </form>
                </li>
                <!-- Add more quick links as needed -->
                <li class="nav-item d-none">
                    <!-- Profile image placeholder -->
                    <div class="profile-img"></div>
                </li>
            </ul>
        </div>
    </div>
</nav>