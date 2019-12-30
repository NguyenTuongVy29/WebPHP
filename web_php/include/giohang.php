<?php
 if(isset($_POST['themgiohang'])){
 	$tensp = $_POST['tensp'];
 	$masp = $_POST['masp'];
 	$hinhanh = $_POST['hinhanh'];
 	$dongia = $_POST['dongia'];
 	$SoLuong = $_POST['SoLuong'];	
 	$sql_select_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang WHERE masp='$masp'");
 	$count = mysqli_num_rows($sql_select_giohang);
 	if($count>0){
 		$row_sanpham = mysqli_fetch_array($sql_select_giohang);
 		$soluong = $row_sanpham['SoLuong'] + 1;
 		$sql_giohang = "UPDATE tbl_giohang SET SoLuong='$SoLuong' WHERE masp='$masp'";
 	}else{
 		$SoLuong = $SoLuong;
 		$sql_giohang = "INSERT INTO tbl_giohang(tensp,masp,dongia,hinhanh,SoLuong) values ('$tensp','$masp','$dongia','$hinhanh','$SoLuong')";

 	}
 	$insert_row = mysqli_query($con,$sql_giohang);
 	// if($insert_row==0){
 	// 	header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);	
 	// }

 }elseif(isset($_POST['capnhatsoluong'])){
 	
 	for($i=0;$i<count($_POST['masp']);$i++){
 		$MaSP = $_POST['masp'][$i];
 		$SoLuong = $_POST['SoLuong'][$i];
 		if($SoLuong<=0){
 			$sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE masp='$masp'");
 		}else{
 			$sql_update = mysqli_query($con,"UPDATE tbl_giohang SET SoLuong='$SoLuong' WHERE masp='$masp'");
 		}
 	}

 }elseif(isset($_GET['xoa'])){
 	$id = $_GET['xoa'];
 	$sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE magiohang='$id'");

 }elseif(isset($_GET['dangxuat'])){
 	$id = $_GET['dangxuat'];
 	if($id==1){
 		unset($_SESSION['dangnhap_home']);
 	}

 
 }elseif(isset($_POST['thanhtoan'])){
 	$TenKH = $_POST['tenkh'];
 	$SDT = $_POST['sdtkh'];
 	$Email = $_POST['emailkh'];
 	$Pass = md5($_POST['pass']);
 	$STK = $_POST['stk'];
 	$DiaChi= $_POST['diachikh'];
 	$GioHang = $_POST['giohang'];
 
 	$sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang (tenkh,sdtkh,emailkh,diachi,stk,giohang,pass) values ('$tenkh','$sdtkh','$emailkh','$diachikh','$stk','$giohang','$pass')");
 	if($sql_khachhang){
 		$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY makh DESC LIMIT 1");
 		$MaloaiSP = rand(0,9999);
 		$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
 		$MaKH = $row_khachhang['makh'];
 		$_SESSION['dangnhap_home'] = $row_khachhang['tenkh'];
 		$_SESSION['makh'] = $MaKH;
 		for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
	 		$sanpham_id = $_POST['thanhtoan_product_id'][$i];
	 		$soluong = $_POST['thanhtoan_soluong'][$i];
	 		$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE masp='$masp'");
 		}

 	}
 }elseif(isset($_POST['thanhtoandangnhap'])){

 	$MaKH = $_SESSION['makh'];
 	$MaloaiSP = rand(0,9999);	
 	for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
	 		$MaSP = $_POST['thanhtoan_product_id'][$i];
	 		$SoLuong = $_POST['thanhtoan_soluong'][$i];
	 		$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE masp='$masp'");
 		}

 	
 }
?>

<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Giỏ hàng của bạn
			</h3>
				<?php 
				if(isset($_SESSION['dangnhap_home'])){
					echo '<p style="color:#000;">Xin Chào Bạn: '.$_SESSION['dangnhap_home'].'<a href="index.php?quanly=giohang&dangxuat=1">Đăng Xuất</a></p>';
				}else{
					echo '';
				}
				?>
				
			<!-- //tittle heading -->
			<div class="checkout-right">
			<?php
			$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY magiohang DESC");

			?>

				<div class="table-responsive">
					<form action="" method="POST">
					
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>

								<th>Giá</th>
								<th>Giá tổng</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$i = 0;
						$total = 0;
						while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){ 

							$subtotal = $row_fetch_giohang['SoLuong'] * $row_fetch_giohang['dongia'];
							$total+=$subtotal;
							$i++;
						?>
							<tr class="rem1">
								<td class="invert"><?php echo $i ?></td>
								<td class="invert-image">
									<a href="single.html">
										<img src="php/<?php echo $row_fetch_giohang['hinhanh'] ?>" alt=" " height="120" class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<input type="hidden" name="masp[]" value="<?php echo $row_fetch_giohang['masp'] ?>">
									<input type="number" min="1" name="SoLuong[]" value="<?php echo $row_fetch_giohang['SoLuong'] ?>">
								
									
								</td>
								<td class="invert"><?php echo $row_fetch_giohang['tensp'] ?></td>
								<td class="invert"><?php echo number_format($row_fetch_giohang['dongia']).'VND' ?></td>
								<td class="invert"><?php echo number_format($subtotal).'VND' ?></td>
								<td class="invert">
									<a href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['magiohang'] ?>">Xóa</a>
								</td>
							</tr>
							<?php
							} 
							?>
							<tr>
								<td colspan="7">Tổng Tiền : <?php echo number_format($total).'VND' ?></td>

							</tr>
							<tr>
								<td colspan="7"><input type="submit" class="btn btn-success" value="Cập Nhật Giỏ Hàng" name="capnhatsoluong">
								<?php 
								$sql_giohang_select = mysqli_query($con,"SELECT * FROM tbl_giohang");
								$count_giohang_select = mysqli_num_rows($sql_giohang_select);

								if(isset($_SESSION['dangnhap_home']) && $count_giohang_select>0){
									while($row_1 = mysqli_fetch_array($sql_giohang_select)){
								?>
								
								<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_1['masp'] ?>">
								<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_1['SoLuong'] ?>">
								<?php 
							}
								?>
								<input type="submit" class="btn btn-primary" value="Thanh Toán Giỏ Hàng" name="thanhtoandangnhap">
		
								<?php
								} 
								?>
								
								</td>
							
							</tr>
						</tbody>
					</table>
					</form>
				</div>
			</div>
			<?php
			if(!isset($_SESSION['dangnhap_home'])){ 
			?>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thêm Địa Chỉ Giao Hàng</h4>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền Tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Số Điện Thoại" name="SDT" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Password" name="password" required="">
									</div>
									<div class="controls form-group">
										<textarea style="resize: none;" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea>  
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="giaohang">
											<option>Chọn Hình Thức Giao Hàng</option>
											<option value="1">Thanh Toán ATM</option>
											<option value="0">Nhận Tiền Tại Nhà</option>
											

										</select>
									</div>
								</div>
								<?php
								$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY magiohang DESC");
								while($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)){ 
								?>
									<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['masp'] ?>">
									<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['SoLuong'] ?>">
								<?php
								} 
								?>
								<input type="submit" name="thanhtoan" class="btn btn-success" style="width: 20%" value="Thanh Toán">
								
							</div>
						</div>
					</form>
					
				</div>
			</div>
			<?php
			} 
			?>
		</div>
	</div>
	<!-- //checkout page -->