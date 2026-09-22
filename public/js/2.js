/* ============================================================
   APEXBOOKS LOGIN PAGE — CUSTOM JAVASCRIPT
   (DOM is ready — script is loaded at end of <body>)
   ============================================================ */

// Password visibility toggle
const passwordInput = document.getElementById('password');
const toggleIcon = document.querySelector('.input-group .fa-eye');

if (passwordInput && toggleIcon) {
    toggleIcon.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';

        // Swap icon between eye and eye-slash
        toggleIcon.classList.toggle('fa-eye', !isPassword);
        toggleIcon.classList.toggle('fa-eye-slash', isPassword);
    });
}