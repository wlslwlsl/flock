#page2 interface
#item classification class
#생성된 클래스로 해당 아이템을 분류


<!doctype html>
<html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <style type="text/css">
      #title1 {width:380px; height:100px;}
	 #text0 {width:300px;}
	 #text1 {width:100px;}
	 #text2 {width:300px;}
	 #title1 {width:380px; height:100px;}
	 #id {line-height:30px;width:150px;}
	 #pro {text-decoration:none; color:#585858;} 
	 #project {color:blue;font-size:1em;}
	 #progress {margin-left:40px;}
	 #center {text-align:center;}
	 #eleven {width:200px;height:300;}
	 #school2 {height:100px;}
	 #link {color:black;}
	 a {text-decoration:none; color:black;}
	 td { border:1px solid #a1a1a1;  height:30px;}
	 #content{
		 font-size: 18px;
		 text-align: left;
		 color : black;
	 }
	 #table{
		
		border-top: 1px solid #CEE3F6;
    		border-collapse: collapse;
	}
	#th{
	    	text-align:center;
		border-bottom: 1px solid #CEE3F6;
		padding: 10px;
	}
	#td{
		border-left:0px solid white;
		border-right:0px solid white;
		border-bottom: 1px solid #CEE3F6;
		padding: 10px;
	}
	#tr{
		background-color:#CECEF6;
	}
#tdtop{
		font-size:3em;
		color:#585858;
	}
	#top{
		border:3px dotted #CECEF6;
	}
#submit{
  background:#CECEF6;
  color:#fff;
  border:none;
  position:relative;
  height:50px;
  font-size:1.2em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
 border-radius:5px;
 margin-left:150px;
 margin-bottom:30px;
}
#submit:hover{
  background:#fff;
  color:#CECEF6;
}
#submit:before,submit:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #5858FA;
  transition:400ms ease all;
}
#submit:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
#submit:hover:before,submit:hover:after{
  width:100%;
  transition:800ms ease all;
}
#button {
   border: 1px solid #375d73;
   background: #70a4c7;
   background: -webkit-gradient(linear, left top, left bottom, from(#2e688f), to(#70a4c7));
   background: -webkit-linear-gradient(top, #2e688f, #70a4c7);
   background: -moz-linear-gradient(top, #2e688f, #70a4c7);
   background: -ms-linear-gradient(top, #2e688f, #70a4c7);
   background: -o-linear-gradient(top, #2e688f, #70a4c7);
   background-image: -ms-linear-gradient(top, #2e688f 0%, #70a4c7 100%);
   padding: 3.5px 7px;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #c0ced6 0 1px 0;
   color: #e7ecf0;
   font-size: 14px;
   font-family: helvetica, serif;
   text-decoration: none;
   vertical-align: middle;
   }
#button:hover {
   border: 1px solid #6dbeed;
   text-shadow: #b2c8d6 0 1px 0;
   background: #afc9db;
   background: -webkit-gradient(linear, left top, left bottom, from(#7bbce8), to(#afc9db));
   background: -webkit-linear-gradient(top, #7bbce8, #afc9db);
   background: -moz-linear-gradient(top, #7bbce8, #afc9db);
   background: -ms-linear-gradient(top, #7bbce8, #afc9db);
   background: -o-linear-gradient(top, #7bbce8, #afc9db);
   background-image: -ms-linear-gradient(top, #7bbce8 0%, #afc9db 100%);
   color: #e7ecf0;
   }
#button:active {
   text-shadow: #1e4158 0 1px 0;
   border: 1px solid #0a3c59;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#afc9db));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   background-image: -ms-linear-gradient(top, #3e779d 0%, #65a9d7 100%);
   color: #fff;
   }
   </style>
<script language="javascript">
function difItem()
{
	var check = confirm("another item classifier?");

      	  if(check == true) location.href="page2.php";
      	  else {
		alert("cancel");
   }
 }
function complete()
{
	var check = confirm("item classifier complete?");

      	  if(check == true) location.href="page3.php";
      	  else {
		alert("cancel");
   }
 }
</script>
 </head>
 <body >
 <div>
 <table id="top" border="0" width="1000" height="100" cellpadding="0" cellspacing="0">
  <tr>
    <td id="tdtop" style="border-color:white"> Flock </td>
  </tr>
 <table id="title1" border="0" style="border-color:white" width="2800" height="100" rules="none" >
    <tr >
	 <td style="border-color:white">
     <span style="font-size:1.5em"><a href = "page1.php" id="pro"> Project1 </a></span> <a href="project.php" id="project"> edit </a><br>
	 </td>
	</tr>
  </table>
<table border="0" >
   <tr> 
    <td colspan="5">
	<table width="1000" align="center">
<?php
	$connect = mysqli_connect('localhost','root','1234','flock');
 	if (mysqli_connect_errno()){
    		echo "MySQL 연결 오류 : " . mysqli_connect_error();
 	 } 
	$pro = mysqli_query($connect,"SELECT descript,class FROM project WHERE p_num != 0");
	echo "<tr id='tr'> <th id='th'>descript</th> <th id='th'>classes</th> </tr>";
	while ($rows = mysqli_fetch_array($pro))
	{
		echo "<tr>";
		echo "<td id='td'>".$rows['descript']."</td>";
		echo "<td id='td'>".$rows['class']."</td>";
		echo "</tr>";
        };
?>
</table>
</td></tr></table><br><br>
<table border="0" cellpadding=0 cellspacing =0>
<?php
	
	$result = mysqli_query($connect, "select id,title,price,seller,imgsrc from product order by rand() limit 10");
	
	echo "<tr id='tr'> <th id='th'>id</th> <th id='th'>title</th> <th id='th'>price</th> <th id='th'>seller</th> <th id='th'>img</th> <th id='th'>classes</th></tr>";
 
       while ($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
	echo "<td id='td'>".$row['id']."</td>";
	echo "<td id='td'>".$row['title']."</td>";
	echo "<td id='td'>".$row['price']."</td>";
	echo "<td id='td'>".$row['seller']."</td>";
	echo "<td id='td'> <img src=".$row['imgsrc']." width='300'></td>";
	echo "<td id='td'><input type='submit' id='button' value='YES'></td>";
	echo "</tr>";
       }
 mysqli_close($connect);
?>
</table><br><br>
<span id="progress">Progress : 150  /  200 ( 75% )</span>
<button type="button" id = "submit" onclick="difItem() ">다른 아이템 분류</button>
<button type="submit" id = "submit" onclick="complete()">complete</button><br>
</table>
</div>
 </body>
 </html>

