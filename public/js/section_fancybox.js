// Init Fancybox
Fancybox.bind('[data-fancybox]', {});


const toggleButton = document.getElementById('mode-toggle');

// Kiểm tra trạng thái đã lưu trong localStorage
const currentMode = localStorage.getItem('mode') || 'light-mode';
document.body.classList.add(currentMode);

toggleButton.addEventListener('click', () => {
    // Chuyển đổi chế độ
    document.body.classList.toggle('dark-mode');
    document.body.classList.toggle('light-mode');

    // Lưu trạng thái vào localStorage
    const newMode = document.body.classList.contains('dark-mode') ? 'dark-mode' : 'light-mode';
    localStorage.setItem('mode', newMode);
});
