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
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>ReadRover is a state-of-the-art online eLibrary that aims to provide a vast and diverse collection of digital reading materials to cater to the needs of avid readers, students, researchers, and professionals alike. Our mission is to foster a love for reading and lifelong
          learning by making quality content accessible to everyone with an internet connection.</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>
   
   <div class="box-container">
      
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/darknet.jpg" alt="">
      <div class="name">Darknet</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Darknet">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="darknet.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/holy_ghosts.jpg" alt="">
      <div class="name">Holy Ghosts</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Holy Ghosts">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="holy_ghosts.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/be_well_bee.jpg" alt="">
      <div class="name">Be Well Bee</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Be Well Bee">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="be_well_bee.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/bash_and_lucy-2.jpg" alt="">
      <div class="name">Bash and Lucy</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Bash and Lucy">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="bash_and_lucy-2.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/boring_girls_a_novel.jpg" alt="">
      <div class="name">Boring girls</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Boring girls">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="boring_girls_a_novel.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
           <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/the_girl_of_ink_and_stars.jpg" alt="">
      <div class="name">The girl of ink and stars</div>
      <div class="price">$12/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="The girl of ink and stars">
      <input type="hidden" name="product_price" value="12">
      <input type="hidden" name="product_image" value="the_girl_of_ink_and_stars.jpg">
      <a href="details_pg6.php"><input type="submit" value="add to cart" name="add_to_cart" class="btn"></a>
     </form>
      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
     
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
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
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
         <p>Contact us to furthur discuss any query related to our website</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>