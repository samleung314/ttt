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
    <!-- <script src="/var/www/html/ttt/play/node_modules/jquery/src/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="cs.js"></script>
    <title>Tic Tac Toe</title>
  </head>
  <body>

<?php include ('html/header.html'); ?>

<div class="formContainer">
    <form action="./" method="post">

            <div class="col-auto">
              <input type="text" class="form-control mb-2" placeholder="Enter your name" name="name">
            </div>
            <div class="col-auto">
              <button id="submitBtn" onclick="onSubmitClick()" type="submit" class="btn btn-primary mb-2"> Submit</button>
            </div>
    </form>

    <?php
      if ($_POST["name"] != "") {
          echo "Hello " . $_POST["name"]. ", ";
          echo "\n";
          echo date("d/m/Y");
        }
    ?>

    <div class="boardContainer">

          <?php

              if (!empty($_POST["name"])) {
                  include ('html/board.html');
              }
          ?>

    </div>
</div>

<?php include ('html/footer.html'); ?>


</body>
</html>
