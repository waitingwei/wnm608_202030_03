<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>

    <?php include "../parts/navbar.php" ?>
	
	<div class="container">
		<div class="card soft">
			<h2>EYE SHADOW</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="card soft">
			<h2>LIPS</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=4">Product 4</a></li>
				<li><a href="product_item.php?id=5">Product 5</a></li>
				<li><a href="product_item.php?id=6">Product 6</a></li>
				<li><a href="product_item.php?id=7">Product 7</a></li>
				<li><a href="product_item.php?id=8">Product 8</a></li>
				<li><a href="product_item.php?id=9">Product 9</a></li>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>PERFUME</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=10">Product 10</a></li>
				<li><a href="product_item.php?id=11">Product 11</a></li>
				<li><a href="product_item.php?id=12">Product 12</a></li>
			</ul>
		</div>
	</div>

<div>
        <?php include "../parts/footer.php" ?>
        </div>
</body>
</html>