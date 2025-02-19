<?php
if($_SERVER['REQUEST_METHOD']="POST"&&isset($_FILES['profile'] )&&isset($_POST['submit']))
{
  $id=$_SESSION['id'];
  $dir = '../uploads/profile/';
  $imgname=basename($_FILES['profileimg']['name']);
  $extimg = pathinfo($_FILES['profileimg']['name'], PATHINFO_EXTENSION);
   $uniquename   = uniqid("profile_", true).".". $extimg;
   $uploadtodir = $dir.$uniquename;
   if(move_uploaded_file($_FILES['profileimg']['tmp_name'],$uploadtodir));
 {
  echo'<script> 
  function fun(){'.
  
  '$sql= "insert into users (image) values ($uploadtodir)";
  $result=mysqli_query ($conn,$sql); 
  if($result)
  {'.
  '$sql= select image from users where username = '.'$username'";
 }
     </script>'
    
  }
}
}
?>