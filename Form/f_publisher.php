<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Publisher</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<form method="Post" action="../PeopleTypes/p_publisher.php" enctype="multipart/form-data" > 
				<br><label> Publisher Detail </label></br>
		
				<div class="row">
					<input type = "text" name = "fname" placeholder = "Enter  First Name" required>
	   				<input type = "text" name = "lname" placeholder="Enter  Last Name" required>
	   				<input type = "Bigint" name = "mobile" placeholder="Enter Mobile Number" required>
	   				<input type = "text" name = "city" placeholder="Enter City" required>
				</div>
		
				<div class = "row">
					<input type = "text" name = "state" placeholder="Enter State" required>
	   				<input type = "text"  name ="country" placeholder="Enter Country" required>
	   				<input type = "int" name="postcode" placeholder="Enter Post Code" required>
	   				<input type = "text" name="books_count" placeholder="Enter No. Of books_count" required>
	   			</div>

	   			<div class = "row">
					<input type = "text" name = "publisher_house" placeholder="Enter Publisher House" required>
				</div>	
	   		    
	   		    
				<br><center><input type="Submit" value='submit' name='submit'></center></br>

	   		</form>
		</div>

	</body>
</html>