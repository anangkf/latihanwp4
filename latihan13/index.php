<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP 13 | Struktur Kontrol: Break</title>
</head>
<body>
	<?php
		for ($i = 1; $i <= 10; $i++) {
			if ($i == 6) {
			break;
			}
		echo "\$i = $i <BR>";
	}
	?>
</body>
</html>