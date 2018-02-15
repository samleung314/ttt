<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TicTacToe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="js/jquery-3.2.1.js"></script>
</head>
<body>
    <?php if(!empty($_POST)):?>
        <center><h1>Hello <?php echo $_POST['name'].", "; echo date('F jS Y');?></center>
        <div class="gamecontainer"><script src="js/game.js"></script></div>
    <?php else:?>
        <div class="content">
            
            <div class="formdiv" >
                <h1>TicTacToe Game</h1>
                <form method="post" action="#">
                    <p style="margin-top:70px;"><input type="text" name="name" placeholder="Input Player Name" autocomplete ="off" required></p>
                    <p style="margin-top:20px;"><input style="font-size: 20px; color:white; width:200px; height: 67px;" type="submit" class="play" value="Start the game!"></p>
                </form>
            </div>
        </div>
    <?php endif;?>
</body>
</html>