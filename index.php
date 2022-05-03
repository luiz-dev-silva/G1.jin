<?php 
session_start();

if (!isset($_SESSION['newUser'])) {
	header('Location: /login.html');
	session_destroy();
}

require_once 'php.configs/api/news-api.php';
require_once 'php.configs/api/key.php';

$page = new API(KEY_API);
$noticias = $page->ultimas_news();


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal de Notícias</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap');
		body {
			color: black;
			font-family: 'Lora', serif;
		}

		h1 {
			padding: 10px;
			color: #CD3333;
			text-indent: 40px;
			text-align: justify;
			font-size: 23pt;
		}

		p{
			padding: 10px;
  			border-bottom: solid 1px #606060;
			font-size: 15pt;
			text-indent: 40px;
			text-align: justify;
		}

		div.conteudo {
			display: block;
			width: 900px;
			background-color: #fff;
			margin: -10px auto 0px auto;
			box-shadow: 10px 10px 5px #606060;
			padding: 50px;
		}

		div.container {
			padding: 25px;
		}

		div.container img {
			margin-left: 90px;
		}
		
		footer.rodape{
			padding: 15px;
			clear: both;
		}

		footer.rodape a{
			text-decoration: none;
			color: #606060;
		}

		footer.rodape p {
			text-align: center;
			color: #606060;
		}
		
	</style>	
</head>
<body>
		<nav>
    		<a class="logo" href="index.php">G2.jin</a>
    		<div class="mobile-menu">
        		<div class="line1"></div>
    			<div class="line2"></div>
        		<div class="line3"></div>
    		</div>
    		<ul class="nav-list">
        		<li><a href="index.php">Início</a></li>
        		<li><a href="sobre.html">Sobre</a></li>
        		<li><a href="devs.html">Devs</a></li>
        		<li><a href="login.html">Cadastra-se</a></li>
    		</ul>
		</nav>
    <script src="js/mobile-navbar.js"></script>
    <div class="conteudo">
		<section>
			<div class="container">
 
				<?php 
				if (count($noticias->articles)){
				$i = 0;
				foreach ($noticias->articles as $Noticias) {
				$i++;
				?>

				<h1><?=$Noticias->title?></h1>


				<img src="<?=$Noticias->urlToImage?>" vertical-align="middle"  height="325vh" width="650vh" >

				<br>

				<p ><?=$Noticias->description?></p> 


				<br>

				<?php 
				}
				}
				?>
			</div>
		</section>
	</div>
	<footer class="rodape">
		<p>Copyright &copy; 2022 - by <a href="https://www.instagram.com/luizguilherme.exe/" target="blank">Papatinho, </a><a href="https://www.instagram.com/a32fred/" target="blank"> A.32,</a> <a href="https://www.instagram.com/mikebelchiol/" target="blank"> Mike Belchiol. </a></p>
	</footer>
</body>
</html>