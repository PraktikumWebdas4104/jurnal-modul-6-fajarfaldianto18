<form method="POST">

	<table>

		<tr>

			<td>Nama</td>

			<td>:</td>

			<td><input type="text" name="nama" length="35" required="isianya" placeholder="Maksimal 35 karakter"></td>

		</tr>

		<tr>

			<td>Nim</td>

			<td>:</td>

			<td><input type="text" name="nim" ength="10" required="isianya" placeholder="Maksimal 10 karakter"></td>

		</tr>
		<tr>
			<td>
			<h2>kelas</h2>
			<form action="">
  			<input type="radio" name="kelas" value="MI-41-01"> MI-41-04<br>
  			<input type="radio" name="kelas" value="MI-41-02"> MI-41-03<br>
  			<input type="radio" name="kelas" value="MI-41-03"> MI-41-02<br>
  			<input type="radio" name="kelas" value="MI-41-04"> MI-41-01<br><br>
  			</td>
  		</tr>
  		<td>
  		<h2>Jenis kelamin</h2>
  		<form action="">
  		<input type="radio" name="gender" value="pria"> pria<br>
 		<input type="radio" name="gender" value="wanita"> wanita<br>
 		</tr><br><br></td>
		</form>
		<td><h2>Hobi</h2>
		<form action="/action_page.php">
  		<input type="checkbox" name="hobi" value="olahraga"> olahraga<br>
  		<form action="/action_page.php">
  		<input type="checkbox" name="hobi" value="berantem"> berantem<br>
  	</form></td>
  	<tr>
  		<td>
  			<h2>fakultas</h2>
  			<select name="fakultas">
  			<option value="FIT">fit</option>
  			<option value="FIK">fik</option>
  			<option value="fkb">fkb</option>
  			<option value="pehotelan">perhotelan</option>
  		</select></td></tr>
  		<tr>
  			<td>
  				<h2>alamat</h2>
  			<textarea rows="4" cols="50">
			</textarea></td>
  		</tr>
  		<tr>
  			<td>password
  				<input type="password" name="password" length="10" required="harus di isi" placeholder="harus 10 karakter">
  			</td>
  		</tr>
  		<td>
  			<input type="submit" name="submit" value="registrasi">
  		</td>
  	</tr>


  

		</form>

	</table>
	<?php 
		if (isset($_POST['submit'])) {
			# code...
			include 'registrasi.php';
		}
	 ?>

</form>