<?php

session_start();

if(isset($_session[user])) {
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./login.css">
  <title>Sign</title>
</head>
<body>
  <div class="form">
    <form action="" method="post">
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="lastName" placeholder="Last name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="password" placeholder="Password">
      <input type="text" name="confirmPassword" placeholder="Confirm password">
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>