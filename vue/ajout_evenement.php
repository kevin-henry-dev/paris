

					
					<h1> Ajouter un événement </h1> </br>
                    <form method ="post" action ="">
					<table>
					<tr>
						<td>
							<label for="lieu">Lieu de l'événement : </label>
						</td>
						
						<td>
							<input type='text' name='lieu' id="lieu"> </br>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="nom">Nom de l'événement : </label>
						</td>
							
						<td>	
							<input type='text' name='libelle' id="nom"> </br>
						</td>	
					</tr>
					
					<tr>
						<td>
							<label for="laDate">Date de l'événement : </label>
						</td>
						
						<td>						
							<input type='date' name='dateEV' id="laDate"> </br>
						</td>	
					</tr>
					
					<tr>
						<td>
							<label for="leSelect">Type d'événement : </label>
						</td>
						
						<td>	
							<SELECT id="leSelect" name="uneTable" size="1" onChange="THEFUNCTION(this.selectedIndex);">
								<option value ='choix'>Choix : </option>
								<option value ='interieur'>Intérieur</option>
								<option value ='exterieur'>Extérieur</option>
							</SELECT>		</br>
						</td>
					</tr>		
					</table>
					
					<div style="display:none;" id="divSuperficie">
						<label for="superficie"> Superficie: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
						<input type='text' name='superficie' id="superficie"> 
					</div>
					
					<div style="display:none;" id="divMeteo">
						<label for="meteo"> Météo: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
						<input type='text' name='meteo' id="meteo">
					</div>
					
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</br></br>
					
					<script src="scripts/select.js"></script>