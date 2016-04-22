window.addEventListener("load",function(){ 
	var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    var mouseX, mouseY;
    var image = new Image();
    image.src = "middleearthlargelargerstill.jpg"; 
    

    window.addEventListener("mousemove", function(e){
        context.clearRect(0,0,1200,900)
        mouseX = e.clientX - canvas.offsetLeft;
        mouseY = e.clientY - canvas.offsetTop;
        context.drawImage(image, mouseX,mouseY,80,60,mouseX,mouseY,180,160);
        console.log(mouseX,mouseY);
        // Lijndikte
    context.lineWidth = 3;
    // Maakt een vierkant
    context.strokeRect(mouseX,mouseY,180,160);
    })
    
})
