<html>
<head>
<title>Simple encryptor & decryptor</title>
</head>
<body>
<table>
	<tr>
		<h1>Symetric cryptography</h1> 
		<td>
		<h2>Encryption</h2>
		<form method="POST">
			Text:
			<br>
			<input type="text" name="text" autocomplete="off">
			<br>
			Password:
			<br>
			<input type="password" name="password" autocomplete="off">
			<br>
			Method:
			<br>
			<select name="method" placeholder="Select method" autocomplete="off"> 
				<option value="AES128">AES128</option>
				<option value="AES192">AES192</option>
				<option value="AES256">AES256</option>
				<option value="BF">BF</option>
				<option value="CAST">CAST</option>
				<option value="CAST-cbc">CAST-cbc</option>
				<option value="DES">DES</option>
				<option value="DES3">DES3</option>
				<option value="DESX">DESX</option>
				<option value="IDEA">IDEA</option>
				<option value="RC2">RC2</option>
				<option value="blowfish">blowfish</option>
			</select>
			<br><br>
			<input type="submit" name="Encrypt" value="Encrypt">
		</form>
		<h4>Encrypted text:</h4>
		<textarea name="message" rows="10" cols="22">
<?php
if (isset($_POST["Encrypt"])) {
echo openssl_encrypt($_POST["text"], $_POST["method"], $_POST["password"]);
}
?>
</textarea>
		</td>
		<td>
		<h2>Decryption</h2>
		<form method="POST">
			Encrypted text:
			<br>
			<input type="text" name="dec_text" autocomplete="off">
			<br>
			Password:
			<br>
			<input type="password" name="dec_password" autocomplete="off">
			<br>
			Method:
			<br>
			<select name="dec_method" placeholder="Select method" autocomplete="off"> 
				<option value="AES128">AES128</option>
				<option value="AES192">AES192</option>
				<option value="AES256">AES256</option>
				<option value="BF">BF</option>
				<option value="CAST">CAST</option>
				<option value="CAST-cbc">CAST-cbc</option>
				<option value="DES">DES</option>
				<option value="DES3">DES3</option>
				<option value="DESX">DESX</option>
				<option value="IDEA">IDEA</option>
				<option value="RC2">RC2</option>
				<option value="blowfish">blowfish</option>
			</select>
			<br><br>
			<input type="submit" name="Decrypt" value="Decrypt">
		</form>
		<h4>Decrypted text:</h4>
		<textarea name="message" rows="10" cols="22">
<?php
if (isset($_POST["Decrypt"])) {
echo openssl_decrypt($_POST["dec_text"], $_POST["dec_method"], $_POST["dec_password"]);
}
?>
</textarea>
		</td>
	</tr>
	<tr>
		<td>
		<h1>Asymetric cryptography (RSA)</h1>
		<h2>Key Generation</h2>
		<?php
		
		
		?>
		</td>
	</tr>
</table>
</html>
