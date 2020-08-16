<?php
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
    $num = mt_rand(0,14);
    $sNum=$_POST['select'];
    $hNum=$_POST['leftCard'];

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
			<div class = cards>
        		<h1>Hight&Lowゲーム</h1>
            	<?php
                $leftCard=$hNum;
            	$rightCard = $cards[$num];
                	echo '<img src="../cards/',$leftCard,'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                	echo '<img src="../cards/',$rightCard,'"><br>';
                	echo "「",$sNum,"」を選択しました。";
                	echo '<br>';
                	echo '<br>';
                	echo '<br>';

                	if($leftCard<$rightCard){
                	    $result="Hight";
                	}elseif($leftCard>$rightCard){
                	    $result="Low";
                	}else{
                	    $result="ラジオボタンの選択情報";
                	}

                	if($result==$sNum){
                	    echo "You Win!";
                	}else{
                	    echo "You Lose...";
                	}
            	?>
    		</div>
	</body>
</html>