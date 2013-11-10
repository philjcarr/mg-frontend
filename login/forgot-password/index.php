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
					<fieldset>
						<label for="email">What is email address or username?</label>
						<input type="text" id="email" name="email" tabindex="1" class="email withIcon" />
					</fieldset>
					<div class="clearfix"></div>
					<!-- Divide Start -->
					<div class="orBreak">
						<span class="backLine"><!-- Background Line --></span>
					</div>
					<!-- Divide End -->
					<fieldset>
						<input type="submit" id="Reset Password" name="Reset Password" tabindex="4" class="greenButton fullWidth" value="Reset Password" />
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
	include('../../includes/footer.php');
?>


