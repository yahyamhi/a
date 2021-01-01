<?php
	echo"<h1 style='color:blue;'> VISITOR COUNTER </h1>";
	$file="count.text";
	$c=file_get_contents($file);
	file_put_contents($file,$c+1);
	echo"<p>The number of users visited:</p>".$c;
?>