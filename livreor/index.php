<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <title>Moduleconnexion</title>

</head>
<body>
    <header>  
        <?php include "header.php" ?>
    </header>

    <div class="main">
        
        <?php if(isset($_SESSION["user"])): ?>
            <div class="msg"><h2>Bienvenue <?php echo $_SESSION["user"]?> dans le Livre d'or<h2></div>
        <?php else: ?>
            <h1>Livre d'or</h1>
        <?php endif ?>
    </div>
        
    <footer>
        <?php include "footer.php" ?>
    </footer>
     
</body>
</html>