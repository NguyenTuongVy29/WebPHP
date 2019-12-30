<?php
	if(isset($_GET['HuyDon'])&& isset($_GET['MaGiaoDich'])){
		$HuyDon = $_GET['HuyDon'];
		$MaGiaoDich = $_GET['MaGiaoDich'];
	}else{
		$HuyDon = '';
		$MaGiaoDich = '';
	}
	$sql_update_donhang = mysqli_query($con,"UPDATE donhang SET HuyDon='$HuyDon' WHERE MaSP='$MaGiaoDich'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE giaodich SET HuyDon='$HuyDon' WHERE MaGiaoDich='$MaGiaoDich'");
?>
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Xem Đơn Hàng</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						
							<div class="row">
								<?php
								if(isset($_SESSION['dangnhap_home'])){
									echo 'Đơn Hàng : '.$_SESSION['dangnhap_home'];
								} 
								?>
							<div class="col-md-12">
								
								<?php
								if(isset($_GET['khachhang'])){
									$MaKH = $_GET['khachhang'];
								}else{
									$MaKH = '';
								}
								$sql_select = mysqli_query($con,"SELECT * FROM giaodich WHERE giaodich.MaKH='$MaKH' GROUP BY giaodich.MaGiaoDich"); 
								?> 
								<table class="table table-bordered ">
									<tr>
										<th>Thứ Tự</th>
										<th>Mã Giao Dịch</th>
									
										<th>Ngày Đặt</th>
										<th>Quản Lý</th>
										<th>Tình Trạng</th>
										<th>Yêu Cầu</th>
									</tr>
									<?php
									$i = 0;
									while($row_donhang = mysqli_fetch_array($sql_select)){ 
										$i++;
									?> 
									<tr>
										<td><?php echo $i; ?></td>
										
										<td><?php echo $row_donhang['MaGiaoDich']; ?></td>
									
										
										<td><?php echo $row_donhang['NgayThang'] ?></td>
										<td><a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['MaKH'] ?>&MaGiaoDich=<?php echo $row_donhang['MaGiaoDich'] ?>">Xem Chi Tiết</a></td>
										<td><?php 
										if($row_donhang['tinhtrangdon']==0){
											echo 'Đã Đặt Hàng';
										}else{
											echo 'Đã Xử Lý | Đang Giao Hàng';
										}
										?></td>
										<td>
											<?php
											if($row_donhang['HuyDon']==0){ 
											?>
											<a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['MaKH'] ?>&MaGiaoDich=<?php echo $row_donhang['MaGiaoDich'] ?>&HuyDon=1">Yêu Cầu Hủy</a>
											<?php
										}elseif($row_donhang['HuyDon']==1){											
											?>
											<p>Đang Chờ Hủy...</p>
											<?php
											}else{
												echo 'Đã Hủy';
											}
											?>
										</td>
									</tr>
									 <?php
									} 
									?> 
								</table>
							</div>


							<div class="col-md-12">
								<p>Chi Tiết Đơn Hàng</p><br>
								<?php
								if(isset($_GET['MaGiaoDich'])){
									$MaGiaoDich = $_GET['MaGiaoDich'];
								}else{
									$MaGiaoDich = '';
								}
								$sql_select = mysqli_query($con,"SELECT * FROM giaodich,khachhang,sanpham WHERE giaodich.MaSP=sanpham.MaSP AND khachhang.MaKH=giaodich.MaKH AND giaodich.MaGiaoDich='$MaGiaoDich' ORDER BY giaodich.MaGiaoDich DESC"); 
								?> 
								<table class="table table-bordered ">
									<tr>
										<th>Thứ Tự</th>
										<th>Mã Giao Dịch</th>
										<th>Tên Sản Phẩm</th>
										<th>Số Lượng</th>
										<th>Ngày Đặt</th>
										
									</tr>
									<?php
									$i = 0;
									while($row_donhang = mysqli_fetch_array($sql_select)){ 
										$i++;
									?> 
									<tr>
										<td><?php echo $i; ?></td>
										
										<td><?php echo $row_donhang['MaGiaoDich']; ?></td>
									
										<td><?php echo $row_donhang['TenSP']; ?></td>

										<td><?php echo $row_donhang['SoLuong']; ?></td>
										
										<td><?php echo $row_donhang['NgayThang'] ?></td>
									
										
									</tr>
									 <?php
									} 
									?> 
								</table>
							</div>
							</div>

						
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				
			</div>
		</div>
	</div>
	<!-- //top products -->