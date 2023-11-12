<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		var_dump($_POST);
	} else {
		http_response_code(405);
		echo "<html>
		<head>
		<title>405 Method Not Allowed</title>
		<link rel='stylesheet' type='text/css' href='App.css' />
		</head>
		<body>
		<h1>Method Not Allowed</h1>
		<hr/>
		<pre>This page only supports POST requests.</pre>
		</body>
		</html>";
	}
?>