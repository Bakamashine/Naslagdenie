document.getElementById('burger').addEventListener('click', function() {
    document.getElementById('par').classList.toggle('show'); // показать меню
});

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('par').classList.remove('show'); // скрыть меню
});