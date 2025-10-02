// Инцилизация кнопки
const btn = document.getElementById("burger");

// Инцилизация родительского класса
const par = document.getElementById("par");


/**
 * Переключает класс, то есть - если он есть, то добавляет
 * если же нет, то убирает
 */
function showMenu() {
    par.classList.toggle("show");
}

// Добавление действия кнопке
btn.addEventListener("click", showMenu);
