<?php
include "connect.php";

$sql = "SELECT * FROM product";
$stmt = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($stmt);

if(isset($_POST['add'])){
$error = [];

$id = $_POST['id'];
$name = $_POST['product_name'];
$type = $_POST['type'];
$price = $_POST['product_price'];
$Description = $_POST['product_Description'];
$product_qty = $_POST['product_qty'];

$dir_upload = 'uploads/';
if(!empty($_FILES['fileToUpload']['name'])){
	$image = $_FILES['fileToUpload'];
	move_uploaded_file($image['tmp_name'], $dir_upload . $image['name']);
}else {
	$image['name'] = 'photo-1623786159887-8a747d692e8b.jpg';
}
$cat= $_POST['product_code'];

$query = "INSERT INTO product (id, product_name,type, product_price,product_Description, product_qty, product_image,product_code) VALUES ('$id', '$name','$type', '$price','$Description','$product_qty','". $image["name"] . "', '$cat')";

if(empty($id)){
	$error['id'] = "ID can't be empty";
}

if(empty($name)){
	$error['product_name'] = "Name can't be empty";
}
if(empty($price)){
	$error['product_price'] = "Price can't be empty";
}
if(empty($Description)){
	$error['product_Description'] = "Description can't be empty";
}
if(empty($product_qty)){
	$error['product_qty'] = "qty can't be empty";
}
if(empty($image)){
	$error['fileToUpload'] = "Image can't be empty";
}
if(empty($cat)){
	$error['product_code'] = "Quantity can't be empty";
}

if(empty($error)){
	$stmt = mysqli_query($conn, $query);
	if($stmt == true){
		$_SESSION['massage'] = "Product Added Successfully";
	}else{
		$_SESSION['massage'] = "Error";
	}
}
}
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <?php require_once('sidebar.php') ?>
  <section class="home-section">
      <?php require_once('nav.php'); ?>


    <div class="home-content">
      <div class="overview-boxes">
          <div class="right-side">	
	
	<form method="post" name="form1" action="" enctype="multipart/form-data">
			<div class="col">
			
			<?php if(isset($_SESSION['massage'])) : ?>
		<div class="form-control" style="background:green;color:#fff;width:260px;">
				<?php echo $_SESSION['massage']; unset($_SESSION['massage']);?>
		</div>
		<?php endif; ?>
			
		<button type="submit" name="add" class="btn btn-success"><i class="bx bx-plus-circle"></i> Add New Product</button><br><br>	
						<label>Product ID  <label title="Mandatory Field">*</label></label>
						<input type="text" name="id" class="form-control" placeholder="ID" style="width:100%;"required autocomplete="off">
						<p><?= isset($error['id']) ? $error['id'] : ''; ?></p>
						<label>Product type  <label title="Mandatory Field">*</label></label>
						<select  name="type" class="form-control" placeholder="ID" style="width:100%;"required autocomplete="off">
					
						<option value="laptop"> laptop </option>
						<option value="PcGamin">PcGaming </option>
						<option value="hardwar"> hardwar </option>
						<option value="stoarge"> Storage </option>
					</select>
						
						<label>Product Name  <label title="Mandatory Field">*</label></label>
						<input type="text" name="product_name" class="form-control" placeholder="Name" style="width:100%;"required autocomplete="off">
						<p><?= isset($error['product_name']) ? $error['product_name'] : ''; ?></p>
						<label>Product Price  <label title="Mandatory Field">*</label></label>
						<input type="text" name="product_price" class="form-control" placeholder="Price" style="width:100%;"required autocomplete="off">
                        <p><?= isset($error['product_price']) ? $error['product_price'] : ''; ?></p>
                        <label>Product Description  <label title="Mandatory Field">*</label></label>
						<input type="text" name="product_Description" class="form-control" placeholder="Product Description" style="width:100%;"required autocomplete="off">
						<p><?= isset($error['product_name']) ? $error['product_name'] : ''; ?></p>
						<label>Product Quantity  <label title="Mandatory Field">*</label></label>
				     	<input type="text" name="product_qty" class="form-control" placeholder="Product Quantity" style="width:100%;"required autocomplete="off">
					    <p><?= isset($error['product_qty']) ? $error['product_qty'] : ''; ?></p>
						<label>Product Code </label>
				     	<input type="text" name="product_code" class="form-control" placeholder="Product Code" style="width:25%;"required autocomplete="off">
					    <p><?= isset($error['product_code']) ? $error['product_code'] : ''; ?></p>
					    
			</div>
			<div>
			
 <div class="form-group" style="float:left; width:35%;">
     <input type="file" name="fileToUpload" id="fileToUpload">
	 <p><?= isset($error['fileToUpload']) ? $error['fileToUpload'] : ''; ?></p>

  </div>
  </div>
			
	</form>
	
		  <table class="table table-hover">
	<thead>
    <tr>
	<th scope="col">ID</th>
      <th scope="col" style="text-align:center;">Name</th>
	  <th scope="col" style="text-align:center;">type</th>
      <th scope="col">Price</th>
      <th scope="col" style="text-align:center;">Quantity</th>
	  <th scope="col" style="text-align:center;">Product Description</th>
	  <th scope="col" style="text-align:center;">Image</th>
	  <th scope="col" style="text-align:center;">Code</th>

    

    </tr>
  </thead>
  <tbody>
  <?php
  $query = "SELECT * FROM product";
  $stmt2 = mysqli_query($conn,$query);
  $arr = mysqli_fetch_all($stmt2);
  foreach($arr as $ar) {
  ?>
    <tr>
	<th scope="row" style="text-align:center;"><?= $ar['0'] ?></th>
	  <td ><?= $ar['1'] ?></td>
      <td><?= $ar['2'] ?></td>
      <td style="text-align:center;"><?= $ar['3'] ?></td>
      <td><?= $ar['4'] ?></td>
      <td><?= $ar['5'] ?></td>
	  <td> <img src="uploads/<?= $ar['6'] ?>" width="90px" height="80px"></td>
      
      <td><?= $ar['7'] ?></td>
	  
	  <td><a href="edit_product.php?id=<?= $ar['0'] ?>" class="btn btn-success">EDIT</a>
	  <a href="delete_product.php?id=<?= $ar['0'] ?>" name="cancel"  class="btn btn-danger" onclick="return confirm('Are You Sure to Delete The Product ?');"><i class="far fa-times-circle"></i>&nbsp;DELETE</a></td>
		   
    </tr>
    
	<?php }?>
	   
  </tbody>
</table>
           </div>
        
      </div>
    </div>
  
</section>


   <script src="script.js"></script>


</body>
</html>


