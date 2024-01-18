'use strict';

document.addEventListener('DOMContentLoaded', ()=>{

    // FOR MOBILE NAVIGATION
    document.querySelector('.responsive-menu-icon').addEventListener('click', ()=>{

        if ( document.querySelector('.nav-menu').classList.contains('active') )
        {
            document.querySelector('.nav-menu').classList.remove('active')
        }
        else
        {
            document.querySelector('.nav-menu').classList.add('active');

            document.querySelectorAll('.nav-menu .nav-menu-item').forEach( (item)=>{
                item.addEventListener('click', ()=>{
                    document.querySelector('.nav-menu').classList.remove('active');
                });
            } );

        }

    });


    // FOR ACCORDION

    document.querySelectorAll('.accordion .heading').forEach( (heading)=>{

        heading.addEventListener('click', (item)=>{



            if ( !heading.parentNode.classList.contains('active') )
            {
                heading.parentNode.classList.add('active');
                heading.querySelector('.icon').classList.add('open');
                heading.querySelector('.icon').innerHTML = `<i class="fas fa-minus"></i>`;
            }
            else
            {
                document.querySelectorAll('.accordion').forEach( (accordion)=>{

                    if ( accordion.classList.contains('active')  )
                    {
                        accordion.classList.remove('active');
                        heading.querySelector('.icon').innerHTML = `<i class="fas fa-plus"></i>`;
                    }

                } );
                
            }



        })

    } )

})