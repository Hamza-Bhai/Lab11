
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
			<?php
             	$file = "guestbook.txt";
                $f = fopen($file, "r") or exit("Unable to open file!");

                echo "<pre>";

             	while(!feof($f))
				{
		
             
             		 echo "<tr>". fgets($f)."<br/>";
				}

				fclose($f);
?>



			<a href="index.php" class="login100-form-btn"><button>Back to Guest book</button></a>



			   <div class="footer">fuzail qureshi</div>

			</div>

			
		</div>

	</div>
	

	


</body>
</html>