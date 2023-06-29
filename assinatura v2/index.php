<!DOCTYPE html>
<html ng-app="ass">


<!-- essa parte do código é o HTML necessário para gerar a
imagem Avatar para criaImagem1.php -->
<!DOCTYPE html>
<html ng-app="ass">
<head>
	<meta charset="utf-8">
	<title>Assinatura</title>
	<script src="js/jquery-2.2.3.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/atakAssinaturaAngula.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/atakAssinatura.css">
</head>
<body>
	<div id="divPai" ng-controller="assCtrl">
		<section class="jumbotron">
			<img src="imagens/logo.png">
		</section>
		<section id="faixa1">
			<footer>
				<p colspan='2' align='right'><font face=Calibri color=white size=2><em>Desenvolvido por: Paulo Robson
				</em> </font></p>
			</footer>
		</section>
		<section id="sectionForm">
			<form id="formDados" method="post" action="/assinatura/criaImagem1.php" enctype="multipart/form-data">
				<label id="labelNome">Nome:</label>
				<input type="text" name="nome" ng-model="nome" placeholder="Nome" id="nome" required><br>
				<label>Setor:</label>
				<input type="text" name="cargo" ng-model="cargo" placeholder="Setor" required><br>
				<label>E-mail: </label>
				<input type="email" name="email" ng-model="email" placeholder="E-mail" required><br>
				<label id="labelTelefone">Telefone:</label>
				<input type="tel" name="tel" ng-model="tel" placeholder="xx XXXX.XXXX" required><br>
				<label>Celular:</label>
				<input type="tel" name="cel" ng-model="cel" placeholder="xx XXXX.XXXX" required><br>
				<label>Imagem de Perfil:</label>
				<input type="file" name="profile_picture" accept="image/jpeg, image/png"><br>
				<button class="btn btn-primary" class="small" id="btnCriarAssi" type="submit" ng-disabled="!nome || !cargo || !email || !tel">Gerar Assinatura</button>
			</form>
		</section>
		<section id="sectionBtnPasso">
			<p colspan='2' align='left'>
				<font face=Calibri color=#000 size=2>
					<a href="assSuporte.php">
						<img src="imagens/btn02.png">
					</a>
					<em>  Clique aqui e saiba como configurar sua nova assinatura!</em> 
				</font>
			</p>
		</section>
	</div>
</body>
<!-- termina aqui parte do código é o HTML necessário para gerar a
imagem Avatar para criaImagem1.php -->

	<head>
		<meta charset="utf-8">
		<title>Assinatura</title>
		<script src="js/jquery-2.2.3.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/atakAssinaturaAngula.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/atakAssinatura.css">
	</head>
	<body>
		<div id="divPai" ng-controller="assCtrl">
			<section class="jumbotron">
				<img src="imagens/logo.png">
			</section>
			<section id="faixa1">
				<footer>
					<p colspan='2' align='right'><font face=Calibri color=white size=2><em>Desenvolvido por: Paulo Robson
					</em> </font></p>
				</footer>
			</section>
			<section id="sectionForm">
				<form id="formDados" method="get" action="/assinatura/criaImagem1.php" enctype="multipart/form-data">
					<label id="labelNome">Nome:</label>
					<input type="text" name="nome" ng-model="nome" placeholder="Nome" id="nome" required><br>
					<label>Setor:</label>
					<input type="text" name="cargo" ng-model="cargo" placeholder="Setor" required><br>
					<label>E-mail: </label>
					<input type="email" name="email" ng-model="email" placeholder="E-mail" required><br>
					<label id="labelTelefone">Telefone:</label>
					<input type="tel" name="tel" ng-model="tel" placeholder="xx XXXX.XXXX" required><br>
					<label>Celular:</label>
					<input type="tel" name="cel" ng-model="cel" placeholder="xx XXXX.XXXX" required><br>
					<label>Imagem de Perfil:</label>
					<input type="file" name="profile_picture" accept="image/jpeg, image/png"><br>
					<button class="btn btn-primary" class="small" id="btnCriarAssi" type="submit" ng-disabled="!nome || !cargo || !email || !tel">Gerar Assinatura</button>
				</form>
			</section>
			<section id="sectionBtnPasso">
				<p colspan='2' align='left'>
					<font face=Calibri color=#000 size=2>
						<a href="assSuporte.php">
							<img src="imagens/btn02.png">
						</a>
						<em>  Clique aqui e saiba como configurar sua nova assinatura!</em> 
					</font>
				</p>
			</section>
		</div>
	</body>
</html>

