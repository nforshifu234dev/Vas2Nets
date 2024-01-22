<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Log In into your Account </title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/enroll.css') ?>">
    <script src="http://localhost/@itms/fontawesome-free-6.4.0-web/js/all.min.js"></script>
    <!-- NFSFU234 Form Validation Library CDNs -->
    <link rel="stylesheet" href="http://localhost/@libraries/NFSFU234-FormValidation/dist/css/nfsfu234FormValidation.min.css">
    <script src="http://localhost/@libraries/NFSFU234-FormValidation/dist/js/nfsfu234FormValidation.js"></script>
    <style>
        .container .right
        {
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;   
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;   
        }
        .container .left
        {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .rememberMe
        {
            /* border: red solid 2px; */
            display: flex;
            align-items: center;
            height: min-content;
        }
        .rememberMe .input
        {
            width:  20px;
            height: 100%;
            margin-right: 10px;
            /* border: blue solid 2px; */
        }
    </style>
</head>
<body>
    
    <div class="container">

        <div class="right">
            <img src="<?= base_url('images/jjj/OIG.E_zkYfvENR7YG53ujih9.jpg') ?>" alt="">
        </div>

        <div class="left">
            
            <div class="text">
                <!-- Already have an account? <a href="#">Log in</a> -->
                Don't have an account? <a href="/enroll/">Sign Up</a>
            </div>

            <!-- <div class="title">Sign Up</div> -->
            <div class="title">log in</div>

            <div id="form" class="form">

                <div class="ste">

                    <div class="input-feild">
                        <label for="">Username</label>
                        <div class="input">
                            <input type="text" name="username" placeholder="username or email" required>
                        </div>
                    </div>

                    <div class="input-feild">
                        <label for="">Password</label>
                        <div class="input">
                            <input type="password" name="password" placeholder="password" required>
                        </div>
                    </div>

                    <div class="input-feild rememberMe">
                        <div class="input">
                            <input type="checkbox" name="remember_me" id="remember_me">
                        </div>
                        <label for="rememberMe">Remember me</label>
                    </div>
                    
                    <?= csrf_field() ?>

                    <input type="hidden" id="formURL" value="/login/">

                    <div class="input">
                        <button type="submit" > login <i class="fas fa-arrow-right"></i> </button>
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


    </div>

    <script src="<?= base_url('js/admin_form.js') ?>"></script>

</body>
</html>