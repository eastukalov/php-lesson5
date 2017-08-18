<?php
	$filename='phonebook.json';
	$str=iconv('CP1251','UTF-8',file_get_contents(__DIR__ . '\\' . $filename));
	$array=json_decode($str, true);
?>

<html>
<head>
	<title>Телефонная книжка</title>
	<style type="text/css">
	td {
		padding: 0 10px 0 10px;
		text-align: center;
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>firstName</td>
				<td>lastName</td>
				<td>address</td>
				<td>phoneNumber</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($array as $value) : ?>
				
				<tr>
					<td><?=$value['firstName']?></td>
					<td><?=$value['lastName']?></td>
					<td><?=$value['address']?></td>
					<td><?=$value['phoneNumber']?></td>
				</tr>
				
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>