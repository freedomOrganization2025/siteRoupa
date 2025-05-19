document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility for all password fields
    const togglePasswordButtons = document.querySelectorAll('.toggle-password');
    
    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', function() {
            const passwordInput = this.closest('.input-field').querySelector('input');
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            this.innerHTML = isPassword ? 
                '<ion-icon name="eye-off-outline"></ion-icon>' : 
                '<ion-icon name="eye-outline"></ion-icon>';
        });
    });
    
    // Form animation on load
    const loginBox = document.querySelector('.login-box');
    setTimeout(() => {
        loginBox.style.opacity = '1';
        loginBox.style.transform = 'translateY(0)';
    }, 100);
    
    // Password confirmation validation
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');
    
    if (password && confirmPassword) {
        confirmPassword.addEventListener('input', function() {
            if (password.value !== confirmPassword.value) {
                this.setCustomValidity("As senhas não coincidem");
            } else {
                this.setCustomValidity("");
            }
        });
    }
});