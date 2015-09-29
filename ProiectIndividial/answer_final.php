				<?php include 'head.php'; ?>
				<?php include 'header.php'; ?>

				<?php
					if(!isset($_SESSION['user_email'])){
						header("location: profile.php"); //daca logat, nu mai are acces la pagina de login
					}
				?>

				<?php
					include 'connect.php';
					$email = $_SESSION['user_email'];

					$id_client = mysqli_query($db,"
						SELECT id 
						FROM clienti 
						WHERE email = '$email'");

					$id_client = mysqli_fetch_assoc($id_client);
					$id_client = $id_client['id'];

				?>
				<div class ="answer_final container ">
					<div class="container-fluid col-sm-12">
						<h3>Multumim! </h3>
						<p>Oferta dumneavoastra a fost inregistrata cu success in baza noastra de date.</p>
						<p>In cel mai scurt timp veti fi contactat de unul dintre consilierii nostri pentru mai multe informatii.
						</p>
					</div>

					<?php
					$doresc = $_POST['doresc'];
					$vanzator = $_POST['vanzator'];
					$adresa = $_POST['adresa'];
				    $judet = $_POST['judet'];
				    $localitate = $_POST['localitate'];
				    $zona = $_POST['zona'];				

				    $tiploc = $_POST['tiploc'];
				    $destinatie = $_POST['destinatie'];
				    $compartimentare = $_POST['compartimentare'];
				    $confort = $_POST['confort'];
				    $etaj = $_POST['etaj'];
				    $suputila = $_POST['suputila'];

				    $finisaje = $_POST['finisaje'];
				    $observatii = $_POST['observatii'];

				    $camere = $_POST['camere'];
				    $bai = $_POST['bai'];
				    $garaje = $_POST['garaje'];
				    $balcoane = $_POST['balcoane'];
				    $bucatarii = $_POST['bucatarii'];

				    $pret = $_POST['pret'];
				    $detalii_confort = $_POST['detalii_confort'];
				    $telefon = $_POST['telefon'];

				    $query = "
				    		INSERT INTO `adauga_oferta`(`id_client`, `doresc`,`vanzator`, `adresa`, `judet`, `localitate`, `zona`, `tiploc`, `destinatie`, `compartimentare`, `detalii_confort`, `etaj`, `suputila`, `finisaje`, `observatii`, `camere`, `bai`, `garaje`, `balcoane`, `bucatarii`, `pret`, `confort`, `telefon`)
				    		VALUES ('$id_client','$doresc','$vanzator','$adresa','$judet','$localitate','$zona','$tiploc','$destinatie','$compartimentare','$confort','$etaj','$suputila','$finisaje','$observatii','$camere','$bai','$garaje','$balcoane','$bucatarii','$pret','$detalii_confort','$telefon')
				    ";
				    mysqli_query($db,$query);

				    $id_oferta = mysqli_query($db,"
				    	SELECT id_oferta 
				    	FROM adauga_oferta 
				    	WHERE id_client = '$id_client'
				    	ORDER BY id_client DESC LIMIT 1
				    	");

					$id_oferta = mysqli_fetch_assoc($id_oferta);
					$id_oferta = $id_oferta["id_oferta"];

					if (isset($_POST['filePhoto']))
						$imagini_array = explode(",",$_POST['filePhoto']);
						array_pop($imagini_array);
						{
							foreach($imagini_array as $nume)
							{
								mysqli_query($db,"
								INSERT INTO files (id_oferta, name) 
								VALUES ('$id_oferta', '$nume' )
								");							
							}
						}
							
				    ?>
				</div>


<?php mysqli_close($db); ?>
<?php include 'footer.php'; ?>