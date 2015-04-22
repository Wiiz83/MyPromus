<html>
<head>
	<title></title>
</head>
<body>
	<?php
		foreach ($events as $event) {
			echo $event->getIdEvent();
			echo $event->getIdAdmin();
			echo $event->getName();
			echo $event->getDate();
			echo $event->getPlace();
			echo $event->getDescription();
		}
	?>
</body>
</html>