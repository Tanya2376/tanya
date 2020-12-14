

 <p>
         <div class="container">
            <ul id="slides">
                <li class="slide showing"></li>
                <li class="slide"></li>
                <li class="slide"></li>
                <li class="slide"></li>
            </ul>

        </div>
    </p>

    <br /><br />


    <div class="wrapper">
        <div id="newsletter">
            <h2>Подпишитесь на наши новости</h2>
            <form action="./mail.php" method="post">
                 <input type="text" name="name" placeholder="Имя">
                 <input type="text" name="email" placeholder="Email">
                 <input type="submit" value="Отправить">

            </form>

        </div>
    </div>





    


    <script>
        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }

        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 2000);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }

        function pauseSlideshow() {
            pauseButton.innerHTML = '&#9658;'; // play character
            playing = false;
            clearInterval(slideInterval);
        }

        function playSlideshow() {
            pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
            playing = true;
            slideInterval = setInterval(nextSlide, 2000);
        }

        pauseButton.onclick = function () {
            if (playing) { pauseSlideshow(); }
            else { playSlideshow(); }
        };

        var next = document.getElementById('next');
        var previous = document.getElementById('previous');

        next.onclick = function () {
            pauseSlideshow();
            nextSlide();
        };
        previous.onclick = function () {
            pauseSlideshow();
            previousSlide();
        };

    </script>
