<?php
      session_start();
      if(isset($_SESSION['id'])&&isset($_SESSION['username']))
      {
  include '../conncheck/connectcheck.php';
echo '<img src="'.$_SESSION['imageprofile'].'" alt="no">';

echo "Hi," .$_SESSION['username'];
  }
else{
  header("location: ../authentication/authentication.php");
  exit();
      }
?>

<!-- // include_once '../conncheck/connectcheck.php';
// $row[]
// <table>
// <thead>
// <th>
// '<tr>email</tr><tr>username</tr><tr>password</tr><tr>image</tr>'
// <td>
// </th>
// </thead>
// </table>
//  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
  <style>
    .slides {
      display: none;
    }
  </style>
  </header>

<body>
 
  <div class="topnav" id="mytopnav">
    <div class="imglogo">
      <img id="logo" src="../img/logo.png" />
    </div>
    <div class="nava" id="navhref">
      <a href="home.html" class="active">Home</a>
      <a href="#">Men</a>
      <a href="#">Women</a>
      <a href="#">Categories</a>
      <a href="#">Diaries</a>
      <?php
      if(!$_SESSION['imageprofile'])
      {
       echo' <button id= "usersidepanel"><i class="fa-solid fa-user" onclick="userinfo()" ></i></button>';
      }
      ?>
      <a href="../authentication/logout.php">Logout</a>
      <a href="javascrpt:void(0);" class="icon" onclick="myfunction()">
        <i class="fa-solid fa-bars"></i>
      </a>
    </div>
    <div class="searchbar">
      <i class="fas fa-search"></i>
      </i>
      <input type="text" id="Search" />
    </div>
    <div id="cart">
      <a href="../header/cart.php"> <i class="fa-solid fa-cart-shopping"></i> </a>
    </div>
  </div>



  <div>
    <img src="../img/front.png" alt="" style="width: 100%; height: 100%;">
  </div>
  <div style="display: flex; justify-content:space-around;">
    <div class="cardslides" style="max-width: 500px;">
      <img class="slides" src="../img/nwq.png" style="width: 100%;">
      <img class="slides" src="../img/Screenshot 2024-12-27 215008.png" alt="" style="width: 100%;">
      <img class="slides" src="../img/Screenshot 2024-12-27 215123.png" alt="" style="width: 100%;">
    </div>
    <main>
      <h2></h2>
      
<span id="fullname">
</span>
<a href="../header/categories.php">
  click now
</a>

    </main>
    <div class="cardslides1" style="max-width:750px; ">
      <img class="slides1" src="../img/Screenshot 2024-12-27 214713.png" style="width: 100%;">
      <img class="slides1" src="../img/Screenshot 2024-12-27 214610.png" alt="" style="width: 100%;">
      <img class="slides1" src="../img/Screenshot 2024-12-27 214456.png" alt="" style="width: 100%;">
    </div>
  </div>
  <div id="cardflash">
  <div id="flash">
    <h3 id="flash">
      FLASH SALE
    </h3>
    <div id="time">
   <div id="countdown"><h3></h3>
   </div>
    </div>
    <div id="loader"></div>
  </div>
  <div class="cards">
    <div class="cardcontent">
    <div>
      <img src="../img/Sirbandi_5ede0ccb-c1ad-47f4-abd0-00cd20e806c8.avif" alt="">
    </div>
    <button>
    <h4><a href="../header/cart.php"> Explore</a></h4>
    </button>
    </div>
    <div class="cardcontent">
  <div>
    <img src="../img/Sirbandi_5ede0ccb-c1ad-47f4-abd0-00cd20e806c8.avif" alt="">
  </div>
  <button>
   <h4>Explore</h4> 
  </button>
</div>
<div class="cardcontent">
<div>
  <img src="../img/Sirbandi_5ede0ccb-c1ad-47f4-abd0-00cd20e806c8.avif" alt="">
</div>
<button>
  <h4>Explore</h4>
</button>
</div>
</div>
</div>

  <!-- <div class="banner">
  <div class="slider" style="--quantity:9">
    <img style="--position: 1;" src="img/magar-ladies-dress-768x1047.jpg"  class="item">
    <img style="--position: 2;" src="./img/newar-ladies-dress-768x1024.jpg" class="item">
    <img style="--position: 3;" src="./img/rai-ladies-dress-768x1024.jpg" class="item">
    <img style="--position: 4 ;" src="./img/Screenshot 2024-12-11 034505.png" class="item">
    <img style="--position: 5;" src="./img/Screenshot 2024-12-27 215123.png" class="item">
    <img style="--position: 6;" src="./img/Screenshot 2024-12-27 215008.png" class="item">
    <img style="--position: 7;" src="./img/Screenshot 2024-12-27 214610.png" class="item">
    <img style="--position: 8;" src="./img/Screenshot 2024-12-27 214456.png" class="item">
    <img style="--position: 9;" src="./img/Screenshot 2024-12-27 213834.png" class="item">
  </div>
</div> -->
  <section class="slider-container" style="width: 100%;">
    <div class="slider-images" style="width: 100%;">
      <div class="slider-img">
        <img src="../img/magar-ladies-dress-768x1047.jpg" alt="1">
        <h1>Magar</h1>
        <div class="details">
          <h2>Explore the ethics of magar</h2>
          <p>with love - designer katy </p>
          <!-- <p>exported with love from bhutanaese artist- pure cotton</p> -->
        </div>
      </div>
      <div class="slider-img">
        <img src="../img/GURUNG_DRESS.webp" alt="2">
        <h1>Gurung</h1>
        <div class="details">
          <h2>Included/Material: Coat(Teri Cotton), Bhangra (Mix Cotton)</h2>
          <p>Exploring the traditions of gurung reflecting it's identity through DRESS.</p>
        </div>
      </div>
      <div class="slider-img">
        <img src="../img/newar-ladies-dress-768x1024.jpg" alt="3">
        <h1>Newar</h1>
        <div class="details">
          <h2>Fabric: Cotton</h2>
          <p>Your Ultimate Statement Comfort Piece!</p>
        </div>
      </div>
      <div class="slider-img active">
        <img src="../img/rai-ladies-dress-768x1024.jpg" alt="4">
        <h1>Rai</h1>
        <div class="details">
          <h2>Exquisite Craftsmanship</h2>
          <p>Meticulously crafted with catchy designs, intricate block prints</p>
        </div>
      </div>
      <div class="slider-img">
        <img src="../img/gents-limbu_53f8675b-57df-4702-a02b-9e86dc9c5cbb.webp" alt="5">
        <h1>Limbu</h1>
        <div class="details">
          <h2>Quality ~ Cotton</h2>
          <p>Made with love solukhumbu</p>
        </div>
      </div>
      <div class="slider-img">
        <img src="../img/tamang .jpg" alt="6">
        <h1>Tamang</h1>
        <div class="details">
          <h2>Material - Synthetic</h2>
          <p>Experience the vibrant culture of the Tamang attire. </p>
        </div>
      </div>
    </div>

  </section>
  <div>
    <video id="vid1" src="../Videos/clip.mp4" autoplay loop></video>
  </div>
  <div class="twovidinarow">
    <div class="vid2">
      <video src="../Videos/right (2).mp4" autoplay loop></video>
    </div>
    <div class="textvidmid">
      <h4> HAND CRAFT </h4>
      <P>Designers duhfifdk</P>
    </div>
    <div class="vid2">
      <video src="../Videos/left.mp4" autoplay loop></video>
    </div>
  </div>
  <script src="../jquery/jquery.js"></script>
  <script src="../header/jsrent.js">
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>