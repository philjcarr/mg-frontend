<?php
	include('../../includes/header.php');
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

					<!-- Forgot Details Question Start -->
					<fieldset>
						<label for="email">What have you forgotten?</label>
						<select tabindex="1" class="forgotDetails">
							<option>-- Please Select --</option>
							<option value="username">I've forgotten my username</option>
							<option value="password">I've forgotten my password</option>
						</select>
					</fieldset>
					<!-- Forgot Details Question End -->

					<!-- Forgot Username Start -->
					<div class="detailInput" id="username">
						<fieldset>
							<label for="forgotUsername">What is your email address?</label>
							<input type="text" id="forgotUsername" name="forgotUsername" tabindex="2" class="email withIcon" />
						</fieldset>
						<div class="clearfix"></div>
						<!-- Divide Start -->
						<div class="orBreak">
							<span class="backLine"><!-- Background Line --></span>
						</div>
						<!-- Divide End -->
						<fieldset>
							<input type="submit" id="Submit" name="submit" tabindex="3" class="greenButton fullWidth" value="Show Me My Username" />
						</fieldset>
					</div>
					<!-- Forgot Username End -->

					<!-- Forgot Passowrd Start -->
					<div class="detailInput" id="password">
						<fieldset>
							<label for="forgotPassword">What is your email address or username?</label>
							<input type="text" id="forgotPassword" name="forgotPassword" tabindex="2" class="email withIcon" />
						</fieldset>
						<div class="clearfix"></div>
						<!-- Divide Start -->
						<div class="orBreak">
							<span class="backLine"><!-- Background Line --></span>
						</div>
						<!-- Divide End -->
						<fieldset>
							<input type="submit" id="Reset Password" name="Reset Password" tabindex="3" class="greenButton fullWidth" value="Reset Password" />
						</fieldset>
					</div>
					<!-- Forgot Passowrd End -->

					<!-- YOU WILL SEE THIS AREA ONCE YOU HAVE VERIFIED YOUR EMAIL FOR THE USERNAME QUESTION -->
					<!-- <fieldset>
						<label for="forgotUsername">Your username is:</label>
						<p class="username">djrap</p>
					</fieldset> -->
					<!-- YOU WILL SEE THIS AREA ONCE YOU HAVE VERIFIED YOUR EMAIL FOR THE USERNAME QUESTION -->
					
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
	include('../../includes/footer.php');
?>


