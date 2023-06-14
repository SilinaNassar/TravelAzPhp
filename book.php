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
        <a href="home.php" class="logo">homeimg</a>

        <nav class="navbar">  
          <a href="home.php">Home</a>
          <a href="aboutUs.php">AboutUs</a>
          <a href="package.php">packages</a>
          <a href="book.php">Book</a>
          <a href="login.php">logout</a> 
    
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <div class="heading" style ="background:url(img/pexels-flo-maderebner-869258.jpg) no-repeat">
        <h1>Book now</h1>
    </div>


    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span >name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span >email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span >phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span >address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span >where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span >how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                
                </div>
                <div class="inputBox">
                    <span >arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span >leaving :</span>
                    <input type="date" name="leaving">
                </div>

            
            </div>
            <input type="submit" value="submit" class="btn" name="send">

        </form>



    </section>




    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>


</body>
</html>