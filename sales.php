<?php
	require 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width', initial-scale=1, maximum-scale=1.0>
	<title>POS</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'/>
    <link rel='stylesheet' href='css/style.css'/>
		<script src='js/jquery2.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='main.js'></script>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class='container-fluid'>
		<div class='row'>

			<!--Search Bar and Add Button-->
			<div class='col-md-8'></div>
			<div class='col-md-2' style='text-align: right; font-size: 20px;'>Search  </div>
			<div class='col-md-2'> <input type='text' name='sales_search' id='sales_search' class='form-control'></div>
			<!--Search Bar and Add Button End-->

			<div class='col-md-12'><br></div><!--Space-->

			<!--Customer Data-->
			<div class='col-md-1'></div>
			<div class='col-md-10'>
				<div id='get_sales'></div>
				<!--<table class='table'>
					<thead>
						<tr>
							<th>Created By</th>
							<th>Customer</th>
							<th>Total</th>
							<th>Paid</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>00031</td>
							<td>customer01</td>
							<td>2500</td>
							<td>2500</td>
							<td>
								<div class='dropdown'>
								  <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
								    <span class='glyphicon glyphicon-cog'></span>
								    Action
								    <span class='caret'></span>
								  </button>
								  <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
								    <li><a href='#'>Generate Receipt</a></li>
								</div>
							</td>
						</tr>
						
					</tbody>
				</table>-->
			</div>
			<div class='col-md-1'></div>
			<!--Customer Data Ends-->

			<div class='col-md-9'></div>
			<div class='col-md-2' style='text-align: right;'>
				<nav aria-label='Page navigation'>
				  <ul class='pagination' id='sales_page'>
				    <!--<li><a href='#'>1</a></li>
				    <li><a href='#'>2</a></li>-->
				  </ul>
				</nav>
			</div>
			<div class='col-md-1'></div>

		</div>
	</div>
</body>
</html>