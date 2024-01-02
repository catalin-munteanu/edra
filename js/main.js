document.addEventListener('DOMContentLoaded', function () {
    const galleryContainer = document.getElementById('automatic-gallery');
    const images = document.querySelectorAll('.gallery-logos img');

    // Clone the original set of images and append them to the container
    images.forEach(img => {
        const clone = img.cloneNode(true);
        galleryContainer.appendChild(clone);
    });

    // Set the width of the container to accommodate all images
    galleryContainer.style.width = (images.length * 110) + '%'; // Adjusted to provide some spacing between images

    // Adjust the animation duration based on the number of original images
    const animationDuration = images.length * 12 + 's'; // Adjust the multiplier as needed

    galleryContainer.innerHTML += galleryContainer.innerHTML; // Append the original set of images again

    document.styleSheets[0].insertRule(`
        @keyframes scrollGallery {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    `, 0);

    galleryContainer.style.animation = `scrollGallery ${animationDuration} linear infinite`;
});
