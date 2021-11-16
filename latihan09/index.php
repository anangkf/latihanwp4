<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP 9 | Struktur Kontrol: Switch</title>
</head>
<body>
	<?php
		$a = 5;
		switch ($a) {
			case 0:
				echo '$a sama dengan 0';
				break;
			case 1:
				echo '$a sama dengan 1';
				break;
			case 2:
				echo '$a sama dengan 2';
				break;
			default:
				echo '$a tidak sama dengan 0, 1, atau 2';
		}
	?>
</body>
</html>