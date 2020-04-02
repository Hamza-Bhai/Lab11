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
				<form class="login100-form validate-form" method="POST" action="SignGuestBook.php">
					<span class="login100-form-logo">
						<img src="images/icn1.png" class="icon-image">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign our guest book
					</span>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="first_name" required placeholder="Enter First Name ">
						
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="last_name" required  placeholder="Enter Last Name">
						
					</div>

					

					<div class="container-login100-form-btn">
						
						<input class="login100-form-btn" type="submit" name="Submit">
					</div>

					<div class="text-center p-t-90">
						
							<a href="ShowGuestBook.php" class="txt1">Show Guest Book</a>
						
					</div>
				</form>
                        <div class="footer">fuzail qureshi</div>				
			</div>

		</div>

	</div>
	

	


</body>
</html>