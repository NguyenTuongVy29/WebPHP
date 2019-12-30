<?php
session_start();
?>
<?php
require_once("css_footer.php");
?>
<?php
require_once("css_giohanghc.php");
?>
<?php
require_once("css_timkiem.php");
?>
<?php
require_once("admin/css_tc.php");
?>
<?php
require_once("admin/css_tc2.php");
?>
<?php
require_once("admin/css_tc3.php");
?>
<?php
require_once("admin/row.php");
?>
<?php
require_once("admin/css_tc4.php");
?>

 <?php
  $TenSachTr=$_POST['TenSach'];
 ?>   
<style type="text/css">
#Head-Link2 table tr .style4 a {
	color: #60F;
}
#Content form p a {
	font-size: small;
	color: #69C;
}
#Content form p .author {
	font-size: small;
	color: #F93;
}
#Content form div span span {
	font-size: small;
}
#Content form div a img {
	text-align: center;
}
#Content form div span span {
	color: #63F;
}
#Content form div span span {
	color: #F00;
}
#Main #Content p span span strong {
	font-size: x-large;
	color: #66F;
}
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi Trả</title>
</head>
<body>
<div id="Main"> 
        <div id="Head-Link2">  
          <table width="1233" style=" width: 1200px;color:#666666">
                    <tr>
                        <td width="365" height="64" class="style4">
                          
                          
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <ul>
  &nbsp;<span class="style4"><a href="dangnhap_KH-form.php">Đăng Nhập</a> &nbsp; <a href="dangky_KH_form.php">Đăng Ký</a>&nbsp;&nbsp;</span></ul></td>
                        <td width="512" class="style4"><img src="HinhAnh/nsol.jpg" width="500" height="64"/></td>
                        <td width="307">
                          <ul>
                         
    <div class="shopping-cart-header">
     <span  class="badge" title=" Có <? echo count($_SESSION['daysoluong']);?> sản phẩm trong giỏ hàng."><a href="giohang_chitiet_hc.php">
<img src="HinhAnh/ghag.png" width="32" height="25"/></a> <?php if ( count($_SESSION['daysoluong'])<=0) { ?>
	0
<?php 
} else {
	echo count($_SESSION['daysoluong']);
	}?></span>
      <div class="shopping-cart-total">
<!--end shopping-cart-header -->
                          </ul>
                       </td>
            </tr>
          </table>       
                 
</div>  
          <div id="Head-Link">
            <div id="MenuStyle">
                <ul>
               		<li><a href="#">&nbsp;</a></li>
                    <li><a href="TrangchuKH.php">Trang Chủ</a></li>
                    <li><a href="sach_banchay.php">Sách Bán Chạy</a></li>
                    <li><a href="#">Tin Tức</a></li>
                     <li><form id="searchbox"action="sach_timkiem.php" method="post">
                         
                              <input type="text" id="TenSach" name="TenSach"/>
                            
                            
                            <input type="submit" name="btntimkiem" id="btntimkiem" value="" />
                            
                            </form> </li>
                </ul>
            </div>
        </div>
<div id="Content">
  <!-- ESI END DUMMY COMMENT [] --></br>
