<?php

session_start();

if(isset($_SESSION['id'])){

}

else{
    header("location: authentication.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

<form action="edited.php" method="post">
<label for="name">Name</label>
<input type="text" value="<?php echo  >
<label for="name">Name</label>
<input type="text" value=">

<br>
<label for="password">password</label>
<input type="text" value=">

<br>
<label for="email">Email</label>
<input type="email" value="<?php echo $data['email']; ?>">

<br>
<input type="submit" value="Update" name="edited">


</form>


</body>
</html>