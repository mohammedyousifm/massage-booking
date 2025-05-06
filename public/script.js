
    // Make sections visible when they enter viewport
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.section-container');

        // Initial check for sections in viewport
        sections.forEach(section => {
            if (isElementInViewport(section)) {
                section.classList.add('visible');
            }
        });

        // Check on scroll
        window.addEventListener('scroll', function () {
            sections.forEach(section => {
                if (isElementInViewport(section)) {
                    section.classList.add('visible');
                }
            });
        });

        // FAQ accordion functionality
        const accordionButtons = document.querySelectorAll('.accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function () {
                const accordionItem = this.parentElement;

                // Toggle active class
                if (accordionItem.classList.contains('active')) {
                    accordionItem.classList.remove('active');
                } else {
                    // Close other open items
                    document.querySelectorAll('.accordion-item.active').forEach(item => {
                        item.classList.remove('active');
                    });

                    accordionItem.classList.add('active');
                }
            });
        });
    });

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
            rect.bottom >= 0
        );
    }

    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('button.md\\:hidden');
        const mobileMenu = document.querySelector('.hidden.bg-white.shadow-lg');

        menuButton.addEventListener('click', function () {
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

        // Create bubbles for hero section
        const bubbleContainer = document.getElementById('bubble-container');
        for (let i = 0; i < 20; i++) {
            const bubble = document.createElement('div');
            bubble.classList.add('bubble');

            // Random size between 10px and 60px
            const size = Math.floor(Math.random() * 50) + 10;
            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;

            // Random position
            bubble.style.left = `${Math.random() * 100}%`;
            bubble.style.top = `${Math.random() * 100}%`;

            // Random animation delay
            bubble.style.animationDelay = `${Math.random() * 4}s`;

            bubbleContainer.appendChild(bubble);
        }

        // Set min date for date input to today
        const dateInput = document.querySelector('input[type="date"]');
        if (dateInput) {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            const formattedDate = `${yyyy}-${mm}-${dd}`;
            dateInput.min = formattedDate;
            dateInput.value = formattedDate;
        }
    });
