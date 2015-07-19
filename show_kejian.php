<?php
	include_once 'conn/daocon.php';	
	$ConDB=new BeanConn;
	$ConDB->getConn();	
	//	echo $sql;
	$page=intval($_REQUEST["page"]);
	if($page=="") $page=1;
//	echo $page;
//	echo $sql;
//	$sql="select name,file,content,date from tb_kejian order by date desc";
	$name=$_REQUEST["name"];
	if($name=="") $sql="select id,name,file,content,date from tb_kejian order by date desc limit ".(($page-1)*5).",5";
	else $sql="select id,name,file,content,date from tb_kejian where name='".$name."' order by date desc limit ".(($page-1)*5).",5";

	$resultset=@mysql_query($sql);
	$var=1;
	while($row = @mysql_fetch_array($resultset))
	{
		echo "<div style='margin:10px;padding:10px;border-bottom:1px dashed'>";
		echo "<span>";
		echo "标签： 【";
		echo "<span id='name$var'>";
		echo $row["name"];
		echo "</span>";
		echo "】";
		echo "</span></br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
       	echo "<span id='conten$var'>";
        echo $row["content"];
        echo "</span>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<span id='file$var'>";
        echo $row["file"];
		echo "</span>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $row["date"];
		echo "</br>";	
		echo "<div>";
		echo "<ul style='list-style:none;'>";
		echo "<li style='display:inline-table;margin-left:10px;border-right:1px solid #ccc'>";
		if(""!=$row["file"])
        {
        echo "<a style='padding:10px;' href='";
    	include_once('saestorage.class.php');
        $upload=new SaeStorage(); 
        $upload->__construct('30no4lommj','hi2y12035y4wykwkhz110whjy440k0jz3xlmyjjz');
        $url=$upload->getUrl("download",$row["file"]);     
        echo $url;
		echo "'>下载</a>";
        }
        echo    "&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li style='display:inline-table;margin-left:10px;border-right:1px solid #ccc'>
			<span id='ping$var' style='padding:10px;cursor:pointer'>评论</span>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li style='display:inline-table;margin-left:10px;'>";
		if(""!=$row["file"])
        {
        echo "<img src='images/zan.png' id='zan$var' style='cursor:pointer'/>
			<span class='badge' id='zan_num$var' name='zan_num'>";
		$sql="select number from tb_zan where file='".$row["file"]."'"."and name='".$row["name"]."'";
		$rs=@mysql_query($sql);
		if($rower = @mysql_fetch_array($rs))
		echo $rower["number"];
		echo "</span>";
        }
        echo "</li>
			</ul>
					</div>
					<div style='display:none' id='ping_div$var' style='width:70%'>";
		echo "<table id='edit_ping$var'>
							<tr>
								<td><img src='images/person.png' width='28px' height='28' style='padding:2px;'/>&nbsp;&nbsp;</td>
								<td>&nbsp;&nbsp;<input type='text' class='form-control' style='width:600px;' id='content$var'/></td>
							</tr>
							<tr>
								<td></td>
								<td align='right'><img src='images/ping.png' id='ping_btn$var' style='cursor:pointer'/></td>
							</tr>
				 </table>";
		$sql_ping="select content,img from tb_ping where name='".$row["name"]."' and file='".$row["file"]."' and conten='".$row["content"]."'";
//      echo $sql_ping;
		$rs_ping=@mysql_query($sql_ping);
		while($row_ping=@mysql_fetch_array($rs_ping))
		{
			echo "<div style='border-bottom:1px dashed #ccc;margin-top:10px;'>";
			echo "<img src='images/";
			echo $row_ping["img"];
			echo "'/>";
			echo "<span>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $row_ping["content"];
			echo "</span>";
			echo "</div>";
		}							
		echo	"</div>
			</div>";
		$var++;	
	}
?>