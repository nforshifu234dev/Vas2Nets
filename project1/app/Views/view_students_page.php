<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            padding-top: 56px; /* Adjust based on your navbar height */
            margin-bottom: 70px; /* Adjust based on your footer height */
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .table thead th {
            position: sticky;
            top: 56px; /* Adjust based on your navbar height */
            background-color: #f8f9fa; /* Choose a background color */
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination li {
            display: inline-block;
            margin-right: 5px;
        }

        /* Footer styles */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="path-to-your-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Your Logo
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <!-- Add more quick links as needed -->
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <?php
        // Calculate the range of displayed results
        $currentPage = $pager->getCurrentPage();
        $perPage = $pager->getPerPage();
        $total = $pager->getTotal();
        $start = ($currentPage - 1) * $perPage + 1;
        $end = min($currentPage * $perPage, $total);
        ?>
        <h2>Students List - Showing Results from <?= $start ?> to <?= $end ?> of <?= $total ?></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Surname</th>
                    <th>First Name</th>
                    <th>Other Names</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 + ($currentPage - 1) * $perPage ?></td>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['surname'] ?></td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['other_names'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Pagination Links -->
        <nav>
            <?= $pager->links() ?>
        </nav>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2022 Your Company</p>
            <p>Admin Menu: <a href="#">Dashboard</a> | <a href="#">Users</a> | <a href="#">Settings</a></p>
            <p>Other Links: <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Include Bootstrap JS (Popper.js and jQuery are required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
