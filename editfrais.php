<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<title>JUNIOR - ADMINISTRATION</title>
<link href="style.css" rel="stylesheet" media="all" type="text/css"> 
</head>

<body>
<div class="navbar">
	<span class="titre-navbar">
		<a href="home.php">JUNIOR - ADMINISTRATION</a>
	</span>
	<span class="link-navbar"><a  href="home.php">CONVENTIONS</a></span>
	<span class="link-navbar"><a  href="home.php">ETUDIANTS</a></span>
	<span class="link-navbar"><a  class="active" href="frais.php">FRAIS</a></span>
	<span class="link-navbar"><a  href="home.php">FACTURATION</a></span>
	<span class="link-navbar"><a  href="indemnisation.php">INDEMNISATION</a></span>
	<span class="link-navbar"><a  href="welcome.php">QUITTER</a></span>
</div>

<div class="content">
	<div class="cadre cadre-center">
		<h2>EDITER UN FRAIS</h2><br/>
		<form action="AJOUTERFRAIS" method="post">
			<table>
				<tr class="ligne">
					<td width=55%>Num. Etudiant : </td><td><input class="textinput" name="NUMETU" type="text" /></td>
				</tr>
				<tr class="ligne">
					<td>Num. Convention : </td><td><input class="textinput" name="NUMCONV" type="text" /></td>
				</tr>
				<tr class="ligne">
					<td>Type de frais : </td><td><input class="textinput" name="TYPEFRAIS" type="text" /></td>
				</tr>
				<tr class="ligne">
					<td>Date : </td><td><input class="textinput" name="TYPEFRAIS" type="text" /></td>
				</tr>
				<tr class="ligne">
					<td>Montant : </td><td><input class="textinput" name="MONTANTFRAIS" type="text" /></td>
				</tr>
				<tr class="ligne"></tr>
				<tr class="ligne">
					<td></td><td><input class="btn btntick" type="submit" name="add" value=""/></td>
				</tr>
			</table>
		</form>
	</div>
</div>
		