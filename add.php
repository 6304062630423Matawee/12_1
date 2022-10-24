<?php
	$mango = $_GET["mango"];
	$orenge = $_GET["orenge"];
	$banana = $_GET["banana"];
	echo "<b>ยอดขาย</b> คือ ";
	echo $mango*30 + $orenge*70 + $banana*30;
	echo "<b>บาท</b>";
?>