<p style="margin-bottom: 0.11in; color: #69F;" align="center"><span style="font-family: Times New Roman,serif;"><span style="font-size: x-large; color: #69F;"><strong>CH&Iacute;NH S&Aacute;CH ĐỔI / TRẢ / HO&Agrave;N TIỀN</strong></span></span></p>
<p style="text-indent: 0.5in; margin-bottom: 0.07in;" align="justify"><span style="font-family: Times New Roman,serif; color: #000000;"><span style="font-size: large;"><span style="font-weight: bold;">Ch&uacute;ng t&ocirc;i lu&ocirc;n tr&acirc;n trọng sự tin tưởng v&agrave; ủng hộ của kh&aacute;ch h&agrave;ng khi đặt mua sản phẩm tại <span style="color: #ff0000">nhasachonline.com.vn</span>. Do đ&oacute; ch&uacute;ng t&ocirc;i lu&ocirc;n cố gắng ho&agrave;n thiện dịch vụ tốt nhất phục vụ mọi nhu cầu mua sắm của qu&yacute; kh&aacute;ch.</span></span></span></p>
<p style="text-indent: 0.5in; margin-bottom: 0.07in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;"><span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span> <span style="color: #000000;">ch&uacute;ng t&ocirc;i lu&ocirc;n lu&ocirc;n cam kết tất cả c&aacute;c sản phẩm b&aacute;n tại<span style="color: #ff0000"> nhasachonline.com.vn </span>100% l&agrave; những sản phẩm chất lượng v&agrave; xuất xứ nguồn gốc r&otilde; r&agrave;ng, hợp ph&aacute;p cũng như an to&agrave;n cho người ti&ecirc;u d&ugrave;ng.</span></span></span></span></p>
<p style="text-indent: 0.5in; margin-bottom: 0.07in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;"><span style="color: #000000;">Để việc mua sắm của qu&yacute; kh&aacute;ch tại </span><span style="color: #ff0000">nhasachonline.com.vn</span><span style="color: #000000;"> l&agrave; trải nghiệm dịch vụ th&acirc;n thiện, ch&uacute;ng t&ocirc;i hy vọng qu&yacute; kh&aacute;ch l&uacute;c nhận h&agrave;ng kiểm tra kỹ lại: </span></span></span></span></p>
<blockquote>
  <p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;">- S<span style="font-weight: bold;">ố lượng</span>.</span></span></span></p>
  <p><span style="font-family: Times New Roman,serif;"><span style="font-size: large;">- <span style="color: #000000;">T&ecirc;n sản phẩm v&agrave; chất lượng sản phẩm.</span></span></span></p>
  <p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large; font-weight: bold;">- T<span style="font-weight: bold;">h&ocirc;ng tin sản phẩm, th&ocirc;ng tin người nhận </span></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;"><span style="color: #000000;">trong l&uacute;c nhận h&agrave;ng trước khi k&yacute; nhận v&agrave; thanh to&aacute;n tiền cho nh&acirc;n vi&ecirc;n giao nhận.</span></span></span></span> </p>
</blockquote>
<p style="text-indent: 0.5in; margin-bottom: 0.07in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;"><span style="color: #000000;">Tuy nhi&ecirc;n để qu&yacute; kh&aacute;ch y&ecirc;n t&acirc;m hơn trong việc mua sắm v&agrave; trải nghiệm dịch vụ của</span> <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span>, <span style="color: #000000;">ch&uacute;ng t&ocirc;i x&acirc;y dựng ch&iacute;nh s&aacute;ch đổi/ trả/ ho&agrave;n tiền tr&ecirc;n tinh thần bảo vệ quyền lợi người ti&ecirc;u d&ugrave;ng nhằm cam kết với qu&yacute; kh&aacute;ch về chất lượng sản phẩm v&agrave; dịch vụ của ch&uacute;ng t&ocirc;i.</span></span></span></span></p>
<p style="text-indent: 0.5in; margin-bottom: 0.07in;" align="justify"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><strong><span style="background: #ffffff;">1. Thời gian giải quyết đổi trả</span></strong></span></span></span></span></p>
<table cellspacing="0" cellpadding="7">
  <tbody>
