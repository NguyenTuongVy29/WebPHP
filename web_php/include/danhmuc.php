<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM tbl_loaisanpham lsp,tbl_sanpham sp WHERE lsp.maloaisp=sp.maloaisp AND sp.maloaisp='$id' ORDER BY sp.masp DESC");	
	$sql_category = mysqli_query($con,"SELECT * FROM tbl_loaisanpham lsp,tbl_sanpham sp WHERE lsp.maloaisp=sp.maloaisp AND sp.maloaisp='$id' ORDER BY sp.masp DESC");		

	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['tenloaisp'];		
	?>
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham = mysqli_fetch_array($sql_cate)){ 
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="php/<?php echo $row_sanpham['hinhanh'] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['masp'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['masp'] ?>"><?php echo $row_sanpham['tensp'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham['dongia']).'VND' ?></span>
												<del><?php echo number_format($row_sanpham['giacu']).'VND' ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensp" value="<?php echo $row_sanpham['tensp'] ?>" />
													<input type="hidden" name="tentacgia" value="<?php echo $row_sanpham['tentacgia'] ?>" />
													<input type="hidden" name="dongia" value="<?php echo $row_sanpham['dongia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['hinhanh'] ?>" />
													<input type="hidden" name="SoLuong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm Giỏ Hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm Kiếm..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Sản Phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>

						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Dưới 1 Triệu</a>
									</li>
									
								</ul>
							</div>
						</div>

						<div class="left-side border-bottom py-2">
							
						</div>
						
							<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Khách Hàng Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>

							</ul>
						</div>
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản Phẩm Bán Chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
                                                                     <?php
                                                                        $sql_sp_sidebar = mysqli_query($con,'select * from sanpham where BestSeller =0 order by MaSP DESC');
                                                                        while ($row_sp_sidebar = mysqli_fetch_array($sql_sp_sidebar)){
                                                                         
                                                                     ?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
                                                                                    <img src="php/<?php echo $row_sp_sidebar['Hinhanh1']?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sp_sidebar['TenSP']?></a>
                                                                                        <a href="" class="price-mar mt-2"><?php echo number_format($row_sp_sidebar['GiaKM']).'VND'?></a>
                                                                                        <del><?php echo number_format($row_sp_sidebar['GiaSP']).'VND'?></del>
										</div>
									</div>
									<?php
                                                                            }
                                                                        ?>
								
								</div>
							</div>
						</div>
						<!-- //best seller -->
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->