<?php
session_start();
if($_SERVER['REQUEST_METHOD']==="POST" && isset($_FILES['profileimg'] ))
{
  include '../conncheck/connectcheck.php';
  $username=$_POST['fullname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];
  if($repassword==$password)
  {
$dir = '../uploads/profile/';
 $imgname=basename($_FILES['profileimg']['name']);
 $extimg = pathinfo($_FILES['profileimg']['name'], PATHINFO_EXTENSION);
  $uniquename   = uniqid("profile_", true).".". $extimg;
  $uploadtodir = $dir.$uniquename;
  if(move_uploaded_file($_FILES['profileimg']['tmp_name'],$uploadtodir));
{
    $sql= "insert into users ( email, username, PASSWORD,image) values ( '$email' ,'$username' , '$password','$uploadtodir')";
    $result=mysqli_query ($conn,$sql); 
    if($result)
    {
     echo"inserted successfully";
     $_SESSION['imageprofile']=$uploadtodir;
     header ("location: authentication.php");
     exit();
    }
    else{
      echo "error". mysqli_error($conn);
    }
    }
  //   else {
  //     echo "Failed to upload image.";
  // }
  }
  else{
    echo "incorrect password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/reg.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="maindiv">
    <section class="maincontent">
      <form id="regform" method="post" action="../authentication/register.php" enctype=multipart/form-data onsubmit="return fun(event)" >
        <section class="fullname">
          <label for="fullname" class="formtext">Full Name </label>
          <input id="inputfullname" type="text" name="fullname" placeholder="Enter Your Full Name"
            onclick="myfunf()" >
          <p id="fullnameerror" class="error"></p>
        </section>

        <section class="email">
          <label class="formtext">Email</label>
          <input id="inputemail" type="email" name="email" placeholder="Enter Your Email" onclick="myfun()" >
          <p id="emailerror" class="error"></p>
        </section>

        <section class="password">
          <label class="formtext">Password</label>
          <input id="inputpass" type="password" name="password" placeholder="Enter Your Password" onclick="myfunn()" >
          <p id="passworderror" class="error"></p>
        </section>
           
        <section class="repassword">
          <label for="inputrepass" class="formtext">Re-type Password</label>
          <input id="inputrepass" type="password" name="repassword" placeholder="Re-enter Your Password"
            onclick=" myfunnn()" required>
          <p id="retypeerror" class="error"></p>
        </section>
        <section class="img">
          <label class="image">profile</label><br>
          <input id="image" type="file" name="profileimg">
          <p id="emailerror" class="error"></p>
        </section>
        <button type="submit" id="signup">Signup</button>
      </form>
    </section>
  </div>

  <script>
    function myfun() {
      document.getElementById('inputemail').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
    }
    function myfunn() {
      document.getElementById('inputpass').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
    }
    function myfunnn() {
      document.getElementById('inputrepass').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
    }
    function myfunf() {
      document.getElementById('inputfullname').style.backgroundImage = 'linear-gradient(to right, #7D3780, #E9BD43)';
    }

    function fun(event) {
      event.preventDefault();
      let isValid = true;
      const fullname = document.getElementById('inputfullname').value.trim();
      const email = document.getElementById('inputemail').value.trim();
      const password = document.getElementById('inputpass').value.trim();
      const repassword = document.getElementById('inputrepass').value.trim();

      // Clear previous error messages
      document.getElementById('fullnameerror').textContent = "";
      document.getElementById('emailerror').textContent = "";
      document.getElementById('passworderror').textContent = "";
      document.getElementById('retypeerror').textContent = "";

      
      // Validate Full Name
      if (!fullname) {
        document.getElementById('fullnameerror').textContent = "Full Name is required.";
        isValid = false;
      } else if (fullname.length <= 5) {
        document.getElementById('fullnameerror').textContent = "Full Name must be more than 5 characters.";
        isValid = false;
      }
    
      // Validate Email
      const emailReg = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
      if (!email) {
        document.getElementById('emailerror').textContent = "Email is required.";
        isValid = false;
      } 
      else if (!emailReg.test(email)) {
        document.getElementById('emailerror').textContent = "Invalid email format.";
        isValid = false;
      }
      
      // Validate Password
      if (!password) {
        document.getElementById('passworderror').textContent = "Password is required.";
        isValid = false;
      } else if (password.length <= 5) {
        document.getElementById('passworderror').textContent = "Password must be more than 5 characters.";
        isValid = false;
      }
      

      // Validate Re-typed Password
      if (!repassword) {
        document.getElementById('retypeerror').textContent = "Please re-enter your password.";
        isValid = false;
      } else if (password !== repassword) {
        document.getElementById('retypeerror').textContent = "Passwords do not match.";
        isValid = false;
      }
      if (isValid) {
        document.getElementById('regform').submit(); 
      // If all validations pass
  
    }
  </script>
</body>

</html>
