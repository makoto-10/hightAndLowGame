<?php
    $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
    $num = mt_rand(0,14);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;carset=UTF-8">
    	<style>
    		h1{
    		border-bottom: 3px solid #000000;
    		}

    		.step1{
    		text-align: center;
    		}
    	</style>
	</head>
	<body>
		<div class = step1>
    		<h1>Hight&Lowゲーム</h1>
    		<?php

    		  echo '<img src="../cards/',$cards[$num],'">';
    		  echo '<img src="../cards/bg.png">';
    		?>
    	</div>
	</body>
</html>