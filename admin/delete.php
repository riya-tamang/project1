<?php
      session_start();
      require_once 'connectcheck.php'
      if(isset($_SESSION['id'])&& isset ($_POST['id']))
      {
       $sql= delete users SET username = '$username', email='$email',PASSWORD='$password' WHERE id='$id';
       mysqli_query($conn,$sql);
       header("location: home.php");
      }
      else{
        echo "problem";
      }
?>