<tr>
<td style="border: 1.00pt solid #000001; text-align: center;" width="231">
<p>&nbsp;</p>
</td>
<td style="border: 1.00pt solid #000001;" width="396">
<p style="margin-bottom: 0.11in;" align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Đơn h&agrave;ng của qu&yacute; kh&aacute;ch </span></strong></span></span></span></p>
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">được giao th&agrave;nh c&ocirc;ng</span></strong></span></span></span></p>
</td>
<td style="border-top: 1px solid #000001; border-bottom: 1px solid #000001; border-left: 1.00pt solid #000001; border-right: 1px solid #000001;" width="529">
<p style="margin-bottom: 0.11in;" align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Đơn h&agrave;ng qu&yacute; kh&aacute;ch </span></strong></span></span></span></p>
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">đang tr&ecirc;n đường đi</span></strong></span></span></span></p>
</td>
</tr>
<tr>
<td style="border-top: 1.00pt solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: 1px solid #000001;" width="231">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Thời gian giải quyết</span></strong></span></span></span></p>
</td>
<td style="border-top: 1.00pt solid #000001; border-bottom: 1px solid #000001; border-left: 1px solid #000001; border-right: 1px solid #000001;" width="396">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;; background-color: #ffffff">Phản hồi trong vòng 48 giờ kể từ lúc nhận</span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="529">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Khi nhận được </span></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">y&ecirc;u </span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">cầu từ qu&yacute; kh&aacute;ch</span></span></span></span></p>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="231">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Nội dung được giải quyết</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="396">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Theo hiện trạng đơn h&agrave;ng cần đổi/trả</span></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">. </span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">(xem cụ thể tại #2 </span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><span style="background: #ffffff;">điều kiện đổi trả</span></span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">)</span></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="529">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Ch&uacute;ng t&ocirc;i chỉ hỗ trợ qu&yacute; kh&aacute;ch đổi mặt h&agrave;ng kh&aacute;c để ph&ugrave; hợp hơn với nhu cầu của qu&yacute; kh&aacute;ch/hủy đơn h&agrave;ng(*)</span></span></span></span></p>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" colspan="3">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">(*) Nếu qu&yacute; kh&aacute;ch hủy đơn h&agrave;ng cũ,</span></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> đ&atilde; chuyển khoản thanh to&aacute;n th&agrave;nh c&ocirc;ng,</span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">m</span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&agrave; kh&ocirc;ng c&oacute; nhu cầu đặt lại đơn h&agrave;ng kh&aacute;c </span></span></span></span><span style="color: #000000;"><span style="font-family: Wingdings,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&rarr;</span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> ch&uacute;ng t&ocirc;i sẽ ho&agrave;n tiền lại cho Qu&yacute; kh&aacute;ch trong v&ograve;ng 7 ng&agrave;y l&agrave;m việc qua hệ thống ng&acirc;n h&agrave;ng kể từ ng&agrave;y nhận v&agrave; giải quyết y&ecirc;u cầu cho qu&yacute; kh&aacute;ch</span></span></span></span></p>
</td>
</tr>
</tbody>
</table>
<p style="text-indent: 0.25in; margin-bottom: 0.11in;" align="justify"><span style="color: #002060;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Ch&iacute;nh s&aacute;ch n&agrave;y được &aacute;p dụng cho to&agrave;n bộ đơn h&agrave;ng của Qu&yacute; kh&aacute;ch tại nhasachonline.com.vn</span></strong></span></span></span></p>
<p style="margin-bottom: 0.11in;"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><strong><span style="background: #ffffff;"> 2. Điều kiện đổi trả:</span></strong></span></span></span></span></p>
<p style="margin-left: 0.25in; margin-bottom: 0.11in;"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: large; color: #ff0000; background-color: #ffffff">nhasachonline.com.vn </span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">hỗ trợ đổi/ trả sản phẩm cho qu&yacute; kh&aacute;ch nếu:</span></span></span></span>  </p>
<blockquote>
  <p style="margin-bottom: 0.11in;"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&nbsp;&nbsp;- Sản phẩm c&ograve;n nguy&ecirc;n bao b&igrave; như hiện trạng ban đầu.</span></span></span></span></p>
  <p style="margin-bottom: 0.11in;"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff; font-weight: bold;">&nbsp;&nbsp;- Phiếu giao h&agrave;ng <span style="color: #ff0000">nhasachonline.com.vn</span> / H&oacute;a đơn GTGT ( nếu c&oacute;)</span></span></span></span> </p>
</blockquote>
<ol start="3">
<li>C<span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><strong><span style="background: #ffffff;">h&iacute;nh s&aacute;ch đổi trả</span></strong></span></span></span></span></li>
</ol>
<table cellspacing="0" cellpadding="7">
  <tbody>
<tr valign="top">
<td style="border: 1px solid #000001;" width="127">
<p>&nbsp;</p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Nội dung đổi/ trả sản phẩm</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="525">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">C&aacute;ch thức xử l&yacute;</span></strong></span></span></span></p>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="127">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">1</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Lỗi kỹ thuật của sản phẩm </span></span></span></span></p></td>
<td style="border: 1px solid #000001;" width="525">
<ul>
  <ul>
    <li><span style="margin-bottom: 0.11in;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Fahasa.com c&oacute; sản phẩm</span></span></span></span><span style="color: #000000;"><span style="font-family: Wingdings,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&rarr;</span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> đổi mới c&ugrave;ng sản phẩm </span></span></span></span></li>
    <li><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Fahasa.com hết h&agrave;ng</span></span></span></span><span style="color: #000000;"><span style="font-family: Wingdings,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&rarr;</span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> Ho&agrave;n tiền (*)/ Qu&yacute; kh&aacute;ch c&oacute; thể chọn mặt h&agrave;ng kh&aacute;c tại website nhasachonline.com.vn</span></span></span></span></li>
  </ul>
