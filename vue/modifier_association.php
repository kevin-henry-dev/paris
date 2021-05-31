		
		<br><br>
		
		<h1> modifier une association </h1> </br>
                    <form method ="post" action ="">
					
						
					
					
						<label for="idA">identifiant :</label><input type='text' name='idA' id="idA"> </br>
					
					
						
					
							champ à modifier :			
							<SELECT name="champ" size="1">
								<option value ='idA'>idA</option>
								<option value ='libelleA'>libelleA</option>
								<option value ='adresse'>adresse</option>
								<option value ='tel'>tel</option>
								<option value ='codeP'>codeP</option>
								<option value ='dateA'>dateA</option>
							</SELECT><br>
							
						<label for="nouveau">nouveau contenu :</label><input type='text' name='nouveau' id="nouveau"> </br>
						

						
					
					
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="modifier" value ="modifier"><br/>
                    </form>
					</br></br>

<?php
if (isset($_POST['modifier']))
{
	$unControleur->modifierAssociation($_POST['idA'],$_POST['champ'], $_POST['nouveau']);
	
	
}



?>