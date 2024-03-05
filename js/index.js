document.addEventListener("DOMContentLoaded", function(){
    const images = document.querySelectorAll("#sec-1-images img");
    let index = 0;

    function showNextImage(){
        images[index].style.opacity = 0;
        index = (index + 1) % images.length;
        images[index].style.opacity = 1;
    }
    setInterval(showNextImage, 5000);
});


document.addEventListener("DOMContentLoaded", function(){
    const activeImage = document.getElementById("sec-1-images-active");
    const sec1 = document.getElementById("sec-1");

    function setSec1Height(){
        sec1.style.height = activeImage.offsetHeight + "px";
    }
    setSec1Height();
    window.addEventListener("resize", setSec1Height);
});


function isInViewport(element){
    var rect = element.getBoundingClientRect();
    return(
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
function addClassOnScroll(){
    var images = document.querySelectorAll('.image-1, .image-2');
    images.forEach(function(image){
        if (isInViewport(image)){
            image.classList.add('show-1');
        }
    });
}
window.addEventListener('scroll', addClassOnScroll);
addClassOnScroll();


function showCarousel(carouselNum) {
    document.querySelectorAll('[id^="sec-6-carousel"]').forEach(carousel => {
        carousel.style.opacity = '0';
        carousel.style.display = 'none';
        var innerCarousel = carousel.querySelector('.carousel');
        if (innerCarousel.id === 'carouselExampleIndicators') {
            innerCarousel.removeAttribute('id');
        }
    });

    var selectedCarousel = document.getElementById('sec-6-carousel-' + carouselNum);
    selectedCarousel.style.display = 'block';
    setTimeout(function() {
        selectedCarousel.style.opacity = '1';
    }, 50);

    var innerCarousel = selectedCarousel.querySelector('.carousel');
    innerCarousel.id = 'carouselExampleIndicators';

    document.querySelectorAll('.sec-6-pagination').forEach(button => {
        button.classList.remove('active');
    });

    setTimeout(function() {
        document.querySelector('.sec-6-pagination:nth-child(' + carouselNum + ')').classList.add('active');
    }, 50);
}


function toggleText(d){
    d.classList.toggle("overflow-text")
}


function isInViewport2(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    const elementTopOffset = rect.top;
    const elementBottomOffset = rect.bottom;
    const customTopOffset = -300;
    const customBottomOffset = -300;
    return (
        elementTopOffset - customTopOffset <= windowHeight &&
        elementBottomOffset + customBottomOffset >= 0
    );
}
function handleScroll2() {
    const staffElements = document.querySelectorAll('.sec-7-staff');
    staffElements.forEach(element => {
        if (isInViewport2(element)) {
            element.classList.add('show-2');
        }
    });
}
window.addEventListener('scroll', handleScroll2);
handleScroll2();