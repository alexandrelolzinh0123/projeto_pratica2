<pre>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$filename = 'pasta1/foto1.png';

	
	list($width, $height) = getimagesize($filename);
	$newwidth = $width - $width + 3;
	$newheight = $height - $height + 3;



	$thumb = imagecreatetruecolor($newwidth, $newheight);
	$source = imagecreatefrompng($filename);

	
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	 imagepng($thumb);

	 var_dump($thumb);

	 $index = imagecolorat($thumb, 0, 0);
	 $rgb = imagecolorsforindex($thumb, $index);
	 var_dump($rgb);

	 //função para calcular a distancia das cores
	 function distancia($c1,$c2,$indice){
		
	 $d = sqrt(pow($c1['red'] - $c2[$indice][0], 2) + pow($c1['green'] - $c2[$indice][1], 2) + pow($c1['blue'] - $c2[$indice][2], 2));

	 return $d ;

	}

	// array de cores que vai ser usado na função para comparar com o rgb da imagem capturada
	 $colors = [
	 	"vermelho" => [255,0,0],
	    "verde" => [0,255,0],
	    "azul"   => [0,0,255],
	    "amarelo" => [255,255,0],
	];

	//array que contem as distancias de cada uma das cores armazenadas no array "colors"
	$array_dist = [];

	//array que contem o nome das cores 
	$array_colors = [];

	//laço para percorrer o array "colors"
	foreach ($colors as $key => $value) {

		//variavel dist armazena o resultado da função distancia
		$dist = distancia($rgb,$colors,$key);

		//imprime o nome da cor e a distancia dela até a cor rgb da imagem capturada
		echo $key."=>".$dist."<br>\n";

		//joga o valor da variavel dist no array "$array_dist"
		array_push($array_dist, $dist);

		//joga o valor da variavel key(que guarda o nome das cores) no array "$array_colors"
		array_push($array_colors, $key);

		//mesclando o array_colors(nome das cores) e array_dist(distancia das cores) e jogando em um array tornando array_colors o indice de array_distance e array_dist o valor de array_distance 
		$array_distance = array_combine($array_colors, $array_dist);
		
	}

	//criando um laço foreach para percorrer o array "array_distance"
	foreach ($array_distance as $key => $value) {
		//condição para verificar se o menor valor do array_distance é igual a $value
		if (min($array_distance) == $value) {
			// se a condição acima for verdadeira o indice(cor da distancia mais proxima) vai ser imprimido na tela
			echo "cor mais proxima : ".$key."<br>\n" ;
			// parando o laço
			break;
		}
	}

	var_dump($array_dist);
	var_dump($array_colors);
	var_dump($array_distance);
?>
</body>
</html>
</pre>