document.querySelector('.first-button').addEventListener('click', function () {
    // Toggle the animated icon
    document.querySelector('.animated-icon1').classList.toggle('open');

    // Toggle the navigation popup
    const navPopup = document.querySelector('.nav-popup');
    navPopup.classList.toggle('show');

    // Create overlay if it doesn't exist
    let overlay = document.querySelector('.overlay');
    if (!overlay) {
        overlay = document.createElement('div');
        overlay.className = 'overlay';
        document.body.appendChild(overlay);
    }

    // Toggle overlay visibility
    overlay.classList.toggle('show');

    // Toggle body scroll
    if (navPopup.classList.contains('show')) {
        document.body.classList.add('no-scroll');
    } else {
        document.body.classList.remove('no-scroll');
    }

    // Close the menu when clicking on the overlay
    overlay.addEventListener('click', function () {
        navPopup.classList.remove('show');
        overlay.classList.remove('show');
        document.body.classList.remove('no-scroll');
        document.querySelector('.animated-icon1').classList.remove('open'); // Reset animated icon
    });
});