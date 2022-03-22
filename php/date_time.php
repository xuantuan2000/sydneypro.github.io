<?php
  //in ra ngày tháng hiện tại
  	echo "Today is " . date("d/m/Y"). "<br>";
    echo "Today is " . date("d.m.Y"). "<br>";
    echo "Today is " . date("d-m-Y"). "<br>";
    echo "Today is " . date("l"). "<br><br>";
  
  //chuyển đổi định dạng ngày tháng
    $dinh_dang_cu = "2022/03/14";  
		$dinh_dang_moi = date("d/m/Y", strtotime($dinh_dang_cu));  
		echo "Định dạng cũ: " .$dinh_dang_cu."<br>";
		echo "Định dạng mới: " .$dinh_dang_moi."<br><br>";
    
  //tính khoảng cách của hai ngày bất kỳ
    $date_begin = "2000-03-14";  
		$date_end = "2022-03-14";  
		  
		$hieu_so = abs(strtotime($date_end) - strtotime($date_begin));  
		  
		$year = floor($hieu_so / (365*60*60*24));  
		$month = floor(($hieu_so - $year * 365*60*60*24) / (30*60*60*24));  
		$day = floor(($hieu_so - $year * 365*60*60*24 - $month*30*60*60*24)/ (60*60*24));  
		  
		printf("%d năm, %d tháng, %d ngày <br><br>", $year, $month, $day);
		
		// chuyển datetime thành timestamp
		$timestamp = strtotime('12-05-2016');  
		 echo $timestamp."<br><br>";
		 
		//lấy ngày đầu tiên và cuối cùng của tháng đã cho 
		$dt = "2022-03-14";  
		echo 'Ngày đầu tháng: '. date("Y-m-01", strtotime($dt)).' - Ngày cuối tháng: '. date("Y-m-t", strtotime($dt));
		
		//kiểm tra xem ngày đó có hợp lệ hay không
		echo "<br><br>";
		var_dump(checkdate(2, 30, 2022));  
		echo "<br>";
		var_dump(checkdate(03, 15, 2022));
		echo "<br>";
		
		//kiểm tra một ngày có phải cuối tuần không
		$dt='2022-03-14';  
        $dt1 = strtotime($dt);  
        $dt2 = date("l", $dt1);  
        $dt3 = strtolower($dt2);  
		if(($dt3 == "saturday" )|| ($dt3 == "sunday"))  
        {  
            echo $dt. ' là ' .$dt3.' tức là ngày cuối tuần'."<br>";  
        }   
		else  
        {  
            echo $dt. ' là ' .$dt3.' tức là không phải là ngày cuối tuần'."<br>";  
        }
?>



























