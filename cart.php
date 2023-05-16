<?php 
//connect 
include('includes/connect.php');
include('functions/common_function.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatibal" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sooky</title>
	<!-- bootstrap css link -->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->

<div class="container-fluid p-0">
	<!-- first child -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid" style="height: 70px;">
    <a class="navbar-brand" href="#" style="font-size: 20px;">SOOKY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
        	<a href="cart.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i><sup><?php cartItem() ;?></sup></a>
        </li>

      </ul>
     
    </div>
  </div>
  <!-- calling cart function -->
 
</nav> 
<!--  forth-child taple       -->
<br>
<br>
<div class="container">
	<div class="row">

		<form action="" method="post">
		<table  class="table table-bordered text-center">
			<?php 

           
   $get_ip_add = getIPAddress();  
   $total_price = 0;
  $cart_query = "SELECT * from cart_details where ip_address = '$get_ip_add'";
  $result = mysqli_query($conn , $cart_query);
  $result_count = mysqli_num_rows($result);
  if($result_count>0){
 echo" <thead>
        <tr>
     <th>product title</th>
          <th>product image </th>
 <th>quantity</th>
          <th>total price</th>  
          <th>remove</th>
          <th colspan='2'>operations</th>

        </tr>
      </thead>
      </tbody>
      ";

  while($row=mysqli_fetch_assoc($result)){
  	$product_id = $row['produt_id'];
  	$select_products = "SELECT * from products where produt_id = $product_id";
  	$result_product = mysqli_query($conn , $select_products);
while($row_product_price = mysqli_fetch_array($result_product)){
	$product_price = array($row_product_price['product_price']);
	$price_table = $row_product_price['product_price'];
	$product_title = $row_product_price['product_title'];
	$product_img1 = $row_product_price['product_img1'];

	$product_values = array_sum($product_price);
	$total_price+=$product_values;

				?>
         
        
       <tr>
					<td><?php echo $product_title;  ?></td>
					<td><img src="./adminArea/product_images/<?php echo $product_img1;  ?>" width="70px" height="70px" object-fit="contain;" ></td>
					<td><input type="text" name="qty" class="form-input w-50"></td>
<?php    
     	 $get_ip_add = getIPAddress(); 
        if(isset($_POST['update_card'])){
        	$quantities = (int)$_POST['qty'];
        	$update_cart_query = "UPDATE 'cart_details' set quantity= $quantities where ip_address = '$get_ip_add'";
        	$result_product_quantity = mysqli_query($conn , $update_cart_query);
        	$total_price =(int) $total_price * $quantities;

        }

   ?>

					<td><?php echo $price_table;  ?>/-</td>
					<td><input type="checkbox" name="removeitem[]" value="<?php echo "$product_id" ?>"></td>
					<td>
						<!--<button class="bg-info px-3 py-2 border-1 mx-3">update</button>-->
						<input type="submit" name="update_card" value="update card" class="bg-info px-3 py-2 border-0 mx-3">
<input type="submit" name="remove_card" value="remove cart" class="bg-info px-3 py-2 border-0 mx-3">					</td>
				</tr>
				<?php 
}}}
else{
  echo "<h2 class = 'text-center text-danger'> the cart is empty </h2>";
}
				?>
			</tbody>
		</table>

		<!-- sub total -->
		<div class="d-flex mb-5">
      <?php 

           
   $get_ip_add = getIPAddress();  
   $total_price = 0;
  $cart_query = "SELECT * from cart_details where ip_address = '$get_ip_add'";
  $result = mysqli_query($conn , $cart_query);
  $result_count = mysqli_num_rows($result);
  if($result_count>0){
    echo "<h4 class='px-3'>sub total : <strong class='text-info'> $total_price</strong></h4>
<input type='submit' name='continue shopping' value='continue_shopping'class='bg-info px-3 py-2 border-0 mx-3'>          </td>
      <button class='bg-secondary px-3 py-2 border-1 mx-3 text-light'><a class='text-light' href='checkout.php' > check out</button>";

}
else {
  echo "     <input type='submit' name='continue shopping' value='continue_shopping'class='bg-info px-3 py-2 border-0 mx-3'>          </td>

";
}
if(isset($_POST['continue_shopping'])){
  echo "<script> open.window(index.php , '_self') </script>";
}

      ?>
			

		</div>
	</div>
</div>
</form>
<!-- function to remove items -->
<?php 
function remove_cart_item(){
global $conn;
if(isset($_POST['remove_card'])){
  foreach ($_POST['removeitem'] as $remove_id) {
    $delete_query = "DELETE from 'cart_details' WHERE produt_id = $remove_id ";
    $run_delete = mysqli_query($conn,$delete_query);
    if($run_delete){
     echo "<script> window.open('cart.php' , '_self')</script>";

    }
  }
}
}
echo $remove_item = remove_cart_item();



?>










<!-- Footer -->
<footer class="text-center text-lg-start bg-info text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>SOOKY
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">products</a>
          </p>
          <p>
            <a href="#!" class="text-reset">cart</a>
          </p>
          <p>
            <a href="#!" class="text-reset">sign up</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> UAE/Dubai</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">sooky.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- 
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>