<?php
	class BeanConn
	{
		private $con;
		public function getConn()
		{
			$con = @mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
			if(!$con)
			{
				die("Connect failed:".mysql_error());
			}
			mysql_query("set character set 'utf8'");//读库 
			mysql_query("set names 'utf8'");//写库 
			mysql_select_db("app_smiesd",$con);
		}

		public function closeConn()
		{
			mysqli_close($con);

		}
	}
?>