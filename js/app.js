var canvas = document.getElementById("canvas");

function clicked() {
  var imgData = canvas.toDataURL("white/jpeg", 1.0);
  var pdf = new jsPDF();
  pdf.addImage(imgData, "JPEG",0,0);
  pdf.save("download.pdf");
}
const ctx = canvas.getContext("2d");
var colorpicker = "black";
var line_width = 2;
var paint = false;
addEventListener("mousedown",startPosition);
addEventListener("mouseup",endPosition);
addEventListener("mousemove",draw);




function startPosition(){
  
  paint = true

}
function endPosition(){

  paint = false;
  ctx.beginPath();

}
function draw(e){

   if (!paint) {
     return;
   }
   ctx.lineCap = "round";
   ctx.lineWidth = line_width;
   ctx.lineTo(e.pageX - document.getElementById("canvas").offsetLeft,
   e.pageY - document.getElementById("canvas").offsetTop);
   ctx.stroke();
   ctx.strokeStyle = colorpicker;
   ctx.beginPath();
   ctx.moveTo( e.pageX - document.getElementById("canvas").offsetLeft,
          e.pageY - document.getElementById("canvas").offsetTop);
}

function draw1(e) {
 
  if (!paint) {
    
    return;
  }

  ctx.lineCap = "round";
  ctx.lineWidth = line_width;
  ctx.lineTo(
   
    e.chanedTouches[0].clientX - document.getElementById("canvas").offsetLeft,
    e.changedTouches[0].clientY - document.getElementById("canvas").offsetTop
  );
  ctx.stroke();
  ctx.strokeStyle = colorpicker;
  ctx.beginPath();
  ctx.moveTo(
    e.changedTouches[0].clientX - document.getElementById("canvas").offsetLeft,
    e.changedTouches[0].clientY - document.getElementById("canvas").offsetTop
  );

}
 
var y = document.querySelectorAll("[data-tool]");
y.forEach(
  item =>{
    item.addEventListener("click",event =>{
      var feature = item.getAttribute("data-tool");
      switch(feature)
      {
        case "Erasor":
              colorpicker = "#FFFFFF";
              line_width = 15;
               break;
          case "Pencil":
            colorpicker = "#000000";
            line_width = 2;
            break;
          case "Clear":
            ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height); 
            break;
          case "Download":clicked();
      }
     }
    )
  }
);
var z = document.querySelectorAll("[data-width]");
z.forEach(
  item =>{
    item.addEventListener("click", e =>{
      var width = item.getAttribute("data-width");
      switch (width) {
        case "2":
          line_width = 2;
          break;
        case "3":
          line_width = 3;
          break;
        case "4":
          line_width = 4;
          break;
        case "5":
          line_width = 5;
          break;
        case "6":
          line_width = 6;
          break;
        case "7":
          line_width = 7;
          break;
        case "8":
          line_width = 8;
          break;
      }
    })
  }
)
var k = document.querySelectorAll("[data-color]");
k.forEach(item => {
  item.addEventListener("click", e =>{
    var color = item.getAttribute("data-color");
    switch (color) {
      case "#000000":
        colorpicker = "#000000";
        break;
      case "#FF0000":
        colorpicker = "#FF0000";
        break;
      case "#8B0000":
        colorpicker = "#8B0000";
        break;
      case "#FFA500":
        colorpicker = "#FFA500";
        break;
      case "#FFFF00":
        colorpicker = "#FFFF00";
        break;
      case "#FFEFD5":
        colorpicker = "#FFEFD5";
        break;
      case "#006400":
        colorpicker = "#006400";
        break;
      case "#7FFF00":
        colorpicker = "#7FFF00";
        break;
      case "#00FFFF":
        colorpicker = "#00FFFF";
        break;
      case "#008080":
        colorpicker = "#008080";
        break;
      case "#ADD8E6":
        colorpicker = "#ADD8E6";
        break;
      case "#00BFFF":
        colorpicker = "#00BFFF";
        break;
      case "#FF00FF":
        colorpicker = "#FF00FF";
        break;
      case "#FF69B4":
        colorpicker = "#FF69B4";
        break;
      case "#D3D3D3":
        colorpicker = "#D3D3D3";
        break;
    }
  })
})


//For touch events
 
