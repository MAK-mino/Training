// app.js
(function () {
    const dropdown = document.getElementById('signinDropdown');
    const toggle = document.getElementById('signinToggle');
    if (!dropdown || !toggle) return;

    // Reset function — closes the dropdown and resets accessibility state
    function resetDropdown() {
        dropdown.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
    }

    // Run immediately on first load
    resetDropdown();

    // Run again every time the page is shown — including bfcache restores
    window.addEventListener('pageshow', resetDropdown);

    // Toggle on click
    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        const isOpen = dropdown.classList.toggle('open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close when clicking outside
    document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target)) {
            resetDropdown();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            resetDropdown();
        }
    });
})();