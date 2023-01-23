<?php
include "connect.php";

$id = $_GET["id"];

$res=mysqli_query($conn,"select * from product where id=$id");
$row = mysqli_fetch_assoc($res);

if(isset($_POST['sav'])) {
	$id = (int)$_POST['id'];
$name = $_POST['product_name'];
$price = $_POST['product_price'];
$type = $_POST['type'];
$Description = $_POST['product_Description'];
$product_qty = $_POST['product_qty'];

$dir_upload = 'uploads/';
if(!empty($_FILES['fileToUpload']['name'])){
	$image = $_FILES['fileToUpload'];
	move_uploaded_file($image['tmp_name'], $dir_upload . $image['name']);
}else {
	$image['name'] = $row['product_image'];
}
$product_code= $_POST['product_code'];
	
	
	$query = "UPDATE product SET product_name = '" . $name . "' ,type = '" . $type . "' , product_price = '" . $price . "' ,product_Description = '" . $Description  . "', product_qty = '" . $product_qty  . "',product_image = '" . $image['name'] ."',product_code = '" . $product_code . "' WHERE id = " . $_GET["id"];
	
	$stmt = mysqli_query($conn,$query);
	
	if($stmt == true) {
		$_SESSION['massage'] = "Update Successfully";
		header("Location:product.php");
		exit();
	} else {
		$_SESSION['massage'] = "Error";
	}
}

?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php require_once('sidebar.php') ?>

  <section class="home-section">
  
          
	    <div class="home-content">
      <div class="overview-boxes">
          <div class="right-side">
		  
	<form method="post" name="form1" action="" enctype="multipart/form-data">
	<?php if(isset($massage)) : ?>
	<div class="form-control" style="background:green;color:#fff;">
		<?php echo $massage; ?>
	</div>
	<?php endif; ?>
			<div class="col">
					<label>Product ID</label>
						<input type="text" name="id" class="form-control" placeholder="ID" style="width:600px;" value="<?= $row['id'] ?>"required autocomplete="off"><br>
						<label>Product Name</label>
						<input type="text" name="product_name" class="form-control" placeholder="Name" style="width:600px;" value="<?= $row['product_name'] ?>"required autocomplete="off"><br>
						<label>Product type  <label title="Mandatory Field">*</label></label>
						<select  name="type" class="form-control" placeholder="ID" style="width:100%;"required autocomplete="off">
						<option value="laptop"> laptop </option>
						<option value="PcGamin">PcGaming </option>
						<option value="hardwar"> hardwar </option>
						<option value="stoarge"> Storage </option>
					</select>
						<label>Product Price</label>
						<input type="text" name="product_price" class="form-control" placeholder="Price" style="width:600px;" value="<?= $row['product_price'] ?>"required autocomplete="off"><br>
						<label>Product Description</label>
						<input type="text" name="product_Description" class="form-control" placeholder="Product Description" style="width:600px;" value="<?= $row['product_Description'] ?>"required autocomplete="off"><br>
						<label>Product Quantity  <label title="Mandatory Field">*</label></label>
				     	<input type="number" name="product_qty" class="form-control" placeholder="Product Quantity"  value="<?= $row['product_qty'] ?>" style="width:25%;"required autocomplete="off">
						 <label>Product Code </label>
				     	<input type="text" name="product_code" class="form-control" placeholder="Product Code" style="width:25%;" value="<?= $row['product_code'] ?>" required autocomplete="off">
						<br>
						<input type="file" name="fileToUpload" id="fileToUpload" value="<?  $row['product_image'] ?>">
						<br><br>
						
						<button type="submit"  name="sav" class="btn btn-primary">Update</button>
			</div>
	</form>
	
	  
		 </div></div></div>

	</section>
		


  <script src="script.js"></script>

</body>


</html>
