<!doctype html>
<html data-ng-app="routerApp">
<head>
	<meta charset="UTF-8">
	<title data-ng-bind="$state.current.data.pageTitle + ' - routerApp'"></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="css/Open-Sans_300_400_600_700_800.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="bower_components/angular/angular.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">

			<!-- LOGO ON STICKY NAV BAR -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a ui-sref="home"><div class="navbar-brand">AngularUI routerApp</div></a>

		</div>

		<!-- NAVIGATION LINKS -->
		<div class="navbar-collapse collapse" id="nav">
			<ul class="nav navbar-nav main-navigation">
				<li><a ui-sref="home">Home</a></li>
				<li><a ui-sref="about">About</a></li>
				<li><a ui-sref="contact">Contact</a></li>
			</ul>
		</div>
	</div> <!-- /END CONTAINER -->
</nav>

	<div class="container">
		<div ui-view></div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>

	<script src="js/app.js"></script>

</body>
</html>