	<!DOCTYPE html>
<html lang="en">
<head>
    <title>SFSU Bazaar</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">

    <style>

		.centered {
			width:300px;
			margin: 0 auto;
		}
		
	</style>

</head>

<body>
	<div class="container">
		<div class="row">

			<!-- Logo -->
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h1 class="title">SFSU Bazaar</h1>
					<hr/>
					<h4 class="title" align="center">Exciting New Things Ahead</h4>
				</div>
			</div>

			<div class="centered">
				<form class="form-horizontal" method="post" action="<?php echo URL; ?>register/checkIfEmailExist">

					<!-- First name input -->
					<div>
						<label for="firstName" class="cols-sm-2 control-label">Your First Name</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="firstName" id="firstName"  placeholder="Enter your First Name"/>
							</div>
						</div>
					</div>

					<!-- Last name input -->
					<div>
						<label for="lastName" class="cols-sm-2 control-label">Your Last Name</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Enter your Last Name"/>
							</div>
						</div>
					</div>

					<!-- SFSU Email input -->
					<div>
						<label for="email" class="cols-sm-2 control-label">Your SFSU Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your SFSU Email"/>
							</div>
						</div>
					</div>

					<!-- Password input -->
					<div>
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
							</div>
						</div>
					</div>

					<!-- Confirm Password input -->
					<div>
						<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
							</div>
						</div>
					</div>
					<br>

					<!-- CAPCHA checkbox -->
					<label><input type="checkbox" name="capcha"> I am not a ROBOT.</label>

					<!-- Terms and Conditions checkbox -->
					<label><input type="checkbox" name="terms"> I agree with the <a data-toggle="modal" data-target="#myModal">Terms and Conditions</a>.</label>
					<br><br>

					<!-- Register Button -->
					<div>
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="register">Register</button>
					</div>
					<br>

					<!-- Return Back to Login page -->
					<div class="login-register">
						Already have an Account? Return to
						<a href="<?php echo URL; ?>login/index">Login Here</a>
					</div>
				</form> <!-- end form -->
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Terms and Condition</h4>
				</div>
				<div class="modal-body">
					<p>BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>