<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP 14 | Struktur Kontrol: Continue</title>
</head>
<body>
	<?php
		for ($i = 1;$i <= 10;$i++) {
			if (!($i%2)) {
			continue;
			}
		echo "\$i = $i <BR>";
		}
	?>
</body>
</html>