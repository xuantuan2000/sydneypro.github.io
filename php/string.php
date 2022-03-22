<?php
		$dia_chi_mail  = 'xuantuan2000@gmail.com';
		$str = 'php la ngon ngu lap trinh';  
		$str2 = 'va html';
		$user = strstr($dia_chi_mail, '@', true); //lấy username email
		$insert_pos = 4;  
		$new_str = substr_replace($str, $str2.' ', $insert_pos, 0); //chèn str2 vao str1
		
		echo(strtoupper("php la ngon ngu lap trinh\n")); //chuyển đổi tất cả các chữ cái trong chuỗi thành chữ hoa  
		echo(strtolower("PHP LA MOT NGON NGU LAP TRINH\n")); //chuyển đổi tất cả các chữ cái trong chuỗi thành chữ thường 
		echo(ucfirst("php la mot ngon ngu lap trinh\n")); 	//chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa 
		echo(ucwords("php la mot ngon ngu lap trinh\n")); //chuyển đổi chữ cái đầu tiên của tất cả các từ trong chuỗi thành chữ hoa
		echo $user; //in ra username
		echo "\n";
		echo substr(	$dia_chi_mail, -3); //in ra 3 kí tự cuối của email
		echo "\n";
		echo preg_replace('/php/', 'html', $str, 1); //đổi từ ở đầu chuỗi
		echo "\n";
	  echo $new_str; // in ra chuỗi mới
	  echo "\n";
    echo strtok($str, " "); // lấy từ đầu tiên của chuỗi
    echo "\n";
?>