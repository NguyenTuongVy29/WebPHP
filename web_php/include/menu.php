<?php 
		$sql_category = mysqli_query($con,'SELECT * FROM tbl_loaisanpham ORDER BY maloaisp DESC');
	?>


		<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/chosen.min.css">
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="alert alert-danger" role="alert">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						

						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						
						<?php 
							$sql_category_danhmuc = mysqli_query($con,'SELECT * FROM tbl_loaisanpham ORDER BY maloaisp DESC');
							while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
						?>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['maloaisp'] ?>" role="button"  aria-haspopup="true" aria-expanded="false">
								<?php echo $row_category_danhmuc['tenloaisp'] ?>
							</a>
							
						</li>
						<?php
						} 
						?>
						</li>
					</ul>
				</div>
			</nav>
			</div>
		</div>

	<div class="banner-area banner-res-large ptb-35">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="img/banner/1.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Miễn phí vẫn chuyển</h4>
								<p>Cho hóa đơn 500K</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="img/banner/2.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Hoàn tiền</h4>
								<p>Đảm bảo hoàn tiền 100/%</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
						<div class="single-banner">
							<div class="banner-img">
								<a href="#"><img src="img/banner/3.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Thanh toán khi giao hàng</h4>
								<p>Kiểm tra hàng trước khi thanh toán</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-banner mrg-none-xs">
							<div class="banner-img">
								<a href="#"><img src="img/banner/4.png" alt="banner" /></a>
							</div>
							<div class="banner-text">
								<h4>Liên hệ</h4>
								<p> +84.4567.89</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- slide show -->
<div class="slider-area">
			<div class="slider-active owl-carousel">
			
                <div class="sidebar_box"><span class="bottom"></span> 
                    <div class="content special"> 
                        <img src="img/slider/1.png" style="width:100%" />
                    </div>
                </div>
                <div class="sidebar_box"><span class="bottom"></span> 
                    <div class="content special"> 
                        <img src="img/slider/2.png" style="width:100%"  />
                    </div>
                </div>
                <div class="sidebar_box"><span class="bottom"></span> 
                    <div class="content special"> 
                        <img src="img/slider/3.png" style="width:100%" />
                    </div>
                </div>				
			</div>
		</div>
			
			
	<!-- //navigation -->
	<script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>