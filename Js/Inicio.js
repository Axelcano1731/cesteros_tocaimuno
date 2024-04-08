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
