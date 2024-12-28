<?php
//Variable pour le nom du site
//Variable pour la description
// Tableau pour la liste des utilisateurs
//Tableau associatif des équipements
$totalEquipements = count($equipements);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $nomSite; ?></title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f4f4f4; }
        .alert { color: red; font-weight: bold; }
        .normal { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <!-- Exercice 1 : Affichage du Nom du Site -->
  
<!-- Balise h1 pour le titre du site-->
<!-- Balise p pour la description du site-->

    <!-- Exercice 2 : Liste des Utilisateurs Connectés -->
    <h2>Utilisateurs Connectés</h2>
   <!-- Partie pour la vue des utilisateurs connectés-->


    <!-- Exercice 3 : Top 5 des Équipements les Plus Sollicités -->
    <h2>Top 5 des Équipements les Plus Sollicités</h2>
     <!-- Partie pour la vue des top 5 des équipements-->


    <!-- Exercice 4 : Alerte Réseau -->
    <h2>Alerte Réseau</h2>
     <!-- Partie pour la vue des alertes réseau -->

</body>
</html>
