<!DOCTYPE html>
<html>
    <head>
        <title>Ajouts Documents | Rappel Materiel</title>

        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Link -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="header">
            <a href="index.php" class="logo">Rappel<span>Mat</span></a>

            <nav class="navbar">
                <a href="index.php" class="active">Acceuil</a>
                <a href="AjoutsMateriels.php">Ajouts Materiels</a>
                <a href="AjoutsDocuments.php">Ajouts documents</a>
                <a href="connecUtil.php" class="btn-box">Connexion</a>
            </nav>
        </header>

      <div class="ajtDoc">
      <center>
        <form method="POST" action="resultatDocument.php">
            <h1>Ajoutez votre documents</h1>
            <input type="text" name="refer_doc" placeholder="Référence du document"/><br>
            Date fin validiter <input type="date" name="date_fin_valid"/><br>
            Date document <input type="date" name="date_doc"/><br>
            <input type="text" name="ref_mat"/>
            <input type="submit" name="valider"/>
        </form>
      </center>
      </div>

        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <!-- <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" alt="logo2"></a> -->
        </footer>

    </body>
</html>