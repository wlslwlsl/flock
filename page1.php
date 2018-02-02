#page1 interface
#질문생성
#클래스 작성
#게시글을 통한 다른 사용자의 활용시각화
#프로젝트 생성

<?php
	$connect = mysqli_connect('localhost','root','1234','flock');
 	if (mysqli_connect_errno()){
    	echo "MySQL 연결 오류 : " . mysqli_connect_error();
 	} 
	mysqli_query($connect,"UPDATE project SET p_num = 0");
	
        mysqli_close($connect);
?>
<!doctype html>
<html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <style type="text/css">
     
	 #text0 {width:500px;height:30px;color:gray;}
	 #text1 {width:100px;height:30px;color:gray;}
	 #text2 {width:300px;height:30px;color:gray;}
	 #title1 {width:380px; height:100px;}
	 #id {line-height:30px;width:150px;}
	 #project {color:blue;font-size:1em;}
	 #pro {text-decoration:none; color:#585858;} 
     
	 #eleven {width:200px;height:300;}
	 #school2 {height:100px;}
	 #link {color:black;}
#notice {width:1000px; table-layout:fixed;}
#title2{
		font-weight:bold; border-radius:5px;
	}
	 a {text-decoration:none; color:black;}
	 td { border:1px solid #a1a1a1;  height:30px;}
	 #content{
		 font-size: 18px;
		 text-align: left;
		 color : black;
	 }
	 #tdtop{
		font-size:3em;
		color:#585858;
	}
	#top{
		border:3px dotted #CECEF6;
	}
	#selpro{
		font-weight:bold;
		text-align:center;
		
	}
#no{
		border:0px;
	}
 #short{
		  overflow: hidden; text-overflow:ellipsis; white-space:nowrap; border-radius:5px;
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
 margin-left:400px;
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
var oTbl;
//Row 추가
function insRow() {
  oTbl = document.getElementById("addTable");
  var oRow = oTbl.insertRow();
  oRow.onmouseover=function(){oTbl.clickedRowIndex=this.rowIndex}; 

  //삽입될 Form Tag
  var frmTag = "<input type=text id=text1 name=class> : <input type=text id=text2 name=class>";
  frmTag += "<input type=button class='button' value='삭제' onClick='removeRow()' style='cursor:hand'>";
  oRow.innerHTML = frmTag;
}
//Row 삭제
function removeRow() {
  oTbl.deleteRow(oTbl.clickedRowIndex);
}

</script>
 </head>
 <body >
<form action="generate_pro.php" method="post">
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
  <table border="0"  cellpadding="0" cellspacing="0">
   <tr> 
    <td colspan="5" style="border-color:white">
	<table width="1000" align="center" border="0">
	<tr>
	<td style="border-color:white">
	<div id="content">* 질문을 작성해 주시기 바랍니다.</div><br>
	<input type="text" onfocus="this.value=''" id="text0" name="descript" value="이 아이템은 입는 것입니까?"><br><br><br>
	</td>
	</tr>
	</table>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr style="border-color:white">
	<td colspan="5" style="border-color:white">
	<div id="content">* 예측 클래스를 작성해 주시기 바랍니다.    <input name="class" class='button' type="button" style="cursor:hand" onClick="insRow()" value="추가">
         <font color="#FF0000">*</font> class add click!! </div><br>
	</td>
	</tr>
	<tr style="border-color:white">
         <td height="25" style="border-color:white">
           <table id="addTable" width="600" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="0">
            <tr style="border-color:white">
	<td colspan="5" style="border-color:white"><input type="text" id="text1" name="class" value="YES" onfocus="this.value=''"> : <input type="text" id="text2" name="disclass" value="네, 이것은 입는 것입니다." onfocus="this.value=''"></td></tr></table><br><br>
	</td><tr></table><br>
<button type="submit" id="submit"> generate </button><br>
	</td>
   </tr>
  </table> 
<table border="0" id="notice" width="2800" height="100" rules="none">
	  <tr bgcolor="#CECEF6">
			  <td align="center" width="40" > No </td>
			  <td align="center" width="200"> project name </td>
			  <td align="center" width="50" > label </td>
			  <td align="center" width="45">조회수 </td>
	  </tr>
 <?php
       $connect = mysqli_connect('localhost','root','1234','flock');
 	if (mysqli_connect_errno()){
    		echo "MySQL 연결 오류 : " . mysqli_connect_error();
 	 } 
		
	// GET/POST로 전달된 값 획득
        $page = $_GET[page];
 
        // 게시글 리스트가 모두 몇 페이지가 될지 계산
        $num_records_per_page = 5;  // 한 페이지에 표시될 레코드 수 설정
   
       // 전체 레코드 수 알아내기
       $sql = "select * from project";
       $result = mysqli_query($connect, $sql);
       $num_records = mysqli_num_rows($result);
   
       $num_pages = ceil($num_records / $num_records_per_page);// 전체 페이지 수 구하기
  
       // 현재 페이지의 첫번째 레코드 계산
       $page = min(max(1, $page), $num_pages);// 1 < 출력할 페이지 번호 < 전체 페이지 수
       $start = ($page - 1) * $num_records_per_page;// 출력을 시작할 첫번째 레코드 위치
 
      // 현재 페이지의 레코드들 읽기
       $sql =  "select * from project order by num desc";
       $sql .= " limit $start, $num_records_per_page";
       $result = mysqli_query($connect, $sql);
	   $i=0;
  
  	    if(empty($result)) {
		echo '<tr><td colspan="4" align="center" id="title3">글이 존재하지 않습니다.</td></tr>
		          <tr><td colspan="4" id="no">&nbsp;</td></tr>
			  <tr><td colspan="4" id="no">&nbsp;</td></tr>
			  <tr><td colspan="4" id="no">&nbsp;</td></tr>';
	}
	else{
       // 게시글 리스트 출력
       while ($row = mysqli_fetch_array($result))
      {
          echo "<tr>
                    <td id='short' align=center>$row[num]</td>
                    <td id='short' ><a href='view6.php?num=$row[num]&page=$page'>$row[descript]</a></td>
                    <td id='short' align=center>$row[class]</td>
                   <td id='short' align=center>$row[hits]</td>
                </tr>"; 
       $i=$i+1;
       }
	   while($i<5)
	   {
		   echo '<tr><td colspan="5" id="no">&nbsp;</td></tr>';
			  $i=$i+1;
	   }

	}
 	mysqli_close($connect);
     ?>   
	  </table></center>
</table>
</div>
</form>
 </body>
 </html>
