<?php
	include_once 'conn/daocon.php';	
	$ConDB=new BeanConn;
	$ConDB->getConn();	
	$sql="select name,date from tb_note";
	$resultset=@mysql_query($sql);
	while($row = @mysql_fetch_array($resultset))
	{
	echo "<li>";
	echo "<span>";
 //	echo "<a href='#' style='text-decoration:none;color:black;'>";
 //	echo (mb_strlen($row["name"],"utf-8")>11)? mb_substr($row["name"],0,10,"utf-8")."...":$row["name"];
	echo $row["name"];
    $date=date($row["date"]);
    echo(date('Y',strtotime($date)));
    echo "/";
    echo(date('m',strtotime($date)));
    echo "/";
    echo(date('d',strtotime($date)));    
    echo "</span>&nbsp;&nbsp;";
  //echo $row["date"];
	echo "</li>";
	}
?>