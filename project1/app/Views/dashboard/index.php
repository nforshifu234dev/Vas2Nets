
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
            padding-top:75px;
        }
        footer {
            margin-top: 30px;
            padding: 10px 0;
            background-color: #f8f9fa;
        }
        .heading a
        {
            color: red ;
            text-decoration: none;
            opacity: 0.8;
        }
        .heading a:hover
        {
            opacity: 1;
        }
    </style>
</head>
<body>

    <?php include_once APPPATH . 'views/navigation/topNav.php'; ?>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Add your tables, charts, and other content here -->
        <h1>My Dashboard</h1>

        <section>

            <div class="container mt-4">
                <!-- Banner -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h2 class="card-title">Dashboard Overview</h2>
                                <p class="card-text">Check out the key metrics for your dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Metrics Cards -->
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text"><?= $totalNumberOfUsers ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Guardians</h5>
                                <p class="card-text"><?= $totalNumberOfGuardians ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Students</h5>
                                <p class="card-text"><?= $totalNumberOfStudents ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Contact Messages</h5>
                                <p class="card-text"><span class="text-danger"><?= $totalNumberOfUnreadMessages ?> unread</span> . <?= $totalNumberOfMessages ?> total</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Metrics Cards as needed -->
            </div>


        </section>

        <section>

            <div class="container mt-4">

                <div class="row ">
                    <div class="col-md-6">
                        <!-- Add another table as needed -->
                        <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">
                            <h2>Last 10 Messages   </h2>
                            <span><a href="#">View All</a></span>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Contact Name</th>
                                    <th>Contact EMail</th>
                                    <th>Date & Time Sent</th>
                                    <th>Is a User?</th>
                                    <!-- Add more headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lastMessages as $key => $message) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $message['name']; ?></td>
                                        <td><?= $message['email']; ?></td>
                                        <td><?= $message['date_time_sent']; ?></td>
                                        <td><?= $message['user_id'] !== null ? 'Yes' : 'No' ?></td>
                                        <!-- Add more cells as needed -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <!-- Students Table -->
                        <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">

                            <h2>Last 10 Students</h2>
                            <a href="/students/">View All</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Student Surame</th>
                                    <th>Student Name(s)</th>
                                    <th>DOB</th>
                                    <th>Academic Session</th>
                                    <!-- Add more headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lastStudents as $key => $student) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $student['surname']; ?></td>
                                        <td><?= $student['first_name']; ?></td>
                                        <td><?= $student['date_of_birth']; ?></td>
                                        <td><?= $student['academic_session']; ?></td>
                                        <!-- Add more cells as needed -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">
                            <h2>Last 10 Users</h2>
                            <a href="/users/">View All</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <!-- Add more headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lastUsers as $key => $user) : ?>
                                    <tr>
                                        <td><?= $key + 1?></td>
                                        <td><?= $user['surname'] . ' ' . $user['first_name'] . ' ' .  $user['other_names']; ?></td>
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['role']; ?></td>
                                        <!-- Add more cells as needed -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <!-- Table Headers and Body for Guardians -->
                            <!-- Guardians Table -->
                            <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">
                                <h2>Last 10 Guardians</h2>
                                <a href="/guardians/">View All</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian Role</th>
                                        <th>Guardian Child ID</th>
                                        <!-- Add more headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lastGuardians as $key => $guardian) : ?>
                                        <tr>
                                            <td><?= $key + 1?></td>
                                            <td><?= $guardian['name']; ?></td>
                                            <td><?= $guardian['role']  ?? ! empty($guardian['role']) ? $guardian['role'] : '---' ?></td>
                                            <td><?= $guardian['child_user_id']; ?></td>
                                            <!-- Add more cells as needed -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>

            </div>


        </section>

        <section>

            <div class="container mt-4">

                <div class="row">

                    <div class="col-md-6">

                        <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">
                            <h2>User Role Chart Data</h2>
                        </div>

                        <div class="canvas">

                            <canvas id="userRoleChart" width="200" height="100"></canvas>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="heading d-flex align-items-center justify-content-between bg-dark text-white p-2 mb-2">
                            <h2>Messages Chart Data</h2>
                        </div>

                        <div class="canvas">

                            <canvas id="messageStatusChart" width="400" height="300"></canvas>

                        </div>

                    </div>

                </div>
            
            </div>

        </section>

        <!-- Add your content here -->
    </div>

    <script src="http://localhost/@itms/chart.js"></script>

    <script>

        // Example data (replace with actual data from your server)
        const userData = {
            labels: ['Admin', 'User', 'Student'],
            datasets: [{
                data: [<?= $totalNumberOfAdmins ?>, <?= $totalNumberOfUsers2 ?>, <?= $totalNumberOfStudents ?>], // Replace with the actual counts for each role
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            }],
        };

        // Get the pie chart canvas element
        const ctx = document.getElementById('userRoleChart').getContext('2d');

        // Create a pie chart
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: userData,
        });

    </script>

    <script>

        // Example data (replace with actual data from your server)
        const messageStatusData = {
            labels: ['Total', 'Unread', 'UnReplied'],
            datasets: [{
                label: 'Message Status',
                data: [<?= $totalNumberOfMessages ?>, <?= $totalNumberOfUnreadMessages ?>, <?= $totalNumberOfUnrepliedMessages ?>], // Replace with actual counts for each status
                backgroundColor: ['#3498db', '#e74c3c', '#2ecc71'],
            }],
        };

        // Get the bar chart canvas element
        const messageStatusCtx = document.getElementById('messageStatusChart').getContext('2d');

        // Create a bar chart
        const messageStatusChart = new Chart(messageStatusCtx, {
            type: 'bar',
            data: messageStatusData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });

    </script>

    <?php include_once APPPATH . 'views/navigation/footer.php'; ?>




    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->
    <script src="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- Chart.js (if needed) -->
    <!-- Add other JS files as needed -->

</body>
</html>
