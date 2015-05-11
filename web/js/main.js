
var canvas = $("canvas").get(0);


var canvasContext = canvas.getContext("2d");

canvasContext.beginPath();
canvasContext.fillStyle = "#01DFD7";
canvasContext.arc(20, 20, 10, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();

canvasContext.beginPath();
canvasContext.fillStyle = "rgba(255, 255, 255, 1)";
canvasContext.arc(20, 20, 6, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();


canvasContext.strokeStyle = "#01DFD7";
canvasContext.strokeRect(11,20, 2, 600);
canvasContext.strokeRect(27,20, 2, 600);

canvasContext.beginPath();
canvasContext.fillStyle = "#01DFD7";
canvasContext.arc(20, 170, 10, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();

canvasContext.beginPath();
canvasContext.fillStyle = "rgba(255, 255, 255, 1)";
canvasContext.arc(20, 170, 6, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();

canvasContext.beginPath();
canvasContext.fillStyle = "#01DFD7";
canvasContext.arc(20, 470, 10, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();

canvasContext.beginPath();
canvasContext.fillStyle = "rgba(255, 255, 255, 1)";
canvasContext.arc(20, 470, 6, 0, Math.PI*2);
canvasContext.fill();
canvasContext.closePath();

