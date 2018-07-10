<html>
<head></head>
<body>

<?php
include"db-connection.php";
session_start();
$action = $_REQUEST['action'];
@$p_id   = trim($_REQUEST['p_id']);


//$_SESSION['product_cart'] = array();
if($action == 'add'){
	 @$quantity = $_REQUEST['quantity'];
	 @$unit   = $_REQUEST['unit'];
	 if(!empty($p_id)&&!empty($quantity)&&!empty($unit)){
		 $query = "SELECT * FROM `f_crops_stock` where `id` = '".$p_id."'";
		 $rs = mysqli_query($conn,$query) ;
		 $product_data = mysqli_fetch_assoc($rs);
		 
		 $product = array("p_id"=>$product_data['id'],"id"=>$product_data['crop_id'],"price"=>$product_data['exp_price']*$quantity,"image"=>$product_data['img_url'],"quantity"=>$quantity,"title"=>$product_data['eng_name'],"qty_unit"=>$unit,"exp_price"=>$product_data['exp_price'],"exp_price_unit"=>$product_data['exp_price_unit'],"f_id"=>$product_data['farmer_id']);
		 
		if(isset($_SESSION['product_cart']) && !empty($_SESSION['product_cart']))
		{
			if(!array_key_exists($product_data['id'],$_SESSION['product_cart']))
			{
		   
				$_SESSION['product_cart'][$product_data['id']] = $product;
		   
			}
			else{
				
				$_SESSION['product_cart'][$product_data['id']]['price'] = $_SESSION['product_cart'][$product_data['id']]['price'] + ($product_data['exp_price']*$quantity);
				$_SESSION['product_cart'][$product_data['id']]['quantity'] = $_SESSION['product_cart'][$product_data['id']]['quantity']+$quantity;
			}		
		}
		else{
		  $_SESSION['product_cart'][$product_data['id']] = $product;
		}
	}	
}
if($action == "delete"){
	unset($_SESSION['product_cart'][$p_id]);
}

if($action == "empty"){
	session_destroy();
}
?>

 <?php
                 $total = 0;
                ?>
<!--Shopping Cart table-->
<div class="table-responsive">
    <table class="table product-table ">
        <!--Table head-->
        <thead>
            <tr>
               
                <th></th>
                 <th><center>Product</center></th>
               <!-- <th>Color</th>
                <th>Size</th>-->
                
                <th><center>Quantity</center></th>
                <th><center>Price</center></th>
                <th><center>Amount</center></th>
                <th></th>
            </tr>
        </thead>
        <!--/Table head-->

        <!--Table body-->
        <tbody >

        <?php 

      if(isset($_SESSION['product_cart']))
      {
      foreach($_SESSION['product_cart'] as $data)
      {
      ?>
            <!--First row-->
            <tr>
                <th scope="row">
                    <img src="../<?php echo $data['image']; ?>" alt="" class="img-fluid " style="max-width: 150px;max-height: 150px;" >
                </th>
                <td><br>
                    <h5><strong><?php echo $data['title']; ?></strong></h5>
                    <br>
                    <!--<p class="text-muted">by FifeSteps</p>-->
                </td>
               <!-- <td>Blue</td>
                <td>38</td>-->
               
                <td>
                   
             
              <h5><strong><br><?php echo $data['quantity']." ".$data['qty_unit'];?> <br> </strong></h5>                 
                </td>

                 <td><h5><br><?php echo "₹ ".$data['exp_price']." per ".$data['exp_price_unit']." * ".$data['quantity']." ".$data['qty_unit']; ?><br></h5></td>

                <td><h5><br>₹ <?php echo $data['price'];?><br></h5></td>
                <td><br>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item" onclick="remove_item('<?php echo $data['p_id']; ?>');">X
                    </button><br>
                </td>
            </tr>
            <!--/First row-->
 <?php
      $total += $data['price'];
       } 

       } 

       else
       {
        ?><tr>
         
           <th align="center" colspan="6" ><br>
          <h5  style="opacity: 0.5;" align="center">No Item(s) in cart..</h5>
          <br>
        </th>
        </tr>
        <?php
       }

      ?>
         

            <!--Fourth row-->
            <tr>
                <td colspan="3"></td>
                <td>
                    <h4><strong>Total</strong></h4></td>
                <td>
                    <h4><strong>₹ <?php echo $total ?></strong></h4></td>
                <td colspan="3"><button type="button" class="btn btn-primary">Check Out  <i class=""></i></button></td>
            </tr>
            <!--/Fourth row-->

        </tbody>
        <!--/Table body-->
    </table>
</div>
<!--/Shopping Cart table-->

</body>
</html>