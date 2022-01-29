<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i></i>resto.</a>

    <nav class="navbar">
        <a class="active" href="index.php">home</a>
        <a href="product_add.php">product</a>
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

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>





<!-- order section starts  -->

<section class="order" id="order">

            <h3 class="sub-heading"> order now </h3>
            <h1 class="heading"> free and fast </h1>

            <form action="product_add1.php" method="post" enctype="multipart/form-data">
                <div class="inputBox">
                    <div class="input">
                        <span>Product name</span>
                        <input type="text" placeholder="Enter product name" name="productname">
                    </div>
                    <div class="input">
                        <span>product price</span>
                        <input type="text" placeholder="Enter product price" name="productprice">
                    </div>
                </div>
            
                <div class="inputBox">
                    <div class="input">
                        <span>Product weight</span>
                        <input type="text" placeholder="Enter product weight" name="productweight">
                    </div>
                    <div class="input">
                        <span>add image</span>
                        <input type="file" name="image">
                    </div>
                </div>
                

                <input type="submit" name="save" value="product add" class="btn">

            </form>

</section>
























<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
