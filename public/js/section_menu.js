
// MENU DESKTOP
/**
 * JavaScript Functionality
JavaScript thêm các hành vi động cho menu:

Xử lý sự kiện click:

Khi click vào một menu-item, các menu-item khác sẽ loại bỏ class active, 
và mục được click sẽ thêm class active.
Nếu menu-item có menu con (sub-menu), menu con sẽ được hiển thị.
Xử lý sự kiện hover:

Khi hover vào một mục có menu con, menu con sẽ được hiển thị 
(subMenu.classList.add('show')).
Khi di chuyển chuột ra khỏi mục, menu con sẽ bị ẩn 
(subMenu.classList.remove('show')).
Kiểm tra và xử lý các mục không có submenu:

Nếu một menu-item không có submenu, nó sẽ được thêm class no-children, 
và mũi tên chỉ xuống (.menu-link::after) sẽ bị ẩn.
 */
/**
 * UPDATE:05/08/2024
 * Giữ lại tính năng phân loại menu: Thêm class no-children 
 * vào các mục menu không có sub-menu.
 * Xử lý sự kiện hover: Hiển thị sub-menu khi hover vào mục menu.
 * Cập nhật trạng thái active: Đảm bảo rằng khi một mục 
 * menu được chọn, nó và tất cả các mục menu cha của nó 
 * đều được thêm class active.
 */
const menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach(item => {
    const subMenu = item.querySelector('.sub-menu');

    if (!subMenu) {
        item.classList.add('no-children');
    }

    item.addEventListener('click', (e) => {
        e.stopPropagation();

        // Loại bỏ lớp active từ tất cả menu items
        menuItems.forEach(menuItem => {
            menuItem.classList.remove('active');
        });

        // Thêm lớp active cho menu item được click
        item.classList.add('active');

        // Thêm lớp active cho tất cả các mục cha
        let parentItem = item.closest('.menu-item');
        while (parentItem) {
            parentItem.classList.add('active');
            parentItem = parentItem.parentElement.closest('.menu-item');
        }

        // Nếu mục menu cha có sub-menu, ngăn không đóng nó
        if (subMenu) {
            subMenu.classList.add('show');
        }
    });

    // Xử lý sự kiện hover: Hiển thị sub-menu khi hover vào mục menu
    // ở trên mobile thì không có hover
    // ở trên desktop thì có hover
    if (window.innerWidth > 1024) {
        item.addEventListener('mouseenter', () => {
            if (subMenu) {
                subMenu.classList.add('show');
            }
        });

        item.addEventListener('mouseleave', () => {
            if (subMenu) {
                subMenu.classList.remove('show');
            }
        });
    }
});



/**
 * Lập trình tắt/mở menu mobile (menu-bar-icon)
 */

// Chọn phần tử có lớp 'menu-bar-icon' từ DOM
const menuBarIcon = document.querySelector('.menu-bar-icon');

// Thiết lập sự kiện click cho 'menuBarIcon'
menuBarIcon.addEventListener('click', () => {
    // Chọn phần tử có lớp 'menu-overlay' từ DOM
    const menuOverlay = document.querySelector('.menu-overlay');
    // Chọn phần tử có lớp 'menu-container-slider' từ DOM
    const menuContainerSlider = document.querySelector('.menu-container-slider');
    // Chọn phần tử con có lớp 'search-container' từ 'menuContainerSlider'
    const searchContainer = menuContainerSlider.querySelector('.search-container');

    // Thêm lớp 'active' vào 'menuOverlay' để hiển thị overlay
    menuOverlay.classList.add('active');
    // Thêm lớp 'active' vào 'menuContainerSlider' để hiển thị menu slider
    menuContainerSlider.classList.add('active');

    // Thiết lập sự kiện click cho 'menuOverlay'
    menuOverlay.addEventListener('click', () => {
        // Loại bỏ lớp 'active' từ 'menuOverlay' để ẩn overlay
        menuOverlay.classList.remove('active');
        // Loại bỏ lớp 'active' từ 'menuContainerSlider' để ẩn menu slider
        menuContainerSlider.classList.remove('active');
    });

    // Hiển thị phần tử 'searchContainer' bằng cách đặt thuộc tính display thành 'block'
    searchContainer.style.display = 'block';
});