var y = document.querySelectorAll("[data-tool]");
y.forEach(item => {
  item.addEventListener("touchstart", event => {
    var feature = item.getAttribute("data-tool");
    switch (feature) {
      case "Erasor":
        colorpicker = "#FFFFFF";
        line_width = 15;
        break;
      case "Download":
        break;
      case "Pencil":
        colorpicker = "#000000";
        line_width = 2;
        break;
      case "Clear":
        ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    }
  });
});
var z = document.querySelectorAll("[data-width]");
z.forEach(item => {
  item.addEventListener("touchstart", e => {
    var width = item.getAttribute("data-width");
    switch (width) {
      case "2":
        line_width = 2;
        break;
      case "3":
        line_width = 3;
        break;
      case "4":
        line_width = 4;
        break;
      case "5":
        line_width = 5;
        break;
      case "6":
        line_width = 6;
        break;
      case "7":
        line_width = 7;
        break;
      case "8":
        line_width = 8;
        break;
    }
  });
});
var k = document.querySelectorAll("[data-color]");
k.forEach(item => {
  item.addEventListener("touchstart", e => {
    var color = item.getAttribute("data-color");
    switch (color) {
      case "#000000":
        colorpicker = "#000000";
        break;
      case "#FF0000":
        colorpicker = "#FF0000";
        break;
      case "#8B0000":
        colorpicker = "#8B0000";
        break;
      case "#FFA500":
        colorpicker = "#FFA500";
        break;
      case "#FFFF00":
        colorpicker = "#FFFF00";
        break;
      case "#FFEFD5":
        colorpicker = "#FFEFD5";
        break;
      case "#006400":
        colorpicker = "#006400";
        break;
      case "#7FFF00":
        colorpicker = "#7FFF00";
        break;
      case "#00FFFF":
        colorpicker = "#00FFFF";
        break;
      case "#008080":
        colorpicker = "#008080";
        break;
      case "#ADD8E6":
        colorpicker = "#ADD8E6";
        break;
      case "#00BFFF":
        colorpicker = "#00BFFF";
        break;
      case "#FF00FF":
        colorpicker = "#FF00FF";
        break;
      case "#FF69B4":
        colorpicker = "#FF69B4";
        break;
      case "#D3D3D3":
        colorpicker = "#D3D3D3";
        break;
    }
  });
});


function myFunction(x0) {
  if (x0.matches) {
      document.getElementById("canvas").setAttribute("width",800);
  } 
}

var x0 = window.matchMedia("(max-width: 1135px)")
myFunction(x0) // Call listener function at run time
x0.addListener(myFunction) // Attach listener function on state changes

function myFunction1(x1) {
  if (x1.matches) {
      document.getElementById("canvas").setAttribute("width",600);
  } 
}

var x1 = window.matchMedia("(max-width: 950px)")
myFunction1(x1) // Call listener function at run time
x1.addListener(myFunction1) // Attach listener function on state changes



function myFunction2(x2) {
  if (x2.matches) {
      document.getElementById("canvas").setAttribute("width",400);
       document.getElementById("canvas").setAttribute("height", 450);
  } 
}
var x2 = window.matchMedia("(max-width: 750px)")
myFunction2(x2) // Call listener function at run time
x2.addListener(myFunction2) // Attach listener function on state changes



function myFunction3(x3) {
  if (x3.matches) {
      document.getElementById("canvas").setAttribute("width",300);
       document.getElementById("canvas").setAttribute("height", 400);
  } 
}
var x3 = window.matchMedia("(max-width: 512px)")
myFunction3(x3) // Call listener function at run time
x3.addListener(myFunction3) // Attach listener function on state changes

function myFunction4(x4) {
  if (x4.matches) {
      document.getElementById("canvas").setAttribute("width",270);
       document.getElementById("canvas").setAttribute("height", 300);
  } 
}
var x4 = window.matchMedia("(max-width: 410px)")
myFunction4(x4) // Call listener function at run time
x4.addListener(myFunction4) // Attach listener function on state changes







function myFunction9(x9) {
  if (x9.matches) {
      document.getElementById("canvas").setAttribute("width",270);
       document.getElementById("canvas").setAttribute("height", 300);
  } 
}
var x9 = window.matchMedia("(min-width: 410px)")
myFunction9(x9) // Call listener function at run time
x9.addListener(myFunction9) // Attach listener function on state changes

function myFunction8(x8) {
  if (x8.matches) {
      document.getElementById("canvas").setAttribute("width",300);
       document.getElementById("canvas").setAttribute("height", 400);
  } 
}
var x8 = window.matchMedia("(min-width: 512px)")
myFunction8(x8) // Call listener function at run time
x8.addListener(myFunction8) // Attach listener function on state changes



function myFunction7(x7) {
  if (x7.matches) {
      document.getElementById("canvas").setAttribute("width",400);
       document.getElementById("canvas").setAttribute("height", 450);
  } 
}
var x7 = window.matchMedia("(mix-width: 750px)")
myFunction7(x7) // Call listener function at run time
x7.addListener(myFunction7) // Attach listener function on state changes


function myFunction6(x6) {
  if (x6.matches) {
      document.getElementById("canvas").setAttribute("width",600);
  } 
}

var x6 = window.matchMedia("(min-width: 950px)")
myFunction6(x6) // Call listener function at run time
x6.addListener(myFunction6) // Attach listener function on state changes

function myFunction5(x5) {
  if (x5.matches) {
      document.getElementById("canvas").setAttribute("width",1000);
  } 
}

var x5 = window.matchMedia("(min-width: 1135px)")
myFunction5(x5) // Call listener function at run time
x5.addListener(myFunction5) // Attach listener function on state changes


function myFunction10(x10) {
  if (x10.matches) {
      document.getElementById("canvas").setAttribute("width",700);
      document.getElementById("canvas").setAttribute("height", 600);
  } 
}

var x10 = window.matchMedia("(min-width: 1400px)")
myFunction10(x10) // Call listener function at run time
x10.addListener(myFunction10) // Attach listener function on state changes









