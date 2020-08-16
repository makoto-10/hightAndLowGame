<?php
    $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
    $num = mt_rand(0,13);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;carset=UTF-8">
    	<style>
    		h1{
    		border-bottom: 3px solid #000000;
    		}

    		.cards{
    		text-align: center;
    		}
    	</style>
	</head>
	<body>
		<form action="hightAndLowS7.php" method = "post">
    		<div class = cards>
        		<h1>Hight&Lowゲーム</h1>
        		<?php
        		$leftCard = $cards[$num];
        		  echo '<img src="../cards/',$leftCard,'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        		  echo '<img src="../cards/bg.png">';
        		  echo '<input type="hidden" name="leftCard" value="',$leftCard,'" >';
        		?>
        		<br>
        		<br>
        		<input type="radio" name="select" value="Hight">Hight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		<input type="radio" name="select" value="Low">Low<br>
        		<br>
        		<input type="submit" value="決定">
        	</div>
    	</form>
	</body>
</html>