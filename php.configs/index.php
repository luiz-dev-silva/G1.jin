<?php 
require 'news-api.php';

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
	if (count($news->articles)){
	$i = 0;
	foreach ($news->articles as $Noticias) {
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