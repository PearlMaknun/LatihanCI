<?=form_open('/Welcome/Simpan')?>
<input type="name" name="nim"  placeholder="NIM"></input></br>
<input type="name" name="nama"  placeholder="Nama"></input></br>
<input type="name" name="jurusan"  placeholder="Jurusan"></input></br>
<select name="gender">
	<option value="L">Laki-laki</option>
	<option value="P">Perempuan</option>
</select></br>
<textarea name="alamat" placeholder="alamat"></textarea></br>
<button type="submit">Simpan</button>
<?=form_close();?>