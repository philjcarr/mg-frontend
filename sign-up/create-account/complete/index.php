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
				<div class="col active">
					<span class="backgroundLine last"></span>
					<span class="number">
						<span>3</span>
					</span>
				</div>
				<div class="clear"></div>
				<div class="col active">
					<p>Create Username</p>
				</div>
				<div class="col active">
					<p>Account Type</p>
				</div>
				<div class="col active">
					<p>Complete</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
</div>
<!-- Contaciner End -->

<form action="/dashboard" class="accountType">
	<!-- Container Start -->
	<div class="container-fluid">
		<!-- Row Start -->
		<section class="row-fluid">
			<div class="span12">
				Complete page
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
					<input type="submit" value="Create My Account!" class="orangeButton" />
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


