var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 5 , 
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

document.querySelector('.save_email .text').addEventListener('focus', function() {
    this.style.opacity = '1';
});

document.querySelector('.save_email .text').addEventListener('blur', function() {
    this.style.opacity = '.9';
});

var map = L.map('mapid').setView([4.457927227020264, -74.63422393798828], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);
L.marker([4.457927227020264, -74.63422393798828]).addTo(map)
    .bindPopup('Tocaima, Cundinamarca')
    .openPopup();


document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        const formData = new FormData(form);
        const jsonData = {};
        formData.forEach((value, key) => {
            jsonData[key] = value;
        });

        fetch('/cesteros_tocaimuno/controller/inicio.php?opc=guardarCorreo', {
            method: 'POST',
            body: JSON.stringify(jsonData),
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();  // Convertir la respuesta en un objeto JSON
        }).then(data => {
            if (data.status === 'success') {
                showAlert('success', data.message); 
            } else {
                showAlert('danger', data.message); 
            }
        }).catch(error => {
            console.error('Error en la solicitud fetch:', error);
            showAlert('danger', 'Error en la solicitud fetch: ' + error.message);
        });
    });

    function showAlert(type, message) {
        let icon;
        if (type === 'success') {
            icon = 'success';
        } else if (type === 'danger') {
            icon = 'error';
        }
    
        Swal.fire({
            icon: icon,
            title: message,
            showConfirmButton: false,
            timer: 5000
        });
    }
});
    