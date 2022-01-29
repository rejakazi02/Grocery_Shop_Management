


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Product Entry</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

            <header>

            <a href="#" class="logo"><i></i>resto.</a>

            <nav class="navbar">
                <a class="active" href="index.php">home</a>
                <a href="#dishes">menu</a>
                <a href="#about">about</a>
                <a href="#review">contact</a>
                <a href="order.php">order</a>
            </nav>

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
                <i class="fas fa-search" id="search-icon"></i>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>

        </header>
    <section class="order" id="order">

            <h3 class="sub-heading"> order now </h3>
            <h1 class="heading"> free and fast </h1>

            <form action="insert.php" method="post">
                <div class="inputBox">
                    <div class="input">
                        <span>your name</span>
                        <input type="text" placeholder="Enter your name" name="userName">
                    </div>
                    <div class="input">
                        <span>your number</span>
                        <input type="number" placeholder="Enter your number" name="PhoneNumber">
                    </div>
                </div>
            
                <div class="inputBox">
                    <div class="input">
                        <span>Total Product number</span>
                        <input type="number" placeholder="How many product do you want to order" name="tpn">
                    </div>
                    <div class="input">
                        <span>date</span>
                        <input type="date" name="date">
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>your address</span>
                        <textarea name="address" placeholder="Enter your address" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input">
                        <span>Product Details</span>
                        <textarea name="Pdetails" placeholder="Write product name and Amount" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <input type="submit" name="save" value="order" class="btn">

            </form>

</section>

<!-- order section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    
<div class="credit"> copyright @ 2021 by <span>mr. web designer</span> </div>

</section>
        
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
    </body>
</html>


<!---database-->





