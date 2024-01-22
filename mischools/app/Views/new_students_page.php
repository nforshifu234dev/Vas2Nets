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

    <script src="http://localhost/@itms/fontawesome-free-6.4.0-web/js/all.min.js"></script>

    <!-- NFSFU234 Form Validation Library CDNs -->
    <link rel="stylesheet" href="http://localhost/@libraries/NFSFU234-FormValidation/dist/css/nfsfu234FormValidation.min.css">
    <script src="http://localhost/@libraries/NFSFU234-FormValidation/dist/js/nfsfu234FormValidation.js"></script>

    <style>
 /* Add your custom styles here */
        body {
            margin: 0;
            padding-top: 46px; /* Adjust based on your navbar height */
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


    <div class="container mt-5">

     <!-- Add User Form -->
        <h2>Add New Student</h2>
        <div id="form">
            <div class="form-group">
                <label for="sName">Surame:</label>
                <div class="input">
                    <input type="text" id="sName" name="sName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="fName">First Name:</label>
                <div class="input">
                    <input type="text" id="fName" name="fName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="oNames">Other names:</label>
                <input type="text" id="oNames" name="oNames">
            </div>
            <div class="form-group">
                <label for="dob">DOB:</label>
                <div class="input">
                    <input type="date" id="dob" name="dob" required>
                </div>
            </div>
            <div class="form-group">
                <label for="gender">gender:</label>
                <div class="input">
                    <select name="gender" id="" required>
                        <option value="">choose gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nationality">nationality:</label>
                <div class="input">
                    <select name="nationality" id="jsNationalitySelect" required>
                        <option value="NG">Nigeria</option>
                        <option value="CMR">Cameroon</option>
                        <option value="FR">France</option>
                        <option value="USA">United States of America</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="country_code">country code:</label>
                <div class="input">
                    <select name="country_code" id="jsCountryCode" required>
                        <option value="234">Nigeria (+234)</option>
                        <option value="237">Cameroon (+237)</option>
                        <option value="2">France (+2)</option>
                        <option value="1">United States of America (+1)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phone_number">phone:</label>
                <div class="input">
                    <input type="tel" id="phone_number" name="phone_number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="street">street:</label>
                <div class="input">
                    <input type="text" id="street" name="street" required>
                </div>
            </div>

            <div class="form-group">
                <label for="city">city:</label>
                <div class="input">
                    <input type="text" id="city" name="city" required>
                </div>
            </div>

            <div class="form-group">
                <label for="state">state:</label>
                <div class="input">
                    <input type="text" id="state" name="state" required>
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode">zipcode:</label>
                <div class="input">
                    <input type="text" id="zipcode" name="zipcode" required>
                </div>
            </div>

            <div class="form-group">
                <label for="enrollment_type">enrollment type:</label>
                <div class="input">
                    <select name="enrollment_type" id="" required>
                        <option value="new">New</option>
                        <option value="transfer">transfer</option>
                    </select>
                </div>
            </div>

            
            <div class="form-group">
                <label for="academic_session">academic session:</label>
                <div class="input">
                    <input type="text" value="2024/2025" readonly name="academic_session">
                </div>
            </div>

            <div class="form-group">
                <label for="program">program:</label>
                <div class="input">
                    <select name="program" id="" required>
                        <option value="">choose program</option>
                        <option value="kindergerten">Kindergerten</option>
                        <option value="nusery1">nusery 1</option>
                        <option value="nusery2">nusery 2</option>
                        <option value="primary1">primary 1</option>
                        <option value="primary2">primary 2</option>
                        <option value="primary3">primary 3</option>
                        <option value="primary4">primary 4</option>
                        <option value="primary5">primary 5</option>
                        <option value="primary6">primary 6</option>
                        <option value="100">100 Level</option>
                        <option value="200">200 Level</option>
                        <option value="300">300 Level</option>
                        <option value="400">400 Level</option>
                        <option value="500">500 Level</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="guardian_name">Guardian Name:</label>
                <input type="text" id="guardian_name" name="guardian_name" required>
            </div>

            <div class="form-group">
                <label for="guardian_role">Guardian Role:</label>
                <select name="guardian_role" id="" required>
                    <option value="">Choose an option</option>
                    <option value="father">father</option>
                    <option value="mother">mother</option>
                    <option value="brother">brother</option>
                    <option value="sister">sister</option>
                    <option value="uncle">uncle</option>
                    <option value="aunt">aunt</option>
                    <option value="other">other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="guardian_email">Guardian Email:</label>
                <input type="text" id="guardian_email" name="guardian_email" required>
            </div>

            <div class="form-group">
                <label for="guardian_phone">Guardian Phone:</label>
                <input type="tel" id="guardian_phone" name="guardian_phone" required>
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
                    <div class="js-togglePassword cssShowPassword"><i class="fas fa-eye"></i></div>
                </div>


                <div class="generatePassword" id="jsGeneratePassword">
                    Generate Password
                </div>

            </div>

            <?= csrf_field() ?>

            <input type="hidden" name="t&c" value="true">

            <input type="hidden" id="formURL" value="/students/new/">

            <div class="input">
                <button type="submit">Add User</button>
            </div>

        </div>

    </div>

    <?php include_once APPPATH . 'views/navigation/footer.php'; ?>


    <!-- Include Bootstrap JS (Popper.js and jQuery are required for Bootstrap) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="http://localhost/@itms/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="http://localhost/@itms/bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>

    <script src="<?= base_url('/js/admin_form.js') ?>"></script>

    <script>

        const formValidator = new NFSFU234FormValidation();

        const AJAXOptions = {
            url: 'https://restcountries.com/v3.1/all/', // URL for the AJAX request
            RequestMethod: 'GET', // Request method
            RequestHeader: {
              'Content-Type': 'application/json', // Example request header
            },
        };

        formValidator.ajax(AJAXOptions)
            .then( countriesData => {

                const nationalityDropdown = document.getElementById('jsNationalitySelect');
                nationalityDropdown.innerHTML = '';
                nationalityDropdown.innerHTML = `<option value="">Choose Your Nationality</option>`;

                const countryCodeDropdown = document.getElementById('jsCountryCode');
                countryCodeDropdown.innerHTML = '';
                countryCodeDropdown.innerHTML = `<option value="">Choose your country code</option>`;

                countriesData = countriesData.sort( (a, b) =>{

                    const nameA = a.name.common.toUpperCase();
                    const nameB = b.name.common.toUpperCase();

                    return nameA.localeCompare(nameB);

                } );

                
                countriesData.forEach(country => {
                    const countryName = country.name.common;
                    const countryCode = country.cca2;  // Country code
                    const suffixes = Array.isArray(country.idd.suffixes) ? country.idd.suffixes : [];
                    
                    let callCode;
                    if (suffixes.length === 1) {
                        // If there is only one suffix, display both the root and the single suffix
                        callCode = country.idd.root + suffixes[0];
                    } else {
                        // If there is more than one suffix, display only the root
                        callCode = country.idd.root;
                    }

                    const countryShortCode = country.ccn3;  // Numeric country code

                    // Print or store the information as needed
                    // console.log(`Country: ${countryName}, Code: ${countryCode}, Short Code: ${countryShortCode}`);

                    let nationalityDropdownContent = document.createElement('option');
                    nationalityDropdownContent.value = countryCode;
                    nationalityDropdownContent.innerHTML = countryName;

                    nationalityDropdown.appendChild(nationalityDropdownContent);

                    let countryCodeDropdownContent = document.createElement('option');
                    countryCodeDropdownContent.value = callCode;
                    countryCodeDropdownContent.innerHTML = `${countryName} (${callCode})`;

                    countryCodeDropdown.appendChild(countryCodeDropdownContent);
                });


            } )
        

    </script>

</body>

</html>
