<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Array</h1>
<?php
     	//Array
    $dogs = array('HUSKY', 'Alaska', 'Corgi', 'Pigbull', 'Beckgie');  
    $cats = array('mèo ta', 'mèo ai cập', 'mèo nga', 'mèo tam thể');
		echo 'Mảng ban đầu: ';  
		foreach ($dogs as $x)   
		{
			echo "$x ".", ";
		}  
		echo "<br>";
		
			unset($dogs[0]);  //xóa husky
			unset($dogs[2]);  //xóa corgi
		  
	 echo "Sau khi xóa phần tử: ";  
		foreach ($dogs as $x)   
		{
			echo "$x ".", ";
		}  
		echo "<br>";
	
		$phan_tu_can_chen = 'cậu vàng';  
		array_splice( $dogs, 3, 0, $phan_tu_can_chen ); //chèn phần tử
		echo "Sau khi chèn phần tử: ";  
		foreach ($dogs as $x)   
		{
			echo "$x ".", ";
		}  
		echo "<br>";
		
		function nhap_hai_mang($x, $y)  //hàm nhập hia mảng
		{  
		  $temp = array(); $temp[] = $x; 
		  if(is_scalar($y))  
		  {  
		    $temp[] = $y;  
		  }  
		  else  
		  {  
		    foreach($y as $k => $v)  
		    {  
		      $temp[] = $v;  
		    }  
		  }  
		  return $temp;  
		}  
		
		function chuyen_doi_kieu($input, $ucase)  //hàm chuyển đổi chữ hoa/ chũ thường
		{  
		  $case = $ucase;  
		  $narray = array();  
		  if (!is_array($input))  
		  {  
		    return $narray;  
		  }  
		  foreach ($input as $key => $value)  
		  {  
		    if (is_array($value))  
		      {  
		        $narray[$key] = chuyen_doi_kieu($value, $case);  
		        continue;  
		      }  
		    $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));  
		  }  
		  return $narray;  
		}  
		
		echo 'Sau khi nhập hai mảng với nhau: ';  
		echo '<pre>'; print_r(array_map('nhap_hai_mang',$dogs, $cats));
		 
		echo 'Mảng chữ thường: ';  
		$mang_chu_thuong = chuyen_doi_kieu($dogs,CASE_LOWER);  
		foreach ($mang_chu_thuong as $x)   
		{
			echo "$x ".", ";
		}  
		echo "<br>";
		echo 'Mảng chữ hoa: ';  
		$mang_chu_hoa = chuyen_doi_kieu($cats,CASE_UPPER);  
		foreach ($mang_chu_hoa as $x)   
		{
			echo "$x ".", ";
		}  
		echo "<br>";
		
		$arr_temp = array_map('strlen', $dogs);  
		echo "Độ dài ngắn nhất của phần tử trong mảng: " . min($arr_temp) . //tìm chuỗi ngắn nhất
		" \nĐộ dài dài nhất của phần tử trong mảng: " . max($arr_temp);  //tìm chuỗi dài nhất
?>

</body>
</html>
