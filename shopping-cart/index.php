<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  
  
  
  <style>
    .dropdown-item:hover{
         color: #3989ca;
         background-color: rgba(0, 0, 0, .85);
      }
      footer{
        background-color: rgba(0, 0, 0, .85);
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        }
        .f-logo{
        color:#FFFFFF;
        font-family: bebas kai;
        letter-spacing: 2px;
        padding: 5px 10px;
        font-size: 25px;
        }
        .up-section ul{
        font-family: calibri;
        margin: 0px;
        padding: 0px 20px;
        }
        .up-section h1{
        color:#9697a0;
        font-size: 20px;
        font-family: calibri;
        }
        .up-section ul li a{
        font-size: 16px;
        columns: #575a70;
      }
        .up-section,.down-section{
        display: flex;
        justify-content: space-between;
        padding: 3% 0px;
        margin: 5px;
        width: 80%;
        flex-wrap: wrap;
        }
      .up-section ul li p{
        font-size: 14px;
        color:#3292ffc2;
        line-height: 10px;
        } 
        .up-section{
        border-bottom: 1px solid #545562;
        }
        .follow-icon a{
        width: 35px;
        height: 35px;
        margin: 0px 5px;
        background-color: #424356;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .follow-icon {
        display: flex;
        }
        .follow-icon i{
        color:#FFFFFF;
        font-size: 14px;
        }
        .follow-icon a:nth-child(1):hover{
        background-color: blue;
      }
        .follow-icon a:nth-child(2):hover{
        background-color: rgb(238, 39, 115);
        }   
        .follow-icon a:nth-child(3):hover{
        background-color: rgb(40, 128, 0);
        }    
        .copyright{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 12px;
        color: #b3b3b3;
        }      
  </style>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"></i>&nbsp;&nbsp;Hot Threads</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <div class="dropdown" data-toggle="dropdown">
          <a class="nav-link active" href="index.php">Collections</a>
          <ul class="dropdown-menu" style="background-color: rgba(0, 0, 0, .85);">
                <a class="dropdown-item" href="#!" style="font-family: 'alfa slab one', cursive;
                color: #FFFFFF;">Men</a>
                <a class="dropdown-item" href="#!" style="font-family: 'alfa slab one', cursive;
                color: #ffffff">Women</a>
              </ul> 
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Review</a>
        </li>
         </ul>    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Products</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart<span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Sign In</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">      
      <!-- Section: Sidebar -->
    <section>

    <!-- Section: Filters -->
    <section>
     <!-- Section: Categories--> 
<section>

  <h5>Categories</h5>

  <div class="text-muted small text-uppercase mb-5">
    <p class="mb-3"><a href="#!" class="card-link-secondary">Jeans</a></p>
    <p class="mb-3"><a href="#!" class="card-link-secondary">Jeggings</a></p>
    
  </div>

</section>
 <!--Section: Categories -->
      <!-- Section: Condition--> 
      <section class="mb-4">
      
        <h6 class="font-weight-bold mb-3">Color</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="new">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="new">Light Blue</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="used">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="used">Navy Blue</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="collectible">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Dark Blue</label>
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <input type="checkbox" class="form-check-input filled-in" id="renewed">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Rose Smoke</label>
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <input type="checkbox" class="form-check-input filled-in" id="renewed">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Grey</label>
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <input type="checkbox" class="form-check-input filled-in" id="renewed">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Carolina Stone</label>
        </div>
  
      </section>
      <!-- Section: Condition -->
  
      <!-- Section: Price -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Price</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Under Rs.250</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Rs.250 to Rs.500</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="50100">Rs.500 to Rs.1000</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="100200" name="materialExampleRadios">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="100200">Rs.1000 to Rs.2000</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="200above" name="materialExampleRadios">&nbsp;&nbsp;&nbsp;&nbsp;
          <label class="form-check-label small text-uppercase card-link-secondary" for="200above">Rs.2000 & Above</label>
        </div>
      </section>
      <!-- Section: Price -->
  
      <!-- Section: Size -->
      <section class="mb-4" style="color: rgba(0, 0, 0, .85);">
  
        <h6 class="font-weight-bold mb-3">Size</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="34">
          <label class="form-check-label small text-uppercase card-link-secondary" for="34">30</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="36">
          <label class="form-check-label small text-uppercase card-link-secondary" for="36">32</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="38">
          <label class="form-check-label small text-uppercase card-link-secondary" for="38">34</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="40">
          <label class="form-check-label small text-uppercase card-link-secondary" for="40">36</label>
        </div>
            
      </section>
    </section> 
  </section>
  </div>
</nav>


   <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
                <button class="btn btn-info btn-block addItemBtn">Details</button>  
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

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
          pcode: pcode
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


     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="bootstrap.bundle.min.js"></script>
      <script src="bootstrap.min.js"></script>
      <script src="jquery.min.js"></script>
</body>
</html>