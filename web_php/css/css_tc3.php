<style type="text/css">
/*==Dropdown Menu==
cho ẩn sub-menu khi chưa truy xuất đến*/
.Sub-Menu li
{
	display:none;
}
/* chúng ta muốn .Sub-Menu phải nằm gần menu cấp cao nhất,
vậy thì chúng ta phải thiết lập #MyStyle li thành nhiều relative vì #MenuStyle li là các item cấp lớn nhất*/
#MenuStyle li
{
	position:relative;
}
/* tiếp theo là cho .Sub-Menu thành kiểu absolute để nó luôn luôn nằm tròn phạm vi menu cấp trên,
tức là nằm trong #MenuStyle li ấy*/
.Sub-Menu
{
	display:none;
	position:absolute;
}

/* cho .Sub-Menu sẽ hiển thị ra khi ta rẽ chuột vào menu cấp trên,
như vậy ta sẽ kết hợp với một pseudo-class là :hover để làm việc này,
để hiển thị ra chúng ta gán display:block cho nó*/
#MenuStyle li:hover .Sub-Menu
{
	display:block;
}

/* thêm một chút CSS cho cái menu con bên trong để nó xóa cái margin không cần thiết đi*/
.Sub-Menu li
{
	margin-left:0 !important;
}

</style>