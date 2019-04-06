
var show_span=document.getElementById("show_span");
var icon=document.getElementById("icon");
icon.addEventListener("click",function(){
    if(show_span.style.display!="block"){
         show_span.style.display="block";
         show_span.style.animation=" show_span 1s ";
    
    }
    else{
        show_span.style.display="none";
        // show_span.style.animation=" noshow_span 1s ";
        }
    });

window.addEventListener("resize",function(){
    if($(window).width() > 767)
        {   
            show_span.style.display="block";
            // show_span.style.animation=" show_span 1s ";
            // JavaScript here 
            // 當視窗寬度小於767px時執行
        } 
    else{
        show_span.style.display="none";
        // show_span.style.animation=" noshow_span 1s ";
    }

    });
