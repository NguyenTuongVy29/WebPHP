<style type="text/css">
/*Thêm css cho #menu ul để thêm màu nền cho đẹp, và bỏ đi mấy cái dấu chắm đầu dòng của danh sách*/
#Verticalmenu ul
{
	background:white;
	width:300px;
	padding:0;
	list-style-type:none;
	text-align:left;
	}
/*Việc Css cho các  thẻ <li> để thêm chiều cso cho nó với height
và thêm line-height bằng với chiều cao để nó đứng giữa block*/
#Verticalmenu li {
    width: auto;
    height: 40px;
    line-height: auto;
    border-bottom: 1px solid #eBeBeB;
    padding: 0 1em;
}
	/*Cuối cùng việc css cho thẻ <a> bên trong menu, chuyển nó qua thành block và thêm style cần thiết*/
#Verticalmenu li a {
    text-decoration: none;
    color: black;
    font-weight: normal;
    display: block;
}
		/*Tạo thêm hiệu ứng background khác khi rê chuột vào menu*/

#Verticalmenu li a:hover {
   
	color:#9966FF;
}
body {
}
</style>