<?php
	include('../../includes/header.php');
?>

<!-- Container Start -->
<div class="container-fluid">
	<section class="row-fluid">
		<div class="span12">
			<h1 class="topHeading center">Let's Create Your Account.</h1>
		</div>
	</section>
</div>
<!-- Contaciner End -->

<!-- Container Start -->
<div class="container-fluid">
	<!-- Row Start -->
	<section class="row-fluid">
		<div class="span12">
			<!-- Sign Up Box Start -->
			<div class="createAccountBox">
				<!-- Form Start -->
				<form>
					<!-- Left Col Start -->
					<div class="leftCol">
						<fieldset>
							<label for="fullName">Full Name</label>
							<input type="text" id="fullName" name="fullName" tabindex="1" class="fullName withIcon" />
						</fieldset>
						<fieldset class="error">
							<label for="emailAddress">Email address</label>
							<input type="text" id="emailAddress" name="emailAddress" tabindex="3" class="email withIcon" />
							<!-- Error Tool Tip Start -->
							<div class="errorTip">
								<p>Please enter a valid email address.</p> 
							</div>
							<span class="arrowError"><!-- Needed for the Error tip --></span>
							<!-- Error Tool Tip End -->
						</fieldset>
					</div>
					<!-- Left Col End -->
					<!-- Right Col Start -->
					<div class="rightCol">
						<fieldset>
							<label for="username">Username</label>
							<input type="text" id="username" name="username" tabindex="2" class="username withIcon" />
						</fieldset>
						<fieldset>
							<label for="password">Password</label>
							<input type="password" id="password" name="password" tabindex="4" class="password withIcon" />
						</fieldset>
					</div>
					<!-- Right Col End -->

					<!-- Left Col Start -->
					<div class="leftCol">						
						<fieldset>
							<label for="promoCode">Promo Code</label>
							<input type="text" id="promoCode" name="promoCode" tabindex="5" />
						</fieldset>
					</div>
					<!-- Left Col End -->
					<!-- Right Col Start -->
					<div class="rightCol">
						<fieldset>
							<label for="areyouhuman">Are you human? <span class="humanSpan">4 + 3 =</span></label>
							<input type="text" id="areyouhuman" class="human" name="areyouhuman" tabindex="6" maxlength="1" />
						</fieldset>
						<!-- <fieldset>
							<p class="termText">
								By clicking 'Sign Up' you're accepting our <a href="/terms" title="terms">terms</a> &amp; <a href="/privacy" title="privacy">privacy</a> documents and confirming that you are over the age of 18 years.
							</p>
						</fieldset> -->
					</div>
					<!-- Right Col End -->

					<div class="clearfix"></div>

					<p class="termText">
						By clicking 'Sign Up' you're accepting our <a href="/terms" title="terms">terms</a> &amp; <a href="/privacy" title="privacy">privacy</a> documents and confirming that you are over the age of 18 years.
					</p>


					<fieldset>
						<input type="submit" id="signUp" name="signUp" tabindex="6" class="greenButton signUp" value="Sign Up" />
					</fieldset>
					<!-- Divide Start -->
					<div class="orBreak">
						<span class="backLine"><!-- Background Line --></span>
						<p>or</p>
					</div>
					<!-- Divide End -->
					<fieldset>
						<a href="" class="orangeButton buttonIcon soundcloud" alt="Sign Up with Sound Cloud">Sign Up with Sound Cloud</a>
						<a href="" class="blueButton buttonIcon facebook" alt="Sign Up with Facebook">Sign Up with Facebook</a>
					</fieldset>					

				</form>
				<!-- Form End -->
			</div>
			<!-- Sign Up Box End -->
		</div>
	</section>
	<!-- Row End -->
</div>
<!-- Contaciner End -->


<?php
	include('../../includes/footer.php');
?>


