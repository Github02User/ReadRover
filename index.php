<?php


include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/" target="_BLANK"class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/?lang=en" target="_BLANK"class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/" target="_BLANK"class="fab fa-instagram"></a>
            <a href="https://pk.linkedin.com/" target="_BLANK"class="fab fa-linkedin"></a>
         </div>
         <p> New <a href="login.php">login</a> | <a href="register.php">register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <p class="logo">ReadRover</p>

         <!-- <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="ChatApp">BookClub</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav> -->

         <!-- <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div> -->
      </div>
   </div>

</header>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>ReadRover is a state-of-the-art online eLibrary that aims to provide a vast and diverse collection of digital reading materials to cater to the needs of avid readers, students, researchers, and professionals alike. Our mission is to foster a love for reading and lifelong
          learning by making quality content accessible to everyone with an internet connection.</p>
      <a href="about02.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>
   
   <div class="box-container">
      
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/darknet.jpg" alt="">
      <div class="name">Darknet</div>
      <!-- <div class="price">$12/-</div>  -->
      <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
      <input type="hidden" name="product_name" value="Darknet">
      <!-- <input type="hidden" name="product_price" value="12">  -->

      <a href="details_page01.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="darknet.jpg">
      
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/holy_ghosts.jpg" alt="">
      <div class="name">Holy Ghosts</div>
      <!-- <div class="price">$12/-</div>  -->
       <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
      <input type="hidden" name="product_name" value="Holy Ghosts">
      <!-- <input type="hidden" name="product_price" value="12">  -->
      <a href="details_page2.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="holy_ghosts.jpg">
       
      </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/be_well_bee.jpg" alt="">
      <div class="name">Be Well Bee</div>
      <!-- <div class="price">$12/-</div>  -->
       <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
      <input type="hidden" name="product_name" value="Be Well Bee">
       <!-- <input type="hidden" name="product_price" value="12">  -->
      <a href="details_pg3.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="be_well_bee.jpg">
      
     </form> 
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/bash_and_lucy-2.jpg" alt="">
      <div class="name">Bash and Lucy</div>
       <!-- <div class="price">$12/-</div>  -->
      <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty">  -->
      <input type="hidden" name="product_name" value="Bash and Lucy">
       <!-- <input type="hidden" name="product_price" value="12">  -->
      <a href="details_pg4.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="bash_and_lucy-2.jpg">
      
     </form> 
            <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/boring_girls_a_novel.jpg" alt="">
      <div class="name">Boring girls</div>
      <!-- <div class="price">$12/-</div>  -->
      <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty">  -->
      <input type="hidden" name="product_name" value="Boring girls">
      <!-- <input type="hidden" name="product_price" value="12">  -->
      <a href="details_pg5.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="boring_girls_a_novel.jpg">
      
     </form> 
            <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/the_girl_of_ink_and_stars.jpg" alt="">
      <div class="name">The girl of ink and stars</div>
       <!-- <div class="price">$12/-</div>  -->
      <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty">  -->
      <input type="hidden" name="product_name" value="The girl of ink and stars">
       <!-- <input type="hidden" name="product_price" value="12">  -->
      <a href="details_pg6.php" class="btn">Details</a>
      <input type="hidden" name="product_image" value="the_girl_of_ink_and_stars.jpg">
      
     </form> 
    
      
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop2.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
            <p>ReadRover fosters a vibrant reading community, where users can leave reviews, ratings, and engage in discussions about their favorite books.</p>
         <a href="about02.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
         <p>Contact us to furthur discuss any query related to our website</p>
      <a href="login.php" class="white-btn">contact us</a>
   </div>

</section>




<section class="footer">

   <div class="box-container">

      

      <div class="box">
         <h3>Login or register</h3>
         <a href="login.php">login</a>
         <a href="register.php">register</a>
         
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +92-456-7890 </p>
         <p> <i class="fas fa-phone"></i> +92-222-3333 </p>
         <p> <i class="fas fa-envelope"></i> hammadAG@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> Karachi,Pakistan </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
            <a href="https://www.facebook.com/" target="_BLANK" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/?lang=en" target="_BLANK" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/" target="_BLANK" class="fab fa-instagram"></a>
            <a href="https://pk.linkedin.com/" target="_BLANK" class="fab fa-linkedin"></a>
      </div>

   </div>

   <p class="credit"> &copy; copyright  @ <?php echo date('Y'); ?> by <span>Mr.Hammad Ghaffar</span> </p>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>