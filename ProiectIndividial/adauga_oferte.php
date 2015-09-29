<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>

<?php
	if(!isset($_SESSION['user_email'])){
		header("location: login.php"); //daca logat, nu mai are acces la pagina de login
	}
?>
		<div class = "add container container-fluid">
			<h2>Formular - Adauga oferta</h2>
			<form name = "add_form" id = "add_form" method = "POST" enctype = "multipart/form-data" action = "answer.php" class = "col-sm-12">
				<div class = "left col-sm-6">
					<div  class = "item ">
						<label for = "item"> 1. Doresc sa:</label>
						<p><input type = "checkbox" name = "doresc" value = "Inchiriez">Inchiriez</input></p>
					</div>
					<div  class = "item ">
						<label for = "item"> 2. Oferit de:</label>
						<select class="sel2 form-control" name="vanzator" >
							<option value="proprietar">Proprietar</option>
							<option value="agentie">Agentie Imobiliara</option>
						</select>
					</div>
					<div  class = "adresa ">
						<label for = "item"> 3. Localizat in:</label>
						<p>Adresa: <span class = "blue">&#42;</span></p>
						<input type = "Text" Name = "adresa" class="form-control" placeholder = "Adresa">
						<p>Judet: <span class = "blue">&#42;</span></p>
						<input type = "Text" Name = "judet"class="form-control" placeholder = "Judet">
						<p>Localitate: <span class = "blue">&#42;</span></p>
						<input type = "Text" Name = "localitate" class="form-control" placeholder = "Localitate">
						<p>Zona: <span class = "blue">&#42;</span></p>
						<input type = "Text" Name = "zona" class="form-control" placeholder = "Zona">
					</div>
					<div  class = "item">
						<label for = "item"> 4. Caracteristici locuinta:</label>
						<p>Tip locuinta: <span class = "blue">&#42;</span></p>
						<select class="sel2 form-control" name="tiploc" >
							<option value="None">Tip locuinta</option>
							<option value="Apartament">Apartament</option>
							<option value="Garsoniera">Garsoniera</option>
						</select>
						<p>Destinatie:<span class = "blue">&#42;</span></p>
						<select class ="sel2 form-control" name ="destinatie">
							<option value="None">Destinatie</option>
							<option value="Rezidential">Rezidential</option>
							<option value="Comercial">Comerciale</option>
							<option value="Birouri">Birouri</option>
							<option value="De vacanta">De vacanta</option>
						</select>
						<p>Compartimentare:<span class = "blue">&#42;</span></p>
						<select class ="sel2 form-control" name ="compartimentare" >
							<option value="None">Compartimentare</option>
							<option value="Decomandat">Decomandat</option>
							<option value="Semidecomandat">Semidecomandat</option>
							<option value="Nedecomandat">Nedecomandat</option>
							<option value="Circular">Circular</option>
							<option value="Vagon">Vagon</option>
						</select>
						<p>Confort:<span class = "blue">&#42;</span></p>
						<select class ="sel2 form-control" name ="confort">
							<option value="None">Nu stiu</option>
							<option value="I">I</option>
							<option value="II">II</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
						</select>
						<p>Etaj<span class = "blue">&#42;</span></p>
						<select class ="sel2 form-control" name ="etaj">
							<option value="None">Nu stiu</option>
							<option value="parter">Parter</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
						</select>
						<p>Suprafata utila: <span class = "blue">&#42;</span></p>
							<input type="text" name="suputila"  class="inp3 form-control" value="">&nbsp;mp
					</div>
					<div class  = "finisaje">
						<p><label for = "item"> 5. Finisaje(finisaje interioare, dotari imobil) </label></p>
						<textarea name="finisaje"  class="textarea form-control" placeholder = "Alte detalii despre imobil..."></textarea>				
					</div>
				</div><!--inchide div class "left"-->

				<div class = "right col-sm-6">
					<div class = "caract">
						<div class = "right-left">
							<label for  = "item"><b> 6.Caracteristici imobil:</b></label>
							<div>
								<label for  = "item1">Nr camere:<span class = "blue">&#42;</span></label>
								<select class ="sel3 form-control" name ="camere" >
									<option value="None">Nu stiu</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								</div>
							<div>
								<label for  = "item1">Nr bai:<span class = "blue">&#42;</span></label>
								<select class ="sel3 form-control" name ="bai">
									<option value="None">Nu stiu</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div><label for  = "item1">Nr garaje:<span class = "blue">&#42;</span></label>
								<select class ="sel3 form-control" name ="garaje">
									<option value="None">Nu stiu</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div><!--se inchide div class  "left" din div class caract-->
						<div class = "right">
							<div><label for  = "item1">Nr balcoane:<span class = "blue">&#42;</span></label>
								<select class ="sel3 form-control" name ="balcoane">
									<option value="None">Nu stiu</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div><label for  = "item1">Nr bucatarii:<span class = "blue">&#42;</span></label>
								<select class ="sel3 form-control" name ="bucatarii">
									<option value="None">Nu stiu</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div><!--se inchide div class "right din div class right"-->
					</div><!--inchide div class " caract"-->
					<div class = "pret">
						<label for  = "item"> 7.Pret: </label>
						<p><input type="text" name="pret"  class="inp3 form-control" value="">&nbsp; &#8364;</p>
					</div>
					<div class = "imagini">
						<label for  = "item"> 8. Imagini </label>
						<input type="file" name="filePhoto[]" class="inpfile form-group" multiple>
					</div>
					<div class = "confort">
						<label for  = "item"> 9. Detalii Confort </label>
						<p>
							<select class ="sel2 form-control" name ="detalii_confort" >
								<option value="None">Detalii Confort</option>
								<option value="Mobilat/Utilat">Mobilat/Utilat</option>
								<option value="Nemobilat">Nemobilat</option>
							</select>
						</p>
					</div>
					<div class = "observatii">
						<label for  = "item"> 10. Alte observatii </label>
						<p><textarea class="textarea form-control" name="observatii" placeholder = "Alte observatii despre imobil...."></textarea></p>
					</div>
					<div class = "dateContact">
						<label for  = "item"> 11. Date de contact </label>
						<p>Telefon: <span class = "blue">&#42;</span></p>
						<input type="tel" class="form-control" name="telefon"  class="inp4" placeholder = " Telefon">
					</div>
					<div class = "button">
						<input type = "Submit" class = "btn btn-md btn-default" Name = "Submit" value = "Vezi Oferta">
					</div>
				</div><!--inchide div class "right"--> 

				
			</form>
		</div><!--inchide div class "add -->
				
<?php include 'footer.php'; ?>
	