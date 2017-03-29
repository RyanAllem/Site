<?xml version ="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
              localhost/couverture4g/requete.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Couverture 4G en France</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="requete.css" />
    <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
</head>

<body><header> <h1><a href="index.html" class="hvr-grow">Couverture 4G en France</a></h1>
    <div id='navigation'>
        <a href='ModeleC.html' class='bouton_navig' id='bout1'> Modèle conceptuel</a>
        <a href='Result.html' class='bouton_navig' id='bout2'> Requêtes et analyse des résultats</a>
        <a href='Captage.html' class='bouton_navig' id='bout3'> Est-ce que je capte la 4G?</a></div>
    </header>
     <footer><div id='pied1'><img src='https://ecm.univ-rennes1.fr/nuxeo/site/esupversions/ee444dc5-a97f-44a0-a69a-544d6ff47d4c' height="70"> </div>
             <div id='pied2'><img src='https://istic.univ-rennes1.fr/sites/istic.univ-rennes1.fr/files/logoisticfr_0.png' height="70"></div>
    </footer>
<h2>Résultat de la requete 1 </h2>

 
<p> une sélection avec projection : </p>


// PHP ICI
    
<?php 

// Selection de la base SQL et connexion
	define ("SERVEUR", "localhost") ;
	define ("UTILISATEUR", "root") ;
	define ("MDP", "") ;
	define ("BD", "bdd") ;

// Requete à effectuer
$query = "SELECT `NOM COMMUNE` FROM `commune` WHERE `CODES POSTAUX` = 35000" ;
	
$link =  @mysql_connect(SERVEUR, UTILISATEUR, MDP)
or die ('IMPOSSIBLE DE SE CO BRO : ' .   mysql_error() ) ;
	
mysql_select_db ('bdd', $link)
or die('Impossible de sélectionner la base de données'. mysql_error());
	
$result = mysql_query($query) or die ('echec de la requete bro : ' . mysql_error()) ; 
	
//affichage dans un tableau HTLM 
	
echo " <?xml version = '1.0' encoding = 'UTF-8' > " ; 

echo "<requete><pre> $query </pre></requete>" ; 
	
echo "<table border = '1'> " ;

$line= mysql_fetch_assoc($result) ;

echo "<tr>" ;
	foreach ($line as $col_name=>$col_value) {
		echo "<th>$col_name</th>" ; 
	}
			
echo "</tr>" ;
			
		
do {
		// next ligne de resultat
	echo "<tr>" ;
			
		// pour chaque n_uplet, on remplit ses colonnes
		foreach ($line as $col_name=>$col_value) {
			echo "<td>$col_value</td>";
		}
			
	echo "</tr>" ;
	 			
$line = mysql_fetch_assoc($result) ;
	} while ($line) ; 
	
 echo "<table>" ; 
 
 // on libere et ferme la connexion avec ses commandes simples.
		 mysql_free_result($result);
		 mysql_close($link);
			
?> 

// FIN PHP

</body>
</html>

