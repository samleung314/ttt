<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="js/jquery-3.2.1.js"></script>
</head>
<body>
    <?php if(!empty($_POST)):?>
        <center><h1>Hello <?php echo $_POST['name'].","; echo date('l, F jS Y');?></center>
        <div class="gamecontainer"><script src="js/game.js"></script></div>
    <?php else:?>
        <div class="content">
            <h1>Choose a name!</h1>
            <div class="formdiv">
                <form method="post" action="#">
                    <p><span>Name : </span><input type="text" name="name" required></p>
                    <p style="margin-top:30px"><input type="submit" class="play" value="play"></p>
                </form>
            </div>
        </div>
    <?php endif;?>
</body>
</html>