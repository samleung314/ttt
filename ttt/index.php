<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="cs.js"></script>
  <title>Tic Tac Toe</title>
</head>
<body>

  <?php include ('html/header.html'); ?>

  <p id="state"> Welcome! Let's Play!</p>

  <div class="formContainer">
    <?php if (empty($_POST["name"])) { ?>
    <form action="./" method="post" id="form1">

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Username" name="name" value="Sam" id="username">
      </div>

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Password" name="password" value="123" id="password">
      </div>

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Email" name="email" value="samson.leung@stonybrook.edu" id="email">
      </div>
    </form>

    <div class="col-auto">
      <button id="submitBtn" form="form1" class="btn btn-primary mb-2"> Submit</button>
      <button id="addUserBtn" onclick="addUser()" class="btn btn-primary mb-2"> Add User</button>
    </div>
    <?php } ?>

    <div>
      <?php
      if (!empty($_POST["name"])) {
        echo "Hello " . $_POST["name"]. ", ";
        echo "\n";
        echo date("m/d/Y");
      }
      ?>
    </div>

    <div class="boardContainer">
      <?php
      if (!empty($_POST["name"])) {
        include ('html/board.html');
      }
      ?>
    </div>
  </div>
</body>
</html>
