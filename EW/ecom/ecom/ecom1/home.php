<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="static/style.css">

 </head>

<body>
	<div class="container-sm">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:linear-gradient(to right,darkslategrey,dimgrey);">
			<a href="./index.php"><h5 class="navbar-brand text-warning mr-4">Electronic Gadgets</h5></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link text-light ml-3 mr-3"  href="./index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light ml-3 mr-3" href="./product.php">Product</a>
				</li>
                <li class="nav-item">
                <a href="cart.php" class="nav-item nav-link active">
                    <h6 class="px-5 cart">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h6>
                </a>
				</li>
			</ul>
        </nav>
    </div>
</body>
</html>