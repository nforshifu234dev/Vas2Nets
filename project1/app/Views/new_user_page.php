<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Add New User - </title>
    <!-- Include Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <!-- NFSFU234 Form Validation Library CDNs -->
     <link rel="stylesheet" href="http://localhost/@libraries/NFSFU234-FormValidation/dist/css/nfsfu234FormValidation.min.css">
    <script src="http://localhost/@libraries/NFSFU234-FormValidation/dist/js/nfsfu234FormValidation.js"></script>
    <script src="http://localhost/@itms/fontawesome-free-6.4.0-web/js/all.min.js"></script>
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

        .generatePassword
        {
            -webkit-user-select: none;
            user-select: none;
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2022 Your Company</p>
            <p>Admin Menu: <a href="#">Dashboard</a> | <a href="#">Users</a> | <a href="#">Settings</a></p>
            <p>Other Links: <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Include Bootstrap JS (Popper.js and jQuery are required for Bootstrap) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="http://localhost/@itms/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>


    <script src="<?= base_url('/js/admin_form.js') ?>"></script>

    <script >

// const form = document.getElementById('form');

// // Example form details object
// const formDetails = {
//     form: form, // Replace "myForm" with the ID of your form or the actual HTML element of your form (recommended)
// };



// const formValidator = new NFSFU234FormValidation(formDetails);

// const generatePasswordBtn = form.querySelector('#jsGeneratePassword');

// if (generatePasswordBtn) {
//     // Function to generate and set random password
//     const setRandomPassword = () => {
//         const randomPassword = formValidator.generateRandomPassword();
//         form.querySelectorAll('.js-v-genPassword').forEach(
//             input => input.value = randomPassword
//         );
//     };

//     // Add click event listener
//     generatePasswordBtn.addEventListener('click', setRandomPassword);

//     // Optionally, you can remove the listener after it's triggered once
//     // generatePasswordBtn.addEventListener('click', setRandomPassword, { once: true });
// }

// if ( document.querySelector('.js-togglePassword') )
// {
//     formValidator.togglePasswordVisibility({ 'show': '<i class="fas fa-eye"></i>', 'hide': '<i class="fas fa-eye-slash"></i>' }, form);
// }


// form.querySelector("button[type=submit]").addEventListener('click', ()=>{

//     // console.log(document.querySelector('.main-container'));

//     const navbarHeight =document.querySelector('.navbar').offsetHeight;

//     const offset =navbarHeight > 0 ? -navbarHeight : 0;

//     if( formValidator.validate() )
//     {

//         const formDetails = formValidator.getFormDetails();


//         const ajaxOptions = {
//             url: document.getElementById('formURL').value,
//             RequestMethod: "POST",
//             RequestHeader: {
//                 "Content-Type": "application/json",
//                 "X-Requested-With": "XMLHttpRequest",
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
//             },
//             RequestBody: {
//                 formDetails
//             }
//         };


//         formValidator.ajax(ajaxOptions)
//             .then((response) => {
//                 // Success: Server response received in JSON format
//                 // console.log('Request successful', response);

//                 let errorDetails;

//                 if ( response.status !== 'success' )
//                 {

//                     errorDetails = {
//                         type : 'modal',
//                         message: response.message,
//                         duration: 4000,
//                         element: form,
//                         success: false,
//                     }
                    

//                 }
//                 else
//                 {
//                     errorDetails = {
//                         type : 'modal',
//                         message: response.message,
//                         duration: 4000,
//                         element: form,
//                         success: true,
//                     }

//                     formValidator.reset(form);                            
//                 }

//                 form.scrollIntoView({
//                     behavior: 'smooth',
//                     block: 'start',
//                     inline: 'start'
//                 });

//                 window.scrollBy(0, offset);

//                 // Force scroll to the top of the form even if an input is focused
//                 window.scrollTo({
//                     top: form.offsetTop + offset - 200,
//                     behavior: 'smooth'
//                 });

//                 formValidator.displayError(errorDetails);



//             })
//             .catch((error) => {
//                 // Error: AJAX request failed or rejected
//                 console.error('Request failed', error);
//             });



//     }

//     form.scrollIntoView({
//         behavior: 'smooth',
//         block: 'start',
//         inline: 'start'
//     });

//     window.scrollBy(0, offset);

// });

    </script>


</body>

</html>