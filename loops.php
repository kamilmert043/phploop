<?php
	$cities=["Balıkesir","Kütahya","Ankara","Kocaeli","Trabzon","Elazığ","İstanbul"];
	
	echo "<b>For Loop</b><br><br>";
	
	for ($i=0; $i<count($cities);$i++)
	{
		echo $cities[$i];
		echo "<br>";
	}
	echo "<br>";
	echo "<b>While Loop</b><br>";
	echo "<br>";
	$j=0;
	 while($j<count($cities)){
			
		 	echo $cities[$j];
			echo "<br>";
			$j++;
	 }
	echo "<br>";
	echo "<b>Foreach Loop</b><br>";
	echo "<br>";
	foreach($cities as $city){
		echo $city;
		echo "<br>";
	}
	
	echo "<br>";
	echo "<b>Do-While Loop</b><br>";
	echo "<br>";
	$k=0;
	do{
		echo $cities[$k];
		echo "<br>";
		$k++;
	}while($k<count($cities))
	
	
?>