</ul>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="127">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">2</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Sản phẩm hỏng do qu&yacute; kh&aacute;ch</span></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" valign="top" width="525">
<ul>
<li>
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Kh&ocirc;ng hỗ trợ đổi/ trả</span></span></span></span></p>
</li>
</ul>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="127">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">3</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p><span style="font-family: Times New Roman,serif; color: #000000;"><span style="font-size: large;"><span style="background: #ffffff none repeat scroll 0% 0%;">Kh&aacute;ch đặt nhầm,&nbsp; s&aacute;ch c&oacute; nội dung kh&ocirc;ng hay, kh&aacute;ch kh&ocirc;ng th&iacute;ch sản phẩm đ&atilde; đặt hoặc nhu cầu của kh&aacute;ch thay đổi.</span></span></span></p>
</td>
<td style="border: 1px solid #000001;" valign="top" width="525">
<ul>
<li>
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Kh&ocirc;ng hỗ trợ đổi/ trả</span></span></span></span></p>
</li>
</ul>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="127">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">4</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Giao nhầm/ giao thiếu</span></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="525">
<ul>
  <ul>
    <li><span style="margin-bottom: 0.11in;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Giao nhầm </span></span></span></span><span style="color: #000000;"><span style="font-family: Wingdings,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&rarr;</span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> Đổi lại đ&uacute;ng sản phẩm đ&atilde; đặt.</span></span></span></span></li>
    <li><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Giao thiếu </span></span></span></span><span style="color: #000000;"><span style="font-family: Wingdings,serif;"><span style="font-size: large;"><span style="background: #ffffff;">&rarr;</span></span></span></span><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;"> Giao b&ugrave; th&ecirc;m số lượng c&ograve;n thiếu theo đơn h&agrave;ng</span></span></span></span></li>
  </ul>
</ul>
</td>
</tr>
<tr>
<td style="border: 1px solid #000001;" width="127">
<p align="center"><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">5</span></strong></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" width="504">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Chất lượng h&agrave;ng h&oacute;a k&eacute;m do vận chuyển</span></span></span></span></p>
</td>
<td style="border: 1px solid #000001;" valign="top" width="525">
<p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="background: #ffffff;">Khi qu&yacute; kh&aacute;ch h&agrave;ng nhận g&oacute;i h&agrave;ng bị m&oacute;p m&eacute;o, ướt, ch&uacute;ng t&ocirc;i khuyến c&aacute;o kh&aacute;ch h&agrave;ng n&ecirc;n kiểm tra thực tế h&agrave;ng h&oacute;a b&ecirc;n trong ngay thời điểm nhận h&agrave;ng, vui l&ograve;ng phản ảnh hiện trang h&agrave;ng h&oacute;a l&ecirc;n bill nhận h&agrave;ng từ ph&iacute;a nh&acirc;n vi&ecirc;n giao nhận .</span></span></span></span></p>
</td>
</tr>
<tr>
  <td style="border: 1px solid #000001;" colspan="3" valign="top" height="36">
  <p style="margin-bottom: 0.11in;"><span style="color: #000000;"><span style="background: #ffffff;"> <span style="font-family: Times New Roman,serif;"><span style="font-size: large;">(*) Phương thức ho&agrave;n tiền: Th&ocirc;ng qua t&agrave;i khoản ng&acirc;n h&agrave;ng từ 2-7 ng&agrave;y l&agrave;m việc ( sau khi ch&uacute;ng t&ocirc;i nhận được sản phẩm trả về)</span></span></span></span></p>
  <p><span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong><span style="background: #ffffff;">Ch&uacute;ng t&ocirc;i sẽ kiểm tra c&aacute;c trường hợp tr&ecirc;n v&agrave; giải quyết cho qu&yacute; kh&aacute;ch trong 7 ng&agrave;y l&agrave;m việc kể từ khi qu&yacute; kh&aacute;ch nhận được h&agrave;ng, qu&aacute; thời hạn tr&ecirc;n rất tiếc ch&uacute;ng t&ocirc;i kh&ocirc;ng giải quyết khiếu nại.</span></strong></span></span></span></p>
  </td>
