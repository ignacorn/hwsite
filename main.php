<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
	<title>Домашняя работа 8.6.1</title>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<div class='img'>
				<img src="header.jpg">
			</div>
			<div class='headtext'><?php echo $p ?></div>
		</div>
		<div class = 'menu'>
			<?php include 'menu.inc.php';?>
		</div>
		<div class='mainblock'>
					
			<div class='name'>
				<p>Здесь выходят переменные: <br>
					<?php echo 'Имя: ', $name, ', ', 'Возраст: ', $age, ', ', 'Страна: ', $country, ', ', '<br>';?>
				</p>
			</div>
			<div class='knowledge'>           
                <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $a, ' + ', $b, ' = ', $c;
                ?>  
                 <br> 
                При корректном выполнении кода, правее появится текст: <br>
                <?php  include 'knowledge.inc.php'; ?>

			</div>
			
		</div>
		<?php include 'footer.inc.php';?>
		
	</div>
	
	
</body>
</html>