<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo self::titulo; ?></title>
	<link href="</<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Header</h1>

<?php
foreach ($this->menuItems as $key => $value) {
	echo $value;
	echo '<br />'; 
}

?>
