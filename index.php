<!DOCTYPE html>
<html>
<head>
	<title>软件设计II下载</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" href="css/easyui.css"/>
	<link rel="stylesheet" href="css/demo.css"/>	
	<link rel="stylesheet" href="css/icon.css"/>	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>		
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>	
	<link rel="stylesheet" href="css/style.css"/>		
	<script type="text/javascript" src="javascripts/jquery.min.js"></script>
	<script type="text/javascript" src="javascripts/jquery.easyui.min.js"></script>	
	<script type="text/javascript" src="javascripts/bootstrap.min.js"></script>	
	<script type="text/javascript" src="javascripts/kejian.js"></script>		
</head>
<body style="background:url(images/03.jpg)">
	
	<div style="width:100%;margin-left:20px;height:80px;border-bottom:1px dashed white;">
		
		<div style="margin-left:30px;width:60%;padding:10px;float:left">	
		<h1 style="color:white">软件设计II课件</h1>
		</div>
		
		<div style="padding:10px;width:30%;margin-top:30px;float:right">
			<ul style="list-style:none;">
				<li style="display:inline-table;margin-left:10px;"><a href="login.php" style="border:1px solid while;padding:10px;background:white;border-radius:6px;text-decoration:none;">登陆</a></li>
				<li style="display:inline-table;margin-left:10px;"><a id="modal-58049" style="border:1px solid while;padding:10px;background:white;border-radius:6px;text-decoration:none;" href="#modal-container-58049" role="button" data-toggle="modal">反馈</a></li>

			</ul>
			
		</div>
		<div class="span12">
			<div id="modal-container-58049" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">
						反馈
					</h3>
				</div>
				<div class="modal-body">
					<h5>填写您的建议：</h5>
					<input type="text" class="form-controll" style="width:500px;height:30px;"/>

				</div>
				<div class="modal-footer">
					 <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default" aria-hidden="true" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>

	<div style="margin-left:20px;height:700px;width:100%;">
		<div style="width:65%;background:white;float:left;margin-top:9px;padding:5px;border:1px solid;border-radius:7px;">

			<?php

					include_once 'show_kejian.php';
			?>

			<div class="pagination" style="height:30px;margin-left:230px;">
				<ul>
					<li>
						<a href="index.php?page=1">1</a>
					</li>
					<li>
						<a href="index.php?page=2">2</a>
					</li>
					<li>
						<a href="index.php?page=3">3</a>
					</li>
					<li>
						<a href="index.php?page=4">4</a>
					</li>
					<li>
						<a href="index.php?page=5">5</a>
					</li>
					<li>
						<a href="index.php?page=6">6</a>
					</li>                                     
				</ul>
			</div>

		</div>

		<div style="width:28%;margin-top:9px;margin-right:3%;padding:5px;border:1px solid;border-radius:7px;background:white;float:right">

			<!-- 最新通知 -->
			<div style="padding:2px;margin:2px;border-bottom:1px dashed #999;">
			最新公告：</br>
				<ul>
                    <?php 
                    include 'show_note.php';
                    ?>
				</ul>
			</div>				

			<!-- 最新上传 -->
			<div style="padding:2px;margin:2px;border-bottom:1px dashed #999;">
				最新上传：</br>
			<ul>
			<?php
				include 'show_upload.php';
			?>	
			</ul>
			</div>		

			<!-- 搜索 -->
			<div style="padding:10px;margin-left:5px;border-bottom:1px dashed #999;">
				<form id="findbytag" method="get" action="index.php">		
				<span style="font-size:16px;">按类标签显示：</span>
				<select name="name" id="name">";
				<?php
						include_once 'conn/daocon.php';
						$ConDB=new BeanConn;
						$ConDB->getConn();	
						$sql="select name from tb_fenlei";
						$resultset=@mysql_query($sql);
						$var=1;					
						while($row = @mysql_fetch_array($resultset)){
							echo "<option value='";
							echo $row["name"];
							echo "'>";
							echo $row["name"];
							echo "</option>";
							$var++;
						}
						$ConDB->closeConn();
					?>
					</select>
                </br>			
				<input type="submit" class="btn btn-primary" value="搜索"/>
			</div>
		
			<!--  -->
			<div style="padding:2px;">
			<div id="CalendarMain">
			<div id="title"><a class="selectBtn month" href="javascript:" onclick="CalendarHandler.CalculateLastMonthDays();"><</a><a class="selectBtn selectYear" href="javascript:" onClick="CalendarHandler.CreateSelectYear();">2014年</a><a class="selectBtn selectMonth" onClick="CalendarHandler.CreateSelectMonth()">6月</a> <a class="selectBtn nextMonth" href="javascript:" onClick="CalendarHandler.CalculateNextMonthDays();">></a><a class="selectBtn currentDay" href="javascript:" onClick="CalendarHandler.CreateCurrentCalendar(0,0,0);">今天</a></div>
			<div id="context">
				<div class="week">
					<h3> 日 </h3>
					<h3> 一 </h3>
					<h3> 二 </h3>
					<h3> 三 </h3>
					<h3> 四 </h3>
					<h3> 五 </h3>
					<h3> 六 </h3>
				</div>
				<div id="center">
					<div id="centerMain">
						<div id="selectYearDiv"></div>
						<div id="centerCalendarMain">
							<div id="Container"></div>
						</div>
						<div id="selectMonthDiv"></div>
					</div>
				</div>
				<!--<div class="item"><a>1</a></div> <div class="item"><a>2</a></div> <div class="item currentItem"><a>3</a></div> <div class="item"><a>4</a></div> <div class="item"><a>5</a></div> <div class="item"><a>6</a></div> <div class="item"><a>7</a></div>--></div>
			<div id="foot"><a id="footNow">19:14:34</a></div>
		</div>
			</div>
		<!--  -->
		</div>
		<div style="float:both"></div>
	</div>
 
<!--
	<div style="margin-left:20px;margin-bottom:3px;border-radius:7px;width:1200px;height:30px;background:yellow;border:1px solid white">
		<div style="margin-left:400px;margin-top:2px;padding:6px;">
		2014-2015 CopyRight 
		</div>
	</div>
-->
</body>
</html>