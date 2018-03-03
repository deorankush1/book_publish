<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>author</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<form method="Post" action="../BookFormat/book_main.php" enctype="multipart/form-data" > 
				<center>
				<br><label> Book Detail </label></br>
				
				<div class="center">
					<input type ="text" name ="book_name" placeholder="Enter Book Name" required> 
				    <input type ="int" name="p_year" placeholder="Enter Publication Year" required>
					<input type="file" name="image" required> 
					
				</div>
		
				
				<br><input type="Submit" value='submit' name='submit'></br>
				</center>
	   		</form>
		</div>

	</body>
</html>
