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
#Content {
	font-size: medium;
}
body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
}
#Content p strong {
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
<p style="margin-bottom: 0.11in; color: #69F;" align="center"><strong>CHÍNH SÁCH BẢO MẬT</strong></p>
<span id="Content">Bảo mật thông tin khách hàng là một trong những ưu tiên nhằm tạo điều kiện mua sắm tốt nhất cho quí khách tại . Chúng tôi hiểu sử dụng hợp lý và bảo mật thông tin sẽ thể hiện sự quan tâm của nhasachonline dành cho quí khách. Vì thế, nhasachonlone cam kết việc sử dụng thông tin trên sẽ chỉ nhằm nâng cao chất lượng dịch vụ khách hàng và tạo môi trường mua sắm an tòan, tiện lợi tại nhasachonlone. Cụ thể, thông tin của quí khách chỉ dùng để:</br>

&nbsp;&nbsp;&nbsp;- Cung cấp một số tiện ích, nâng cao chất lượng dịch vụ hỗ trợ khách hàng</br>

&nbsp;&nbsp;&nbsp;- Giải quyết các vấn đề, tranh chấp phát sinh liên quan đến việc sử dụng website nhasachonlone.com</br>

&nbsp;&nbsp;&nbsp;- Ngăn chặn những hoạt động vi phạm pháp luật Việt Nam</br>

nhasachonlone cam đoan sẽ không bán, chia sẻ dẫn đến làm lộ thông tin cá nhân của quí khách vì mục đích thương mại vi phạm cam kết của chúng tôi ghi trong chính sách bảo mật này. Tất cả thông tin giao dịch giữa quí khách và nhasachonlone sẽ được bảo mật qua phần mềm Secure Sockets Layer (SSL) bằng cách mã hóa tất cả thông tin quí khách nhập vào.</br>

Tuy nhiên, quí khách không nên trao đổi những thông tin tài khoản,thanh toán, giao nhận của mình cho 1 bên thứ 3 nào khác để tránh rò rỉ thông tin. Khi sử dụng chung máy tính với nhiều người, vui lòng thoát khỏi tài khoản mỗi khi không sử dụng dịch vụ của nhasachonlone nữa để tự bảo vệ thông tin về mật khẩu truy cập của mình.</br>

Ngoài ra, quí khách tuyệt đối không được sử dụng bất kỳ hình thức nào để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Chúng tôi nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết. Mọi thông tin của quí khách tại nhasachonlone sẽ được chúng tôi bảo mật nhưng trong trường hợp pháp luật yêu cầu, chúng tôi buộc phải cung cấp thông tin này cho cơ quan pháp luật.</br>

nhasachonlone hiểu rằng quyền lợi của quí khách trong việc bảo vệ thông tin cá nhân cũng chính là trách nhiệm của chúng tôi nên trong bất kỳ trường hợp có thắc mắc, góp ý nào liên quan đến chính sách bảo mật của nhasachonlone, vui lòng liên hệ:
<p style="text-align: justify;"><strong>Tel:</strong>&nbsp;1900636467<br /><strong>Email:</strong>&nbsp;<a href="mailto:support@nhasachonlone.com">support@nhasachonlone.com</a></p></span>
</div>
<div id="Footer"> 
    	 
        <ul>
    <li>
        <div class="text">
            <h4>Chính Sách</h4>
            <a href="#">Điều Khoản Sử Dụng</a></br>
            <a href="csbaomat.php">Chính Sách Bảo Mật</a></br>
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
