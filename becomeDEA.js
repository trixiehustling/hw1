var backgroundImages = [
    'img/origine-razzista-proibizione.jpeg',
    'img/donation.jpeg',
    'img/DEA_Recruitment_Large-800x800.jpg'
];

var currentImageIndex = 0;

function changeBackgroundImage() {
    var body = document.body;
    currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
    body.style.backgroundImage = 'url(' + backgroundImages[currentImageIndex] + ')';
}

changeBackgroundImage();

setInterval(changeBackgroundImage, 5000);
