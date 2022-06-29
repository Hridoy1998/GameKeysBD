<?php 
    session_start();
    if(isset($_COOKIE['status'])){ 
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../img/style2.css">
    <title>Home</title>
</head>
<style>
	body{
		background-image: url('../img/Red-Dead-Redemption-2-review-why-this-Rockstar-epic-is-one-.jpg');
	}
</style>
<body>

<header>

<a href="#" class="logo"><span>Game Keys</span> BD</a>



<nav class="navbar">
    <a href="">home</a>
    <a href="">about</a>
    <a href="">contact</a>
    <a class="btn" href="Login.php">Log in</a>

</nav>

</header>
<section class="contact">
        <div class="bgimg">


            <h1 align="center" id="find">Find Your Game</h1>
            <div class="search">
                <input id="search-box" type="text " placeholder="Enter Game Name">
                <button class="btn">Search</button>

            </div>

        </div>
    </section>
      <!-- Geners section starts  -->
      <h1 align="center" class="credit"> Genres </h1>

    <section class="features" id="features">
    
        
        <div class="box-container">

            <div class="box">
                <img src="../img/5uFvATdhWVK46PRsgdhyuX.jpg" alt="">
                <h3>FPS</h3>


            </div>

            <div class="box">
                <img src="../img/a0456008475e73125c5286f033adecb7.jpg" alt="">
                <h3>ACTION</h3>

            </div>

            <div class="box">
                <img src="../img/Red-Dead-Redemption-2-horseback-980x593.jpg" alt="">
                <h3>ADVENTURE</h3>

            </div>

        </div>

    </section>




    <!-- Team section starts  -->
    <h1 align="center" class="credit"> Our Team </h1>
    <section class="review" id="review">

        

        <div class="box-container">

            <div class="box">
                
                <div class="user">
                    <img src="../img/IMG_20170730_183651_689.jpg" alt="">
                    <h3>Hridoy Sheikh</h3>
                </div>
            </div>

            <div class="box">
                
                <div class="user">
                    <img src="../img/IMG-20201212-WA0004.jpg" alt="">
                    <h3>Ahsan Mansiv</h3>
                </div>
            </div>

            <div class="box">
                
                <div class="user">
                    <img src="../img/wp4517170-call-of-duty-modern-warfare-2019-wallpapers.jpg" alt="">
                    <h3>Dewan Sadman</h3>
                </div>
            </div>

        </div>

    </section><br><br>

    <!-- contact section starts  -->
    <h1 align="center" class="credit">contact us</h1>
    <section class="contact" id="contact">
    
 
       
        <form action="">

            

            <div class="inputBox">
                <input type="text" required>
                <label>name</label>
            </div>

            <div class="inputBox">
                <input type="email" required>
                <label>email</label>
            </div>

            <div class="inputBox">
                <input type="number" required>
                <label>phone</label>
            </div>

            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <label>message</label>
            </div>

            <input type="submit" class="btn" value="send message">

        </form>

    </section><br>

    <!-- contact section edns -->

    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">


        </div>

        <h1 align="center" class="credit"> &copy; copyright @ 2021 by elusive_mansiv </h1>

    </div>

    <!-- footer section ends -->
</body>
</html>