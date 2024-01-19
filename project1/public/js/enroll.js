const form = document.querySelector('#jsEnrollForm');
let currentStep = 1;
let totalSteps = 7;


const formValidator = new NFSFU234FormValidation();

function showStep(stepNumber) {
    
    const steps = form.querySelectorAll('.step');

    // steps.forEach( step => step.style.display = 'none' );
    steps.forEach( step => {
        step.classList.add('dnf')
        if(step.classList.contains('dbf'))
        {
            step.classList.remove('dbf');
        }
    } );

    // document.getElementById(`jsStep${stepNumber}`).style.display = 'block';
    document.getElementById(`jsStep${stepNumber}`).classList.add('dbf');

    return true;

}

function nextStep(nextStep) {

    // console.log(document.getElementById(`jsStep${nextStep}`));

    let number = nextStep < 1 ? 1 : nextStep > totalSteps ? totalSteps : nextStep - 1;

    if ( ! formValidator.validate(document.getElementById(`jsStep${number}`)) )
    {
        return false;
    }

    if ( nextStep === 4 )
    {

        const enrollementType = form.querySelector("#enrollmentType");

        if (enrollementType.value === 'ts')
        {
            document.getElementById(`jsStep${nextStep}`).querySelectorAll('input').forEach(input => input.setAttribute('required', ''));
            document.getElementById(`jsStep${nextStep}`).querySelector('label').innerHTML += '<span class="requiredLabel"></span>';
        }
        else
        {
            document.getElementById(`jsStep${nextStep}`).querySelectorAll('input').forEach(input=>{
                if ( input.getAttribute('required') === '' )
                {
                    input.removeAttribute('required');
                }
                document.getElementById(`jsStep${nextStep}`).querySelector('label').innerHTML = 'Previous School Info.';
            });
        }

    }

    if ( nextStep === 7 )
    {
        listenForSubmit();
    }
    
    if ( nextStep <= currentStep + 1 && nextStep <= 7)
    {
        currentStep = nextStep;
        showStep(currentStep);
    }

}

function prevStep(prevStep) {
    
    if ( prevStep >= 1 && prevStep <= currentStep - 1 )
    {
        currentStep = prevStep;
        showStep(currentStep);
    }

}



function listenForSubmit() {
    
    form.querySelector("#jsEnroll").addEventListener('click', ()=>{

        const formDetails = formValidator.getFormDetails(form);

        // console.log(formDetails);

        const AJAXOptions = {
            url: '/enroll', // URL for the AJAX request
            RequestMethod: 'POST', // Request method
            RequestHeader: {
              'Content-Type': 'application/json', // Example request header
              "X-Requested-With": "XMLHttpRequest",
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              // Add other request headers if needed
            },
            RequestBody: {
                formDetails
            }
          };

          formValidator.ajax(AJAXOptions)
            .then((response) => {
                // Success: Server response received in JSON format
                // console.log('Request successful', response);

                let errorDetails;

                if ( response.status !== 'success' )
                {

                    errorDetails = {
                        type : 'modal',
                        message: response.message,
                        duration: 3000,
                        element: form,
                        success: false,
                      }
                      

                }
                else
                {
                    errorDetails = {
                        type : 'modal',
                        message: response.message,
                        duration: 3000,
                        element: form,
                        success: true,
                      }

                    formValidator.reset(form);

                      formValidator.redirect( '/welcome', errorDetails.duration + 1000);
                      
                }

                formValidator.displayError(errorDetails);



            })
            .catch((error) => {
                // Error: AJAX request failed or rejected
                console.error('Request failed', error);
            });


    })

}

showStep(currentStep);