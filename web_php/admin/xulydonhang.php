<?php
	include('../db/connect.php');
?>
<?php 
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['xuly'];
	$MaloaiSPoaiSP = $_POST['mahang_xuly'];
	$sql_update_donhang = mysqli_query($con,"UPDATE donhang SET TinhTrangXL='$xuly' WHERE MaLoaiSP='$MaLoaiSP'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE giaodich SET TinhTrangGH='$xuly' WHERE MaGiaoDich='$MaLoaiSP'");
}

?>
<?php
	if(isset($_GET['xoadonhang'])){
		$MaLoaiSP = $_GET['xoadonhang'];
		$sql_delete = mysqli_query($con,"DELETE FROM donhang WHERE MaLoaiSP='$MaloaiSP'");
		header('Location:xulydonhang.php');
	} 
	if(isset($_GET['xacnhanhuy'])&& isset($_GET['MaLoaiSP'])){
		$HuyDon = $_GET['xacnhanhuy'];
		$MaGiaoDich = $_GET['MaLoaiSP'];
	}else{
		$HuyDon = '';
		$MaGiaoDich = '';
	}
	$sql_update_donhang = mysqli_query($con,"UPDATE donhang SET HuyDon='$HuyDon' WHERE MaLoaiSP='$MaGiaoDich'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE giaodich SET HuyDon='$HuyDon' WHERE MaGiaoDich='$MaGiaoDich'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn Hàng</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydonhang.php">Đơn Hàng <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulydanhmuc.php">Danh Mục</a>
	      </li>
	    
	       <li class="nav-item">
	         <a class="nav-link" href="xulykhachhang.php">Khách Hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container-fluid">
		<div class="row">
			 <?php
			if(isset($_GET['quanly'])=='xemdonhang'){
				$MaLoaiSP = $_GET['MaLoaiSP'];
				$sql_chitiet = mysqli_query($con,"SELECT * FROM donhang,sanpham WHERE donhang.MaSP=sanpham.MaSP AND donhang.MaLoaiSP='$MaLoaiSP'");
				?>
				<div class="col-md-7">
				<p>Xem Chi Tiết Đơn Hàng</p>
			<form action="" method="POST">
				<table class="table table-bordered ">
					<tr>
						<th>Thứ Tự</th>
						<th>Mã Hàng</th>
						<th>Tên Sản Phẩm</th>
						<th>Số Lượng</th>
						<th>Giá</th>
						<th>Tổng Tiền</th>
						<th>Ngày Đặt</th>

						
						<!-- <th>Quản lý</th> -->
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_donhang['MaLoaiSP']; ?></td>
						
						<td><?php echo $row_donhang['TenSP']; ?></td>
						<td><?php echo $row_donhang['SoLuong']; ?></td>
						<td><?php echo $row_donhang['GiaKM']; ?></td>
						<td><?php echo number_format($row_donhang['SoLuong']*$row_donhang['GiaKM']).'VND'; ?></td>
						
						<td><?php echo $row_donhang['NgayThang'] ?></td>
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['MaLoaiSP'] ?>">

						<!-- <td><a href="?xoa=<?php echo $row_donhang['SoDH'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['MaLaoiSP'] ?>">Xem đơn hàng</a></td> -->
					</tr>
					 <?php
					} 
					?> 
				</table>

				<select class="form-control" name="xuly">
					<option value="1">Đã Xử Lý | Giao Hàng</option>
					<option value="0">Chưa Xử Lý</option>
				</select><br>

				<input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
			</form>
				</div>  
			<?php
			}else{
				?> 
				
				<div class="col-md-7">
					<p>Đơn Hàng</p>
				</div>  
				<?php
			} 
			
				?> 
			<div class="col-md-5">
				<h4>Liệt Kê Đơn Hhàng</h4>
				<?php
				$sql_select = mysqli_query($con,"SELECT * FROM sanpham,khachhang,donhang WHERE donhang.MaSP=sanpham.MaSP AND donhang.MaKH=khachhang.MaKH GROUP BY MaLoaiSP "); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Thứ Tự</th>
						<th>Mã Hàng</th>
						<th>Tình Trạng Đơn Hàng</th>
						<th>Tên Khách Hàng</th>
						<th>Ngày Đặt</th>
						<th>Ghi Chú</th>
						<th>Hủy Đơn</th>
						<th>Quản Lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['MaLoaiSP']; ?></td>
						<td><?php
							if($row_donhang['TinhTrangXL']==0){
								echo 'Chưa xử lý';
							}else{
								echo 'Đã xử lý';
							}
						?></td>
						<td><?php echo $row_donhang['TenKH']; ?></td>
						
						<td><?php echo $row_donhang['NgayThang'] ?></td>
						<td><?php echo $row_donhang['STK'] ?></td>
						<td><?php if($row_donhang['HuyDon']==0){ }elseif($row_donhang['HuyDon']==1){
							echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['MaSP'].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
						}else{
							echo 'Đã hủy';
						} 
						?></td>

						<td><a href="?xoadonhang=<?php echo $row_donhang['MaLoaiSP'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['MaLoaiSP'] ?>">Xem </a></td>
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>