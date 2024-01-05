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

    // Add an event listener to detect animation iteration
    galleryContainer.addEventListener('animationiteration', () => {
        // Reset the translation to 0 after each iteration
        galleryContainer.style.transform = 'translateX(0)';
    });

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


// Animated counter 1

document.addEventListener("DOMContentLoaded", function () {
    let articles = document.querySelectorAll(".cinco-productores-empresas");
    let interval = 4000;
  
    function startCounter(valueDisplay) {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
          clearInterval(counter);
        }
      }, duration);
    }
  
    function handleIntersection(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const article = entry.target;
          const numElements = article.querySelectorAll(".num");
          numElements.forEach((numElement) => {
            startCounter(numElement);
          });
          observer.unobserve(article);
        }
      });
    }
  
    const observer = new IntersectionObserver(handleIntersection, {
      threshold: 1, // Adjust as needed
    });
  
    articles.forEach((article) => {
      observer.observe(article);
    });
  });