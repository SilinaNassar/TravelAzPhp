<?php
    session_start();

    include("connection.php");
    include("function.php");

    if(isset($_POST['login'])){

       $user_name=  $_POST['user_name'];
       $password=  $_POST['password'];

       if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))
       {
        $query="select * from users_form where user_name='$user_name' limit 1";

            $result=mysqli_query($con,$query);
            if($result){

                if($result && mysqli_num_rows($result)>0){

                    $user_data=mysqli_fetch_assoc($result);
                    

                    if($user_data['password']===$password){

                        $_SESSION['user_id']=$user_data['user_id'];
                        header("location: home.php");
                        die;


                    }
    
                }


            }
            header("location:home.php") ; 
            die;
            echo"wrong username or password!";

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


    <section class="loging">
        <h1 class="heading-title">login!</h1>

        <form action="login.php" method="post" class="login">

            <div class="flex">
                <div class="inputBox">
                    <span >name :</span>
                    <input type="text" placeholder="enter your name" name="user_name">
                </div>

                <div class="inputBox">
                    <span >password :</span>
                    <input type="number" placeholder="enter your password" name="password">
                </div>
                
            
            </div>

            <a href="signUp.php" >Signup</a>
            <input type="submit" value="login" class="btn" name="login">

        </form>



    </section>




    
<script src="js/script.js"></script>


</body>
</html>