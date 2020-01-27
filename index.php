<html>
<title>Перша сторінка</title>
<body>
<?php
	echo "Hello word";
	$int=5;
	$var=5.02;
	echo "<br>";
	echo $int+$var;
	echo "<br>";
	var_dump($var);
	$arr=["Mon","Tue","Went","Th","Fr"];
	echo "<br>";
	echo $arr[2];
	echo "<br>";
	var_dump($arr);
	$cars=array("bmw"=>["model"=>"xs",		 "fuel"=>"disel", 	 "color"=>"red"],
				"kia"=>["model"=>"sportage", "fuel"=>"gasoline", "color"=>"green"]
				);
	echo "<br>";
	var_dump($cars);
	foreach ($cars as $key=>$value){
		echo "Марка ".$key.": ".$value["model"]."<br>";
	}
	echo '<center>';
	echo '<table border="1"><thead><tr><th>Модель</th><th>Паливо</th><th>Колір</th></tr></thead><tbody>';
	foreach ($cars as $key=>$value){
		echo '<tr><td>'.$key.'</td><td>'.$value["fuel"].'</td><td bgcolor='.$value["color"].'>'.$value["color"].'</td></tr>';
	}
	echo "</tbody></table>";
	echo '</center>';
	$url="http://work.rtf.kpi.ua/web/api/get";
	$json=file_get_contents($url);
	echo $json;
	echo "<br>";
	echo "<br>";
	$messinjer=json_decode($json,true);
	var_dump($messinjer);
	echo '<center>';
	echo "<br>";
	echo "<br>";
	echo '<table border="1"><thead><tr><th>№ запису</th><th>Запис</th></tr></thead><tbody>';
	foreach ($messinjer as $key=>$value){
		echo '<tr><td>'.$key.'</td><td>'.$value["text"].'</td></tr>';
	}
	echo "</tbody></table>";
	echo '</center>';
?>
</body>
</html>