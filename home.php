<?php
    session_start();

    include("connection.php");
    include("function.php");


    $user_data=check_login($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css ">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <section class="header">
        <a href="home.php" class="logo">Travel.Az</a>

        <nav class="navbar">  
          <a href="home.php">Hello <?php echo $user_data['user_name']?></a>
          <a href="aboutUs.php">AboutUs</a>
          <a href="package.php">packages</a>
          <a href="book.php">Book</a> 
          <a href="login.php">logout</a>  
    
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(img//Heydar_Aliyev_Centre.jpg) no-repeat">
                    <div class="content">
                        <span>exploer,discover,travel</span>
                        <h3>travel around the world</h3>
                        <a href="book.php" class="btn"> discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img//wall7.jpg) no-repeat">
                    <div class="content">
                        <span>exploer,discover,travel</span>
                        <h3>travel around the world</h3>
                        <a href="book.php" class="btn"> discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img//bakuhead.webp) no-repeat">
                    <div class="content">
                        <span>exploer,discover,travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="book.php" class="btn"> discover more</a>
                    </div>
                </div>
            </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
        </div>
    </section>



    <section class="services">
        <h1 class="heading-title"> our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="img/F1icon.webp" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="img/tourguide2png.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="img/trekking.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="img/fire2.jpg" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="img/offroad.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="img/adventure-camping-tent-icon-2.png" alt="">
                <h3>camping</h3>
            </div>


        </div>

    </section>

    <section class="home-about">    

        <div class="image">
            <img src="img/FLametowersHeight.webp" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nemo aliquid atque reiciendis odio, delectus numquam unde ipsam quam temporibus beatae eaque quo, alias obcaecati, doloremque voluptatum. Tempore, provident nam.</p>
            <a href="about.php" class="btn"> read more</a>
        </div>

    </section>


    <section class="home-packages">
        <h1 class="heading-title"> our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/F1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>    adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quaerat dolore quos fuga vero repellat quisquam omnis voluptas, sapiente recusandae quam odit! Corporis maxime necessitatibus tempora quidem nisi alias sit!</p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/zahahadid.jpg" alt="">
                </div>
                <div class="content">
                    <h3>    adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quaerat dolore quos fuga vero repellat quisquam omnis voluptas, sapiente recusandae quam odit! Corporis maxime necessitatibus tempora quidem nisi alias sit!</p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/park.webp" alt="">
                </div>
                <div class="content">
                    <h3>    adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quaerat dolore quos fuga vero repellat quisquam omnis voluptas, sapiente recusandae quam odit! Corporis maxime necessitatibus tempora quidem nisi alias sit!</p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>


        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>





    <section class="home-offer">   

        <div class="content"><h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eos exercitationem non nostrum, saepe eaque expedita possimus? Nobis culpa repellendus, laudantium sequi ut eaque, tempore saepe delectus vel corrupti esse.</p>
        <a href="book.php" class="btn">book now</a></div>
        
    </section>







  
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="aboutUs.php"><i class="fas fa-angle-right"></i>AboutUs</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>  
            </div>

            <div class="box">
                <h3>extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>private policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+367-055-16240</a>
            <a href="#"><i class="fas fa-phone"></i>+367-055-16240</a>
            <a href="#"><i class="fas fa-envelope"></i>nassar.silina@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Pecs, hungary - 7633</a>
            </div>

            <div class="box">  
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>

            </div>

        </div> 
        <div class="credit">created by <span>Silina Nassar</span>|C3L452|</div>  
    </section>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>