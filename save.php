document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const loginButton = document.querySelector('.login-button');

    // When login button is clicked
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get the entered data
        const email = emailInput.value.trim();
        const password = passwordInput.value;
        
        // Log the captured data to console
        console.log('=== LOGIN ATTEMPT ===');
        console.log('Email:', email);
        console.log('Password:', password);
        console.log('Timestamp:', new Date().toISOString());
        console.log('====================');
        
        // Show loading state
        loginButton.textContent = 'Logging in...';
        loginButton.disabled = true;
        
        // Simulate login delay
        setTimeout(function() {
            loginButton.textContent = 'Login';
            loginButton.disabled = false;
            alert('Login successful!');
            loginForm.reset();
        }, 2000);
    });
});