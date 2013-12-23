<?php
	include('../../../includes/header-signup.php');
?>

<!-- Container Start -->
<div class="container-fluid">
	<section class="row-fluid">
		<div class="span12">
			<div class="progressBar">
				<div class="col active">
					<span class="backgroundLine first"></span>
					<span class="number">
						<span>1</span>
					</span>
				</div>
				<div class="col active">
					<span class="backgroundLine"></span>
					<span class="number">
						<span>2</span>
					</span>
				</div>
				<div class="col">
					<span class="backgroundLine last"></span>
					<span class="number">
						<span>3</span>
					</span>
				</div>
				<div class="clear"></div>
				<div class="col active">
					<p>Create User</p>
				</div>
				<div class="col active">
					<p>Account Type</p>
				</div>
				<div class="col">
					<p>Complete</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
</div>
<!-- Contaciner End -->

<form action="../payment/" class="accountType">
	<!-- Container Start -->
	<div class="container-fluid">
		<!-- Row Start -->
		<section class="row-fluid">
			<div class="span12">
				<fieldset>
					<div class="textArea">
						<label for="">Choose the currency for your account</label>
						<div class="helpArea">
							<a href="#" class="show" title="">What's This?</a>
							<div class="slidingDiv">
								<span class="arrow"><!-- Top Arrow --></span>
								<p>Our website allows you to receive payments and supply your services to other 
									users. Please select your local currency. If you are outside of Europe and the USA we recommend choosing US Dollars.</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="currencyHold">
						<a href="#" title="GBP" class="currencyBox active">&pound;</a>
						<a href="#" title="Dollars" class="currencyBox">&dollar;</a>
						<a href="#" title="Euros" class="currencyBox">&euro;</a>
					</div>
				</fieldset>
				<fieldset>
					<div class="textArea">
						<label for="">Choose how would you like to pay for your ‘<span class="accountType">Pro Level</span>’ account</label>
						<div class="helpArea">
							<a href="#" class="show" title="">What's This?</a>
							<div class="slidingDiv">
								<span class="arrow"><!-- Top Arrow --></span>
								<p>There is no contract for paying monthly and you can cancel at any time. You can benefit from our annual 
									discount if you pay in advance, the choice is yours.</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="subType left">
						<a href="" title="Monthly" class="subTypelink">
							<p class="top">Monthly</p>
							<p class="totalAmmount">&pound;7.95</p>
							<p class="last">Rolling - No Contract</p>
						</a>
					</div>
					<div class="subType right">
						<a href="" title="Annually" class="subTypelink active">
							<p class="top">Annually</p>
							<p class="totalAmmount">&pound;57.00</p>
							<p class="last">Pay in advance and save 40%</p>
						</a>
					</div>
				</fieldset>
			</div>
		</section>
		<!-- Row End -->
	</div>
	<!-- Contaciner End -->
	<div class="signupBottom">
		<!-- Contaciner Start -->
		<div class="container-fluid">
			<!-- Row Start -->
			<div class="row-fluid">
				<div class="span12">
					<input type="submit" value="Process Payment" class="orangeButton" />
				</div>
			</div>
			<!-- Row End -->
		</div>
		<!-- Contaciner End -->
	</div>
</form>

<?php
	include('../../../includes/footer.php');
?>


