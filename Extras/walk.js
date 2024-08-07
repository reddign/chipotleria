const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

const img = new Image();
img.src = 'larry.png'; // Replace with the path to your image

let imagePosition = {
    x: canvas.width, // Start from the right side
    y: 200,
    dx: -2, // Move to the left
    stopX: 200 // The x-coordinate where the image should stop
};

img.onload = function() {
    update();
};

function drawImage() {
    ctx.drawImage(img, imagePosition.x, imagePosition.y);
}

function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function update() {
    clearCanvas();
    drawImage();
    if (imagePosition.x > imagePosition.stopX) {
        imagePosition.x += imagePosition.dx;
    }
    requestAnimationFrame(update);
}
