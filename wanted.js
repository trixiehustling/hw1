document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.getElementById('gallery');
    const updateButton = document.getElementById('updateButton');

    function getDogImages() {
        const apiURL = 'https://dog.ceo/api/breeds/image/random/10';
        fetch(apiURL)
            .then(response => response.json())
            .then(data => {
                gallery.innerHTML = '';
                data.message.forEach(dogImage => {
                    const photo = document.createElement('img');
                    photo.src = dogImage;
                    photo.alt = 'Cane';
                    photo.classList.add('photo');
                    gallery.appendChild(photo);
                });
            })
            .catch(error => {
                console.error('Si è verificato un errore durante il recupero delle immagini:', error);
            });
    }

    getDogImages();
    updateButton.addEventListener('click', getDogImages);
});
