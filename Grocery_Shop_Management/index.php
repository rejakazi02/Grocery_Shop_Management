            

            

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Complete</title>

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

            <!-- home section starts  -->

            <section class="home" id="home">

                <div class="swiper-container home-slider">

                    <div class="swiper-wrapper wrapper">

                        <div class="swiper-slide slide">
                            <div class="content">
                                <span>our special dish</span>
                                <h3>spicy noodles</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="images/" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="content">
                                <span>our special dish</span>
                                <h3>fried chicken</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="images/" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="content">
                                <span>our special dish</span>
                                <h3>hot pizza</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="images/" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </section>

            <!-- home section ends -->

            <!-- product section starts  -->

            <section class="product" id="product">

                <h3 class="sub-heading"> our product </h3>
                <h1 class="heading"> popular product </h1>
                
    <?php 

            include "db.php";

            $view_query = "SELECT * FROM product_list";
            $query_result = mysqli_query($conn,$view_query);



            if ($query_result) {
                
                while($rows = mysqli_fetch_assoc($query_result)){
                    $id = $rows['id'];
                    $productname = $rows['productname'];
                $productprice = $rows['productprice'];
                $productweight = $rows['productweight'];
                
                $image = $rows['image'];
                $image = "./images/"."{$image}";
                
     ?>

            <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="<?php echo $image ?>" alt="">
                <h3><?php echo $productname; ?></h3>
                <h1>Price: <?php echo $productprice; ?> tk </h1>
                        <h1>product Weight: <?php echo $productweight; ?></h1>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                

                <a href="#" class="btn">add to cart</a>
            </div>



            </div>





                

                    
     <?php     }
            }


      ?>
                
                    

                

                

            </section>

            <!-- product section ends -->

            <!-- about section starts  -->

            <section class="about" id="about">

                <h3 class="sub-heading"> about us </h3>
                <h1 class="heading"> why choose us? </h1>

                <div class="row">

                    <div class="image">
                        <img src="images/about-img.png" alt="">
                    </div>

                    <div class="content">
                        <h3>best food in the country</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
                        <div class="icons-container">
                            <div class="icons">
                                <i class="fas fa-shipping-fast"></i>
                                <span>free delivery</span>
                            </div>
                            <div class="icons">
                                <i class="fas fa-dollar-sign"></i>
                                <span>easy payments</span>
                            </div>
                            <div class="icons">
                                <i class="fas fa-headset"></i>
                                <span>24/7 service</span>
                            </div>
                        </div>
                        <a href="#" class="btn">learn more</a>
                    </div>

                </div>

            </section>

            <!-- about section ends -->



            <!-- order section starts  -->

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

                    <div class="box">
                        <h3>locations</h3>
                        <a href="#">mirpur-2</a>
                        
                    </div>

                    <div class="box">
                        <h3>quick links</h3>
                        <a href="index.php">home</a>
                        <a href="#">product</a>
                        <a href="#">about</a>
                        <a href="#">contact</a>
                        <a href="#">order</a>
                    </div>

                    <div class="box">
                        <h3>contact info</h3>
                        <a href="#">01630630899</a>
                        <a href="#">rejakazi02@gmail.com</a>
                        <a href="#">mirpur-2, dhaka-1216</a>
                    </div>

                    <div class="box">
                        <h3>follow us</h3>
                        <a href="#" ><i class='fab fa-facebook-f'></i> facebook </a>
                        <a href="#">twitter</a>
                        <a href="#">instagram</a>
                        <a href="#">linkedin</a>
                    </div>

                </div>

                <div class="credit"> copyright @ 2021 by <span>reja</span> </div>

            </section>

            <!-- footer section ends -->

            <!-- loader part  -->






















            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- custom js file link  -->
            <script src="js/script.js"></script>

            </body>
            </html>
