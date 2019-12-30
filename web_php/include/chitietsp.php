<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE masp='$id'"); 
?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Chi tiết sản phẩm</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="php/<?php echo $row_chitiet['hinhanh'] ?>">
									<div class="thumb-image">
										<img src="php/<?php echo $row_chitiet['hinhanh'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['tensp'] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format($row_chitiet['dongia']).'VND' ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['giacu']).'VND' ?></del>
					</p>
					
					<div class="product-single-w3l">
						<p><a>Tác giả: </a><?php echo $row_chitiet['tentacgia'] ?></p><br><br>
						<p><a>Nhà xuất bản: </a><?php echo $row_chitiet['nhaxuatban'] ?></p>
						<p><a>Tái bản: </a><?php echo $row_chitiet['taiban'] ?></p><br><br>
						<p><a>Nội dung: </a><?php echo $row_chitiet['mota'] ?></p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
								<input type="hidden" name="tensp" value="<?php echo $row_sanpham['tensp'] ?>" />
													<input type="hidden" name="tentacgia" value="<?php echo $row_sanpham['tentacgia'] ?>" />
													<input type="hidden" name="dongia" value="<?php echo $row_sanpham['dongia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['hinhanh'] ?>" />
													<input type="hidden" name="SoLuong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="f-grid py-2">
							<h3 class="agileits-sear-head ">Sản Phẩm Bán Chạy</h3>
							
									<?php
									$sql_product_sidebar = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE BestSeller='1' ORDER BY masp DESC"); 
									while($row_sanpham_sidebar = mysqli_fetch_array($sql_product_sidebar)){
									?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="php/<?php echo $row_sanpham_sidebar['hinhanh'] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sanpham_sidebar['tensp'] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($row_sanpham_sidebar['dongia']).'VND' ?></a>
											<del><?php echo number_format($row_sanpham_sidebar['giacu']).'VND' ?></del>
										</div>
									</div>
									<?php
									} 
									?>
									
									
								
						</div>
	
	<?php
	} 
	?>