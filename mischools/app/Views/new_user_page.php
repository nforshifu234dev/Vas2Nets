<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Add New User - MiSchools</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- NFSFU234FormValidation CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nfsfu234-form-validation@latest/dist/css/nfsfu234FormValidation.min.css">

    <!-- NFSFU234FormValidation JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/nfsfu234-form-validation@latest/dist/js/nfsfu234FormValidation.js"></script>
    <style>
 /* Add your custom styles here */
        body {
            margin: 0;
            padding-top: 64px; /* Adjust based on your navbar height */
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

        .generatePassword
        {
            -webkit-user-select: none;
            user-select: none;
        }

    </style>
</head>

<body>

    <?php include_once APPPATH . 'views/navigation/topNav.php'; ?>


    <div class="container main-container mt-5">

     <!-- Add User Form -->
        <h2>Add New User</h2>
        <div id="form">
            <input type="hidden" id="formURL" value="/users/new/">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <div class="input">
                    <input type="text" id="sName" name="sName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <div class="input">
                    <input type="text" id="fName" name="fName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="otherNames">Other names:</label>
                <input type="text" id="oNames" name="oNames">
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
                <label for="user_username">username:</label>
                <div class="input">
                    <input type="text" id="user_username" name="user_username" required>
                </div>
            </div>
            <div class="form-group">
                <label for="user_password">Password:</label>
                <div class="input">
                    <input type="password" id="user_password" class="js-v-genPassword" name="user_password" required>
                    <!-- <div class="iput cssShowPassword"> -->
                        <div class="js-togglePassword cssShowPassword"><i class="fas fa-eye"></i></div>
                    <!-- </div> -->
                </div>



                <div class="generatePassword" id="jsGeneratePassword">
                    Generate Password
                </div>

            </div>

            <div class="input">
                <button type="submit">Add User</button>
            </div>

        </div>

    </div>

    <?php include_once APPPATH . 'views/navigation/footer.php'; ?>

    <!-- Include Bootstrap JS (Popper.js and jQuery are required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <script src="<?= base_url('/js/admin_form.js') ?>"></script>

    <?php include_once APPPATH . 'views/navigation/footer.php'; ?>



    </script>


</body>

</html>
