<?php
	$FirstName = addslashes($_POST['first_name']);
	$LastName = addslashes($_POST['last_name']);
	$GuestBook = fopen("guestbook.txt", "ab");
	
		fwrite($GuestBook, $FirstName . ", " .$LastName . "\n");

	fclose($GuestBook);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guest Book</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/2.jpg');">
			<div class="wrap-login100">
			<h2>Thank you for signing our guest book!</h2>


			<a href="index.php" class="login100-form-btn"><button>Back to Guest book</button></a>


			  <div class="footer">fuzail qureshi</div>

			</div>

			
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


</body>
</html>