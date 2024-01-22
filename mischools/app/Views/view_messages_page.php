<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Messages - </title>
    <!-- Include Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            margin: 0;
            padding-top: 0px; /* Adjust based on your navbar height */
            padding-top: 56px;
            margin-bottom: 70px; /* Adjust based on your footer height */
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1000;
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
            /* position: fixed; */
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
        }

                /* Profile image placeholder */
                .profile-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd; /* Placeholder background color */
            margin-right: 10px;
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
        <h2>Messages List - Showing Results from <?= $start ?> to <?= $end ?> of <?= $total ?></h2>
        <table class="table table-striped">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Contact Name</th>
                    <th>Contact EMail</th>
                    <th>Message</th>
                    <th>Has Read?</th>
                    <th>Has Replied?</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $index => $message): ?>
                    <tr>
                        <td><?= $index + 1 + ($currentPage - 1) * $perPage ?></td>
                        <td><?= $message['name'] ?></td>
                        <td><?= $message['email'] ?></td>
                        <td><?= $message['message'] ?></td>
                        <td class="text-center"><?= $message['has_viewed'] === 1 ? 'Yes' : 'No' ?></td>
                        <td class="text-center"><?= $message['has_replied'] === 1 ? 'Yes' : 'No' ?></td>
                        <td>
                            <div class="btn-group row">
                                <button class="btn btn-primary mb-2">Mark As Read</button>
                                <button class="btn btn-primary mb-2">Reply</button>
                                <form action="/messages/delete/" class="ml-2" method="post">
                                    <input type="hidden" name="id" value="<?= $message['mailid'] ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
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
