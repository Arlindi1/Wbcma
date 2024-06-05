document.addEventListener("DOMContentLoaded", function() {
    // Slider functionality
    const slides = document.querySelectorAll(".slide");
    const leftArrow = document.getElementById("arrow-left");
    const rightArrow = document.getElementById("arrow-right");
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
            }
        });
    }

    if (leftArrow && rightArrow) {
        leftArrow.addEventListener("click", function() {
            currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1;
            showSlide(currentSlide);
        });

        rightArrow.addEventListener("click", function() {
            currentSlide = (currentSlide === slides.length - 1) ? 0 : currentSlide + 1;
            showSlide(currentSlide);
        });

        // Optionally, you can add automatic slide change
        setInterval(function() {
            rightArrow.click();
        }, 5000); // Change slide every 5 seconds
    }

    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    const nestedTabButtons = document.querySelectorAll('.nested-tab-button');
    const nestedTabContents = document.querySelectorAll('.nested-tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked button
            button.classList.add('active');

            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            // Show the content corresponding to the clicked button
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });

    nestedTabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all nested buttons
            nestedTabButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked nested button
            button.classList.add('active');

            // Hide all nested tab contents
            nestedTabContents.forEach(content => content.classList.remove('active'));
            // Show the content corresponding to the clicked nested button
            const nestedTabId = button.getAttribute('data-nested-tab');
            document.getElementById(nestedTabId).classList.add('active');
        });
    });

    // Show/Hide sections
    function showRegistrationForm() {
        const participantsSection = document.querySelector('.participants-section');
        const registrationSection = document.querySelector('.registration-section');
        if (participantsSection && registrationSection) {
            participantsSection.style.display = 'none';
            registrationSection.style.display = 'block';
        }
    }

    function showParticipantsSection() {
        const participantsSection = document.querySelector('.participants-section');
        const registrationSection = document.querySelector('.registration-section');
        if (participantsSection && registrationSection) {
            registrationSection.style.display = 'none';
            participantsSection.style.display = 'block';
        }
    }

    const registerButton = document.querySelector('.register-btn');
    const backButton = document.querySelector('#backButton');

    if (registerButton) {
        registerButton.addEventListener('click', function(event) {
            event.preventDefault();
            showRegistrationForm();
        });
    }

    if (backButton) {
        backButton.addEventListener('click', function(event) {
            event.preventDefault();
            showParticipantsSection();
        });
    }
});
