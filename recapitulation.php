<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css" />
    </head>
    <body> 
    		 
     <h3>Votre Candidature:</h3> 
		
	<table>
		<tr>
			<td>Civilité:</td>
			<td><?php echo $_GET["civilité"]." "; ?></td>
		</tr>
		
		<tr>
			<td>Nom:</td>
			<td><?php echo strtoupper($_GET["Nom"]." "); ?></td>
		</tr>
	    
	    <tr>
			<td>Prénom:</td>
			<td><?php echo strtoupper($_GET["Prénom"]." "); ?></td>
		</tr>
	
		<tr>
			<td>Date de Naissance:</td>
			<td><?php echo date('d/m/Y' , strtotime($_GET["Date"])); ?></td>
		</tr>
	
		<tr>
			<td>Numéro de téléphone:</td>
			<td><?php echo $_GET["NumTel"]; ?></td>
		</tr>
	
		<tr>
			<td>Adresse électronique:</td>
			<td><?php echo $_GET["email"]; ?></td>
		</tr>
	
		<tr>
			<td>Niveau PHP:</td>
			<td><?php echo $_GET["Niveau"]; ?></td>
		</tr>

		<tr>
			<td>Frameworks PHP:</td>
			<td><ul>
				<?php foreach( $_GET['Frameworks'] as $unFramework){ 
			         echo "<li>".$unFramework."</li>";
			         }
			          ?></ul></td>
		</tr>
	   
		<tr>
			<td>De Pus:</td>
			<td><?php echo $_GET["le-message"]; ?></td>
		</tr>

	</table>	
	
		</ul></br>
		<a href="saisieCandidature.html">
		<?php
             echo "Retour";            
        ?>				
        
	</body>
</html>	

