<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$method = $this->router->fetch_method();
$class = $this->router->fetch_class();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?= base_url() ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>User | Amadeos</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/circliful/dist/circliful.js"></script>
</head>
<body style="background: linear-gradient(73.56deg, rgba(99, 113, 241, 0) 12.47%, rgba(99, 113, 241, 0.32) 200%), rgba(255, 255, 255, 0.8);">

<div>
	<?= $content ?>
</div>

</body>
</html>
