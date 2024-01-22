<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">

    <title>Join Us This Season </title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/enroll.css') ?>">
    <script src="http://localhost/@itms/fontawesome-free-6.4.0-web/js/all.min.js"></script>
    <link rel="stylesheet" href="http://localhost/@libraries/NFSFU234-FormValidation/dist/css/nfsfu234FormValidation.min.css">
    <script src="http://localhost/@libraries/NFSFU234-FormValidation/dist/js/nfsfu234FormValidation.js"></script>


</head>
<body>
    
    <div class="container">

        <!-- <div class="right">
            <img src="assets/images/jjj/OIG.E_zkYfvENR7YG53ujih9.jpg" alt="">
        </div> -->

        <div class="left">
            
            <div class="text">
                Already have an account? <a href="/login/">Log in</a>
            </div>

            <div class="title">Sign Up</div>

            <div action="#" id="jsEnrollForm" class="form">

                <div class="step step1 d" id="jsStep1">

                    <div class="title"><i class="fas fa-user"></i> personal info.</div>

                    <div class="input-group">


                        <div class="input-feild">
                            <label for="">Surname <span class="requiredLabel"></span></label>
                            <div class="input">
                                <input type="text" name="sName" placeholder="John" required>
                            </div>
                        </div>
        
                        <div class="input-feild">
                            <label for="">First Name <span class="requiredLabel"></span></label>
                            <div class="input">
                                <input type="text" name="fName" placeholder="Doe" required>
                            </div>
                        </div>
        
                    </div>


                    <div class="input-feild">
                        <label for="">Other Names</label>
                        <div class="input">
                            <input type="text" name="oNames" placeholder="______________">
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for="">Date Of Birth <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="date" name="dob" required>
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for="">Gender <span class="requiredLabel"></span></label>
                        <div class="input">
                            <select name="gender" id=""  required>
                                <option value="">Choose your Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for=""> Nationality <span class="requiredLabel"></span></label>
                        <div class="input">
                            <select name="nationality" id="jsNationalitySelect" required>
                                <option value="">Choose Your Nationality</option>
                                <option value="NG">Nigeria</option>
                                <option value="CMR">Cameroon</option>
                            </select>
                        </div>
                    </div>

                    <div class="input">
                        <button type="button" onclick="nextStep(2)" > next <i class="fas fa-arrow-right"></i> </button>
                    </div>

                </div>

                <div id="jsStep2" class="step step2 d">

                    <div class="title"><i class="fa fa-contact-book"></i> contact info.</div>

                    <div class="input-feild">
                        <label for="">E-Mail <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="email" name="email" placeholder="someone@domain.com" required>
                        </div>
                    </div>

                    <div class="input-group">


                        <div class="input-feild">
                            <label for="">Country Code <span class="requiredLabel"></span></label>
                            <div class="input">
                                <select name="country_code" id="jsCountryCode" required>
                                    <option value="">Choose your country code</option>
                                    <option value="234">Nigeria (+234)</option>
                                    <option value="237">Nigeria (+237)</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="input-feild">
                            <label for="">Phone Number <span class="requiredLabel"></span></label>
                            <div class="input">
                                <input type="tel" name="phone_number" placeholder="0123456789" required>
                            </div>
                        </div>
        
                    </div>

                    <div class="input-feild">
                        <label for="">Address <span class="requiredLabel"></span></label>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="street" placeholder="Street" required>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="city" placeholder="City" required>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="state" placeholder="State" required>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <input type="zipcode" name="zipcode" placeholder="Zip Code" required>
                            </div>
                        </div>

                    </div>

                    <div class="input-group">

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="prevStep(1)" > <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(3)" > next <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="jsStep3" class="step step3 d">

                    <div class="title"><i class="fa fa-plus-circle"></i> enrollment info.</div>

                    <div class="input-feild">
                        <label for="">Academic Session <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="text" name="academic_session" value="2024/2025" readonly required>
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for="">Enrollment Type <span class="requiredLabel"></span></label>
                        <div class="input">
                            <select name="enrollment_type" id="enrollmentType" required>
                                <option value="">Choose Enrollment Type</option>
                                <option value="new">New Student</option>
                                <option value="ts">Transfer Student</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for="">Program/Class <span class="requiredLabel"></span></label>
                        <div class="input">
                            <select name="program" id="" required>
                                <option value="">Choose Program</option>
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
                                <option value="200">200L</option>
                                <option value="300">300L</option>
                                <option value="400">400L</option>
                                <option value="500">500L</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(2)" > <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(4)" > next <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="jsStep4" class="step step4 d">

                    <div class="title"><i class="fa fa-school"></i> Educational info.</div>

                    <div class="input-feild">
                        <label for="">Previous School Info.</label>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="prev_school_name" placeholder="School Name" >
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="prev_school_address" placeholder="School Address" >
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <input type="text" name="prev_school_last_class_attended" placeholder="Last Class / Level Attended">
                            </div>
                        </div>

                    </div>

                    <div class="input-group">

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="prevStep(3)"> <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(5)" > next <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="jsStep5" class="step step5 d">

                    <div class="title"><i class="fa fa-medkit"></i> Parent/Guardian info.</div>

                    <div class="input-feild d">
                        <label for="">Parent/Guardian Name(s) <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="text" name="guardian_name" placeholder="Your Parent / Guardian Name(s)" required>
                        </div>
                    </div>

                    <div class="input-feild d">
                        <label for="">Parent/Guardian Relationship <span class="requiredLabel"></span></label>
                        <div class="input">
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
                    </div>

                    <div class="input-feild d">
                        <label for="">Parent/Guardian Email <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="email" name="guardian_email" placeholder="Your Parent / Guardian Email" required>
                        </div>
                    </div>

                    <div class="input-feild d">
                        <label for="">Parent/Guardian Phone Number</label>
                        <div class="input">
                            <input type="tel" name="guardian_phone" placeholder="Your Parent / Guardian Phone Number" >
                        </div>
                    </div>

                    <div class="input-group">

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="prevStep(4)"> <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(6)" > next <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="jsStep6" class="step step6 d">

                    <div class="title"><i class="far fa-user"></i> Login info.</div>
                    <small>NOTE: The information provided here will be your used to login into the school portal</small>
                    <br>
                    <br>

                    <div class="input-feild d">
                        <label for="">Username <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="text" name="user_username" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="input-feild d">
                        <label for="">Password <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="password" name="user_password" placeholder="********" required>
                        </div>
                    </div>

                    <div class="input-feild d">
                        <label for="">Confirm Password <span class="requiredLabel"></span></label>
                        <div class="input">
                            <input type="password" name="user_c_password" placeholder="********" required>
                        </div>
                    </div>

                    <div class="input-group">

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(5)" > <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(7)" > next <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="jsStep7" class="step step7 d">

                    <div class="title"><i class="far fa-file-text"></i>  Terms & Conditions</div>
 
                    <div class="consent-banner">
                        <img src="<?= base_url('images/jjj/OIG.S8E18_fUsgL55_NFIa62.jpg') ?>" alt="">
                        <img src="<?= base_url('images/jjj/OIG.Bl6oBYHM1T7HvTRodkkF.jpg') ?>" alt="">
                    </div>

                    <div class="input-feild d">

                        <div class="input">
                            <input type="checkbox" name="t&c" id="" required>
                        </div>

                        <div class="text">
                            I have read and agree to the 
                            <a href="#">Terms and Conditions</a>, 
                            <a href="#">Privacy Policy</a>, and 
                            <a href="#">Consent Policy</a>
                        </div>
                    </div>

                    <div class="input-group">

                        <?= csrf_field() ?>

                        <div class="input-feild">
                            <div class="input">
                                <button type="button" onclick="nextStep(6)" > <i class="fas fa-arrow-left"></i> back</button>
                            </div>
                        </div>

                        <div class="input-feild">
                            <div class="input">
                                <button type="submit" id="jsEnroll">Submit <i class="fas fa-paper-plane"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
                      

            <div class="optionIndicator">
                <span></span>
                or
                <span></span>
            </div>

            <div class="socials">

                <div class="social">
                    <!-- <i class="fab fa-facebook"></i> -->
                    <svg xmlns='http://www.w3.org/2000/svg' shape-rendering='geometricPrecision' text-rendering='geometricPrecision' image-rendering='optimizeQuality' fill-rule='evenodd' clip-rule='evenodd' viewBox='0 0 509 509'><g fill-rule='nonzero'><path fill='#0866FF' d='M509 254.5C509 113.94 395.06 0 254.5 0S0 113.94 0 254.5C0 373.86 82.17 474 193.02 501.51V332.27h-52.48V254.5h52.48v-33.51c0-86.63 39.2-126.78 124.24-126.78 16.13 0 43.95 3.17 55.33 6.33v70.5c-6.01-.63-16.44-.95-29.4-.95-41.73 0-57.86 15.81-57.86 56.91v27.5h83.13l-14.28 77.77h-68.85v174.87C411.35 491.92 509 384.62 509 254.5z'/><path fill='#fff' d='M354.18 332.27l14.28-77.77h-83.13V227c0-41.1 16.13-56.91 57.86-56.91 12.96 0 23.39.32 29.4.95v-70.5c-11.38-3.16-39.2-6.33-55.33-6.33-85.04 0-124.24 40.16-124.24 126.78v33.51h-52.48v77.77h52.48v169.24c19.69 4.88 40.28 7.49 61.48 7.49 10.44 0 20.72-.64 30.83-1.86V332.27h68.85z'/></g></svg>
                </div>

                <div class="social">
                    <!-- <i class="fab fa-google"></i> -->
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 326667 333333' shape-rendering='geometricPrecision' text-rendering='geometricPrecision' image-rendering='optimizeQuality' fill-rule='evenodd' clip-rule='evenodd'><path d='M326667 170370c0-13704-1112-23704-3518-34074H166667v61851h91851c-1851 15371-11851 38519-34074 54074l-311 2071 49476 38329 3428 342c31481-29074 49630-71852 49630-122593m0 0z' fill='#4285f4'/><path d='M166667 333333c44999 0 82776-14815 110370-40370l-52593-40742c-14074 9815-32963 16667-57777 16667-44074 0-81481-29073-94816-69258l-1954 166-51447 39815-673 1870c27407 54444 83704 91852 148890 91852z' fill='#34a853'/><path d='M71851 199630c-3518-10370-5555-21482-5555-32963 0-11482 2036-22593 5370-32963l-93-2209-52091-40455-1704 811C6482 114444 1 139814 1 166666s6482 52221 17777 74814l54074-41851m0 0z' fill='#fbbc04'/><path d='M166667 64444c31296 0 52406 13519 64444 24816l47037-45926C249260 16482 211666 1 166667 1 101481 1 45185 37408 17777 91852l53889 41853c13520-40185 50927-69260 95001-69260m0 0z' fill='#ea4335'/></svg>
                </div>

                <div class="social">
                    <!-- <i class="fab fa-apple"></i> -->
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' shape-rendering='geometricPrecision' text-rendering='geometricPrecision' image-rendering='optimizeQuality' fill-rule='evenodd' clip-rule='evenodd' viewBox='0 0 640 640'><path d='M494.782 340.02c-.803-81.025 66.084-119.907 69.072-121.832-37.595-54.993-96.167-62.552-117.037-63.402-49.843-5.032-97.242 29.362-122.565 29.362-25.253 0-64.277-28.607-105.604-27.85-54.32.803-104.4 31.594-132.403 80.245C29.81 334.457 71.81 479.58 126.816 558.976c26.87 38.882 58.914 82.56 100.997 81 40.512-1.594 55.843-26.244 104.848-26.244 48.993 0 62.753 26.245 105.64 25.406 43.606-.803 71.232-39.638 97.925-78.65 30.887-45.12 43.548-88.75 44.316-90.994-.969-.437-85.029-32.634-85.879-129.439l.118-.035zM414.23 102.178C436.553 75.095 451.636 37.5 447.514-.024c-32.162 1.311-71.163 21.437-94.253 48.485-20.729 24.012-38.836 62.28-33.993 99.036 35.918 2.8 72.591-18.248 94.926-45.272l.036-.047z'/></svg>
                </div>

            </div>

        </div>

        <div class="right">
            <img src="<?= base_url('images/OIG.DZitqHgMjGBp.Ydxhstr.jpg') ?>" alt="">
        </div>

    </div>

    <!-- <script src="assets/js/enroll.js"></script> -->
    <script src="<?= base_url('js/enroll.js') ?>"></script>

    <script>

        const AJAXOptions = {
            url: '<?= base_url('all_countries_info.json') ?>', // URL for the AJAX request
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