<?php 
	session_start();
	if($_SESSION['name']=="")
	{
		header("Location:http:login.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>删除课件</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" href="css/easyui.css"/>
	<link rel="stylesheet" href="css/demo.css"/>	
	<link rel="stylesheet" href="css/icon.css"/>	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>		
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>	
	<script type="text/javascript" src="javascripts/jquery.min.js"></script>
	<script type="text/javascript" src="javascripts/jquery.easyui.min.js"></script>	
	<script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascripts/javascript.js"></script>			
</head>
<body>
	
	<div style="margin-left:20px;width:1200px;background:url(images/bg.png)">
	<img src="images/head.png"/>
	</div>
	<div class="container-fluid">
	<div style="height:25px;padding:12px;">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>欢迎您：</b><?php echo $_SESSION["name"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span><?php $time=date('Y/m/d',time());echo $time?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
		$weekarray=array("日","一","二","三","四","五","六");
		echo "星期".$weekarray[date("w")];
	?>
	</span>
	</div>
	<div class="row-fluid" style="width:1200px;">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="index.php">首页</a>
								</li>
								<!--  个人信息管理 -->								
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">个人信息管理<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="ch_passwd.php">修改个人密码</a>
										</li>
										<?php
										if($_SESSION['name']=="admin")
										{
										echo "<li class='divider'>
										</li>
										<li>
											<a href='add_manager.php'>添加管理员</a>
										</li>
										<li>
											<a href='del_manager.php'>删除管理员</a>
										</li>";
										}	
										?>
									</ul>
								</li>								

								<!--  分类管理 -->			
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">分类管理<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="add_fenlei.php">添加分类</a>
										</li>
										<li>
											<a href="ch_fenlei.php">修改分类</a>
										</li>
										<li>
											<a href="del_fenlei.php">删除分类</a>
										</li>
									</ul>
								</li>
								
								<!-- 课件管理  -->
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">课件管理<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="add_kejian.php">添加课件</a>
										</li>
										<li>
											<a href="del_kejian.php">删除课件</a>
										</li>
									</ul>
								</li>

								<!-- 留言管理  -->
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">留言管理<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="ping.php">回复留言</a>
										</li>
										<li>
											<a href="del_ping.php">删除留言</a>
										</li>
									</ul>
								</li>


								<!-- 通知管理  -->
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">通知管理<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="add_note.php">添加通知</a>
										</li>
										<li>
											<a href="del_note.php">删除通知</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="margin-left:20px;margin-top:0px;width:1200px;height:500px;">	
<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							标签
						</th>
						<th>
							文件名
						</th>
						<th>
							上传时间
						</th>						
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include 'conn/daocon.php';
						
						$ConDB=new BeanConn;
						$ConDB->getConn();	
						$sql="select name,file,date from tb_kejian";
						$resultset=@mysql_query($sql);
						//$items = array();
						$var=1;
						while($row = @mysql_fetch_array($resultset)){
							
							echo "<tr class='";
							if($var%6 == 0) echo "default'";
                            if($var%6 == 1) echo "warning'";
							if($var%6 == 2) echo "success'";
							if($var%6 == 3) echo "info'";	
							if($var%6 == 4) echo "warning'";
							if($var%6 == 5) echo "success'";
							echo "><td>";
							echo $var;
							echo "</td>";
							echo "<td>";
							echo $row["name"];
							echo "</td>";
							echo "<td>";
							echo $row["file"];
							echo "</td>";
							echo "<td>";
							echo $row["date"];
							echo "</td>";														
							echo "<td>";
							echo "<a href='conn/conn.php?type=delKeJian&file=".$row["file"]."'>删除</a>";
							echo "</td>";
							echo "</tr>";
							$var++;
						}
					?>
				</tbody>
			</table>	

</div>
</body>
</html>