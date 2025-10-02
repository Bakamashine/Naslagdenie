// Устанавка текущего индекса слайда на 0
let currentIndex = 0;
// Получение всех элементов на странице с классом 'carousel-item'
const items = document.querySelectorAll('.carousel-item');
// Получение общего количества слайдов
const totalItems = items.length;
// Функция для обновления слайдера
function updateCarousel() {
    // Скрытие всех остальных слайдов
    items.forEach((item, index) => {
        item.classList.remove('active');
        // Показ только активного слайда
        if (index === currentIndex) {
            item.classList.add('active');
        }
    });
    // Находится элемент, который содержит слайды
    const carouselInner = document.querySelector('.carousel-inner');
    // Перемещение слайдов влево в зависимости от текущего индекса
    carouselInner.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
}
// Функция для перехода к следующему слайду
function nextSlide() {
    // Увеличение индекса, если он последний, то возвращается к первому
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
}
// Функция для перехода к предыдущему слайду
function prevSlide() {
    // Уменьшение индекса, если он первый, то переходит к последнему
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
}
// Автоматическое переключение слайдов каждые 5 секунд
setInterval(nextSlide, 5000);

