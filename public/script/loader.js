
document.addEventListener('DOMContentLoaded', () => {
    // Simulate loading time
    setTimeout(() => {
        const loader = document.getElementById('loader');
        const content = document.getElementById('content');

        loader.classList.add('hide');
        content.classList.add('show');
    }, 3000); // 3 second loading time
});
