<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
<p>latihan dulu nanti juga bisa</p>
<a href="<?= base_url('index.php/Welcome/Test'); ?>">Dwi Cahya</a>
<?=form_open('/Kalkulator/Hasil')?>
	<input type="number" name="angka1">
	<select name="aritmatika">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="kali">*</option>
		<option value="bagi">/</option>
	</select>
	<input type="number" name="angka2">
	<button type="submit">submit</button>
<?=form_close()?>
<p>Jawaban</p>
<?=$data?>
</body>
</html>