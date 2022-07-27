<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" href="Styles/style.min.css">
	<!-- JQuery -->
	<script src="JQuery/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Title -->
<title>E-Store</title>
</head>

<body>


	<!-- Put Navbar Here! -->
	<div>
		<?php include('sections/topbar.php') ?>
	</div>

	<div class="main-flex">

		<div class="content-main">

			<div class="sidebar-container">
				<?php include('sections/sidebar.php') ?>

				<!-- DASHBOARD CONTENT HERE -->
				<div class="sidebar-content">
					<div class="consultation">
						<div class="container d-flex justify-content-between">
							<div class="row">

							<?php
							#generate random string
                                function generateRandomString($length = 5) {
                                    return substr(str_shuffle(str_repeat($x='abcdefghijklmnoyzABCDEFGHIJKLMNOPQRSYZ', ceil($length/strlen($x)) )),1,$length);
                                }
								include "../connection.php";
								$result = mysqli_query($con , "SELECT * FROM medicines");
								while ($row = mysqli_fetch_array($result))
								{
							?>


								<div class="col-12 col-sm-6 col-md-4 col-lg-3">
									<div class="card card-body mt-3">
										<div
											class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
											<div class="mr-2 mb-3 mb-lg-0"> 
												<img src="https://source.unsplash.com/300x300?medicine,
											<?php										
												echo  generateRandomString();
											?>
											" width="150" height="150" alt="">
											</div>
											<div class="media-body">
												<h6 class="media-title font-weight-semibold py-3"> <a href="#"
														data-abc="true"><?php echo $row["Name"] ?></a> </h6>
												<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
													<li class="list-inline-item"><a href="#" class="text-muted"
															data-abc="true">Type: <?php echo $row["Type"]?> </a></li>
												</ul>
												<p class="mb-3"><?php echo $row["Description"]?></p>
												</ul>
											</div>
											<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
												<h3 class="mb-0 font-weight-semibold">Rs. <?php echo $row["Price"]?></h3>
												<div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
														class="fa fa-star"></i> <i class="fa fa-star"></i> <i
														class="fa fa-star"></i> </div>

														<form action="addtocart.php" method="POST">
															<!-- <input type="hidden" name="med_id" value="<?php #$row["ID"]?>"> -->
															<input type="hidden" name="user_id" value="<?php echo $id ?>">
															<input type="hidden" name="price" value="<?php echo $row["Price"]?>">
															<input type="hidden" name="med_id" value="<?php echo $row["ID"]?>">
												

												<div class="text-muted">Stock: <?php echo $row["Stock"]?></div> <button type="submit" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></a></i> Add to cart</button>

														</form>
											</div>
										</div>
									</div>
								</div>
								
								

								<?php } ?>



							</div>
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>