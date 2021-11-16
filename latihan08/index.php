<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP 8 | Struktur Kontrol: If-ElseIf</title>
</head>
<body>
	<?php
		$a = 5;
		$b = 7;
		echo "\$a = $a <BR>";
		echo "\$b = $b <BR>";
		if ($a == $b):
		echo '$a sama dengan $b';
		elseif ($a > $b):
		echo '$a lebih besar daripada $b';
		else:
		echo '$a lebih kecil daripada $b';
		endif;
	?>
</body>
</html>