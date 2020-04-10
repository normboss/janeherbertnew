

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

            var mapNode = slides[i].getElementsByTagName("map");
            if ( mapNode[0] ) {
                slides[i].removeChild(mapNode[0]);
            }
        }
    }
    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].style.cursor = "pointer";
    let mapIndex = slideIndex;
    let mapstr = "#map" + mapIndex;
    let img = slides[slideIndex - 1].getElementsByTagName("img");
    // img.style.cursor = "pointer";
    img[0].setAttribute("usemap", mapstr);

    //get the template element:
    let templateElement = document.getElementsByTagName("template")[mapIndex - 1];

    //get the MAP element from the template:
    let templateMap = templateElement.content.querySelector("map");

    //Create a new node, based on the template:
    let newMapNode = document.importNode(templateMap, true);

    //append the new node wherever you like:
    slides[slideIndex - 1].appendChild(newMapNode);

    const text = document.getElementsByClassName("text-section");
    for (i = 0; i < text.length; i++) {
        text[i].style.display = "none";
    }
    text[slideIndex - 1].style.display = "flex";

}
