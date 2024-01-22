<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="<?= site_url('favicon.ico') ?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Contact Us - MiSchools </title>
    <!-- Font Awesome CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- NFSFU234FormValidation CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nfsfu234-form-validation@latest/dist/css/nfsfu234FormValidation.min.css">

    <!-- NFSFU234FormValidation JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/nfsfu234-form-validation@latest/dist/js/nfsfu234FormValidation.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script defer src="<?= base_url('js/script.js') ?>"></script>
</head>
<body>
    
    <div class="container">
        
        <nav class="topNavigation">

            <div class="info">

                <!-- <a href="tel:+000000000" target="_blank" class="info-item"> -->
                <div href="tel:+000000000" target="_blank" class="info-item">
                    <i class="fa fa-phone"></i>
                    +0000000000
                </div>

                <div class="info-item">
                    <i class="far fa-envelope-open"></i>
                    contact@domain.com
                </div>

            </div>

            <div class="social-media">

                <a href="#" class="social-media-item"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-media-item"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-media-item"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-media-item"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-media-item"><i class="fab fa-youtube"></i></a>

            </div>

        </nav>

        <nav class="navigation">

            <div class="logo">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo">
            </div>

            <div class="nav-menu">

                <a href="/" class="nav-menu-item active">home</a>
                <a href="#about" class="nav-menu-item">about</a>
                <a href="/contact/" class="nav-menu-item">contact</a>
                <a href="#values" class="nav-menu-item">values</a>
                <a href="#fees" class="nav-menu-item">fees</a>
                <a href="#testimonials" class="nav-menu-item">testimonials</a>
                <a href="/enroll/" class="nav-menu-item active">Enroll</a>
                <a href="/login/" class="nav-menu-item nav-menu-item-login-btn active">Login</a>

            </div>

            <div class="responsive-menu-icon">
                <i class="fa fa-bars fa-xl"></i>
            </div>

        </nav>

        <section class="banner">

            <img src="<?= base_url('images/OIG.XVw3kDLmeeTCm8csd9FP.jpg') ?>" alt="">

            <div class="content">

                <div class="left">

                    <a class="link">
                        <!-- join our heroic journey -->
                        <!-- <i class="fas fa-plane-departure"></i> -->
                        Enquiries
                    </a>

                    <h1 class="title" >
                        want to make enquiries? <br> or need clearification on something?
                    </h1>

                </div>

                <div class="right dn">

                    <div class="title">we are set for the 2024/25 academic session.</div>

                    <div class="subtitle">are you? register now with us today.</div>

                    <a href="/enroll/" class="btn">Enroll</a>

                </div>

            </div>

        </section>

        <main class="contents">

            <section class="contact" id="form">

                <div class="heading dn">
                    <div class="title">contact</div>
                    <p class="subtitle">want to speak to us or make enquiries?</p>
                </div>

                <div class="body">

                    <div class="left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9876848125496!2d3.7155702740860503!3d6.892075793107034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bd81639e54ec3%3A0x9129b4a8c8367e52!2sBabcock%20University%20Ilishan%20Remo!5e0!3m2!1sen!2sng!4v1692914803678!5m2!1sen!2sng"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="right" id="contactForm">

                        <div class="title">
                            <i class="far fa-envelope-open"></i>
                            send us a message
                        </div>

                        <div class="input">
                            <label for="full-name">full name</label>
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>

                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input">
                            <label for="message">message</label>
                            <textarea name="message" id="message" required></textarea>
                        </div>

                        <input type="hidden" id="formURL" value="/contact/">

                        <div class="input">
                            <button type="submit" >
                                send message <i class="fas fa-paper-plane"></i> 
                            </button>
                        </div>

                        <div class="errorMessageContainer" id="jsErrorContainer">
                            <i class="fas fa-times-circle"></i>
                            ERROR MESSAGE
                        </div>

                    </div>

                </div>

            </section>

            <section class="why-us" id="why-us">

                <div class="left">

                    <img src="<?= base_url('images/OIG.PDntxIr8XAbHOSrz7PO4.jpg') ?>" alt="">

                </div>

                <div class="right">

                    <div class="heading">
                        <div class="title">why us?</div>
                        <div class="subtitle">want to know why you should trust us?</div>
                    </div>

                    <div class="reasons-list">

                        <div class="accordion">

                            <div class="heading">

                                <div class="title">
                                    Faith based insitution
                                </div>

                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                            </div>

                            <div class="body">

                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia blanditiis, dolorem incidunt quisquam veritatis quam, placeat sequi quo, eum perspiciatis id accusantium illo tempora neque iste maxime repudiandae aliquam? Reprehenderit!

                            </div>

                        </div>

                        <div class="accordion">

                            <div class="heading">

                                <div class="title">
                                    quality education
                                </div>

                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                            </div>

                            <div class="body">

                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia blanditiis, dolorem incidunt quisquam veritatis quam, placeat sequi quo, eum perspiciatis id accusantium illo tempora neque iste maxime repudiandae aliquam? Reprehenderit!

                            </div>

                        </div>

                        <div class="accordion">

                            <div class="heading">

                                <div class="title">
                                    tranquil environment
                                </div>

                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                            </div>

                            <div class="body">

                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia blanditiis, dolorem incidunt quisquam veritatis quam, placeat sequi quo, eum perspiciatis id accusantium illo tempora neque iste maxime repudiandae aliquam? Reprehenderit!

                            </div>

                        </div>

                        <div class="accordion">

                            <div class="heading">

                                <div class="title">
                                    seasoned staff and faculty
                                </div>

                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                            </div>

                            <div class="body">

                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia blanditiis, dolorem incidunt quisquam veritatis quam, placeat sequi quo, eum perspiciatis id accusantium illo tempora neque iste maxime repudiandae aliquam? Reprehenderit!

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <section class="fees" id="fees">

                <div class="heading">
                    <div class="title">what we do</div>
                    <!-- <p class="subtitle">see how much we charge for giving you the best</p> -->
                </div>

                <div class="body">
                    
                    <div class="left">

                        <section>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sed libero alias quibusdam, temporibus, esse itaque corrupti minus quod quasi illo culpa ut neque obcaecati sint amet non, dolorum dolores?
                        </section>

                    </div>

                    <div class="right">
                        <img src="<?= base_url('images/jjj/OIG.rfsAuuDfkqdhrfQtMkVd.jpg') ?>" alt="">
                    </div>

                </div>

            </section>

        </main>

        <footer class="footer">
            <div class="info">
                <div class="logo">
                    <img src="<?= base_url('images/logo1.png') ?>" alt="Logo">
                </div>
                <section class="details">
                    <div class="title">Contact Us</div>
                    <div class="phone">
                        <!-- Phone details here -->
                        <a href="#" class="number">
                            <i class="fas fa-phone"></i>
                            +xxx-xxx-xxx-xxxx
                        </a>

                        <a href="#" class="number">
                            <span>international</span>
                            <i class="fas fa-phone"></i>
                            +xxx-xxx-xxx-xxxx
                        </a>

                        <a href="#" class="number">
                            <span>fax</span>
                            <i class="fas fa-phone"></i>
                            +xxx-xxx-xxx-xxxx
                        </a>
                    </div>
                    <div class="email phone">
                        <!-- Email details here -->
                        <a href="#" class="number">
                            <span>support</span>
                            <i class="fas fa-envelope-open"></i>
                            info@mischools.com
                        </a>

                        <a href="#" class="number">
                            <span>admission information</span>
                            <i class="fas fa-envelope-open"></i>
                            addmission@mischools.com
                        </a>
                    </div>
                    <div class="socials">
                        <!-- Social icons here -->
                        <div class="social-icons">

                            <a href="#" class="icon" > <i class="fab fa-linkedin"></i> </a>
                            <a href="#" class="icon" > <i class="fab fa-twitter"></i> </a>
                            <a href="#" class="icon" > <i class="fab fa-facebook"></i> </a>
                            <a href="#" class="icon" > <i class="fab fa-google"></i> </a>

                        </div>

                        <span class="username">MiSchools</span>
                    </div>
                </section>
            </div>
            <div class="menu-and-copyright">
                <div class="menu">
                    <div class="col">
                        <div class="heading">Quick Links</div>
                        <div class="contents">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="/login/">Login</a></li>
                                <li><a href="/enroll/">Enroll</a></li>
                                <li><a href="/contact/">Make Enquiries</a></li>
                                <!-- Add more links as needed -->
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="heading">Policies</div>
                        <div class="contents">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <!-- Add more links as needed -->
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="heading">Admissions</div>
                        <div class="contents">
                            <ul>
                                <li><a href="#">Admission Process</a></li>
                                <li><a href="#">Requirements</a></li>
                                <!-- Add more links as needed -->
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="heading">Support</div>
                        <div class="contents">
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">FAQs</a></li>
                                <!-- Add more links as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    &copy; <?= date('Y') ?>. MiSchools. All Rights Reserved
                </div>
            </div>
        </footer>

    </div>

    <script>

        const form = document.getElementById('form');
        const submitBtn = form.querySelector('button[type=submit]');

        const formValidator = new NFSFU234FormValidation();

        submitBtn.addEventListener('click', ()=>{


            formValidator.loading( `<i class="fas fa-spinner fa-spin"></i> Loading...` , submitBtn);

            if ( formValidator.validate(form) )
            {

                const formDetails = formValidator.getFormDetails(form);


                const ajaxOptions = {
                    url: document.getElementById('formURL').value,
                    RequestMethod: "POST",
                    RequestHeader: {
                        "Content-Type": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    RequestBody: {
                        formDetails
                    }
                };

                const errorContainer = document.getElementById('jsErrorContainer');

                formValidator.ajax(ajaxOptions)
                .then((response) => {
                    // Success: Server response received in JSON format
                    // console.log('Request successful', response);

                    let errorDetails;

                    if ( response.status !== 'success' )
                    {

                        errorDetails = {
                            type : 'modal',
                            message: response.message,
                            duration: 4000,
                            element: form,
                            success: false,
                        }

                        let message = response.message ?? 'Your Message Was Not Sent';
                        
                        errorContainer.innerHTML = `<i class="fas fa-times-circle"></i> ${message}`;
                        errorContainer.classList.add('bg-red', 'dbf');

                    }
                    else
                    {
                        errorDetails = {
                            type : 'modal',
                            message: response.message,
                            duration: 4000,
                            element: form,
                            success: true,
                        }

                        errorContainer.innerHTML = ``;
                        errorContainer.innerHTML = `<i class="fas fa-check-circle"></i> Your Message Was Sent Successfully`;
                        errorContainer.classList.add('bg-green', 'dbf');


                        formValidator.reset(form);                            
                    }


                    formValidator.displayError(errorDetails);



                })
                .catch((error) => {
                    // Error: AJAX request failed or rejected
                    console.error('Request failed', error);
                    errorDetails = {
                        type : 'modal',
                        message: "Request Failed. Try Again",
                        duration: 4000,
                        element: form,
                        success: false,
                    }
                    formValidator.displayError();
                    errorContainer.innerHTML = `<i class="fas fa-times-circle"></i> Your Message Was Not Sent. Try Again`;
                    errorContainer.classList.add('bg-red', 'dbf');
                });

                formValidator.loading( `Send Message <i class="fas fa-paper-plane"></i>` , submitBtn);
                setTimeout(() => {
                    errorContainer.classList.remove('bg-red', 'dbf');
                }, 5000);



            }
            else
            {
                formValidator.loading( `Send Message <i class="fas fa-paper-plane"></i>` , submitBtn);
            }

        });

    </script>

</body>
</html>