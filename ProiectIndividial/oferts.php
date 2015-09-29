<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

			<div class ="oferts container">
				<ul class = "featured-oferts col-sm-12">
					<h2>Oferte</h2>

					<?php
						include 'connect.php';

						 $oferte = mysqli_query($db,"
							SELECT * 
							FROM `adauga_oferta`
						");



						$oferte = mysqli_fetch_all($oferte,MYSQLI_ASSOC);
						$class = "three";

						foreach($oferte as $oferta){

							$id_oferta = $oferta['id_oferta'];
							$nume = $oferta['doresc'];
							$short_description = " ";

							$main_image = mysqli_query($db," 
							 	SELECT `name`
								FROM `files` 
								WHERE `id_oferta` = '$id_oferta' LIMIT 0,1

							");
							$main_image = mysqli_fetch_assoc($main_image);
							$main_image = $main_image['name'];

							if ($class == "one")
							{
								$class = "two";
							}
							elseif($class == "two")
							{
								$class = "three";
							}
							elseif($class == "three")
							{
								$class = "one";
							}

							if($oferta['tiploc'] != "None"){
								$nume .= " ".$oferta['tiploc'] ." ".$oferta['destinatie'];
								
								$short_description .= " ".$oferta['tiploc']." ".$oferta['destinatie'].", ".$oferta['compartimentare'].". Detalii Confort:".$oferta['detalii_confort'].". Etaj ".$oferta['etaj'].". Strada: ".$oferta['adresa']." Judet ".$oferta['judet']." Localitate ".$oferta['localitate']." Zona ".$oferta['zona'];
							}
					?>

							<li class = "item1 <?php print $class;  ?> col-sm-4 ">
								<a href="ofert.php?id=<?php print $id_oferta; ?>">
									<div class = "image">
										<img class="img-responsive" src = "images/<?php print $main_image; ?>" alt = "Apartments" title = "Apartments" />
										<h4><?php print $nume; ?></h4>
										<p><?php print $short_description; ?></p>
										<div class = "more">
											<button type="button" title="MORE" class="button btn btn-sm btn-default" onclick="window.location='ofert.php?id=<?php print $id_oferta; ?>';">
											<span>MORE</span>
											</button>
										</div>
									</div>
								</a>
							</li>
					<?php
						}
					?>
				</ul><!--inchide ul class featured-->
			</div>	
		
<?php include 'footer.php'; ?>


