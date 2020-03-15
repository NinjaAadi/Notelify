var toggler = false;
$(document).ready(function(){
    $("#button").click(function(){
        var b1 = $("#button-elements-1");
        var b2 = $("#button-elements-2");
        var b3 = $("#button-elements-3");
        $("#element-block").slideToggle(100, "swing");        
        if(toggler===false){
        b1.animate({top:"22%"},50);
        b2.css({display:"none"});
        b3.animate({top: "22%" }, 50);
        document.getElementById("button-elements-1").style.transform = "rotate(45deg)";
        document.getElementById("button-elements-3").style.transform ="rotate(-45deg)";
        toggler=true;        
    }
    else{
        b1.animate({ top: "0%" }, 50);
        b2.css({ display: "block" });
        b3.animate({ top: "44%" }, 50);
       document.getElementById("button-elements-1").style.transform =
         "rotate(0deg)";
       document.getElementById("button-elements-3").style.transform =
         "rotate(0deg)";
         toggler=false;
    }
    })       
});
