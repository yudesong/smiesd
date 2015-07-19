<?php
	function upload()
    {
        include_once('saestorage.class.php');
        $upload=new SaeStorage(); 
        $upload->__construct('ow0l4k4m30','500z2miijhmx3yk3i5wwyiykiy31lwxlkkl044iz');        
        $name=$_FILES['file']['name']; 
    	$basename=pathinfo($name,PATHINFO_EXTENSION); 
    	$tmp_name=$_FILES['file']['tmp_name']; 
 		$filename=$name;
		$upload->upload("download",$filename,$tmp_name);
        echo "课件上传成功";
    }
    upload();
?> 



