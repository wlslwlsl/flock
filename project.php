#generate new project interface

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
 margin-left:180px;
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
   </style>
 </head>
<script type="text/javascript">
function button_click(){
	if(confirm("새로운 project를 생성하시겠습니까?")==true){ 
				
		location.href="page1.php";
	}
	else{
		alert("cancel");
	}

}

</script>
 <body >
 <div>
<table id="top" border="0" width="1000" height="100" cellpadding="0" cellspacing="0">
  <tr>
    <td id="tdtop" style="border-color:white"> Flock </td>
  </tr>
 <table id="title1" border="0" style="border-color:white" width="2800" height="100" rules="none" >
    <tr >
	 <td style="border-color:white">
     <span style="font-size:1.5em"><a href = "page1.php" id="pro"> New generate project</a></span> <br>
	 </td>
	</tr>
  </table>
  <table border="0">
   <tr> 
    <td colspan="5"  style="border-color:white">
	<table border="0"  cellpadding="0" cellspacing="0">
	<tr>
	<td style="border-color:white">
	<div id="content">* Project Name </div><br>
	<input type="text" id="text0" name="class" value="Write Description" onfocus="this.value=''"> <br>
	</td>
	</tr>
</table><br>
<button type="button" id = "submit" onclick=button_click();>Generate</button><br>
</table>
  </table> 
</div>
 </body>
 </html>

