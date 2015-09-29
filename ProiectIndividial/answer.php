<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<?php
	if(!isset($_SESSION['user_email']))
	{
		header("location: profile.php"); //daca logat, nu mai are acces la pagina de login
	}
?>

<?php
	include 'connect.php';
	$email = $_SESSION['user_email'];

	$id_client = mysqli_query($db,"SELECT id FROM clienti WHERE email = '$email'");
	$id_client = mysqli_fetch_assoc($id_client);

?>

		<div class ="answer container container-fluid">
			<ol class="col-sm-12">
				<h3>Datele completate de dumnevoastra:</h3>
				<div class = "col-sm-6">
					<li>
						<div>Doresc sa:</div>
						<?php
							if (isset($_POST['doresc']))
							{
								print $_POST['doresc'];
							}
							else 
							{
								print "Nu ati selectat nimic! ";
							}
						?>
					</li>
					<li>
						<div>Oferit de:</div>
						<?php
							if ((isset($_POST['proprietar'])) || (isset($_POST['agentie'])))
							{
								print  "<br>Proprietar: ".$_POST['proprietar'];
						 		print  "<br>Agentie imobiliara: ".$_POST['agentie']; 
							}
							else 
							{
								print "Nu ati selectat nimic! ";
							}
						?>
					</li>
					<li>
						<div>Localizat in:</div>
						<?php
							if ((isset($_POST['adresa'])) || (isset($_POST['judet'])) || (isset($_POST['localitate'])) || (isset($_POST['zona'])))
							{
								print  "<br>Adresa: ".$_POST['adresa'];
						 		print  "<br>Judet: ".$_POST['judet']; 
								print  "<br>Localitate: ".$_POST['localitate']; 
								print  "<br>Zona: ".$_POST['zona'];
							}
							else
							{
								print "Nu ati completat nimic! ";
							}
						?>
					</li>
					<li>
						<div>Caracteristici locuinta:</div>
						<?php
							if ((isset($_POST['tiploc'])) || (isset($_POST['destinatie'])) || (isset($_POST['compartimentare'])) || (isset($_POST['confort'])) || (isset($_POST['etaj'])) || (isset($_POST['suputila'])))
							{
								print "<br> Tip locuinta: ".$_POST['tiploc'];
								print "<br> Destinatie: ".$_POST['destinatie'];
								print "<br> Compartimentare: ".$_POST['compartimentare'];
								print "<br> Confort: ".$_POST['confort'];
								print "<br> Etaj: ".$_POST['etaj'];
								print "<br> Suprafata utila: ".$_POST['suputila'];
							}
							else 
							{
								print "Nu ati selectat nimic! ";
							}
						?>
					</li>
					<li><div>Alte detalii despre imobil:</div>
						<?php
							if (isset($_POST['finisaje']))
							{
								print $_POST['finisaje'];
							}
							else 
							{
								print "Nu ati completat nimic! ";
							}
						?>
					</li>
				</div>
				<div class="col-sm-6">
					<li>
						<div>Cacacteristici imobil:</div>
						<?php
							if ((isset($_POST['camere'])) || (isset($_POST['bai'])) || (isset($_POST['garaje'])) || (isset($_POST['balcoane'])) || (isset($_POST['bucatarii'])))
							{
								print "<br> Nr camere: ".$_POST['camere'];
								print "<br> Nr bai: ".$_POST['bai'];
								print "<br> Nr garaje: ".$_POST['garaje'];
								print "<br> Nr balcoane: ".$_POST['balcoane'];
								print "<br> Nr bucatarii: ".$_POST['bucatarii'];
							}
							else {
								print "Nu ati selectat nimic! ";
							}
						?>
					</li>
					<li>
						<div>Pret:</div>
						<?php
							if (isset($_POST['pret']))
							{
								print $_POST['pret'];
							}
						?>
					</li>
					<li>
						<div>Detalii confort:</div>
						<?php
							if (isset($_POST['detalii_confort']))
							{
								print $_POST['detalii_confort'];
							}
						?>
					</li>
					<li>
						<div>Alte observatii:</div>
						<?php
							if (isset($_POST['observatii']))
							{
								print $_POST['observatii'];
							}
						?>
					</li>
					<li>
						<div>Date de contact:</div>
						<?php
							if (isset($_POST['telefon']))
							{
								print "<br> Numar de telefon: ".$_POST['telefon'];
							}
						?>
					</li>
					<li>
						<div>Imagini: </div>
						<?php
							if (isset($_FILES['filePhoto']['name']))
							{
								$imagini="";

								$uploads_dir = 'images';

								foreach ($_FILES["filePhoto"]["error"] as $key => $error) 
								{
								    if ($error == UPLOAD_ERR_OK) 
								    {
								        $tmp_name = $_FILES["filePhoto"]["tmp_name"][$key];
								        $name = $_FILES["filePhoto"]["name"][$key];
								        $imagini .= $name.",";
								        print "$name; <br>";
								        move_uploaded_file($tmp_name, "$uploads_dir/$name");
								    }
								}
							}
							
						?>

					</li>
				</div>
			</ol>
			<div class = "button ">
				<button class = "btn btn-default btn-md" onclick="goBack()">Go Back</button>
				<form method = "POST" action = "answer_final.php">
					<input type="hidden" name="doresc" value="<?php print $_POST['doresc']; ?>">
					<input type="hidden" name="vanzator" value="<?php print $_POST['vanzator']; ?>">
					<input type="hidden" name="adresa" value="<?php print $_POST['adresa']; ?>">
					<input type="hidden" name="judet" value="<?php print $_POST['judet']; ?>">
					<input type="hidden" name="localitate" value="<?php print $_POST['localitate']; ?>">
					<input type="hidden" name="zona" value="<?php print $_POST['zona']; ?>">
					<input type="hidden" name="tiploc" value="<?php print $_POST['tiploc']; ?>">
					<input type="hidden" name="destinatie" value="<?php print $_POST['destinatie']; ?>">
					<input type="hidden" name="compartimentare" value="<?php print $_POST['compartimentare']; ?>">
					<input type="hidden" name="confort" value="<?php print $_POST['confort']; ?>">
					<input type="hidden" name="etaj" value="<?php print $_POST['etaj']; ?>">
					<input type="hidden" name="suputila" value="<?php print $_POST['suputila']; ?>">
					<input type="hidden" name="finisaje" value="<?php print $_POST['finisaje']; ?>">
					<input type="hidden" name="observatii" value="<?php print $_POST['observatii']; ?>">
					<input type="hidden" name="camere" value="<?php print $_POST['camere']; ?>">
					<input type="hidden" name="bai" value="<?php print $_POST['bai']; ?>">
					<input type="hidden" name="garaje" value="<?php print $_POST['garaje']; ?>">
					<input type="hidden" name="balcoane" value="<?php print $_POST['balcoane']; ?>">
					<input type="hidden" name="bucatarii" value="<?php print $_POST['bucatarii']; ?>">
					<input type="hidden" name="pret" value="<?php print $_POST['pret']; ?>">
					<input type="hidden" name="detalii_confort" value="<?php print $_POST['detalii_confort']; ?>">
					<input type="hidden" name="telefon" value="<?php print $_POST['telefon']; ?>">
					<input type="hidden" name="filePhoto" value="<?php print $imagini; ?>">

					<button class = "btn btn-default btn-md" type ="submit" >Adauga Oferta</button>
				</form>
			</div>

		</div>

<?php mysqli_close($db); ?>
<?php include 'footer.php'; ?>