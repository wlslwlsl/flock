#database connect descript, class

<?php
	$connect = mysqli_connect('localhost','root','1234','flock');
  
  	$p_num = $_REQUEST["descript"];
	
	if (mysqli_connect_errno()){
		echo "MySQL 연결 오류 : " . mysqli_connect_error();
	}
	$firstpro = mysqli_query($connect,"SELECT p_num FROM project group by p_num order by p_num desc");
	$fid = array();
	while ($row = mysqli_fetch_array($firstpro))
	{
		$row[p_num]."<br>";
		array_push($fid,$row[p_num]);
        };
       
	mysqli_query($connect, "update product set p_num = '$fid[0]' + 1 where id = $id");
	mysqli_query($connect, "insert into project(descript) values ('$p_num')"); 

	mysqli_close($connect);
					
?>
