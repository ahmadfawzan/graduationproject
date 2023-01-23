
<?php

session_start();
include 'header.php';


$server="localhost";
$usnm="root";
$psw="";
$DB_NM="matjre";

$conn = new mysqli($server, $usnm, $psw, $DB_NM);
if ($conn->connect_error) {
  die("Not Connected :(  " . $conn->connect_error);
}
else {


  $sql="SELECT * FROM  product Where type='stoarge' ";
$res=$conn ->query($sql);
if($res-> num_rows >0){
	$product="";
	while($row=$res ->fetch_assoc()){
		$product=$product."<div class='main-pro'>

<p class='text-success'>".$row["product_name"]."</p><hr>
<img src='admin/uploads/".$row["product_image"]."'><br>
<p style='color:red;'>Price: ".$row["product_price"]."$</p><hr>
              <form action='' class='form-submit'>
			  
<p>Quantity:</p>
<input type='number' class='form-control pqty' min='1' max='10000' value='1'><br>
<input type='hidden' class='pid' value='".$row['id']."'>
<input type='hidden' class='pid' value='".$row['type']."'>
                <input type='hidden' class='pname' value='".$row['product_name']."'>
                <input type='hidden' class='pprice' value='".$row['product_price']."'>
                <input type='hidden' class='pimage' value='admin/uploads/".$row['product_image']."'>
                <input type='hidden' class='pcode' value='".$row['product_code']."'>
                
                <button class='btn btn-success addItemBtn' style='width:50%;'>Add to cart
				<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
  <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
</svg><i class='bi bi-cart'></i></button>
<a href='infost.php?id=".$row["id"]."'><button type='button' class='btn btn-success' style='width:48%;'>Buy Now</button>
</a>              </form>

</div><!-- End Div Mainpro-->";

}


}else
{ $product = " <p style='text-align:center;font-size:50px;color:red;'>Sorry!!..No Items...Will be Added Soon</p>";
}
$conn->close();
}

?>
<html>
<head>
<title>Index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="main.css">

</head>
<body>

<div class="main">
  <div id='message'></div>
<?php echo $product; ?>

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

</body>
</html>
<?php include "footer.php"; ?>