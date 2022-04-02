<?php 

require_once 'api/news-api.php';
require_once 'api/key.php';

$page = new API(KEY_API);

$noticias = $page->ultimas_news();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<head>
	<h1>A32</h1>
</head>

<section class="container">
	<?php 
	if (count($noticias->articles)){
	$i = 0;
	foreach ($noticias->articles as $Noticias) {
	$i++;
	?>

	<h4><?=$Noticias->title?></h4>
	<img src="<?=$Noticias->urlToImage?>">
	<p><?=$Noticias->description?></p>


	<?php 
	}
	}
	?>
</section>

</body>
</html>