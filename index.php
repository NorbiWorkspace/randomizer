<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>Taktyki CS:GO</title>
	<link href="files/bootstrap.css" rel="stylesheet">
	<link href="files/custom.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script src="https://use.fontawesome.com/8a278b790d.js"></script>
	<script src="files/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1 class="header">Losowanie taktyk</h1>
			Możesz tutaj wylosować gdzie możesz pójść oraz jakimi brońmi zagrać.
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="page-subheader text-center">
					<h1><i class="fa fa-gear text-primary text-bold icon-padding" aria-hidden="true"></i>Ustawienia</h1>
					Określ, jakie bronie mają być losowane.
					<p><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#settings">Ustawienia</a></p>
				</div>
			</div>
			<div class="col-sm-4 bordered">
				<div class="page-subheader text-center">
					<h1><i class="fa fa-globe text-success text-bold icon-padding" aria-hidden="true"></i>Mapa</h1>
					Na jaką mapę chcesz otrzymać taktykę?
					<p><div class="btn-group">
						<button class="btn btn-success btn-sm" onclick="drawGuns()">Cache</button>
						<button class="btn btn-success btn-sm disabled" ronclick="drawGuns()">Cobblestone</button>
						<button class="btn btn-success btn-sm" onclick="drawGuns()">Dust2</button>
						<button class="btn btn-success btn-sm" onclick="drawGuns()">Mirage</button>
						<button class="btn btn-success btn-sm disabled" onclick="drawGuns()">Nuke</button>
						<button class="btn btn-success btn-sm disabled" onclick="drawGuns()">Overpass</button>
						<button class="btn btn-success btn-sm disabled" onclick="drawGuns()">Train</button>
					</div></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="page-subheader text-center" style="display: block">
					<h1><i class="fa fa-random text-danger text-bold icon-padding" aria-hidden="true"></i>Wyniki losowania</h1>
					<i class="fa fa-home text-danger text-bold" aria-hidden="true"></i> <span class="text-bold">Główna broń:</span> <span id="primarygun"></span><br>
					<i class="fa fa-home text-danger text-bold" aria-hidden="true"></i> <span class="text-bold">Poboczna broń:</span> <span id="secondarygun"></span><br>
					<i class="fa fa-bomb text-danger text-bold" aria-hidden="true"></i> <span class="text-bold">Granaty:</span> <span id="grenades"></span><br>
					<i class="fa fa-shield text-danger text-bold" aria-hidden="true"></i> <span class="text-bold">Sprzęt:</span> <span id="gear"></span><br>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
