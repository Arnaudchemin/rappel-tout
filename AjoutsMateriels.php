<!DOCTYPE html>
<html>
    <head>
        <!-- Titre page -->
        <title>Ajouts Materiels | Rappel Materiel</title>

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
      
        <div class="test">
            <form method="POST" action="resultatMateriel.php" class="t">
                <h1>Ajoutez votre matériel</h1><br>
                Référence matériel : <input type="text" name="refer_mate" placeholder="Référence matériel"/><br><br>
                Nom du matériel : <input type="text" name="nom_mate" placeholder="Nom du matériel"/><br><br>
                <input type="submit" name="valid_mater" value="Enregistrer"/>
            </form>   
        </div>
              
      
    </body>
</html>