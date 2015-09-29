<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

			<div class = "contact container">
				<div class = "info-company container-fluid">
					<div class = "table-info col-sm-12">
						<h3>Contact Info:</h3>
						<p>Suntem Perfect Rent, compania imobiliara cu cea mai mare ascensiune in ultimii ani de pe piata de profil din Cluj-Napoca. Dinamica sectorului in care activam ne-a obligat sa fim proactivi si multidimensionali, drept urmare am fost mereu inaintea trendului si suntem convinsi ca vom perpetua acest lucru si in viitor.</p>
						<table class = "col-sm-5">
							<h3>Informatii contact:</h3>
							<tr>
								<td>Adresa: </td>
								<td>Eroilor 21 Floresti, Cluj 407280</td>
							</tr>
							<tr>
								<td>Telefon mobil: </td>
								<td>(0756) 678 456</td>
							</tr>
							<tr>
								<td>Telefon fix: </td>
								<td>(0364) 439 167</td>
							</tr>
							<tr>
								<td>Orar: </td>
								<td>Luni-vineri 9:00-19:00.<br> Sambata 9:00-14:00</td>
							</tr>
							<tr>
								<td>Email: </td>
								<td>perfect@rent.ro</td>
							</tr>
						</table>
						<table class = "col-sm-5">
							<tr>
								<td>Date firma: </td>
								<td>S.C. PerfectRent S.R.L.</td>
							</tr>
							<tr>
								<td>Nr. ORC: </td>
								<td>J12/210/2013 </td>
							</tr>
							<tr>
								<td>CIF: </td>
								<td>RO31138322</td>
							</tr>
							<tr>
								<td>Capital social:</td>
								<td>10.000 Lei</td>
							</tr>
							<tr>
								<td>Cod IBAN: </td>
								<td>RO53BTRLRONCRT0201703801</td>
							</tr>
						</table>
					</div>
					<div class="container">
						<div class="row">
					      <div class="col-sm-9 ">
					          <form class="form-horizontal" action="form-to-email.php" method="POST" enctype="multipart/form-data">
					          <fieldset>
					            <legend class="text-center">Contact us</legend>
					    
					            <!-- Name input-->
					            <div class="form-group">
					              <label class="col-sm-3 control-label" for="name">Name</label>
					              <div class="col-sm-9">
					                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
					              </div>
					            </div>
					    
					            <!-- Email input-->
					            <div class="form-group">
					              <label class="col-sm-3 control-label" for="email">Your E-mail</label>
					              <div class="col-sm-9">
					                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
					              </div>
					            </div>
					    
					            <!-- Message body -->
					            <div class="form-group">
					              <label class="col-sm-3 control-label" for="message">Your message</label>
					              <div class="col-sm-9">
					                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
					              </div>
					            </div>
					    
					            <!-- Form actions -->
					            <div class="form-group">
					              <div class="submit col-sm-12 text-right">
					                <button type="submit" class="btn btn-lg">Submit</button>
					              </div>
					            </div>
					          </fieldset>
					          </form>
					        </div>
						</div>
					</div>
					<div id="map container col-sm-12">
						<h3>Contact</h3>
						<div id="embedded-map-canvas" style="height:400px;width:1200px;max-width:100%;">
							<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Strada+Eroilor+21,+Florești,+Cluj+407280,+România&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
							</iframe>
						</div>
						<a class="google-map-html" href="https://www.bootstrapskins.com" id="authorize-map-data"></a>
					</div>
				</div>
			</div>
		
<?php include 'footer.php'; ?>