<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Hello, CodeIgniter!</h1>
	<hr>
		<p>Ini program pertama saya yang dibuat dengan menggunakan PHP Framework CodeIgniter</p>

		<h2>Links :</h2>
			<a href="<?= base_url() ?>index.php/tentangsaya">Tentang Saya</a><br>
			<a href="<?= base_url() ?>index.php/tentangkharisma">Tentang STMIK KHARISMA</a><br>
			<a href="<?= base_url() ?>index.php/desainweb">Tentang Desain Web</a><br>
			<a href="<?= base_url() ?>index.php/resep">Daftar Resep Kuliner Tradisional Indonesia</a><br>

		</div>
	</body>
	</html>
