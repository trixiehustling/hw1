function changeBackgroundColor() {
    var body = document.body;
    var content = document.querySelector('.content');
    
    if (body.style.backgroundColor === 'rgb(51, 51, 51)') {
        body.style.backgroundColor = '#f0f0f0';
        body.style.color = '#333';
        content.style.backgroundColor = 'white';
        content.style.color = '#333';
    } else {
        body.style.backgroundColor = '#333';
        body.style.color = '#f0f0f0';
        content.style.backgroundColor = '#444';
        content.style.color = '#f0f0f0';
    }
}

setInterval(changeBackgroundColor, 5000);

setTimeout(function() {
    var content = document.querySelector('.content');
    content.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.2)';
}, 5000);

setTimeout(function() {
    var image = document.querySelector('#imageContainer img');
    image.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.2)';
    image.style.animation = 'pulse 2s infinite';
}, 7000);

var styleSheet = document.createElement("style")
styleSheet.type = "text/css"
styleSheet.innerText = `
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
`;
document.head.appendChild(styleSheet);
