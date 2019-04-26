<?php 
session_start();
include_once(dirname(__FILE__).'/_dbconfig.php');
mysqli_select_db($connect,$_SESSION['db']);

mysqli_query($connect, "SET lc_messages = 'fr_FR'");
// affiche le résultat en sur-impression
//echo "<script type=\"text/javascript\">$('#greybox').show();$('html').css('overflow', 'hidden');</script>";
					
					$motif='/^select\s/'; // chaine à rechercher : commence par select
//////////////////////$chaineminuscule=strtolower($_POST['sql']);
					$chaineminuscule=$message=str_replace("sql=","",strtolower($_GET['sql']));
					
					if(!preg_match($motif, $chaineminuscule)) {// si ce n'est pas une requête de type select
						
						?>
						

						<table id="tabresult" cellspacing="0" cellpadding="5">
						
						
							<?php 
							if(!$r=mysqli_query($connect, stripslashes($message))){
								$reponse= ("MySQL dit:<br><span class=\"alert alert-danger\"><span class=\"mysqlquote\">".utf8_encode(mysqli_error($connect))."</span></span><br>... C'est grave, tu crois ?");
							} else {
									$reponse=utf8_encode(mysqli_info($connect));
							}
						
							
							if($reponse!='') {
								echo $reponse;
							} else {
								
								while($t=@mysqli_fetch_row($r)){
									$reponses[]=$t;
								}
								
							
								if(isset($reponses) && is_array($reponses)){
										foreach ($reponses as $key => $value) {
										echo '<tr>';
											foreach ($value as $cle => $valeur) {
												echo '<td>'.$valeur.'</td>';
											}
											echo '</tr>';
										}
									
								} else {
										echo "La requête n'a renvoyé aucun message d'erreur...<br>A priori c'est bon !" ;
								}
								
							

							}
								?>
							</table>
													<?php 
					} else { // si c'est un select on affiche le tableau des résultats

					if(!$mysql_result=mysqli_query($connect, stripslashes($message)) ) {
						echo ("MySQL dit:<br><span class=\"alert alert-danger\"><span class=\"mysqlquote\">".utf8_encode(mysqli_error($connect))."</span ></span><br>C'est grave, tu crois ?");
					} else {


					$ligne = mysqli_fetch_field($mysql_result);
					$tab=mysqli_fetch_array($mysql_result,MYSQLI_ASSOC);
					if(is_array($tab)){
						$numcol=count(array_keys($tab)); // car le 0 contient rien
			    		$res=array_keys($tab);
					} else {
						$numcol=null;
					}
				
					?>
					<!-- AFFICHAGE DES RESULTATS -->
				<span id="fontminus" class="btn btn-warning btn-xs" title="Dimunuer la police">-</span> 
				<span title="Augmenter la police" id="fontplus" class="btn btn-primary btn-xs">+</span>
					<table id="tabresult" cellspacing="0" cellpadding="5">
					
					
						<?php
						if($numcol>=1){
							echo '	<tr class="ligneentete">';
							foreach ($res as $val) {
								echo "<th>".$val."</th>";
							}

							echo '</tr>';
						?>
						
						<?php
						}	
							// résultat vide ?
						if($numcol<0 || $numcol==''){
							echo '<tr>
								<td><div class="text-center lead">La requête a retourné un résultat vide</div></td>
							</tr>';
						}
						$ligne=0;
						$mysql_result=mysqli_query($connect, stripslashes($message)) or die ("MySQL dit:<br><span class=\"alert alert-danger\"><span class=\"mysqlquote\">".utf8_encode(mysqli_error($connect))."</span></span>");
						while ($tab2=mysqli_fetch_array($mysql_result)){
							
							echo '<tr>';
							for ($i=0;$i<$numcol;$i++){
								echo "<td class=\"tabresult\"\">".htmlentities($tab2[$i])."</td>";
							}
							echo '</tr>';
							$ligne++;
						}
						echo "</table>";

						
						}
					} // fin si c'est un select

 ?>