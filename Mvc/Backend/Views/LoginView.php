<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="Assets/Backend/Layout1/img/apple-icon.png">
  <link rel="icon" type="image/png" href="Assets/Backend/Layout1/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="Assets/Backend/Layout1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Assets/Backend/Layout1/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="Assets/Backend/Layout1/demo/demo.css" rel="stylesheet" />
</head>
<body>
<div class="col-lg-6 col-lg-offset-3" style="margin-top: 40px;margin: 40px auto;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size: 30px;">Login</div>
		<div class="panel-body">
			<form method="post" action="index.php?area=Backend&controller=Login&action=doLogin">
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2">Email</div>
					<div class="col-lg-10"><input type="email" name="email" class="form-control" required></div>
				</div>
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2">Password</div>
					<div class="col-lg-10"><input type="password" name="password" class="form-control" required></div>
				</div>
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2"></div>
					<div class="col-lg-10" style="text-align: center;"><input type="submit" value="Login" class="btn btn-primary"></div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>