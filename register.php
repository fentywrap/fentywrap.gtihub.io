<?php include "layouts/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sign.css ?php echo time(); ?>">
</head>

<body>
  <img src="images/sign1.gif" class="sig" alt="">

  <div>

    <div class="yash">
      <center>
        Registration form
      </center></br>

    </div>

    <div class="regg">
      <form method="post" action="add_reg.php">
        <div>
          <label for="name">Name:</label>

          <div>
            <input type="text" id="name" placeholder="Enter name" name="name" class="txtt" required>
          </div>
        </div>
        <div>
          <label for="email">Email:</label>

          <div>
            <input type="email" id="email" placeholder="Enter email" name="email" class="txtt" required>
          </div>
        </div>
        <div>
          <label for="pwd">Password:</label>
          <div>
            <input type="password" id="pwd" placeholder="Enter password" name="password" class="txtt" required>
          </div>
        </div>
        <div>
          <label for="number">Number:</label>
          <div>
            <input type="text" id="number" placeholder="Enter number" name="number" class="txtt" required>
          </div>
        </div>
        <div>
          <label for="name">Address:</label>

          <div>
            <textarea id="address" placeholder="Enter Address" name="address" class="txtt" required></textarea>
          </div>
        </div>

        <div>
          <div>
            <button type="submit" class="sss">Sign Up</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</body>

</html>