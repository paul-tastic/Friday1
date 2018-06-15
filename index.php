<?php

	include_once 'includes/db.inc.php';
	include_once 'includes/users.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Friday Exercise</title>
</head>
<body>
	<?php
	$user = new User();
	$user->getData();
	?>
</body>
</html>