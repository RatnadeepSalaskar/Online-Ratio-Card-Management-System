<?php
require('top.inc.php');
isAdmin();
$coupon_code='';
$coupon_type='';
$coupon_value='';
$cart_min_value='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from coupon_master where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$coupon_code=$row['coupon_code'];
		$coupon_type=$row['coupon_type'];
		$coupon_value=$row['coupon_value'];
		$cart_min_value=$row['cart_min_value'];
	}else{
		header('location:coupon_master.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$coupon_code=get_safe_value($con,$_POST['coupon_code']);
	$coupon_type=get_safe_value($con,$_POST['coupon_type']);
	$coupon_value=get_safe_value($con,$_POST['coupon_value']);
	$cart_min_value=get_safe_value($con,$_POST['cart_min_value']);
	
	$res=mysqli_query($con,"select * from coupon_master where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="COUPON CODE ALREADY EXIST";
			}
		}else{
			$msg="COUPON CODE ALREADY EXIST";
		}
	}
	
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update coupon_master set coupon_code='$coupon_code',coupon_value='$coupon_value',coupon_type='$coupon_type',cart_min_value='$cart_min_value' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into coupon_master(coupon_code,coupon_value,coupon_type,cart_min_value,status) values('$coupon_code','$coupon_value','$coupon_type','$cart_min_value',1)");
		}
		header('location:coupon_master.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>OFFER FORM</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Offer Code</label>
									<input type="text" name="coupon_code" placeholder="Enter offer code" class="form-control" required value="<?php echo $coupon_code?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Offer Value</label>
									<input type="text" name="coupon_value" placeholder="Enter offer value" class="form-control" required value="<?php echo $coupon_value?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Offer Type</label>
									<select class="form-control" name="coupon_type" required>
										<option value=''>Select</option>
										<?php
										if($coupon_type=='Percentage'){
											echo '<option value="Percentage" selected>Percentage</option>
												<option value="Rupee">Rupee</option>';
										}elseif($coupon_type=='Rupee'){
											echo '<option value="Percentage">Percentage</option>
												<option value="Rupee" selected>Rupee</option>';
										}else{
											echo '<option value="Percentage">Percentage</option>
												<option value="Rupee">Rupee</option>';
										}
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Quantity Min Value</label>
									<input type="text" name="cart_min_value" placeholder="Enter Quantity min value" class="form-control" required value="<?php echo $cart_min_value?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>