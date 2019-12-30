<style type="text/css">

*
{
	margin:0;
	padding:0;
	font-family: "Times New Roman", Times, serif;
	font-weight: 700;
	font-size: large;
	color: black;
	}

/*== Khai báo style cơ bản cho website==*/
body
{
	font-family: Sans-Serif, Arial, Tahoma;
	color:#333;
}
/*==Style cho menu==*
sử dụng thuộc tính list-style-type để xóa các dấu đầu dòng, thêm màu nền và đưa văn bản bên trong ra giữa*/
#MenuStyle ul
{
	background:#9966FF;
	list-style-type:none;
	text-align:center;
	 
}
/* sử dụng float:left cho tất cả các thẻ li hoặc đưa về kiểu hiển thị inline-block*/
#MenuStyle li
{
	color:#3366FF;
	display:inline-block;
	width:200px;		/*độ rộng từng mục (item) trên menubar*/
	height:30px;		/*chiều cao menubar*/
	line-height:40px;	/*Định dạng cho hiển thị giữa dòng theo chiều dọc*/
	margin-left:-5px;
}

/* thêm style cho các thẻ <a> bên trong,
quan trọng nhất là sẽ đưa kiểu hiển thị cho các thẻ này thahf block để nó được phủ kín cái #menu ul*/
#MenuStyle a
{
	text-decoration:none;
	color:black;
	display:block;
}

/*khi cursor trỏ đến item trong menu*/
#MenuStyle a:hover
{
	background:none;
	color:#63F;
}
</style>