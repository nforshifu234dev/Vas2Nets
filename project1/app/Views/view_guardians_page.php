<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Guardians - </title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <style>
 /* Add your custom styles here */
        body {
            margin: 0;
            padding-top: 0px; /* Adjust based on your navbar height */
            padding-top: 56px;
            margin-bottom: 70px; /* Adjust based on your footer height */
        }

        /* Footer styles */
        footer {
            /* position: fixed; */
            /* bottom: 0; */
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
            margin-top: 20px;
        }

        .table thead th {
            position: sticky;
            top: 58px; /* Adjust based on your navbar height */
            height: 100px;
            background-color: #f8f9fa; /* Choose a background color */
            z-index: 50;
            background: black;
            color: #f8f9fa;
        }

        /* Profile image placeholder */
        .profile-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd; /* Placeholder background color */
            margin-right: 10px;
        }

         /* Form styles */
         .add-user-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <?php include_once APPPATH . 'views/navigation/topNav.php'; ?>

    <div class="container mt-5">

    <?php
        // Calculate the range of displayed results
        $currentPage = $pager->getCurrentPage();
        $perPage = $pager->getPerPage();
        $total = $pager->getTotal();
        $start = ($currentPage - 1) * $perPage + 1;
        $end = min($currentPage * $perPage, $total);
        ?>
        <h2>Guardians List - Showing Results from <?= $start ?> to <?= $end ?> of <?= $total ?></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 + ($currentPage - 1) * $perPage ?></td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a></td>
                        <td><a href="tel:+<?= $user['phone'] ?>">+<?= $user['phone'] ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Pagination Links -->
        <nav>
            <?= $pager->links() ?>
        </nav>
    </div>

    <?php include_once APPPATH . 'views/navigation/footer.php'; ?>
    <script src="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>


    <!-- Include Bootstrap JS (Popper.js and jQuery are required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