</tr>
</tbody>
</table>
<ol start="4">
  <li>C<span style="color: #000000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><strong><span style="background: #ffffff;">&aacute;ch thức chuyển sản phẩm đổi trả về <span style="color: #ff0000; text-decoration: underline;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span></span></strong></span></span></span></span>
  <p style="margin-bottom: 0.19in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;">- <span style="color: #000000;">Khi y&ecirc;u cầu đổi trả được giải quyết, qu&yacute; kh&aacute;ch vui l&ograve;ng đ&oacute;ng g&oacute;i sản phẩm như hiện trạng khi nhận h&agrave;ng ban đầu (bao gồm sản phẩm, qu&agrave; tặng, phụ kiện k&egrave;m theo sản phẩm,&hellip;nếu c&oacute;) v&agrave; gửi về <span style="color: #ff0000">nhasachonline.com.vn</span> trong thời gian sớm nhất trong v&ograve;ng 3 ng&agrave;y l&agrave;m việc kể từ khi th&ocirc;ng b&aacute;o với bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng v&agrave; gửi k&egrave;m</span></span></span></span></p>
<p style="margin-bottom: 0.19in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="color: #000000;">- Hóa đơn gi&aacute; trị gia tăng (nếu c&oacute;) hoặc phiếu giao h&agrave;ng của</span> <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span></span></span></p>
<p style="margin-bottom: 0.19in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="color: #000000;">- Phụ kiện đi k&egrave;m sản phẩm v&agrave; tặng khuyến m&atilde;i k&egrave;m theo (nếu c&oacute;)</span></span></span> </p>
<p style="margin-bottom: 0in;" align="justify"><span style="font-family: Times New Roman,serif; color: #000000;"><span style="font-size: large;">- Điền họ t&ecirc;n, địa chỉ kh&aacute;ch h&agrave;ng, m&atilde; số đơn h&agrave;ng, m&atilde; trả h&agrave;ng do <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span> cung cấp để kh&aacute;ch h&agrave;ng kh&ocirc;ng tốn ph&iacute; trả h&agrave;ng về v&agrave; gửi h&agrave;ng về địa chỉ do <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span> giải quyết đổi trả gửi qua email của qu&yacute; kh&aacute;ch.</span></span></p>
<p style="margin-bottom: 0in;" align="justify"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><strong>Lưu &yacute;</strong></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="text-decoration: underline;"><span style="font-weight: normal;">:</span></span></span></span><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><span style="font-weight: normal;">&nbsp;<span style="color: #000000;">Qu&yacute; kh&aacute;ch vui l&ograve;ng chỉ gởi sản phẩm qua đường bưu điện v&agrave; chịu tr&aacute;ch nhiệm về&nbsp;trạng th&aacute;i nguy&ecirc;n vẹn của sản phẩm khi gửi về </span><span style="color: #ff0000">nhasachonline.com.vn</span><span style="color: #000000;"> Qu&yacute; kh&aacute;ch c&oacute; thể ghi nhớ m&atilde; bưu kiện m&igrave;nh gửi để khi cần tra cứu th&ocirc;ng tin kiện h&agrave;ng gửi trả&nbsp;tại sẽ thuận lợi v&agrave; nhanh ch&oacute;ng hơn. </span></span></span></span> </p>
<p style="margin-bottom: 0in;" align="justify"> + Sau<span style="margin-bottom: 0in;" align="justify"><span style="font-size: large;"><span style="font-weight: normal;"><span style="color: #000000;"> khi&nbsp;nhận được sản phẩm qu&yacute; kh&aacute;ch gởi về,</span> <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span> <span style="color: #000000;">sẽ phản hồi v&agrave; cập nhật th&ocirc;ng tin tr&ecirc;n từng giai đoạn xử l&yacute;&nbsp;đến qu&yacute; kh&aacute;ch qua điện thoại / email .</span></span></span></span></p>
<p style="margin-bottom: 0in;" align="justify"><span style="font-size: large; color: #000000">+ </span><span style="margin-bottom: 0in;" align="justify"><span style="font-size: large;"><span style="font-weight: bold;"><span style="color: #000000;">Rất tiếc hiện tại</span><span style="color: #ff0000"> nhasachonline.com.vn</span><span style="color: #000000;"> chưa hỗ trợ ph&iacute; vận chuyển đổi trả h&agrave;ng (Ngoại trừ do lỗi dịch vụ, sản phẩm của</span> <span style="color: #ff0000;"><a href="http://www.fahasa.com"><span style="color: #ff0000">nhasachonline.com.vn</span></a></span>). Qu&yacute; kh&aacute;ch vui l&ograve;ng thanh to&aacute;n cước ph&iacute; vận chuyển khi trả h&agrave;ng về <span style="color: #ff0000">nhasachonline.com.vn.</span><br />
</span></span></span></p>
  </li>
