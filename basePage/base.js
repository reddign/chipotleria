//Name: Sudiksha
let canvas= document.querySelector("canvas");
const graphics=canvas.getContext("2d");

let orderMode = true;

baseName();
tortilla();
rice();



// function bowl(){

// }


function rice(){
    // graphics.fillStyle ="darkgrey";
    // graphics.beginPath();
    // graphics.arc(95,70, 25, 0, Math.PI*2);
    // graphics.fill();
    // graphics.closePath();
}

function tortilla(){
    // graphics.fillStyle = "yellow";
    // graphics.beginPath();
    // graphics.arc(220,80, 45, 0, Math.PI*2);
    // graphics.fill();
    // graphics.closePath();
}


function baseName(){
    graphics.fillStyle ="maroon"; 
    graphics.fillRect(0,0,70,20);

    graphics.fillStyle = "rgb(245, 240, 229)";
    graphics.beginPath();
    graphics.lineTo(70,0);
    graphics.lineTo(60,10);
    graphics.lineTo(70,20);
    graphics.fill();
    graphics.closePath();

    let titleName = "BASE!";
    graphics.fillText(titleName, 20, 12);
    
}