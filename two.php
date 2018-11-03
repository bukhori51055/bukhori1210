<?php
	// Membuat variabel
	
	$username="";
	$usernameErr = "";
	$username_valid = true;
	$username_valid_msg = "";
	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		
		
		// Cek input kosong
		
		if(empty($username)){
			$usernameErr = "Username masih kosong.<br>";
		}
		
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		if(!preg_match("/^[a-zA-Z]{5}[_]{1}[0-9]{2}$/i",$username)){
			
			$username_valid = false;
			$username_valid_msg = "Pastikan Username menggunakan 5 huruf dipertama, underscore, dan 2 angka.<br>";
		}
		
		// Cek semua input sudah diisi apa belum
		if(!empty($username)and $username_valid ){
		
			echo "Selamat semua input sudah diisi dengan benar.<br>";
		}
		
	}
?>

<h3>From Register</h3>

<form action="index.php" method="post">
	
	Username : <input type="text" name="username" value="<?php echo $username; ?>"><br>
		<?php echo $usernameErr.$username_valid_msg; ?>
	<input type="submit" name="submit" value="Register">
</form>
