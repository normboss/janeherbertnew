<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jane Herbert</title>
    <meta charset="UTF-8">

    <link href="./files/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">
</head>

<body>

    <div class="slideshow-container">

        <div class="my-slides fade1">
            <div class="numbertext">1 / 10</div>
            <img src="./files/images/low_pressure_appleton_ridge72px.png" style="width:100%">
            <div class="footer">
                <div class="text1">I am a life long painter living in Damariscotta, Maine. I respond to the wisdom I see in nature as I paint on location along the coast and hills of Maine. It is my pleasure to offer a preview of my work here.</div>
<br>
                <div class="text">Low Pressure, Appleton Ridge<br>
                    Acrylic on Linen, 18 x 36 inches $1500. USD Spring rains brought a verdant lushness to the farms of Appleton. I included the hawk I saw briefly gliding down to the trees.
                </div>
            </div>
        </div>
        <!-- <div class="footer">
            <div class="text">I am a life long painter living in Damariscotta, Maine. I respond to the wisdom I see in nature as I paint on location along the coast and hills of Maine. It is my pleasure to offer a preview of my work here.</div>
            <div class="text">Acrylic on Linen, 18 x 36 inches $1500. USD Spring rains brought a verdant lushness to the farms of Appleton. I included the hawk I saw briefly gliding down to the trees.</div>
        </div> -->

        <div class="my-slides fade">
            <div class="numbertext">2 / 10</div>
            <img src="./files/images/side_light_herbert.png" style="width:100%">
            <div class="text">Side LIght</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">3 / 10</div>
            <img src="./files/images/vespers_herbert2.png" style="width:100%">
            <div class="text">Vespers</div>
            <!-- <div class="text">
            Acrylic on canvas, 20 x 30 inches. $1500 USD Painted after a late day walk with fellow artist and friend Pam Cabanas along with her dog Jessie on Hawthorne Point in Cushing, Maine.
            </div> -->
        </div>
        <div class="my-slides fade">
            <div class="numbertext">4 / 10</div>
            <img src="./files/images/eagle_nubbins_72.png" style="width:100%">
            <div class="text">Eagle over Hatchet Cove</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">5 / 10</div>
            <img src="./files/images/ubiquity.png" style="width:100%">
            <div class="text">Ubiquity</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">6 / 10</div>
            <img src="./files/images/dyer_river_marsh.png" style="width:100%">
            <div class="text">Dyer River Marsh</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">7 / 10</div>
            <img src="./files/images/jane_herbert_nubbins.png" style="width:100%">
            <div class="text">Painting on location</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">8 / 10</div>
            <img src="./files/images/on_lookout_rock_herbert.png" style="width:100%">
            <div class="text">On Lookout Rock</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">9 / 10</div>
            <img src="./files/images/stillness.png" style="width:100%">
            <div class="text">Stillness</div>
        </div>

        <div class="my-slides fade">
            <div class="numbertext">10 / 10</div>
            <img src="./files/images/studio.png" style="width:100%">
            <div class="text">I welcome visitors to my studio</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <!-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->

    <script>
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
            var slides = document.getElementsByClassName("my-slides");
            // var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            // for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace(" active", "");
            // }
            slides[slideIndex - 1].style.display = "block";
            // dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>