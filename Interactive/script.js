document.addEventListener('DOMContentLoaded', function () {
    const interactiveButton = document.getElementById('interactive-button');
    const interactiveText = document.getElementById('interactive-text');
    const mainSection = document.getElementById('interactive-section');

    interactiveButton.addEventListener('click', function () {
        interactiveText.textContent = 'Your wish has been made upon a star!';
        interactiveText.style.color = '#64a3d6'; /* Light blue text color */
        interactiveButton.style.backgroundColor = '#3b7aa6'; /* Darker blue on click */
    });

    // Create animated stars and add them to the background
    for (let i = 0; i < 100; i++) {
        createStar();
    }

    function createStar() {
        const star = document.createElement('div');
        star.className = 'star';
        const size = Math.random() * 3;
        const top = Math.random() * window.innerHeight;
        const left = Math.random() * window.innerWidth;
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.top = `${top}px`;
        star.style.left = `${left}px`;
        mainSection.appendChild(star);
    }
});
