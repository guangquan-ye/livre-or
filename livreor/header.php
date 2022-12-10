<?php include "connect.php" ?>

<header>
    <nav>
        <div class="items">
            <ul>
            <li><a href="index.php">Accueil</a></li>
        <?php if(isset($_SESSION["user"])): ?>
            <li><a href="livre-or.php">Livre d'or</a></li>
            <li><a href="commentaire.php">Commentaire</a></li>
            <li><a href="profil.php">Profil</a></li>
            <form method ="get">
            <div class="deco">
            <li><button type="submit" id ="decobutton" name="deco">Deconnexion</button></li>
            </div> 
            </form>
            
        <?php else: ?>
            <li><a href="livre-or.php">Livre d'or</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="connexion.php">Connexion</a></li>
        <?php endif ?>
            </ul>
        </div>
    </nav>
</header>