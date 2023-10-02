<!DOCTYPE html>
<html>
    <head>
        <title>Ajouts Materiels | Rappel Materiel</title>

        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Link -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="header">
            <a href="index.html" class="logo">RappelMat</a>

            <nav class="navbar">
                <a href="index.php" class="active">Acceuil</a>
                <a href="ajoutsMateriel.php">Ajouts Materiels</a>
                <a href="ajoutDocument.php">Ajouts documents</a>
            </nav>
        </header>
      
      <div class="t">
      <center>
        <form method="POST" action="resultatMateriel.php">
          <h1>Ajoutez votre matériel</h1><br>
          Référence matériel : <input type="text" name="refer_mate" placeholder="Référence matériel"/><br><br>
          Nom du matériel : <input type="text" name="nom_mate" placeholder="Nom du matériel"/><br><br>
          <input type="submit" name="valid_mater" value="Enregistrer"/>
        </form>
      </center>
      </div>
      
    </body>
</html>