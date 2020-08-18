<?php
include ('./components/header.php');
?>

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 style="font-size: 75px">Safe & Reliable <span>Logistic</span> Solutions!</h1>
                            </div>
                            <!--Hero form -->
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Your Tracking ID">
                                </div>
                                <div class="search-form">
                                    <a href="#">Track & Trace</a>
                                </div>	
                            </form>	
                            <!-- Hero Pera -->
                            <div class="hero-pera">
                                <p>For order status inquiry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <?php include ('./components/serv.php'); ?>
    <?php include ('./components/abt.php'); ?>
    <?php include ('./components/quote.php'); ?>
</main>

<?php include ('./components/footer.php'); ?>