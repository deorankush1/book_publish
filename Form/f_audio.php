<?php
         include_once '/Applications/XAMPP/xamppfiles/htdocs/Book_Industry/db.php';
		 use db\DB;
         ?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<title>Audio</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="Post" action="../BookFormat/audio.php" enctype="multipart/form-data" > 
						<br><label> Book Detail </label></br>
						<select class="form-control" name="book_main">

							<?php

			                  	$query = "SELECT name from book_main";
			            		$result = mysqli_query($conn1,$query);

			        			while ($row = mysqli_fetch_assoc($result))
			        			{
			            			
			            			?>							
									 	<option  value="<?php echo $row['name'];?>"><?php echo $row['name']; ?></option>
				            		<?php
			            		}
							?>
		            	</select>
						<br><label> Author Detail </label></br>
						<select class="form-control" name="author_name">

							<?php

			                  	$query = "SELECT fname,lname from person where person_type='Author'";
			            		$result = mysqli_query($conn1,$query);

			        			while ($row = mysqli_fetch_assoc($result))
			        			{
			            			
			            			?>							
									 	<option  value="<?php echo $row['fname']." ".$row['lname']; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
				            		<?php
			            		}
							?>
		            	</select>

		            	<br><label> Illustrator Detail </label></br>
						<select class="form-control" name="illustrator_name">

							<?php

			                  	$query = "SELECT fname,lname from person where person_type='Illustrator'";
			            		$result = mysqli_query($conn1,$query);

			            		while ($row = mysqli_fetch_assoc($result))
			            		{
			            			
				         			?>
										<option   value="<?php echo $row['fname']." ".$row['lname']; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
				            		<?php
			            		}
							?>
		            	</select>

						
						<br><label> Editor Detail </label></br>
						<select class="form-control" name="editor_name">

							<?php

		                      		$query = "SELECT fname,lname from person where person_type='Editor'";
			            			$result = mysqli_query($conn1,$query);

			            			while ($row = mysqli_fetch_assoc($result))
			            			{
				            			?>
										  <option   value="<?php echo $row['fname']." ".$row['lname']; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
				            			<?php
			            			}
							?>
		            	</select>


		            	<br><label> Publisher Detail </label></br>
						<select class="form-control" name="publisher_name">

						    <?php

		                  		$query = "SELECT fname,lname from person where person_type='Publisher'";
		            			$result = mysqli_query($conn1,$query);

		            			while ($row = mysqli_fetch_assoc($result))
		            			{
		            			
			            		    ?>
									
										<option    value="<?php echo $row['fname']." ".$row['lname']; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
			            			<?php
		            			}
						    ?>
		            	</select>


		            	<br>

		            	Book Size   
		            	<div class=form-group><input  name="b_weight"  class="form-control" type = "text" placeholder = "Enter Book Size">
		            	</div> 
		            	Book Voice
		            	<div class=form-group><input  name="b_voice"  class="form-control" type = "text" placeholder = "Enter Book Size">
		            	</div> 

		   				<!-- Recorded Voice 
		   				<div class=form-group><input class="form-control" type = "text" placeholder="Enter Recorded Voice">
		   				</div> -->

		   				Book Cost     <div   class=form-group><input class="form-control" name="b_price" type = "int" placeholder="Enter Book Cost"></div>

		   				Completion Time <div  class=form-group><input class="form-control" name="b_completion_time" type = "text" placeholder="Enter Completion Time"></div>
			
			

						<div class=form-group> <input class="form-control btn btn-info btn-block" type="Submit" value='submit' name='submit'></div>
					</form>
			    </div>
		    </div>
	    </div>
	</body>
</html>