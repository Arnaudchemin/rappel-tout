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
      
        <div class="fahilme">
            <form method="POST" action="resultatMateriel.php" class="t">
                <h1><u>Ajoutez votre matériel</u></h1><br>
                Référence matériel : <input type="text" name="refer_mate" placeholder="Référence matériel"/><br><br>
                Nom du matériel : <input type="text" name="nom_mate" placeholder="Nom du matériel"/><br><br>
                <input type="submit" name="valid_mater" value="Enregistrer"/><br><br>

                
            </form>  
            
            
        </div>

        <!-- <div class="row">
		  <div class="col">Lorem ipsum gravida vitae tristique a, porttitor sit amet enim.</div>
		  <div class="col">Donec auctor sodales nunc quis tristique. Pellentesque et sollicitudin nisl, sed blandit quam. Quisque tortor enim, blandit id congue eget, sagittis quis ligula. Aenean gravida sagittis ultrices. Duis in erat nec ligula laoreet faucibus.</div>
		</div>-->

        

        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <!-- <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" alt="logo2"></a> -->
        </footer>
              
      
    </body>
</html>