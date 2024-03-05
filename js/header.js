var a = document.getElementById("head-1");
function fixedHeader(){
    if(window.scrollY > 120){
        var b = Math.min((window.scrollY - 100) / 600, 0.4);
        b = Math.min(Math.max(b, 0), 0.4);
        a.style.transition = "background 1s ease";
        a.style.background = "rgba(0, 0, 0, " + (0.7 - b) + ")";
    }else{
        a.style.transition = "background 0.8s ease";
        a.style.background = "rgba(0, 0, 0)";
    }
}

window.onscroll = function(){
    fixedHeader();
};

var b = document.getElementById("hidden-bar");
function openHeader(){
    b.style.width = "50%";
}
function closeHeader(){
    b.style.width = "0%";
}