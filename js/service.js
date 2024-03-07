function serviceOption(a,b){
    var boxOptions = document.querySelectorAll('.box-option');
    var textOptions = document.querySelectorAll('.text-option');
    for (var i = 0; i < boxOptions.length; i++){
        if (i === a){
            boxOptions[i].classList.add('active');
            textOptions[i].classList.add('active');
            b.classList.add('active')
        }else{
            boxOptions[i].classList.remove('active');
            textOptions[i].classList.remove('active');
        }
    }
}
serviceOption(0);