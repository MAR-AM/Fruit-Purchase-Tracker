<?php 
    session_start();

    if (!isset($_SESSION['info'])) {
        $_SESSION['info'] = ['pommes' => 0, 'poires' => 0, 'bananes' => 0];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ajoutPomme'])) {
            $_SESSION['info']['pommes']++;
        } elseif (isset($_POST['suppPomme'])) {
            $_SESSION['info']['pommes'] = 0;
        }

        if (isset($_POST['ajoutPoire'])) {
            $_SESSION['info']['poires']++;
        } elseif (isset($_POST['suppPoire'])) {
            $_SESSION['info']['poires'] = 0;
        }

        if (isset($_POST['ajoutBanane'])) {
            $_SESSION['info']['bananes']++;
        } elseif (isset($_POST['suppBanane'])) {
            $_SESSION['info']['bananes'] = 0;
        }
    }

    $info = $_SESSION['info'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
         <label for="pomme">Nb Pommes : <?php echo $info['pommes']; ?></label>
         <br>
         <button type="submit" name="ajoutPomme">Acheter une pomme</button>
         <button type="submit" name="suppPomme">RAZ</button><br><br>

         <label for="poire">Nb Poires : <?php echo $info['poires']; ?></label>
         <br>
         <button type="submit" name="ajoutPoire">Acheter une pomme</button>
         <button type="submit" name="suppPoire">RAZ</button><br><br>

         <label for="banane">Nb Bananes : <?php echo $info['bananes']; ?></label>
         <br>
         <button type="submit" name="ajoutBanane">Acheter une pomme</button>
         <button type="submit" name="suppBanane">RAZ</button>
    </form><br><br>

    <a href="detruire.php"> Detruire la session </a>
        
  
</body>
</html>
