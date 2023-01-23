<?php session_start(); include 'header.php';?>
<?php
 

$id = $_GET['id'];

if(empty($_GET['id'])) {
	header("Location: home.php");
}?>

 <html>
<head>
<link rel="stylesheet" href="infos.css">
<title>Info</title>

</head>
<body>

    <div id="message"></div>

<?php $conn = new mysqli("localhost","root","","matjre");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
			$stmt = $conn->prepare("SELECT product.* FROM  product where id='$id' and  type='laptop'");

			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
  		?>
			

<div class="info">
<div class="info-cat">
<img src="admin/uploads/<?= $row['product_image'] ?>" alt="image">
</div>
<div class="info-cat">
<h1 class="text-success"><?= $row['product_name'] ?></h1>
<h1 class="text"><?= $row['product_Description'] ?></h1>
<p style="color:red;">Price: <?= $row['product_price'] ?></p>




 <form action="" class="form-submit">
<input type="number" min="1" max="10000" class="pqty" value="1"><br>
<input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pdes" value="<?= $row['product_Description'] ?>">
                <input type="hidden" class="pimage" value="admin/uploads/<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
<br>
 <button class="btn btn-success  addItemBtn">Add to cart</button>
</form>
<div class="info-text">
<h6><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg><i class="bi bi-truck"></i> Free Delivery On Orders Over 1000$</h6>
<h6><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg><i class="bi bi-truck"></i> Add 10$ Delivery Service </h6>
</div>
		  

</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      
      var pprice = $form.find(".pprice").val();
      
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
         
          pqty: pqty,
          pimage: pimage,
          pcode: pcode,
          
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</div>


</body>
</html>
<?php include "footer.php"; ?>