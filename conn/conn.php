<?php
	session_start();
	class Conn
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

		public function adminLogin()
		{
			
			$name=$_POST["name"];
			$passwd=$_POST["passwd"];
			$sql="select * from tb_manager where name='$name' and passwd='$passwd'";
			$resultset=@mysql_query($sql);
			$row=mysql_fetch_array($resultset);
			if($row)
			{
                session_start();
				$_SESSION['name']=$name;
                header("Location:http://smiesd.sinaapp.com/manager.php");
			}
			else
			{
				echo "登录失败";
			}
		}

		public function changePasswd()
		{
			session_start();
			$name=$_SESSION['name'];
			$passwd=$_POST["passwd"];
			$sql="update tb_manager set passwd='$passwd' where name='$name'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo "1";
			}
			else
			{
				echo "0";
			}
			
		}

		public function addManager()
		{
			$name=$_POST["name"];
			$passwd=$_POST["passwd"];
			$sql="insert into tb_manager(name,passwd) values('$name','$passwd')";
			$result=@mysql_query($sql);
			if($result)
			{

				echo "1";
			}
			else
			{
				echo "0";
			}
		}

		public function delManager()
		{
			$name=$_REQUEST['name'];
			$sql="delete from tb_manager where name='$name'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo '删除成功';
			}
			else
			{
				echo '删除失败';
			}
		}

		public function addFenLei()
		{
			$name=$_POST["name"];
			$sql="select * from tb_fenlei where name='$name'";
			$rs=@mysql_query($sql);
			$row=mysql_fetch_array($rs);
			if($row) echo "0";
			else
			{
				$sql="insert into tb_fenlei(name) values('$name')";
				$result=@mysql_query($sql);
				if($result)
				{
					echo "1";
				}
				else
				{
					echo "0";
				}
			}
		}

		public function changeFenLei()
		{
			$oname=$_POST["oname"];
			$nname=$_POST["nname"];
			$sql="update tb_fenlei set name='$nname' where name='$oname'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo "1";
			}
			else
			{
				echo "0";
			}
		}		

		public function delFenLei()
		{
			$name=$_REQUEST["name"];
			$sql="delete from tb_fenlei where name='$name'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo '删除成功';
			}
			else
			{
				echo '删除失败';
			}
		}

		public function addKeJian()
		{
			$name=$_POST["name"];
			$file=$_POST["file"];
			$date=date('Y-m-d H:i:s',time());
            $content=$_POST["content"];
            $sql_zan="insert into tb_zan(name,file,content,number) values('$name','$file','$content',0)";
			$sql="insert into tb_kejian(name,file,content,date) values('$name','$file','$content','$date')";
			$resultset = @mysql_query($sql);
            $rs = @mysql_query($sql_zan);
			if($resultset && $rs)
            {
            echo "1";
            }else
            {
            echo "0";
            }
		}

		public function delKeJian()
		{
			$file=$_REQUEST['file'];
			$sql="delete from tb_kejian where file='$file'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo '删除成功';
			}
			else
			{
				echo '删除失败';
			}
		}

		public function addPing()
		{
			$name=$_POST["name"];
			$content=$_POST["content"];
			$file=$_POST["file"];
            $conten=$_POST["conten"];
			$num=rand(1,10);
			$img="user".$num.".png";
			$date=date('Y-m-d H:i:s',time());
			$sql="insert into tb_ping(name,conten,content,file,img,date) values('$name','$conten','$content','$file','$img','$date')";
            $resultset=@mysql_query($sql);
			if($resultset)
			{
				echo "1";
			}
			else
			{
				echo "0".$sql;
			}
		}

		public function delPing()
		{
			$content=$_REQUEST['content'];
			$sql="delete from tb_ping where content='$content'";
			$resultset=@mysql_query($sql);
			if($resultset)
			{
				echo "删除成功";
			}
			else
			{
				echo "删除失败";
			}
		}

		public function addNote()
		{
			$name=$_POST["name"];
			$date=date('Y-m-d H:i:s',time());
			$sql="insert into tb_note(name,date) values('$name','$date')";
			$resultset=@mysql_query($sql);
			if($resultset)
			{
				echo "1";
			}
			else
			{
				echo "0";
			}
		}

		public function delNote()
		{
			$name=$_REQUEST["name"];
			$sql="delete from tb_note where name='$name'";
			$result=@mysql_query($sql);
			if($result)
			{
				echo '删除成功';
			}
			else
			{
				echo '删除失败';
			}
		}

		public function addZan()
		{
			$file=$_POST["file"];
            $name=$_POST["name"];
			$num=intval($_POST["num"]);
			$sql="update tb_zan set number='$num' where file='$file' and name='$name'";
			$resultset=@mysql_query($sql);
			if($resultset)
			{
				echo "1".$sql;
			}
			else
			{
				echo "0";
			}
		}

		public function delZan()
		{
			$name=$_POST["name"];
            $file=$_POST["file"];
			$num=intval($_POST["num"]);
			$sql="update tb_zan set number='$num' where name='$name' and file='$file'";
			$resultset=@mysql_query($sql);
			if($resultset)
			{
				echo "1";
			}
			else
			{
				echo "0";
			}
		}


		public function closeConn()
		{
			mysqli_close($con);

		}
	}
?>
<?php
	
	$ConDB=new Conn;
	$ConDB->getConn();
	$type=$_REQUEST["type"];
	switch($type)
	{
		case "adminLogin":
				$ConDB->adminLogin();
				break;
		case "changePasswd":
				$ConDB->changePasswd();
				break;
		case "addManager":
				$ConDB->addManager();
				break;				
		case "delManager":
				$ConDB->delManager();
				break;
		case "addFenLei":
				$ConDB->addFenLei();
				break;	
		case "changeFenLei":
				$ConDB->changeFenLei();
				break;	
		case "delFenLei":
				$ConDB->delFenLei();
				break;
		case "addKeJian":		
				$ConDB->addKeJian();
				break;		
		case "delKeJian":		
				$ConDB->delKeJian();
				break;	
		case "addNote":		
				$ConDB->addNote();
				break;	
		case "delNote":		
				$ConDB->delNote();
				break;	
		case "delZan":		
				$ConDB->delZan();
				break;	
		case "addZan":		
				$ConDB->addZan();
				break;					
		case "addPing":
				$ConDB->addPing();
				break;
		case "delPing":
				$ConDB->delPing();
				break;        

	}

?>