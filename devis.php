<center>

<br><br><br>

<?php
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

?>
<br><br><br>
<a href = "essaie2.php" onclick = "essaie(); return false;">Enregistrez sous format PDF</a>


</center>