</ol>
<p style="text-indent: 0.5in; margin-bottom: 0.19in;" align="justify"><span style="color: #002060;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong>Nếu cần hỗ trợ th&ecirc;m qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ trực tiếp qua </strong></span></span></span><span style="color: #ff0000;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong>hotline 1900636467</strong></span></span></span><span style="color: #002060;"><span style="font-family: Times New Roman,serif;"><span style="font-size: large;"><strong> để được hỗ trợ nhanh ch&oacute;ng.</strong></span></span></span></p>
<p style="text-indent: 0.25in; margin-bottom: 0.11in;" align="justify">&nbsp;</p></div>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

         <div id="Footer"> 
    	 
        <ul>
    <li>
        <div class="text">
            <h4>Chính Sách</h4>
            <a href="#">Điều Khoản Sử Dụng</a></br>
            <a href="#">Chính Sách Bảo Mật</a></br>
            <a href="#">Giới Thiệu</a>
        </div>
    </li>   
    <li>
        <div class="text">
            <h4>Hổ Trợ</h4>
            <a href="csdoitra.php">Chính Sách Đổi - Trả - Hoàn Tiền</a></br>
            <a href="#">Hướng Dẫn Đặt Hàng</a></br>
            <a href="#">Phương Thức Vận Chuyển Và Thanh Toán</a>
        </div>
    </li>
    <li>
        <div class="text">
            <h4>Liên Hệ</h4>
            <div>38/4, Linh Trung, Quận Thủ Đức, TP. Hồ Ch&iacute; Minh, Việt Nam</div>
            <div>info@nhasachonline.com.vn</div>
            <div>1900636467</div>
        </div>
    </li>
</ul>
<script type="text/javascript">
     function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem Quảng Cáo</a>';
    }
    }
</script>
<style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
.product-title {
	font-size: medium;
	color: #F1E3BB;
}
#Main #Right ul form div div .product-title {
	color: #66F;
}
#Main #Right ul form div div div .author {
	font-size: medium;
	text-align: center;
}
#Main #Right ul form div div a {
}
#Main #Right ul form div div p .list-price.wraper span {
	font-size: medium;
}
#Main #Right ul form div div p .list-price.wraper span {
	text-align: center;
}
#Main #Right ul form div div p .list-price.wraper span {
	text-align: center;
}
#Main #Right ul form div div .product-title {
	font-size: x-small;
}
#Main #Right ul form div div .product-title {
	text-align: center;
}
#Main #Right ul form div div .product-title {
	font-size: xx-small;
}
#Main #Right ul form div div .product-title {
	font-size: small;
}
#Main #Right span {
	font-size: small;
	color: #F93;
	font-weight: bold;
	text-align: center;
}
#Main #Right ul form div div p a {
	text-align: center;
}
#Main #Right div {
	text-align: center;
	color: #639;
}
#Main #Head-Link2 div ul a {
	text-align: center;
}
#Main #Head-Link2 table tr .style4 a {
	text-align: right;
}
#Main #Head-Link2 table tr .style6 ul {
	text-align: right;
}
#Main #Head-Link2 table tr .style6 div ul a #TenSach {
	text-align: right;
}
#Main #Head-Link2 table tr .style6 div ul a {
	text-align: right;
}
#Main #Head-Link2 table tr .style6 ul {
	text-align: right;
}
#Main #Head-Link2 table tr .style6 ul {
	text-align: right;
}
#Main #Head-Link2 table tr .style4 div ul a {
	text-align: right;
}
#Main #Head-Link2 table tr .style4 {
	text-align: center;
}
#Head-Link2 table tr .style4 ul {
	text-align: left;
}
#Head-Link2 table tr .style4 div ul a {
	text-align: left;
}
#Main #Head-Link2 table {
	text-align: right;
}
#Main #Head-Link2 table tr td ul a {
}
#Main #Head-Link2 table tr td ul a #TenSach {
	text-align: left;
	color: #66C;
}
#Main #Left #Verticalmenu ul span {
	text-align: center;
	color: #63C;
}
#Main #Left #Verticalmenu ul .wysiwyg-content p {
	font-size: small;
}
#Main #Left #Verticalmenu ul .wysiwyg-content p {
	text-align: left;
	font-size: medium;
}
#Main #Left #Verticalmenu ul .wysiwyg-content iframe {
	text-align: center;
}
</style>
<div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a></div>
<div id="float_content_right">

<a href="http://www.pvcombank.com.vn/" target="_blank"><img src="HinhAnh/pvbank.png" title="PVComBank" /></a>

</div>
</div>
    
</body>
</body>
</html>
