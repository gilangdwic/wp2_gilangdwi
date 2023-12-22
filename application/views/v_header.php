<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h3>Membuat Template Sederhana dengan CodeIgniter</h3>
			</hgroup>
			<nav>
				<ul> //P3 menambahkan v-about.php, v-footer.php, v-header.php, v-index.php
					<li><a href="<?php echo base_url() . 'web' ?>">Home</a></li>
					<li><a href="<?php echo base_url() . 'web/about' ?>">About</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
