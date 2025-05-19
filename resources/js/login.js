import './bootstrap'

document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');
    
    togglePassword.addEventListener('click', function() {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        this.innerHTML = isPassword ? 
            '<ion-icon name="eye-off-outline"></ion-icon>' : 
            '<ion-icon name="eye-outline"></ion-icon>';
    });
    
    // Form animation on load
    const loginBox = document.querySelector('.login-box');
    setTimeout(() => {
        loginBox.style.opacity = '1';
        loginBox.style.transform = 'translateY(0)';
    }, 100);
});
