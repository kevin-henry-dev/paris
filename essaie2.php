<?php 

    session_start();
	require_once ("controleur/controleur.class.php");
	$unControleur = new Controleur ("localhost", "mairie", "root", "");



$unControleur->setTable("mariage");
$lesLignes = $unControleur->selectALL();
$cpt = 1;

foreach ($lesLignes as $uneLigne)
{
	echo "<table id = 'mariage'>
			<tr>
				<th>Mariage N°".$cpt."</th>
				<th></th>
			</tr>
			<tr>
				<td> Nom du 1er marié(e) :</td>
				<td>".$uneLigne['idP1']."</td>
			</tr>
			
			<tr>
				<td> Nom du 2ème marié(e) : </td>
				<td>".$uneLigne['idP2']."</td>
			</tr>
			
			<tr>
				<td> Date du mariage : </td>
				<td>".$uneLigne['dateMariage']."</td>
			</tr>
			
			
			
			
		";
			echo "</table>";
			$cpt++;
	
}
	
		function edition() {window.open("essaie2.php", "essaie2", options) ; }
	
?>

<script type="text/javascript"> window.print() ; </script>


<a href= "connexion_admin.php?page=9">retour</a>