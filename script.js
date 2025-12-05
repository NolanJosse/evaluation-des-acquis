
document.addEventListener('DOMContentLoaded', function() {
    

    const form = document.getElementById('contactForm');
    const nomInput = document.getElementById('nomInput');
    const emailInput = document.getElementById('emailInput');
    const successMsg = document.getElementById('successMessage');
    const errorMsg = document.getElementById('errorMessage');


    function validateEmail(email) {

        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        return re.test(String(email).toLowerCase());
    }

    form.addEventListener('submit', function(event) {
        
        event.preventDefault(); 

        successMsg.classList.add('hidden');
        errorMsg.classList.add('hidden');

        const nomValue = nomInput.value.trim();
        const emailValue = emailInput.value.trim();

        if (nomValue !== "" && validateEmail(emailValue)) {
            
            successMsg.classList.remove('hidden');
            
            form.reset(); 
            
        } else {
            
            errorMsg.classList.remove('hidden');
        }
    });
});