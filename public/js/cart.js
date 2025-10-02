// Счётчик для товаров в корзине. 0 по дефолту
let count = 0; 
// Обработка, когда есть нажатие на кнопку "Добавить в корзину"
document.getElementById("add-to-cart").addEventListener("click", function() {
    count++; // Счётчик увеличивается на 1
    document.getElementById("cart-count").innerText = count; // Обновляем отображение счётчика
});

