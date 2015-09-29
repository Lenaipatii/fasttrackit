<?php include 'head.php'; ?>
<?php include 'header.php'; ?>


<?php
	include 'connect.php';

	$id_oferta = $_GET['id'];
	
	$oferta = mysqli_query($db,"
		SELECT * 
		FROM  `adauga_oferta`
		WHERE `id_oferta` = '$id_oferta'
	");

	$oferta = mysqli_fetch_assoc($oferta);
	
	$nume = " ";
	$nume.= " ".$oferta['doresc']." ".$oferta['tiploc']." ".$oferta['destinatie'];

	$vanzator = "";
	$vanzator.=" ".$oferta['vanzator']; 

	$telefon = " ";
	$telefon.=" ".$oferta['telefon']; 

	$pret = " ";
	$pret.=" ".$oferta['pret'];

	$sup_pret = " ";
	$sup_pret.= $oferta['pret'] / $oferta ['suputila'];

	$finisaje = " ";
	$observatii = " ";
	$finisaje.= " ".$oferta['finisaje'];
	$observatii.= " ".$oferta['observatii'];

	$suputila = " ";
	$suputila.= " ".$oferta ['suputila'];

	$camere = " ";
	$camere.= " ".$oferta ['camere'];

	$bai = " ";
	$bai.= " ".$oferta ['bai'];

	$garaje = " ";
	$garaje.= " ".$oferta ['garaje'];

	$balcoane = " ";
	$balcoane.= " ".$oferta ['balcoane'];

	$bucatarii = " ";
	$bucatarii.= " ".$oferta ['bucatarii'];

	$etaj = " ";
	$etaj = " ".$oferta['etaj'];

	$adresa = " ";
	$adresa = " ".$oferta['adresa'];

	$judet = " ";
	$judet = " ".$oferta['judet'];

	$zona = " ";
	$zona = " ".$oferta['zona'];

	$tiploc = " ";
	$tiploc = " ".$oferta['tiploc'];

	$destinatie = " ";
	$destinatie = " ".$oferta['destinatie'];

	$compartimentare = " ";
	$compartimentare = " ".$oferta['compartimentare'];

	$confort = " ";
	$confort = " ".$oferta['confort'];

	
	$images = mysqli_query($db," 
		SELECT name
		FROM `files` 
		WHERE `id_oferta` = '$id_oferta'
		");

		$images = mysqli_fetch_all($images,MYSQLI_ASSOC);

?>

			<div class = "info-one-ofert container">
				<div class = "imageofert col-sm-12">
					<h3><?php print "$nume !"; ?></h3>
				</div>
				<div class = "description col-sm-12">
					<table class = "col-sm-5">
						<tr>
							<td>Oferit de: </td>
							<td><?php print $vanzator; ?></td>
						</tr>
						<tr>
							<td>Nr telefon: </td>
							<td><?php print $telefon; ?></td>
						</tr>
					</table>
					<table class = "col-sm-5">
						<tr>
							<td>Pret imobil:</td>
							<td><?php print $pret; ?></span></td>
						</tr>
						<tr>
							<td>Pret imobil/mp:</td>
							<td><?php $sup_pret; ?>
						</tr>
					</table>
				</div>
				<div class="paragraf col-sm-12">				
					<p><?php print $finisaje; ?></p>
					<p><?php print $observatii; ?></p>

				</div>		
				<div class = "caractOferta col-sm-12">
					<h4>Caracteristici</h4> 
					<table class= "col-sm-5">
						<tr>
							<td>Suprafata utila</td>
							<td><?php print $suputila; ?></td>
						</tr>
						<tr>
							<td>Nr camere</td>
							<td><?php print $camere; ?></td>
						</tr>
						<tr>
							<td>Nr balcoane</td>
							<td><?php print $balcoane; ?></td>
						</tr>
						<tr>
							<td>Nr garaje</td>
							<td><?php print $garaje; ?></td>
						</tr>
						<tr>
							<td>Nr bucatarii</td>
							<td><?php print $bucatarii; ?></td>
						</tr>
						<tr>
							<td>Nr bai</td>
							<td><?php print $bai; ?></td>
						</tr>
						<tr>
							<td>Etaj</td>
							<td><?php print $etaj; ?></td>
						</tr>
					</table>
					<!---al doilea table-->
					<table  class= "col-sm-5">
						<tr>
							<td>Adresa </td>
							<td><?php print $adresa; ?></td>
						</tr>
						<tr>
							<td>Judet</td>
							<td><?php print $judet; ?></td>
						</tr>
						<tr>
							<td>Zona</td>
							<td><?php print $zona; ?></td>
						</tr>
						<tr>
							<td>Caracteristici imobil</td>
							<td><?php print $tiploc; ?></td>
						</tr>
						<tr>
							<td>Destinatie</td>
							<td><?php print $destinatie; ?></td>
						</tr>
						<tr>
							<td>Compartimentare</td>
							<td><?php print $compartimentare; ?></td>
						</tr>
						<tr>
							<td>Confort</td>
							<td><?php print $confort; ?></td>
						</tr>
					</table>
				</div>
				<div class = "moredetails col-sm-12">
					<div class  = "finisaje col-sm-4"> 
						<h5>Finisaje</h5> 
						<p><?php print $finisaje; ?></p>
					</div>
					<div class  = "dotari col-sm-4">
						<h5>Dotari</h5> 
						<p><?php print "Bucatarie: $bucatarii, Nr bai: $bai, Nr camere: $camere, Nr balcoane: $balcoane, Nr garaje: $garaje"; ?></p>
					</div>
					<div class  = "zona col-sm-4">
						<h5>Alte detalii</h5> 
						<p><?php print $observatii; ?></p>
					</div>
				</div><!--inchide div class moredetails-->	
				<div class = "picture">
					<?php
						foreach ($images as $image){
					?>
						<img src = "images/<?php print $image["name"]; ?>" class="img-responsive" alt = "Apartment" title = "<?php print $nume; ?>" />
					<?php 
						} 
					?>
				</div>
				<div class = "submit text-right">
					<input type = "Submit" class = "btn" Name = "Submit" value = "Inapoi la Oferte" onclick="window.location='oferts.php';">
				</div>	
			</div><!--inchide div class info-->	
		
<?php include 'footer.php'; ?>
