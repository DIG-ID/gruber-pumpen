
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /* Hamburguer toggle */
    const $toggleBtn = $('.menu-toggle');

    $toggleBtn.on('click', (e) => {
        const $header = $('#header-main');
        const $body = $('body');
        const $menuWrapper = $('#menu-secondary-col');

        if ($header.hasClass('menu-open')) {
            // Close the mega menu
            $header.removeClass('menu-open');
            /*setTimeout(() => {
                $body.css('overflow', 'auto');
            }, 100);*/
            setTimeout(() => {
                $menuWrapper.css('padding-right', '0px'); // Reset padding
            }, 300);
            
            $('.menu-wrapper').fadeOut(300);

            // Remove the cross animation
            $toggleBtn.removeClass('menu-toggle-active');
        } else {
            // Open the mega menu
            $header.addClass('menu-open');

            // Calculate scrollbar width
            const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

            //$body.css('overflow', 'hidden');

            //$menuWrapper.css('padding-right', scrollBarWidth + 'px'); // Compensate for missing scrollbar
            $('.menu-wrapper').fadeIn(300);

            // Add the cross animation
            $toggleBtn.addClass('menu-toggle-active');
        }
    });


    /* Sub-menu add classes */
    const menuItems = document.querySelectorAll('#main-menu > .menu-item');

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Remove the 'menu-item-hover' class from all menu items
            menuItems.forEach(item => item.classList.remove('menu-item-hover'));

            // Add the 'menu-item-hover' class to the current menu item
            this.classList.add('menu-item-hover');
        });
    });

    /* Mobile Nav */
    let attrLists = document.querySelectorAll(".menu-item-has-children > a");

    // Function to toggle the 'active' class on submenus
    function toggleSubmenu(e) {
        if (window.innerWidth < 1280) {
            e.preventDefault(); // Prevent the default action (navigation)
        }

        // Find the next sibling 'ul' element, which should be the submenu
        let submenu = e.target.nextElementSibling;

        if (submenu && submenu.tagName.toLowerCase() === 'ul') {
            // Toggle the 'active' class to show/hide the submenu
            submenu.classList.toggle("active");
        }
    }

    // Add click event listeners to menu items with children
    attrLists.forEach(attr => {
        attr.addEventListener("click", toggleSubmenu);
    });

    // Select all 'back' menu items
    let backMenus = document.querySelectorAll(".back__menu");

    // Function to hide the current submenu and go back to the parent
    function hideSubmenu(e) {
        e.preventDefault(); // Prevent the default action (navigation)

        // Find the current submenu (parent of the clicked 'back' link)
        let currentSubmenu = e.target.closest('ul');

        if (currentSubmenu) {
            // Remove the 'active' class to hide the current submenu
            currentSubmenu.classList.remove("active");
        }
    }

    // Add click event listeners to 'back' menu items
    backMenus.forEach(back => {
        back.addEventListener("click", hideSubmenu);
    });


  }, false);
});