<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			div.a_container{
				height:500px;
				background-color:red;
				/*border:1px solid red;*/
			}
			.a_row{
				height:50px;
				border:1px dashed green;
			}
			.a_col1{
				background-color:orange;
			}
			.a_col2{
				background-color:blue;
			}
			.a_col3{
				background-color:purple;
			}
		</style>

	</head>
	<body>
		<div class ="row a_row">
			<div class="col-4 a_col1"></div>
			<div class="col-4 a_col2"></div>
			<div class ="col-4 a_col3"></div>
		
		</div>

		<div class="container-fluid a_container">
			
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>
