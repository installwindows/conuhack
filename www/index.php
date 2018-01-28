<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	try {

		// Undefined | Multiple Files | $_FILES Corruption Attack
		// If this request falls under any of them, treat it invalid.
		if (
			!isset($_FILES['upfile']['error']) ||
			is_array($_FILES['upfile']['error'])
		) {
			throw new RuntimeException('Invalid parameters.');
		}

		// Check $_FILES['upfile']['error'] value.
		switch ($_FILES['upfile']['error']) {
		case UPLOAD_ERR_OK:
			break;
		case UPLOAD_ERR_NO_FILE:
			throw new RuntimeException('No file sent.');
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			throw new RuntimeException('Exceeded filesize limit.');
		default:
			throw new RuntimeException('Unknown errors.');
		}

		// You should also check filesize here.
		if ($_FILES['upfile']['size'] > 1000000) {
			throw new RuntimeException('Exceeded filesize limit.');
		}

		// DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
		// Check MIME Type by yourself.
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		if (false === $ext = array_search(
			$finfo->file($_FILES['upfile']['tmp_name']),
			array(
				'jpg' => 'image/jpeg',
				'png' => 'image/png',
				'gif' => 'image/gif',
			),
			true
		)) {
		throw new RuntimeException('Invalid file format.');
		}

		// You should name it uniquely.
		// DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
		// On this example, obtain safe unique name from its binary data.
		if (!move_uploaded_file(
			$_FILES['upfile']['tmp_name'],
			'./uploads/' . $_FILES['upfile']['name'] . '.' . $ext
		)
	) {
	throw new RuntimeException('Failed to move uploaded file.');
		}

		echo 'File is uploaded successfully.';

	} catch (RuntimeException $e) {

		echo $e->getMessage();

	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Memsonian</title>
	</head>
	<body>
		<h1>Ayy</h1>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			Please don't upload anything as it's not working. <br>
			<input type="file" name="upfile" accept="image/*"> | <input type="submit" value="Send meme"> | <!--<div class="g-recaptcha" data-sitekey="6Ldx50IUAAAAAJXpkX2OiAK7Goby5_mif32VeXue"></div>-->
		</form>
		<h2>This meme might belongs in a <a href="museum.php">museum</a>!</h2>
	</body>
</html>
