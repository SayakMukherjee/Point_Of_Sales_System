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
    <link rel='stylesheet' href='css/select2.min.css'/>
    <link rel='stylesheet' href='css/style.css'/>
		<script src='js/jquery2.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='js/select2.min.js'></script>
		<script src='main.js'></script>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class='container-fluid'>
		<div class='row'>
			<!--Bill Section-->
			<div class='col-md-6' style='border-right:  solid #000000;'>
				
				<div class="row">
					
					<div class='col-md-10'>
						<p  style='text-align: left; padding-left: 8px; font-size: 20px;'>Customer Name</p>
					</div>
					<div class='col-md-2'><button class='btn btn-default' data-toggle='modal' data-target='#CustomerModal'><span class='glyphicon glyphicon-user' aria-hidden='true'></span></button></div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12'>
						
						<select class='form-control' name='custNameDrop' id='custNameDrop'>
						  <!--Dummy Data-->
						  <!--<option>customer01</option>
						  <option>customer02</option>-->
						  <!--Dummy Data-->
						</select>

					</div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12'>
						<div class='row'>
							<div class='col-md-1'></div>
							<div class='col-md-4'>PRODUCT</div>
							<div class='col-md-2'>PRICE</div>
							<div class='col-md-3'>QUANTITY</div>
							<div class='col-md-2'>TOTAL</div>
						</div>
					</div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12'>
						<div class='billList'>
							<div class='row'>
								<div id='billDetails'></div>
								<!--Dummy Bill-->
								<!--<div class='col-md-12'>	
									<div class='panel panel-default' style='border: none; padding: 0px; margin-bottom: 1px;'>
										<div class='panel-body' style='color: #000;'>
											<div class='row'>
												<div class='col-md-5'>
												<button class='btn btn-danger btn-sm' id='billRemove' pid='1'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>
												product01
												</div>
												<div class='col-md-2'>200</div>
												<div class='col-md-3'>
												<div class='row'>
													<div class='col-md-4'>
														<button class='btn btn-primary btn-sm' id='inc_dec' change='1'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button>
													</div>
													<div class='col-md-4'>
														<input type='text' name='prodQuan' id='prodQuan' class='form-control'>
													</div>
													<div class='col-md-4'>
														<button class='btn btn-primary btn-sm' id='inc_dec' change='2'><span class='glyphicon glyphicon-minus' aria-hidden='true'></span></button>
													</div>
												</div>
												</div>
												<div class='col-md-2'>
													<input type='text' name='prodTotal' id='prodTotal' class='form-control' disabled value='800'>
												</div>
											</div>
										</div>
									</div>
								</div>-->
								<!--Dummy Bill-->
							</div>
						</div>
					</div>

					<div class='col-md-12'><hr></div> <!--Space-->

					<div id="get_total"></div>
					<!--<div class='col-md-9' style='text-align: right;'><p style='font-size: 20px;'>TOTAL: Rs</p></div>
					<div class='col-md-3' style='text-align: left;'><input type='text' name='total' id='total' class='form-control' value='3300' disabled></div>

					<div class='col-md-9' style='text-align: right;'><p style='font-size: 20px;'>TAX: </p></div>
					<div class='col-md-3' style='text-align: left;'><input type='text' name='tax' id='tax' class='form-control' value='14' disabled></div>

					<div class='col-md-9' style='text-align: right;'><p style='font-size: 20px;'>DISCOUNT: </p></div>
					<div class='col-md-3' style='text-align: left;'><input type='text' name='discount' id='discount' class='form-control' val='0'></div>

					<div class='col-md-9' style='text-align: right;'><p style='font-size: 20px;'>GRAND TOTAL: Rs</p></div>
					<div class='col-md-3' style='text-align: left;'><input type='text' name='totalBill' id='totalBill' class='form-control' value='' disabled></div>

					<div class='col-md-12'><br></div> 

					<div class='col-md-6' style='text-align: right;'><button class='btn btn-danger btn-lg'>CANCEL</button></div>
					<div class='col-md-6' style='text-align: left;'><button class='btn btn-primary btn-lg'>PAY</button></div>-->

				</div>
				
			</div>

			<!--Product Section-->
			<div class='col-md-6'>
				
				<div class='row'>
					<div class='col-md-12' style='display: block; float: left;'>
						<div id='get_catSort'></div>
						<!--<button class='btn btn-primary btn-lg' id='catSort' cat_id='0'><span class='glyphicon glyphicon-home'></span></button>
						<button class='btn btn-primary btn-lg' id='catSort' cat_id='0' >Category01</button>
						<button class='btn btn-primary btn-lg' id='catSort' cat_id='0' >Category02</button>-->
					</div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12'>
						<input type='text' name='bill_ProdSearch' id='bill_ProdSearch' class='form-control' placeholder='Search'>
						
					</div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12'>
						<div class='productList'>
							<div class='row'>
								<div id='get_BillProd'></div>
								<!--<div class='col-md-3'>
									<a href='#' class='btn btn-info prodPanel'>Product0123563</a>	
								</div>
								<div class='col-md-3'>
									<a href='#' class='btn btn-info prodPanel'>Product0123563</a>	
								</div>-->

							</div>
						</div>
					</div>

					<div class='col-md-12'><br></div> <!--Space-->

					<div class='col-md-12' style='display: block; float: right;'>
						<nav aria-label='Page navigation' style='display: block; float: right;'>
						  <ul class='pagination' id='get_BillProdPages'>
						    <!--<li><a href='#'>1</a></li>
						    <li><a href='#'>2</a></li>
						    <li><a href='#'>3</a></li>-->
						  </ul>
						</nav>
					</div>
					
				</div>

			</div>

			<!--Customer Modal -->
			<div class='modal fade' id='CustomerModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
			  <div class='modal-dialog' role='document'>
			    <div class='modal-content'>
			      <div class='modal-header'>
			        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			        <h4 class='modal-title' id='CustomerModalLabel'>Add Customer</h4>
			      </div>
			      <div class='modal-body'>
			        <form>
			        	<div class='form-group'>
			        		<label for='custName'>Name</label>
			        		<input type='text' name='custName' class='form-control' id='custName' placeholder='Name'>
			        	</div>
			        	<div class='form-group'>
			        		<label for='custPhone'>Phone</label>
			        		<input type='text' name='custPhone' class='form-control' id='custPhone' placeholder='Phone'>
			        	</div>
			        	<div class='form-group'>
			        		<label for='custEmail'>Email</label>
			        		<input type='email' name='custEmail' class='form-control' id='custEmail' placeholder='Email'>
			        	</div>
			        	<div class='form-group'>
			        		<label for='custDiscount'>Discount</label>
			        		<input type='text' name='custDiscount' class='form-control' id='custDiscount' placeholder='Discount'>
			        	</div>
			        	<button type='submit' class='btn btn-primary' id='custSubmit'>SUBMIT</button>
			        </form>
			      </div>
			      <div class='modal-footer'>
			        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!--Customer Modal Ends-->

			<!--Payment Modal-->
			<div class="modal fade" tabindex="-1" role="dialog" id="PaymentModal">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Payment</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-12">
			        		<h1>Total Amount :</h1> <input type="text" class="form-control" name="payTotal" id="payTotal" readonly value="200">
			        	</div>
			        	<div class="col-md-12"><br></div>
			        	<div class="col-md-12" id="cashPay">
			        		<div id="form-group">
			        			<label for="Cash">Cash Received</label>
			        			<input type="text" name="Cash" id="Cash" class="form-control">
			        		</div>
			        		<div id="form-group">
			        			<label for="changeDue">Due</label>
			        			<input type="text" name="changeDue" id="changeDue" class="form-control" readonly>
			        		</div>
			        	</div>
			        	<div class="col-md-12"><br></div>
			        	<div class="col-md-1">
			        		<button type='submit' class='btn btn-primary' id="compPay">SUBMIT</button>
			        	</div>
			        	<div class="col-md-11"><br></div>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<!--Payment Modal Ends-->

		</div>
	</div>

	<script type='text/javascript'>
		$(document).ready(function(){
			$('#custNameDrop').select2();

		});

	</script>
</body>
</html>