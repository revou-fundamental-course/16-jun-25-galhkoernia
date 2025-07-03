document.addEventListener('DOMContentLoaded', function () {
    const greeting = document.getElementById('greeting');
    const form = document.getElementById('contactForm');

    // 1. Greeting untuk home
    if (greeting) {
        const name = prompt("Hi, what's your name?");
        if (name) {
            greeting.textContent = `Hi, ${name}!`;
        }
    }

    // 2. Form Validation untuk contact
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = form.name.value.trim();
            const email = form.email.value.trim();
            const phone = form.phone.value.trim();
            const message = form.message.value.trim();

            if (!name || !email || !phone || !message) {
                alert("Please fill in all fields.");
                return;
            }

            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            if (isNaN(phone)) {
                alert("Phone number must contain only numbers.");
                return;
            }

            alert("Your message has been successfully sent. Thank you!");
            form.reset();
        });
    }
});
