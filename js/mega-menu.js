// Megam Menu JS
document.addEventListener('DOMContentLoaded', function() {
    // Code for the language selector
    const langSelector = document.getElementById('mega-menu-lang-selector');
    const selectedElement = langSelector.querySelector('.mm-lang-selected');
    const dropdownContainer = langSelector.querySelector('.mm-lang-dropdown-container');
    const dropdown = langSelector.querySelector('.mm-lang-dropdown');
    
    // Open/close dropdown when the selected element is clicked
    selectedElement.addEventListener('click', function(e) {
        e.stopPropagation(); // Keep it open
        dropdownContainer.classList.toggle('active');
    });
    
    // Handle language change when a language item is clicked
    dropdown.querySelectorAll('li').forEach(item => {
        item.addEventListener('click', function() {
            // Get clicked item
            const imgSrc = this.querySelector('img').src;
            const text = this.querySelector('span').textContent;
            
            // Update selected element
            selectedElement.querySelector('img').src = imgSrc;
            selectedElement.querySelector('span').textContent = text;
            
            // Close dropdown
            dropdownContainer.classList.remove('active');
        });
    });
    
    // Close dropdown if clicking outside
    document.addEventListener('click', function() {
        dropdownContainer.classList.remove('active');
    });

    // Close all sub-menus if clicking outside the menu
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.mega-menu .mm-sub-menu.open')) {
            const allSubMenus = document.querySelectorAll('.mega-menu .mm-sub-menu');
            allSubMenus.forEach(function(subMenu) {
                subMenu.classList.remove('open');
            });

            setTimeout(() => {
                document.querySelector(".sub-menu-container").classList.remove("open");
            }, 50);
        }
    });
});
// Open/close targeted sub menu :
function toggle_sub_menu(target) {
    let subMenu = document.querySelector(".mm-sub-menu.mm-"+target);
    let btn = document.querySelector(".mm-level1.mm-"+target);

    // Targeted still open/active do nothing
    if (subMenu.classList.contains("open") && btn.classList.contains("active")) {
        return;
    }
    // Reset all sub menu
    close_all_menu(true);
    // Reset all btn
    document.querySelectorAll(".mm-level1").forEach(element => {
        element.classList.remove("active");
    });

    setTimeout(() => {
        document.querySelector(".sub-menu-container").classList.add("open");
        subMenu.classList.add("open");
        btn.classList.add("active");
    }, 300);
}

// Close all sub menu case :
function close_all_menu(keepContainer) {
    document.querySelectorAll("ul.mm-sub-menu.open").forEach(element => {
        element.classList.remove("open");
        if (keepContainer == false) {
            setTimeout(() => {
                document.querySelector(".sub-menu-container").classList.remove("open");
            }, 500);
        }
    });
}
// Responsive Mega menu open :
function open_mega_menu(target) {
    let menu = document.querySelector(".mm-content-section-"+target);
    let btn = document.querySelector(".mm-btn-"+target);
    menu.classList.toggle("open");
    btn.classList.toggle("active");
}
// Sub sub menu open/active :
function open_sub_menu(submenu, target) {
    let menu = document.querySelector(submenu + " .mm-content-section-"+target);
    let btn = document.querySelector(submenu + " .mm-btn-"+target);
    
    // Reset all sub menu element, except the targeted :
    document.querySelectorAll(submenu + " .mm-section-content").forEach(element => {
        if (element.classList.contains("open")) {
            element.classList.remove("open");
        }
    });
    document.querySelectorAll(submenu + " .mm-title-section").forEach(element => {
        if (element.classList.contains("active")) {
            element.classList.remove("active");
        }
    });
    menu.classList.add("open");
    btn.classList.add("active");
}