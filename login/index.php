<?php
	include('../includes/header.php');
?>

<!-- Container Start -->
<div class="container-fluid">
	<!-- Row Start -->
	<section class="row-fluid">
		<div class="span6 offset3">
			<!-- Login Box Start -->
			<div class="loginBox">
				<!-- Form Start -->
				<form>
					<fieldset>
						<label for="email">Your email address or username</label>
						<input type="text" id="email" name="email" tabindex="1" class="email withIcon" />
					</fieldset>
					<fieldset>
						<label for="password">Password</label>
						<input type="password" id="password" name="password" tabindex="2" class="password withIcon" />
					</fieldset>
					<fieldset class="loginHorz">
						<input type="checkbox" id="rememberMe" name="rememberMe" tabindex="3" />
						<label for="rememberMe">Remember Me</label>
					</fieldset>
					<fieldset class="loginHorz right">
						<a href="/login/forgot-details" title="I forgot my password">I forgot my details</a>
					</fieldset>
					<div class="clearfix"></div>
					<fieldset>
						<input type="submit" id="login" name="login" tabindex="4" class="greenButton fullWidth" value="Login" />
					</fieldset>
					<!-- Divide Start -->
					<div class="orBreak">
						<span class="backLine"><!-- Background Line --></span>
						<p>or</p>
					</div>
					<!-- Divide End -->
					<fieldset>
						<a href="" class="blueButton buttonIcon facebook" alt="Login with Facebook">Login with Facebook</a>
					</fieldset>
					<fieldset>
						<a href="" class="orangeButton buttonIcon soundcloud" alt="Login with Sound Cloud">Login with Sound Cloud</a>
					</fieldset>
				</form>
				<!-- Form End -->
			</div>
			<!-- Login Box End -->
		</div>
	</section>
	<!-- Row End -->
</div>
<!-- Contaciner End -->


<?php
	include('../includes/footer.php');
?>


