
document.addEventListener('DOMContentLoaded', function() {
    

    const form = document.getElementById('contactForm');
    const nomInput = document.getElementById('nomInput');
    const emailInput = document.getElementById('emailInput');
    const successMsg = document.getElementById('successMessage');
    const errorMsg = document.getElementById('errorMessage');


    function validateEmail(email) {


        if (nomValue !== "" && validateEmail(emailValue)) {
            
            successMsg.classList.remove('hidden');
            
            form.reset(); 
            
        } else {
            
            errorMsg.classList.remove('hidden');
        }
    });
}); 