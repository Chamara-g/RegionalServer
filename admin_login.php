<!DOCTYPE html>

<html>

	<head>
		<title>admin_login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/admin_login.css">
	</head>

	<body>

		<div class="container" style="margin-top: 15%;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<h4>Admin Login</h4><br>
						    <label class="radio-inline"><!-- Full access radio button -->
      							<input type="radio" name="optradio">Full access
    						</label>
    						<label class="radio-inline"><!-- half access radio button -->
      							<input type="radio" name="optradio">Half access
    						</label>
						<div class="panel-body">
							<form action="">
								<div class="form-group">
									<input style="margin-top: 20px;" type="username" name="" class="form-control" placeholder="Enter User Name">
								</div>
								<div class="form-group">
									<input type="password" style="margin-top: 20px;  name="" class="form-control" placeholder="Enter password">
								</div>
								<div class="form-group">
									<input type="submit" name="" class="btn btn-success btn-lg btn-block" value="Login">
								</div>
							</form>
						</div>
						<div class="lock"><i class="fa fa-lock"></i></div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>