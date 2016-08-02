
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<style>
	.centered {
		width:250px;
		margin: 0 auto;
	}
</style>

<div class="container">
	<div class="row">

		<!-- Logo -->
		<div class="panel-heading">
			<div class="panel-title text-center">
				<h1 class="title">SFSU Bazaar</h1>
				<hr/>
				<h3 class="title" align="center">Welcome Back</h3>
			</div>
		</div>

		<div class="centered">
			<form class="form-horizontal" method="post" action="<?php echo URL; ?>login/login" autocomplete="off">

				<!-- Username input -->
				<div>
					<label for="username" class="cols-sm-2 control-label">Username</label>
					<div class="cols-sm-6">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" autocomplete="off"/>
						</div>
					</div>
				</div>

				<!-- Password input -->
				<div>
					<label for="password" class="cols-sm-2 control-label">Password</label>
					<div class="cols-sm-6">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" autocomplete="off"/>
						</div>
					</div>
				</div>
				<br>

				<!-- Sign In button -->
				<div>
					<button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>
				</div>
				<br>

				<!-- Register button -->
				<div>
					Don't have an account? <a href="<?php echo URL; ?>register/index">Register Here</a>
				</div>
			</form> <!-- end form -->
		</div>
	</div> <!-- end row -->
	</div> <!-- end container -->
