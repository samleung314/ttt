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

  <p id="state"> Welcome! </p>

  <div class="formContainer">
    <?php if (empty($_POST["name"])) { ?>
    <form action="./" method="post">

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Name" name="name" value="Sam">
      </div>

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Password" name="password" value="123">
      </div>

      <div class="col-auto">
        <input type="text" class="form-control mb-2" placeholder="Email" name="email" value="samson.leung@stonybrook.edu">
      </div>

      <div class="col-auto">
        <button id="submitBtn" onclick="submit()" type="submit" class="btn btn-primary mb-2"> Submit</button>
        <button id="signupBtn" onclick="submit()" type="submit" class="btn btn-primary mb-2"> Sign Up</button>
      </div>
    </form>
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
