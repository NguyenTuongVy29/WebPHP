<?php
	include('../db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khách Hàng</title>
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
	        <a class="nav-link" href="xulydanhmuc.php">Chủ Đề</a>
	      </li>
	   
	       <li class="nav-item">
	        <a class="nav-link" href="xulykhachhang.php">Khách Hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-12">
				<h4>Khách Hàng</h4>
				<?php
				$sql_select_khachhang = mysqli_query($con,"SELECT * FROM khachhang,giaodich WHERE khachhang.MakH=giaodich.MakH GROUP BY giaodich.MaGiaoDich ORDER BY khachhang.MaKH DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Thứ Tự</th>
						<th>Tên Khách Hàng</th>
						<th>Số Điện Thoại</th>
						<th>Địa Chỉ</th>
						<th>Email</th>
						<th>Ngày Mua</th>
						<th>Quản Lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_khachhang['TenKH']; ?></td>
						<td><?php echo $row_khachhang['SDT']; ?></td>
						<td><?php echo $row_khachhang['DiaChi']; ?></td>
						
						<td><?php echo $row_khachhang['Email'] ?></td>
						<td><?php echo $row_khachhang['NgayThang'] ?></td>
						<td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['MaGiaoDich'] ?>">Xem Giao Dịch</a></td>
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>

			<div class="col-md-12">
				<h4>Liệt Kê Lịch Sử Đơn Hàng</h4>
				<?php
				if(isset($_GET['khachhang'])){
					$MaGiaoDich = $_GET['khachhang'];
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
						
						<td><?php echo $row_donhang['NgayThang'] ?></td>
					
					
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