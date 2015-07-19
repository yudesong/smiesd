<?php
    function getURL($filename)
    {
        include_once('saestorage.class.php');
        $upload=new SaeStorage(); 
        $upload->__construct('ow0l4k4m30','500z2miijhmx3yk3i5wwyiykiy31lwxlkkl044iz');
        $url=$upload->getUrl("download",$filename); 
        return $url;
    }
	$filename=$_REQUEST["filename"];
    getURL($filename);
?>