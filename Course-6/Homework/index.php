<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

		<!--begin middle-->
		<div class = "middle">
			<div class = "survey">
				<h2>Custumer Survey</h2>
				<form name = "survey_form" method = "POST" action = "answer.php">
					<div class = "name_email">
						<div class = "name">
							<label for = "name"> Name(optional) </label>
							<br>
							<input type = "Text" Name = "name" placeholder = "Name(optional)">
						</div>
						<div class = "email">
							<label for = "email">Email(optional)</label>
							<br>
							<input type = "email" Name = "email" placeholder = "Email address">
						</div>
					</div>
					<div class = "row2">
						<div class = "bought">
							<span>I BOUGHT...<span class = "blue">&#42;</span></span>
							<div>
								<input type = "checkbox" name = "bought[]" value = "Brakefast food">Brakefast food</input>
							</div>
							<div>
								<input type = "checkbox" name = "bought[]" value = "Baked Goods">Baked Goods</input>
							</div>
							<div>
								<input type = "checkbox" name = "bought[]" value = "Cake/Cupcakes">Cake/Cupcakes</input>
							</div>
							<div>
								<input type = "checkbox" name = "bought[]" value = "Beverage">Beverage</input>
							</div>
							<div><br></div>
						</div>
						<div class = "tasted">
							<span>I TASTED...<span class = "blue">&#42;</span></span>
							<div>
								<input type = "radio" name = "tasted" value = "Exellent">Exellent</input>
							</div>
							<div>
								<input type = "radio" name = "tasted" value = "Good">Good</input>
							</div>
							<div>
								<input type = "radio" name = "tasted" value = "Neutral">Neutral</input>
							</div>
							<div>
								<input type = "radio" name = "tasted" value = "Bad">Bad</input>
							</div>
							<div>
								<input type = "radio" name = "tasted" value = "Horrible">Horrible</input>
							</div>
						</div>
						<div class = "style">
							<span>The STYLE was...<span class = "blue">&#42;</span></span>
							<div>
								<input type = "radio" name = "style" value = "Exellent">Exellent</input>
							</div>
							<div>
								<input type = "radio" name = "style" value = "Good">Good</input>
							</div>
							<div>
								<input type = "radio" name = "style" value = "Neutral">Neutral</input>
							</div>
							<div>
								<input type = "radio" name = "style" value = "Bad">Bad</input>
							</div>
							<div>
								<input type = "radio" name = "style" value = "Horrible">Horrible</input>
							</div>
						</div>
					</div>
					<div class = "satisfied">How satisfied you with...<span class = "blue">&#42;</span></div>
						<table>
							<tr class = "row1">
								<td class ="empty"><br></td>
								<td>Very satisfied</td>
								<td>Satisfied</td>
								<td>Neutral</td>
								<td>Unsatisfied</td>
								<td>Very unsatisfied</td>
							</tr>
							<tr>
								<td>The purchase you made</td>
								<td>
									<input type = "radio" name = "purchase" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "purchase" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "purchase" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "purchase" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "purchase" value = "Very unsatisfied"></input>
								</td>
							</tr>
							<tr>
								<td>The service you recieved</td>
								<td>
									<input type = "radio" name = "service" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "service" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "service" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "service" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "service" value = "Very unsatisfied"></input>
								</td>
							</tr>
							<tr>
								<td>Our company overall</td>
								<td>
									<input type = "radio" name = "company" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "company" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "company" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "company" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "company" value = "Very unsatisfied"></input>
								</td>
							</tr>
						</table>
						<div class = "satisfied">How likely are you to...<span class = "blue">&#42;</span></div>
						<table>
							<tr class = "row1">
								<td class ="empty"></td>
								<td>Very satisfied</td>
								<td>Satisfied</td>
								<td>Neutral</td>
								<td>Unsatisfied</td>
								<td>Very unsatisfied</td>
							</tr>
							<tr>
								<td>Buy from us again</td>
								<td>
									<input type = "radio" name = "buyagain" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "buyagain" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "buyagain" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "buyagain" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "buyagain" value = "Very unsatisfied"></input>
								</td>
							</tr>
							<tr>
								<td>Recommend our products to others</td>
								<td>
									<input type = "radio" name = "products" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "products" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "products" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "products" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "products" value = "Very unsatisfied"></input>
								</td>
							</tr>
							<tr>
								<td>Recommend our shop to others</td>
								<td>
									<input type = "radio" name = "shop" value = "Very satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "shop" value = "Satisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "shop" value = "Neutral"></input>
								</td>
								<td>
									<input type = "radio" name = "shop" value = "Unsatisfied"></input>
								</td>
								<td>
									<input type = "radio" name = "shop" value = "Very unsatisfied"></input>
								</td>
							</tr>
						</table>
						<div class = "submit two">
							<input type = "Submit" class = "btn" Name = "Submit" value = "Sent Survey">
						</div>					
				</form>
			</div>
		</div>
		<!--end middle-->
		
<?php include 'footer.php'; ?>