<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
		<?php

		include('RC4.php');

		$string = "I am a secret textI am a secret textI am a secret textI am a secret textI am a secret textI am a secret textI am a secret text";
		$key    = "crypt_key";

		$crypt  = RC4::encrypt($key, $string);
		$dcrypt = RC4::decrypt($key, $crypt);

		echo "
		String: $string
		Key: $key

		Encripted Data: $crypt;
		Dercripted Data: $dcrypt;
		Success: " . ($string == $dcrypt ? 'true' : 'false') . "
		";

		?>
	</body>
</html>