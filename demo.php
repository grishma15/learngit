<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css">
	<title>oop and pdo</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form method="post" action="">
					<table class="table">
						<thead>
							<tr>
								<th>Type</th>
								<th>Name</th>
								<th>Lable</th>
								<th>Alias</th>
								<th>Class</th>
								<th>Attribute</th>
								<th>Pre</th>
								<th>Post</th>
								<th>Required</th>
								<th>Defult</th>
								<th>Placeholder</th>
								<th>Action <i class="fa fa-plus add"></i></th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
						<tfoot><input type="submit" name="submit" value="ADD"></tfoot>
					</table>
				</form>
			</div>
		</div>
	</div>
	<table>

		<tbody class="abc" style="display: none;">
			<tr>
				<td>
					<select name="type[]" class="form-control">
						<option value="">text</option>
						<option value="">password</option>
						<option value="">date</option>
						<option value="">radio</option>
						<option value="">checkbox</option>
						<option value="">textarea</option>
						<option value="">multi select</option>
						<option value="">select</option>
					</select>
				</td>
				<td><input type="text" class="form-control" name="name[]" placeholder="Name"></td>
				<td><input type="checkbox" class="form-control" name="lable[]"></td>
				<td><input type="text" class="form-control" name="alias[]" placeholder="Alias"></td>
				<td><input type="text" class="form-control" name="class[]" placeholder="class"></td>
				<td><input type="text" class="form-control" name="attribute[]" placeholder="Attribute"></td>
				<td><input type="text" class="form-control" name="pre[]" placeholder="Pre"></td>
				<td><input type="text" class="form-control" name="post[]" placeholder="Post"></td>
				<td>
					<select name="required[]" class="form-control">
						<option value="">Yes</option>
						<option value="">No</option>
					</select>
				</td>
				<td><input type="text" class="form-control" name="defult[]" placeholder="Defult"></td>
				<td><input type="text" class="form-control" name="placeholder[]" placeholder="Placeholder"></td>
				<td><i class="fa fa-minus minus"></i></td>

			</tr>
		</tbody>
	</table>
	<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> -->
	<script src="./assets/js/jquery-3.3.1.min.js"></script>

	<script src="./assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			var tr = $(".abc").html();
				$("tbody").append(tr);

			$(document).on("click",".add",function(){
				// alert();
				$("tbody").append(tr);
			});

			$(document).on("click",".minus",function(){
				$(this).parents("tr").remove();
			});
		});
	</script>
</body>
</html>
<!-- if condition check karvanu che one tr hovu joye -->