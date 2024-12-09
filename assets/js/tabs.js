// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    
    // Select all tab buttons
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove 'active' class from all tab buttons and tab contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.classList.add('hidden');
            });

            // Add 'active' class to the clicked button
            this.classList.add('active');

            // Show the corresponding tab content
            const tabId = this.getAttribute('data-tab');
            const activeContent = document.getElementById('tab-' + tabId);
            activeContent.classList.add('active');
            activeContent.classList.remove('hidden');
        });
    });
    
  }, false);
});