<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/add_cart.php';
if(isset($_GET['message']) && $_GET['message'] === 'OrderPlacedSuccessfully') {
   $message[] = 'Order placed successfully!';
} else {
   $orderPlacedMessage = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="shortcut icon" href="images/icon.png"/>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>
<section class="hero">
   <div class="swiper hero-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <div class="content">
               <span>Order Online</span>
               <h3>Fresh Veggies & Fruits</h3>
               <a href="category.php?category=Fresh Vegetables" class="btn">Order Here</a>
            </div>
            <div class="image">
               <img src="swiggy/main1.png" alt="">
            </div>
         </div>
         <div class="swiper-slide slide">
            <div class="content">
               <span>Order Online</span>
               <h3>Dairy, Bread & Eggs</h3>
               <a href="category.php?category=Dairy, Bread & Eggs" class="btn">Order Here</a>
            </div>
            <div class="image">
               <img src="swiggy/main2.png" alt="">
            </div>
         </div>
         <div class="swiper-slide slide">
            <div class="content">
               <span>Order Online</span>
               <h3>Cold Drinks & Juices</h3>
               <a href="category.php?category=Cold Drinks & Juices" class="btn">Order Here</a>
            </div>
            <div class="image">
               <img src="swiggy/main3.png" alt="">
            </div>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<div id="category" >
<section class="category">
   <h1 class="title">Shop By Category</h1>
   <div class="box-container">
      <a href="category.php?category=Fresh Vegetables" class="box">
         <img src="swiggy/cat1.png" alt="">
         <h3>Fresh Vegetables</h3>
      </a>

      <a href="category.php?category=Fresh Fruits" class="box">
         <img src="swiggy/cat2.png" alt="">
         <h3>Fresh Fruits</h3>
      </a>

      <a href="category.php?category=Dairy, Bread & Eggs" class="box">
         <img src="swiggy/cat3.png" alt="">
         <h3>Dairy, Bread & Eggs</h3>
      </a>

      <a href="category.php?category=Munchies" class="box">
         <img src="swiggy/cat4.png" alt="">
         <h3>Munchies</h3>
      </a>

      <a href="category.php?category=Cold Drinks & Juices" class="box">
         <img src="swiggy/cat5.png" alt="">
         <h3>Cold Drinks & Juices</h3>
      </a>

      <a href="category.php?category=Sweet Tooth" class="box">
         <img src="swiggy/cat6.png" alt="">
         <h3>Sweet Tooth</h3>
      </a>

      <a href="category.php?category=Biscuit & Cakes" class="box">
         <img src="swiggy/cat7.png" alt="">
         <h3>Biscuit & Cakes</h3>
      </a>

      <a href="category.php?category=Cereals & Breakfast" class="box">
         <img src="swiggy/cat8.png" alt="">
         <h3>Cereals & Breakfast</h3>
      </a>

      <a href="category.php?category=Sauces & Spreads" class="box">
         <img src="swiggy/cat9.png" alt="">
         <h3>Sauces & Spreads</h3>
      </a>

      <a href="category.php?category=Tea, Coffee & More" class="box">
         <img src="swiggy/cat10.png" alt="">
         <h3>Tea, Coffee & More</h3>
      </a>

      <a href="category.php?category=Meat & Seafood" class="box">
         <img src="swiggy/cat11.png" alt="">
         <h3>Meat & Seafood</h3>
      </a>

      <a href="category.php?category=Instant & Frozen Food" class="box">
         <img src="swiggy/cat12.png" alt="">
         <h3>Instant & Frozen Food</h3>
      </a>
   </div>
</section>
</div>
<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});
</script>
</body>
</html>