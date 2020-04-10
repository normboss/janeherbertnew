

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    const slides = document.getElementsByClassName("my-slides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        let img = slides[i].getElementsByTagName("img");
        if (img[0].hasAttribute("usemap")) {
            img[0].removeAttribute("usemap");
        }
    }
    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].style.cursor = "pointer";
    let mapIndex = slideIndex;
    let mapstr = "#map" + mapIndex;
    let img = slides[slideIndex - 1].getElementsByTagName("img");
    img[0].setAttribute("usemap", mapstr);

    const text = document.getElementsByClassName("text-section");
    for (i = 0; i < text.length; i++) {
        text[i].style.display = "none";
    }
    text[slideIndex - 1].style.display = "flex";

}
