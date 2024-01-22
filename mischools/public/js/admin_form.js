document.addEventListener('DOMContentLoaded', ()=>{


    const form = document.getElementById('form');

    // Example form details object
    const formDetails = {
        form: form, // Replace "myForm" with the ID of your form or the actual HTML element of your form (recommended)
    };



    const formValidator = new NFSFU234FormValidation(formDetails);

    const generatePasswordBtn = form.querySelector('#jsGeneratePassword');

    if (generatePasswordBtn) {
        // Function to generate and set random password
        const setRandomPassword = () => {
            const randomPassword = formValidator.generateRandomPassword();
            form.querySelectorAll('.js-v-genPassword').forEach(
                input => input.value = randomPassword
            );
        };

        // Add click event listener
        generatePasswordBtn.addEventListener('click', setRandomPassword);

        // Optionally, you can remove the listener after it's triggered once
        // generatePasswordBtn.addEventListener('click', setRandomPassword, { once: true });
    }

    if ( document.querySelector('.js-togglePassword') )
    {
        formValidator.togglePasswordVisibility({ 'show': '<i class="fas fa-eye"></i>', 'hide': '<i class="fas fa-eye-slash"></i>' }, form);
    }


    form.querySelector("button[type=submit]").addEventListener('click', ()=>{

        // console.log(document.querySelector('.main-container'));
        const submitBtn = form.querySelector('button[type=submit]');

        const intialContent = submitBtn.innerHTML;

        formValidator.loading( `<i class="fas fa-spinner fa-spin"></i> Loading...` , submitBtn);

        const navbar = document.querySelector('.navbar');

        let offset = false;

        if( navbar )
        {

            const navbarHeight = document.querySelector('.navbar').offsetHeight;

            offset =navbarHeight > 0 ? -navbarHeight : 0;

        }



        if( formValidator.validate() )
        {

            const formDetails = formValidator.getFormDetails();


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


            formValidator.loading( `<i class="fas fa-spinner fa-spin"></i> Loading...` , submitBtn);

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

                        if ( response.redirect )
                        {
                            setTimeout(() => {
                                window.location.href = response.redirect
                            }, errorDetails.duration + 1000);
                        }

                        formValidator.reset(form);                            
                    }

                    formValidator.loading( intialContent , submitBtn);


                    if( offset )
                    {

                        form.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start',
                            inline: 'start'
                        });
    
                        window.scrollBy(0, offset);
    
                        // Force scroll to the top of the form even if an input is focused
                        window.scrollTo({
                            top: form.offsetTop + offset - 200,
                            behavior: 'smooth'
                        });

                    }

                    formValidator.displayError(errorDetails);



                })
                .catch((error) => {
                    // Error: AJAX request failed or rejected
                    console.error('Request failed', error);
                });



        }
        else
        {
            formValidator.loading( intialContent , submitBtn);
        }

        if( offset )
        {

            form.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
                inline: 'start'
            });
    
            window.scrollBy(0, offset);

        }

    });

});
