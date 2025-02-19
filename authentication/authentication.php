<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit']))
{
  include '../conncheck/connectcheck.php';
  $email=$_POST['email'];
  $password=$_POST['password'];

$sql = "select * from users where email = '$email'";
$result=mysqli_query($conn,$sql);
if($result)
{
$users=mysqli_fetch_assoc($result);
if($users['email']==$email&&$users['PASSWORD']==$password)
{
  $_SESSION['id']=$users['id'];
$_SESSION['username']=$users['username'];
$_SESSION['imageprofile']=$users['image'];
  header("location: ../header/home.php");
  exit();
}
else{
  echo "check you email and password again";
}
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/stylerent.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="maindiv">
    <section class="maincontent">
      <form id="loginform" method="post" action="authentication.php">
        <section class="email">
          <span>
            <p class="formtext">Email</p>
          </span>
          <span>
            <input id="inputemail" type="text" name="email" placeholder="Enter Your Email" onclick="myfun()">
          </span>
        </section>
        <section class="password">
          <span>
            <p class="formtext">Password</p>
          </span>
          <span>
            <input id="inputpass" type="password" name="password" placeholder="Enter Your Password" onclick="myfunn()">
          </span>
        </section>
        
          <!-- <section class="checkbox-section">
          <input  type="checkbox" id="admin" name="role" class="checkAU"value="admin">
          <label for="admin">admin</label>
          <input type="checkbox" id="user" name="role" value="user" class="checkAU">
          <label for="user" >user</label>
          <p id="checkboxADUS"><p>  -->
          <!-- </section> -->
          <section class="buttonsA">
          <div>
            <button type="submit" id="login" name="submit" onfocus="focc()">Login</button>
          </div>
          <p id="msg"></p>
        </section>
      </form>
    </section>
  </div>
</body>
<script>
  //  let admin=document.getElementById('admin');
//   //  let checkmsg=document.getElementById('checkboxADUS')
//    document.getElementById('admin').addEventListener('change',function()
//    {
//   if(this.checked)
// {
//   document.getElementById('user').checked = false;
//   window.location.href="../admin/admin.php";
// }
//    });
// document.getElementById('user').addEventListener('change', function() {
// if(this.checked)
// {
//   document.getElementById('admin').checked = false;
//   window.location.href "../header/home.php";
// }
// });

  function myfun() {
    document.getElementById('inputemail').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
  }
  function myfunn() {
    document.getElementById('inputpass').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
  }

  function foc() {
    document.getElementById('signup').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
  }
  function focc() {
    document.getElementById('login').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
  }
</script>
</html>