/**
 * Tạo kiểu cho search-container (3 chỗ )
 */
const searchContainer = document.querySelectorAll('.search-container');
if (searchContainer) {
    searchContainer.forEach(container => {
        const searchArea = container.querySelector('.search-area');
        const searchIcon = container.querySelector('.search-icon');
        const searchX = searchArea.querySelector('.btn-x');

        searchIcon.addEventListener('click', () => {
            const searchInput = searchArea.querySelectorAll('.search-input');
            searchX.addEventListener('click', () => {
                searchArea.classList.remove('show');
                searchIcon.classList.remove('active');
                searchX.classList.remove('active');
            });
            searchArea.classList.add('show');
            searchIcon.classList.add('active');
            searchX.classList.add('active');
            searchInput.addEventListener('focus', () => {
                searchInput.removeAttribute('placeholder');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.setAttribute('placeholder', 'Tìm kiếm');
            });
        });

        /**
         * slider-revolution
         * Đụng vào slider sẽ tắt search
         */
        const sliderRevolution = document.querySelector('#slider-revolution');
        sliderRevolution.addEventListener('click', () => {
            if (searchX) {
                searchX.click();
            }
        })
    });
}



/**
 * Lập trình phân loại hình ảnh
 */
// const filters = document.querySelectorAll('.filter');
// const events = document.querySelectorAll('.event');
// const prevBtn = document.getElementById('prev-btn');
// const nextBtn = document.getElementById('next-btn');
// let currentStart = 0;
// const itemsPerPage = 3;
// let activeFilters = new Set(['all']);
// let filteredEvents = Array.from(events);

// function getVisibleEventsCount() {
//     return Array.from(events).filter(event => event.style.display === 'block').length;
// }

// function showEvents() {
//     let visibleEvents = [];
//     activeFilters.forEach(filterType => {
//         if (filterType === 'all') {
//             visibleEvents = events;
//         } else {
//             visibleEvents = visibleEvents.concat(Array.from(events).filter(event => event.classList.contains(filterType)));
//         }
//     });

//     filteredEvents = visibleEvents;

//     let visibleCount = getVisibleEventsCount();
//     filteredEvents.forEach((event, index) => {
//         if (visibleCount < itemsPerPage && index >= currentStart && index < currentStart + itemsPerPage) {
//             event.style.display = 'block';
//             visibleCount++;
//         } else {
//             event.style.display = 'none';
//         }
//     });

//     // Disable/Enable navigation buttons
//     prevBtn.disabled = currentStart === 0;
//     nextBtn.disabled = currentStart + itemsPerPage >= filteredEvents.length;
// }

// showEvents();

// filters.forEach(filter => {
//     filter.addEventListener('click', function () {
//         const filterType = this.getAttribute('data-filter');

//         if (filterType === 'all') {
//             activeFilters.clear();
//             activeFilters.add('all');
//         } else {
//             activeFilters.delete('all');
//             if (activeFilters.has(filterType)) {
//                 activeFilters.delete(filterType);
//             } else {
//                 activeFilters.add(filterType);
//             }
//         }

//         // Reset navigation
//         currentStart = 0;

//         // Show filtered events
//         showEvents();

//         // Remove active class from all filters
//         filters.forEach(filter => filter.classList.remove('active'));
//         // Add active class to the clicked filter
//         this.classList.add('active');
//     });
// });


/* Lĩnh vực hoạt động */
// 
/* section vfo */
//  
const section_vfo = document.querySelector('#vfo');

if (section_vfo) {
    const boxItems = section_vfo.querySelectorAll('.box-item');

    boxItems.forEach(box => {
        const boxtitle = box.querySelector('.box-title');
        const boxtext = box.querySelector('.box-text');
        const boxoverlay = box.querySelector('.box-overlay');
        const boxbg = box.querySelector('.background-fluid');
        const hr = box.querySelector('hr');

        // Kiểm tra tất cả các phần tử trước khi thêm sự kiện
        if (boxtitle && boxtext && boxoverlay && hr) {
            box.addEventListener('mouseover', () => {
                boxtitle.classList.add('active');
                boxtext.classList.add('active');
                boxoverlay.classList.add('active');
                hr.classList.add('active');
            });

            box.addEventListener('mouseleave', () => {
                boxtitle.classList.remove('active');
                boxtext.classList.remove('active');
                boxoverlay.classList.remove('active');
                hr.classList.remove('active');
            });
        }
    });
}


// 
/* section meet */
// 
const sectionMeet = document.querySelector('#meet');
if (sectionMeet) {
    const boxImages = sectionMeet.querySelectorAll('.box-image');

    // Tính toán vị trí offset từ đầu trang cho phần tử #meet
    const offsetTop = sectionMeet.offsetTop;
    // Thêm sự kiện lắng nghe khi cuộn trang
    window.addEventListener('scroll', () => {
        if (window.innerWidth > 500) {
            // Tính toán vị trí hiện tại của cửa sổ so với đỉnh trang
            const scrollPosition = window.scrollY + window.innerHeight;

            // Kiểm tra nếu vị trí hiện tại lớn hơn vị trí offset của phần
            //  tử #meet
            if (scrollPosition > offsetTop) {
                // Thực hiện các hành động bạn muốn khi điều kiện được đáp ứng
                // Ví dụ: thêm class active cho các phần tử box-image
                boxImages.forEach(image => {
                    image.classList.add('active');
                });
            } else {
                // Nếu không đáp ứng điều kiện, có thể xóa class active hoặc 
                // làm gì đó khác
                boxImages.forEach(image => {
                    image.classList.remove('active');
                });
            }
        }
    });
}


// 
// 
/* Thêm hiệu ứng active chuyển động để người ta muốn click vào gallery
Sứ mệnh, tầm nhìn, giá trị cốt lõi
*/
// 
// 

/* Tạo hiệu ứng square cho giá trị, sứ mệnh, tầm nhìn */
const section_aga = document.querySelector('#aga');
if (section_aga) {
    const circles = document.querySelectorAll('.circle');

    // Tính toán vị trí offset từ đầu trang cho phần tử #aga
    const sectionTop = section_aga.offsetTop;

    const scrollPosition = window.scrollY + window.innerHeight;

    window.addEventListener('scroll', () => {

        if (scrollPosition > sectionTop) {
            if (window.innerWidth > 500) {

                circles.forEach(circle => {
                    const offsetTop = circle.offsetTop;

                    if (scrollPosition > offsetTop) {
                        circle.classList.add('circle-animation');
                    } else {
                        circle.classList.remove('circle-animation');
                    }
                });
            }
        }
    });
}


/* section vi sao chonn chung toi */
// Lắng nghe sự kiện click để thêm lớp active
const section = document.querySelector('#halini-slider');
if (section) {
    const containerTitle = section.querySelector('.container-title');
    const containerAnswer = section.querySelector('.container-answer-hiding');
    const containerLine = section.querySelector('.line-container');

    containerTitle.addEventListener('click', () => {
        // Hiển thị câu trả lời trước
        containerAnswer.classList.toggle('active');

        // Đợi câu trả lời mở xong rồi mới thêm hiệu ứng
        setTimeout(() => {
            containerLine.classList.toggle('active');
        }, 0); // Delay để chờ hiệu ứng mở
    });
}

/* Thêm sự kiện click để toggle class active cho mục lục */
const tocLinks = document.querySelectorAll('#toc ul li a');

tocLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Xóa class active khỏi tất cả các mục lục
        tocLinks.forEach(link => link.classList.remove('active'));
        // Thêm class active vào mục lục được click
        this.classList.add('active');
    });
});


