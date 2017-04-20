<pre>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$filename = 'pasta1/foto1.png';

// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth = $width - $width + 3;
$newheight = $height - $height + 3;


// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefrompng($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagepng($thumb);

var_dump($thumb);

 $index = imagecolorat($thumb, 0, 0);
 $rgb = imagecolorsforindex($thumb, $index);
 var_dump($rgb);


 $colors = [
 	"vermelho" => [255,0,0],
    "verde" => [0,255,0],
    "azul"   => [0,0,255],
    "amarelo" => [255,255,0],
];
$array_dist = [
];

function distancia($c1,$c2,$indice){
	
 $d = sqrt(pow($c1['red'] - $c2[$indice][0], 2) + pow($c1['green'] - $c2[$indice][1], 2) + pow($c1['blue'] - $c2[$indice][2], 2));


 return $d ;
}
$min = '';
foreach ($colors as $key => $value) {
	$dist = distancia($rgb,$colors,$key);
	echo $key."=>".$dist."<br>\n";

	array_push($array_dist, $dist);

	$dst = min($array_dist);

	if ($array_dist[$key] > $min) {
	 	$min += $array_dist[$key];
	}
}

// var_dump($dst);






// obtém uma cor
// $start_x = 40;
// $start_y = 50;
// $color_index = imagecolorat($img, $start_x, $start_y);

// torna legível
// $color_tran = imagecolorsforindex($img, $color_index);

// Qual é?
// print_r($color_tran);

// if (($color_tran['red'] > $color_tran['blue']) && ($color_tran['red'] > $color_tran['green'])) {
// 	echo "<p>"."vermelho"."</p>";
// } else if (($color_tran['blue'] > $color_tran['green']) && ($color_tran['blue'] > $color_tran['red'])) {
// 	echo "<p>"."azul"."</p>";
// } else if (($color_tran['green'] > $color_tran['blue']) && ($color_tran['green'] > $color_tran['red'])) {
// 	echo "<p>"."verde"."</p>";
// }
// 	$color = imagecolorexact ($img, $color_tran['red'], $color_tran['green'], $color_tran['blue'] );
// // $cor = imagecolorclosest($img, $color_tran['red'], $color_tran['blue'], $color_tran['green']);
// // print_r($cor);
// // echo "<br>";
// 	echo $color;
// 	echo "<br>";
// 	echo dechex($color);

// echo dechex($cor);



?>
</body>
</html>
</pre>