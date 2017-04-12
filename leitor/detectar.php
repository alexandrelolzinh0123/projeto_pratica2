<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$img = imagecreatefrompng('pasta1/foto1.png');

	// obtém uma cor
	$start_x = 40;
	$start_y = 50;
	$color_index = imagecolorat($img, $start_x, $start_y);

	// torna legível
	$color_tran = imagecolorsforindex($img, $color_index);

	// Qual é?
	print_r($color_tran);




	if (($color_tran['red'] > $color_tran['blue']) && ($color_tran['red'] > $color_tran['green'])) {
		echo "<p>"."red"."</p>";
	}elseif (($color_tran['green'] > $color_tran['red']) && ($color_tran['green'] > $color_tran['blue'])) {
		echo "<p>"."red"."</p>";
	}elseif (($color_tran['blue'] > $color_tran['red']) && ($color_tran['blue'] > $color_tran['green'])) {
		echo "<p>"."red"."</p>";
	}elseif (($color_tran['blue'] = 0) && ($color_tran['red'] = 0) && ($color_tran['green'] = 0)) {
		echo "<p>"."branco"."</p>";
	}elseif (($color_tran['blue'] = 255) && ($color_tran['red'] = 255) && ($color_tran['green'] = 255)) {
		echo "<p>"."branco"."</p>";
	}

 ?>
</body>
</html>


