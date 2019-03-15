<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 5 KIM TỰ THÁP</title>
</head>
<body>
	<?php
		$i = 1;
		$n = 6;
		$result = ' ';
		$current = '';
		while ($i <= $n) {
			$space = str_repeat("&nbsp;&nbsp;", $n-$i);// khoảng trắng để lưu vào màn hình
			$space_1 = str_repeat(" ", $n-$i);// khoảng trắng để lưu vào file
			$kitu = str_repeat("*", 2*$i-1);
			$result_1 = $space_1 . $kitu;//kết quả để in vào file
			$result = $space . $kitu . "<br>"; //kết quả để in ra ngoài màn hình
			$current .="\n".$result_1;//thêm kết quả vào trong file
			file_put_contents('demo.txt', $current);//thêm kết quả vào trong file
			echo $result;
			$i++;
		}
	?>
	<a href="demo.txt">Lưu vào FILE</a>
</body>
</html>