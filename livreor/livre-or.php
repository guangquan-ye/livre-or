<?php
include "connect.php" ;

$requestuser = 'SELECT utilisateurs.login, commentaires.date, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC';
$request=$mysqli->query($requestuser);
$result=$request->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <title>Livre d'or</title>
</head>
<body>
    <?php include "header.php" ?>

    <div class="maincomment">
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
    
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>