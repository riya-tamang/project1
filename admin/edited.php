<?php
      session_start();
      require_once 'connectcheck.php'
      if(isset($_SESSION['id'])&& isset ($_POST['id']))
      {
        $id=$_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

       $sql= UPDATE users SET username = '$username', email='$email',PASSWORD='$password' WHERE id='$id';
       mysqli_query($conn,$sql);
       header("location: home.php");
      }
      else{
        echo "problem";
      }
?>