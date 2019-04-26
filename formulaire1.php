<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>formulaire1</title>
	<meta name="author" content="David">
	
	<style>
		table {border: 3px solid black; background-color: #15C7E9}
		td {border-right: 3px solid black; border-left: 3px solid black; border-bottom: 3px solid black; border-top: 3px solid black;}
	</style>
</head>
<body>
	<?php
	var_dump($_GET);
	var_dump($_POST);
	 ?>
	<!-- debut page -->
	
	
	


<table >
	<tr>
		<td align="center"><form action="" id="form1">

	<h1><u>Formulaire de renseignement</u></h1>
	<label for="" style="color: steelblue">Nom:</label>
	<input type="text" name="nom" placeholder="maximum 20 caractères">
	<br><br>
	<label for="" style="color: steelblue">Prénom:</label>
	<input type="text" name="prénom" placeholder="maximum 30 caractères" ">
	<br><br>
	<label for="">Votre date de naissance</label>
	<input type="month" name="date naissance">
	<br>
	<h2>Sexe:</h2>
	<input name="sexe" type="radio" value="femme">F
	<input name="sexe" type="radio" value="homme">H
	<br>
<label for="">Adresse email:</label>
<input type="email" name="email">
<br><br>
<label for="">Adresse:</label>
<input type="text" name="adresse">
<br><br>
<label for="">ville:</label>
<input type="text" name="ville">
<br><br>
<label for="">Code postal:</label>
<input type="number">
<br><br>
<input type="submit" value="Envoyer">


</form></td>
		<td align="center" width="50%"><form>
	<h2>Rechercher un véhicule</h2>

	<label for="">Type de véhicule:</label>
	<select name="type de véhicule"  size="1" id="">
		<option value="vide">--Votre choix--</option>
		<option value="voit">Voiture</option>
		<option value="util">Utilitaire</option>
		<option value="moto">Moto</option>
	</select>
	<br><br>
	
<label for="">Marque:</label>
<select name="marque" id="">
	<option value="vide">--Votre choix--</option>
	<option value="Renault">Renault</option>
	<option value="Peugeot">Peugeot</option>
	<option value="Kawasaki">Kawasaki</option>
	<option value="Honda">Honda</option>
</select>
<br><br>
<label for="">Modèle:</label>
<select name="modèle" id="">
	<option value="vide">--Votre choix</option>
	<option value="z750">Z750</option>
	<option value="206">206</option>
	<option value="clio">Clio</option>
	<option value="cb600">CB600</option>
</select>
<br><br>
<label for="">Année:</label>
	
<select name="année" id="">
	<option value="vide">--votre choix--</option>
	<option value="1950">1950</option>
	<option value="1951">1951</option>
	<option value="1952">1952</option>
	<option value="1953">1953</option>
	<option value="1954">1954</option>
	<option value="1955">1955</option>
	<option value="1956">1956</option>
	<option value="1957">1957</option>
	<option value="1958">1958</option>
	<option value="1959">1959</option>
	<option value="1960">1960</option>
	<option value="1961">1961</option>
	<option value="1962">1962</option>
	<option value="1963">1963</option>
	<option value="1964">1964</option>
	<option value="1965">1965</option>
	<option value="1966">1966</option>
	<option value="1967">1967</option>
	<option value="1968">1968</option>
	<option value="1969">1969</option>
	<option value="1970">1970</option>
	<option value="1971">1971</option>
	<option value="1972">1972</option>
	<option value="1973">1973</option>
	<option value="1974">1974</option>
	<option value="1975">1975</option>
	<option value="1976">1976</option>
	<option value="1977">1977</option>
	<option value="1978">1978</option>
	<option value="1979">1979</option>
	<option value="1980">1980</option>
	<option value="1981">1981</option>
	<option value="1982">1982</option>
	<option value="1983">1983</option>
	<option value="1984">1984</option>
	<option value="1985">1985</option>
	<option value="1986">1986</option>
	<option value="1987">1987</option>
	<option value="1988">1988</option>
	<option value="1989">1989</option>
	<option value="1990">1990</option>
	<option value="1991">1991</option>
	<option value="1992">1992</option>
	<option value="1993">1993</option>
	<option value="1994">1994</option>
	<option value="1995">1995</option>
	<option value="1996">1996</option>
	<option value="1997">1997</option>
	<option value="1998">1998</option>
	<option value="1999">1999</option>
	<option value="2000">2000</option>
	<option value="2001">2001</option>
	<option value="2002">2002</option>
	<option value="2003">2003</option>
	<option value="2004">2004</option>
	<option value="2005">2005</option>
	<option value="2006">2006</option>
	<option value="2007">2007</option>
	<option value="2008">2008</option>
	<option value="2009">2009</option>
	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
	<option value="2016">2016</option>
	<option value="2017">2017</option>
	<option value="2018">2018</option>
</select>
<br><br>

<input type="submit" value="envoyer" >
</form></td>
	</tr>
	<tr>
		<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32015.58207294689!2d-0.6736082958168808!3d44.82554936659277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54d9d08af6d333%3A0x1aed2739f8686261!2sCentre+commercial+M%C3%A9rignac+Soleil!5e0!3m2!1sfr!2sfr!4v1548254086789" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
		<td><iframe width="661" height="372" src="https://www.youtube.com/embed/2-5PzIjZac8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
	</tr>
</table>



	<!-- fin page -->
	

</body>
</html>