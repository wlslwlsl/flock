#database connect descript, class

<?php
	$connect = mysqli_connect('localhost','root','1234','flock');
  
    	$descript=$_POST["descript"]; 
    	$class=$_POST["class"]; 
	$p_num = 1;

	$sql = mysqli_query($connect, "insert into project (descript,class,p_num) values ('$descript','$class','$p_num')");
	
	if($sql){
		echo "<script> location.href='page2.php' </script>";
	}
	else{
		echo "<script> location.href='page1.php' </script>";
	}

	mysqli_close($connect);			
?>
