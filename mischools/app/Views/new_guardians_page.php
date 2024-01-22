<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Guardian - </title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
 /* Add your custom styles here */
        body {
            margin: 0;
            padding-top: 0px; /* Adjust based on your navbar height */
            margin-bottom: 70px; /* Adjust based on your footer height */
        }

        /* Footer styles */
        footer {
            /* position: fixed; */
            /* bottom: 0; */
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
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

        .input
        {
            position: relative;
            width: 100%;
        }

        .form-group input, 
        .form-group select
        {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
        }

        .input button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            text-transform: capitalize;
        }

        .input button svg
        {
            margin-right: 10px;
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
                <!-- Dropdown for Users -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usersDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <!-- Dropdown for Students -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <!-- Dropdown for Guardians -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="guardiansDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guardians
                    </a>
                    <div class="dropdown-menu" aria-labelledby="guardiansDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">Create</a>
                    </div>
                </li>
                <!-- Add more quick links as needed -->


                                <!-- Profile image placeholder -->
                                <li class="nav-item">
                    <div class="profile-img"></div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">

     <!-- Add User Form -->
        <h2>Add New Guardian</h2>
        <form>
        <div class="form-group">
                <label for="surname">Surame:</label>
                <div class="input">
                    <input type="text" id="surname" name="surname" required>
                </div>
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <div class="input">
                    <input type="text" id="firstName" name="firstName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="otherNames">Other names:</label>
                <input type="text" id="otherNames" name="otherNames" required>
            </div>
            <div class="form-group">
                <label for="username">username:</label>
                <div class="input">
                    <input type="text" id="username" name="username" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="role">role:</label>
                <div class="input" name="role" id="role">
                    <select name="role" id="" required>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Password:</label>
                <div class="input">
                    <input type="password" id="phone" name="phone" required>
                </div>

                <div class="generatePassword" id="jsGeneratePassword">
                    Generate Password
                </div>

            </div>

            <div class="input">
                <button type="submit">Add User</button>
            </div>

        </form>

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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
