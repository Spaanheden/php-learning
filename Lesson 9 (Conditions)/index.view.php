<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>
</head>


<body>

	<?php foreach ($tasks as $task) : ?>
		<li><?= $task->description; ?></li>
	<?php endforeach; ?>
</body>

</html>