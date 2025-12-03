document.getElementById('contactForm').addEventListener('submit', function (e) {

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const formMessage = document.getElementById('formMessage');

    // VALIDATION
    if (!name || !email || !message) {
        e.preventDefault();  // stop submit only when empty
        formMessage.textContent = "Please fill in all fields.";
        formMessage.style.color = "red";
        return;
    }

    // Allow form to submit → goes to PHP
});
