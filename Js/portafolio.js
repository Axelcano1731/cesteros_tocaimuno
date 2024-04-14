document.getElementById('todos').addEventListener('click', function() {
    var images = document.querySelectorAll('.conteiner_photos img');
    images.forEach(function(img) {
        img.style.display = img.classList.contains('todos') ? 'block' : 'none';
    });
});

document.getElementById('canastos').addEventListener('click', function() {
    var images = document.querySelectorAll('.conteiner_photos img');
    images.forEach(function(img) {
        img.style.display = img.classList.contains('canastos') ? 'block' : 'none';
    });
});

document.getElementById('bisuterias').addEventListener('click', function() {
    var images = document.querySelectorAll('.conteiner_photos img');
    images.forEach(function(img) {
        img.style.display = img.classList.contains('bisuterias') ? 'block' : 'none';
    });
});

document.getElementById('hogar').addEventListener('click', function() {
    var images = document.querySelectorAll('.conteiner_photos img');
    images.forEach(function(img) {
        img.style.display = img.classList.contains('hogar') ? 'block' : 'none';
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var listItems = document.querySelectorAll('.conteinerPortafolio li');

    listItems.forEach(function(item) {
        item.addEventListener('click', function() {

            listItems.forEach(function(item) {
                item.classList.remove('selected');
            });

            this.classList.add('selected');
        });
    });

    // Selecciona 'Todos' por defecto
    document.getElementById('todos').click();
});
