<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<div class="row">
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php
						$sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_loaisanpham ORDER BY maloaisp DESC");
						while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
							$id_category = $row_cate_home['maloaisp'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home['tenloaisp'] ?></h3>
							<div class="row">
								<?php
								$sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY masp DESC");
								while($row_sanpham = mysqli_fetch_array($sql_product)){ 
									if($row_sanpham["maloaisp"]==$id_category){
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
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
							<?php
							} 
							?>
						
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Review sách hay</h3>
							<ul>
								<li>
								<div class="single-post">
													<div class="post-img">
														<a href="https://reviewsach.net/luc-xi/"><img src="img/blog/1.jpg" alt="post" /></a>
													</div>
													<div class="post-content">
														<h3><a href="https://reviewsach.net/luc-xi/">Lục Xì – Mẫu mực văn chương phục vụ xã hội và khoa học của Vũ Trọng Phụng</a></h3>
													</div>
												</div>
								</li>
								
							</ul>
							<ul>
								<li>
								<div class="single-post">
													<div class="post-img">
														<a href="https://reviewsach.net/tu-kim-tran-nguoi-phat-ngon-cua-chet/"><img src="img/blog/2.jpg" alt="post" /></a>
													</div>
													<div class="post-content">
														<h3><a href="https://reviewsach.net/tu-kim-tran-nguoi-phat-ngon-cua-chet/">Phát ngôn của thần chết</a></h3>
													</div>
												</div>
								</li>
								
							</ul>
							<ul>
								<li>
								<div class="single-post">
													<div class="post-img">
														<a href="https://reviewsach.net/mat-biec/"><img src="img/blog/11.jpg" alt="post" /></a>
													</div>
													<div class="post-content">
														<h3><a href="https://reviewsach.net/mat-biec/">Mắt biếc – Kết cục buồn cho những kẻ ôm mối tình si</a></h3>
													</div>
												</div>
								</li>
								
							</ul>
							<ul>
								<li>
								<div class="single-post">
													<div class="post-img">
														<a href="https://kesachonline.com/review-sach-doi-ngan-dung-ngu-dai-la-lanh-dao-hay-nguoi-tam-thuong.html"><img src="img/blog/12.jpg" alt="post" /></a>
													</div>
													<div class="post-content">
														<h3><a href="https://kesachonline.com/review-sach-doi-ngan-dung-ngu-dai-la-lanh-dao-hay-nguoi-tam-thuong.html">Đời ngắn đừng ngủ dài</a></h3>
													</div>
												</div>
								</li>
								
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">

							<h3 class="agileits-sear-head mb-3">Danh Mục Sản Phẩm</h3>
							<ul>
								<?php 
									$sql_category_sidebar = mysqli_query($con,'SELECT * FROM tbl_loaisanpham ORDER BY maloaisp DESC');
									while($row_category_sidebar = mysqli_fetch_array($sql_category_sidebar)){
								?>
								<li>
									<!-- <input type="checkbox" class="checked"> -->
									<span class="span"><a href="danhmucsanpham.php?id=<?php echo $row_category_sidebar['maloaisp'] ?>"><?php echo $row_category_sidebar['tenloaisp'] ?></a></span>
								</li>
								<?php
								} 
								?>
							</ul>
						</div>
						<!-- //electronics -->
					
						
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản Phẩm Bán Chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
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
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->
