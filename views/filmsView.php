<!DOCTYPE html>
<html>
	<head>
		<title>Vue des films</title>
	</head>
	<body>
		
		<?php foreach ($films as $key => $film): ?>
			
			<div class="film<?=$key+1?>">
				
				<h2>Film n°<?=$key+1?></h2>
				<h3><?=$film['Titre']?></h3>

			</div>

		<?php endforeach ?>


	</body>
</html>