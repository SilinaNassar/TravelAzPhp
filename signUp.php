<?php
    session_start();

    include("connection.php");
    include("function.php");

    if(isset($_POST['sign'])){

       $user_name=  $_POST['user_name'];
       $email=  $_POST['email'];
       $phone=  $_POST['phone'];
       $password=  $_POST['password'];

       if(!empty($user_name)&& !empty($password) && !empty($email) && !empty($phone) && !is_numeric($user_name)){
            $user_id=random_num(20);
            $query= "insert into users_form (user_id,user_name,email,phone,password) values ('$user_id','$user_name','$email','$phone','$password')";

            mysqli_query($con,$query);
            

            header("Location: login.php");

        }else{
            echo"Please enter valid information";
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css ">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>




    <div class="heading" >
        <h1>Join Us!</h1>
    </div>


    <section class="signing">
        <h1 class="heading-title">Signup</h1>

        <form action="signUp.php" method="post" class="signup">

            <div class="flex">
                <div class="inputBox">
                    <span >name :</span>
                    <input type="text" placeholder="enter your name" name="user_name">
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
                    <span >password :</span>
                    <input type="number" placeholder="enter your password" name="password">
                </div>
                
            
            </div>
            <input type="submit" value="signup" class="btn" name="sign">

        </form>



    </section>




    
<script src="js/script.js"></script>


</body>
</html>