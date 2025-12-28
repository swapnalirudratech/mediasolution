// <!-- JavaScript for youtube carousel functionality -->

    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const totalItems = carouselItems.length;
    let index = 0;

    // Clone items for a continuous loop
    function cloneItems() {
        carouselItems.forEach(item => {
            const clone = item.cloneNode(true);
            carouselInner.appendChild(clone); // Append the cloned items to the end
        });
    }

    cloneItems(); // Clone the items when the page loads

    function showItem(index) {
        const itemWidth = carouselItems[0].offsetWidth;
        const offset = -index * itemWidth;
        carouselInner.style.transition = 'transform 0.5s ease-in-out'; // Smooth transition
        carouselInner.style.transform = `translateX(${offset}px)`;
    }

    function nextSlide() {
        index++;
        if (index >= totalItems) {
            // After reaching the original last item, quickly reset the carousel to avoid snapping
            setTimeout(() => {
                carouselInner.style.transition = 'none'; // Disable transition during reset
                index = 0; // Reset index to the first item
                showItem(index); // Show first item instantly
                setTimeout(() => {
                    carouselInner.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
                }, 50);
            }, 500); // Match this timeout to the transition duration
        } else {
            showItem(index);
        }
    }

    function prevSlide() {
        index--;
        if (index < 0) {
            // When we reach the first item, jump to the last item
            index = totalItems - 1;
            carouselInner.style.transition = 'none'; // Disable transition during reset
            showItem(index);
            setTimeout(() => {
                carouselInner.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
            }, 50);
        } else {
            showItem(index);
        }
    }

    // Auto scroll every 5 seconds
    const interval = 5000;
    setInterval(nextSlide, interval);

    // Initialize the carousel
    showItem(index);
