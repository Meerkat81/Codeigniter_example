<!--
Name: Casey Meurer
Coding 08
Purpose: exterior photo carousel
-->
<!-- taken from tutorial republic -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/iu-9.jpeg" alt="First Slide" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="assets/images/iu-10.jpeg" alt="Second Slide" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="assets/images/iu-12.jpeg" alt="Third Slide" class="img-fluid">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
