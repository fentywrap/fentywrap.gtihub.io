<?php include "layouts/header.php"; ?>

<?php
include "config.php";
if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `register` where email = '" . $email . "' and password = '" . $password . "' ";
  $query =  mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['name'] = $row['name'];
    header('Location: home.php');
  } else {
    echo "<script> alert('Invalid Email or Password.'); </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css ?php echo time(); php?>">
</head>

<body>

  <img src="images/login1.gif" class="loog" alt="">

  <div>
    <div class="gg">
      <center>
        Login form
      </center></br>
    </div>
    <div class="for">
      <form method="post" action="">
        <div>
          <label for="email">Email:</label>

          <div>
            <input type="email" id="email" placeholder="Enter email" name="email">
          </div>
        </div>
        <div>
          <label for="pwd">Password:</label>
          <div>
            <input type="password" id="pwd" placeholder="Enter password" name="password">
          </div>
        </div>
        <div>
          <div class="sub">
            <button type="submit" class="sbt">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>