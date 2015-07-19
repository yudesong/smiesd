<?php
	include_once 'conn/daocon.php';	
	$ConDB=new BeanConn;
	$ConDB->getConn();	
	$sql="select name,file from tb_kejian order by date desc limit 0,5";
	$resultset=@mysql_query($sql);
	while($row = @mysql_fetch_array($resultset))
	{
		
        if(""!=$row["file"])
        {
        echo "<li>";
		echo "<span>";
		echo $row["name"];
		echo "</span>";
		echo "&nbsp;&nbsp;";
		echo "<span>".$row['file']."</span>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<a href='";
    	include_once('saestorage.class.php');
        $upload=new SaeStorage(); 
        $upload->__construct('30no4lommj','hi2y12035y4wykwkhz110whjy440k0jz3xlmyjjz');
        $url=$upload->getUrl("download",$row["file"]);     
        echo $url;
		echo "'>下载</a>";
		echo "</li>";
        }
	}
?>