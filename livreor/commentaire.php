<?php

include "connect.php" ;

$requestuser = 'SELECT utilisateurs.login, commentaires.date, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC';
$request=$mysqli->query($requestuser);
$result=$request->fetch_all();

if(isset ($_POST["commenter"]) && !empty($_POST["comment"])){
    $id=$_SESSION["userID"];
    $comment=$_POST["comment"];
    $comment=mysqli_real_escape_string($mysqli, $comment);
    $date=date("d-m-Y H:i:s");
    $request = "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$comment', $id, NOW())";
    $result = $mysqli->query($request);
    header('Location: '. "commentaire.php"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
</head>
<body>
    <header>
    <?php include "header.php" ?>
    </header>
<div class="maincomment">
        <div class="comment">
            <div class="msg"><h1><?php echo "Bonjour " . $_SESSION["user"] ?><h1></div>
            <br>
            <form method ="post">
            <textarea id="comment" name="comment" rows="5" cols="30" placeholder="Laissez un commentaire..."></textarea>
            <br>
            <button id="button" type="submit" name="commenter">Commenter</button>
            <br>
            </form>
        </div>
    <section>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Login</th>
                        <th>Date</th>
                        <th>Commentaire</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <?php
                        for ($i=0 ; isset($result[$i]) ; $i++){
                            echo "<tr>" ;
                            for($j=0 ; isset($result[$i][$j]) ; $j++){
                                echo  "<td>" . ($result[$i][$j]) . "</td>" ;
                            }
                            echo "</tr>" ;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>   
</div>    
    
</body>
</html>