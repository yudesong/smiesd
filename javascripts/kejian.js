$(function(){
	
	var bool=false;
	var ping=false;
	CalendarHandler.initialize();

    
    
    
	$("#zan1").mouseover(function(){
		$("#zan1").attr("src","images/zan_up.png");
	});

	$("#zan1").mouseout(function(){
		$("#zan1").attr("src","images/zan.png");
	});	
    $("#zan2").mouseover(function(){
		$("#zan2").attr("src","images/zan_up.png");
	});	

	$("#zan2").mouseout(function(){
		$("#zan2").attr("src","images/zan.png");
	});		

	$("#zan3").mouseover(function(){
		$("#zan3").attr("src","images/zan_up.png");
	});	

	$("#zan3").mouseout(function(){
		$("#zan3").attr("src","images/zan.png");
	});	

	$("#zan4").mouseover(function(){
		$("#zan4").attr("src","images/zan_up.png");
	});

	$("#zan4").mouseout(function(){
		$("#zan4").attr("src","images/zan.png");
	});

	$("#zan5").mouseover(function(){
		$("#zan5").attr("src","images/zan_up.png");
	});

	$("#zan5").mouseout(function(){
		$("#zan5").attr("src","images/zan.png");
	});

	$("#zan1").click(function(){
		
		if(bool==false)
		{
			num1=(Number)($("#zan_nu0m1").text());
			$("#zan_num1").text(num1+1);
			$("#zan1").attr("src","images/zan_up.png");
			$.post("conn/conn.php?type=addZan",
			{
				file:$("#file1").text(),
                name:$("#name1").text(),
				num:$("#zan_num1").text()
			},function(data,staus){

			});
			bool=true;
		}else
		{
			num2=(Number)($("#zan_num1").text());
			$("#zan_num1").text(num2-1);
			$("#zan1").attr("src","images/zan.png");
			$.post("conn/conn.php?type=delZan",
			{
				file:$("#file1").text(),
                name:$("#name1").text(),
				num:$("#zan_num1").text()
			},function(data,staus){

			});
			bool=false;
		}
		
		//$("#zan_num").text("26");
		//alert($("#zan_num").html());
		//alert("aa");
	});

	$("#zan2").click(function(){
		num=(Number)($("#zan_num2").text());
		if(bool==false)
		{
			$("#zan_num2").text(num+1);
			$("#zan2").attr("src","images/zan_up.png");
			$.post("conn/conn.php?type=addZan",
			{
                file:$("#file2").text(),
				name:$("#name2").text(),
				num:$("#zan_num2").text()
			},function(data,staus){

			});
            bool=true;
		}else
		{
			$("#zan_num2").text(num-1);
			$("#zan2").attr("src","images/zan.png");
			$.post("conn/conn.php?type=delZan",
			{
                file:$("#file2").text(),
				name:$("#name2").text(),
				num:$("#zan_num2").text()
			},function(data,staus){

			});
            bool=false;
		}
		//$("#zan_num").text("26");
		//alert($("#zan_num").html());
		//alert("aa");
	});

	$("#zan3").click(function(){
		num=(Number)($("#zan_num3").text());
		if(bool==false)
		{
			$("#zan_num3").text(num+1);
			$("#zan3").attr("src","images/zan_up.png");
			$.post("conn/conn.php?type=addZan",
			{
                file:$("#file3").text(),
				name:$("#name3").text(),
				num:$("#zan_num3").text()
			},function(data,staus){

			});
            bool=true;
		}else
		{
			$("#zan_num3").text(num-1);
			$("#zan3").attr("src","images/zan.png");
			$.post("conn/conn.php?type=delZan",
			{
                file:$("#file3").text(),
				name:$("#name3").text(),
				num:$("#zan_num3").text()
			},function(data,staus){

			});
            bool=false;
		}
		
		//$("#zan_num").text("26");
		//alert($("#zan_num").html());
		//alert("aa");
	});	

	$("#zan4").click(function(){
		num=(Number)($("#zan_num4").text());
		if(bool==false)
		{
			$("#zan_num4").text(num+1);
			$("#zan4").attr("src","images/zan_up.png");
			$.post("conn/conn.php?type=addZan",
			{
                file:$("#file4").text(),
				name:$("#name4").text(),
				num:$("#zan_num4").text()
			},function(data,staus){

			});
            bool=true;
		}else
		{
			$("#zan_num4").text(num-1);
			$("#zan4").attr("src","images/zan.png");
			$.post("conn/conn.php?type=delZan",
			{
                file:$("#file4").text(),
				name:$("#name4").text(),
				num:$("#zan_num4").text()
			},function(data,staus){

			});
            bool=false;
		}
		//$("#zan_num").text("26");
		//alert($("#zan_num").html());
		//alert("aa");
	});

	$("#zan5").click(function(){
		num=(Number)($("#zan_num5").text());
		if(bool==false)
		{
			$("#zan_num5").text(num+1);
			$("#zan5").attr("src","images/zan_up.png");
			$.post("conn/conn.php?type=addZan",
			{
                file:$("#file5").text(),
				name:$("#name5").text(),
				num:$("#zan_num5").text()
			},function(data,staus){

			});
            bool=true;
		}else
		{
			$("#zan_num5").text(num-1);
			$("#zan5").attr("src","images/zan.png");
			$.post("conn/conn.php?type=delZan",
			{ 
               	file:$("#file5").text(),
				name:$("#name5").text(),
				num:$("#zan_num5").text()
			},function(data,staus){

			});
            bool=false;
		}
		
		//$("#zan_num").text("26");
		//alert($("#zan_num").html());
		//alert("aa");
	});

	$("#ping1").click(function(){
		$("#ping_div1").toggle();
	});

	$("#ping2").click(function(){
		$("#ping_div2").toggle();
	});	

	$("#ping3").click(function(){
		$("#ping_div3").toggle();
	});

	$("#ping4").click(function(){
		$("#ping_div4").toggle();
	});	

	$("#ping5").click(function(){
		$("#ping_div5").toggle();
	});	

	$("#ping_btn1").click(function(){
		var cont=$("#content1").val();
		$("#ping_div1").append("<div style='border-bottom:1px dashed #ccc;margin-top:10px;'><img src='images/person.png'/><span>&nbsp;&nbsp;&nbsp;&nbsp;"+cont+"</span></div>");
		$.post("conn/conn.php?type=addPing",
		{
			name:$("#name1").text(),
			content:$("#content1").val(),
			file:$("#file1").text(),
            conten:$("#conten1").text()
		},function(data,status){
		if(data==1)	$("#edit_ping1").hide();
            
		});
	});

	$("#ping_btn2").click(function(){
		var cont=$("#content2").val();
       // alert($("#name2").text()+$("#content2").val()+$("#file2").text()+$("#conten2").text());
		$("#ping_div2").append("<div style='border-bottom:1px dashed #ccc;margin-top:10px;'><img src='images/person.png'/><span>&nbsp;&nbsp;&nbsp;&nbsp;"+cont+"</span></div>");
		$.post("conn/conn.php?type=addPing",
		{
			name:$("#name2").text(),
			content:$("#content2").val(),
			file:$("#file2").text(),
            conten:$("#conten2").text()
		},function(data,status){
		if(data==1)	$("#edit_ping2").hide();
		});
	});

	$("#ping_btn3").click(function(){
		var cont=$("#content3").val();
		$("#ping_div3").append("<div style='border-bottom:1px dashed #ccc;margin-top:10px;'><img src='images/person.png'/><span>&nbsp;&nbsp;&nbsp;&nbsp;"+cont+"</span></div>");
		$.post("conn/conn.php?type=addPing",
		{
			name:$("#name3").text(),
			content:$("#content3").val(),
			file:$("#file3").text(),
            conten:$("#conten3").text()
		},function(data,status){
		if(data==1)	$("#edit_ping3").hide();
		});
	});

	$("#ping_btn4").click(function(){
		var cont=$("#content4").val();
		$("#ping_div4").append("<div style='border-bottom:1px dashed #ccc;margin-top:10px;'><img src='images/person.png'/><span>&nbsp;&nbsp;&nbsp;&nbsp;"+cont+"</span></div>");
		$.post("conn/conn.php?type=addPing",
		{
			name:$("#name4").text(),
			content:$("#content4").val(),
			file:$("#file4").text(),
            conten:$("#conten4").text()
		},function(data,status){
		if(data==1)	$("#edit_ping4").hide();
		});
	});

	$("#ping_btn5").click(function(){
		var cont=$("#content5").val();
		$("#ping_div5").append("<div style='border-bottom:1px dashed #ccc;margin-top:10px;'><img src='images/person.png'/><span>&nbsp;&nbsp;&nbsp;&nbsp;"+cont+"</span></div>");
		$.post("conn/conn.php?type=addPing",
		{
			name:$("#name5").text(),
			content:$("#content5").val(),
			file:$("#file5").text(),
            conten:$("#conten5").text()
		},function(data,status){
		if(data==1)	$("#edit_ping5").hide();
		});
	});
});

var CalendarHandler = {
			currentYear: 0,
			currentMonth: 0,
			isRunning: false,
			initialize: function() {
				$calendarItem = this.CreateCalendar(0, 0, 0);
				$("#Container").append($calendarItem);

				$("#context").css("height", $("#CalendarMain").height() - 65 + "px");
				$("#center").css("height", $("#context").height() - 30 + "px");
				$("#selectYearDiv").css("height", $("#context").height() - 30 + "px").css("width", $("#context").width() + "px");
				$("#selectMonthDiv").css("height", $("#context").height() - 30 + "px").css("width", $("#context").width() + "px");
				$("#centerCalendarMain").css("height", $("#context").height() - 30 + "px").css("width", $("#context").width() + "px");

				$calendarItem.css("height", $("#context").height() - 30 + "px"); //.css("visibility","hidden");
				$("#Container").css("height", "0px").css("width", "0px").css("margin-left", $("#context").width() / 2 + "px").css("margin-top", ($("#context").height() - 30) / 2 + "px");
				$("#Container").animate({
					width: $("#context").width() + "px",
					height: ($("#context").height() - 30) * 2 + "px",
					marginLeft: "0px",
					marginTop: "0px"
				}, 300, function() {
					$calendarItem.css("visibility", "visible");
				});
				$(".dayItem").css("width", $("#context").width() + "px");
				var itemPaddintTop = $(".dayItem").height() / 6;
				$(".item").css({
					"width": $(".week").width() / 7 + "px",
					"line-height": itemPaddintTop + "px",
					"height": itemPaddintTop + "px"
				});
				$(".currentItem>a").css("margin-left", ($(".item").width() - 25) / 2 + "px").css("margin-top", ($(".item").height() - 25) / 2 + "px");
				$(".week>h3").css("width", $(".week").width() / 7 + "px");
				this.RunningTime();
			},
			CreateSelectYear: function() {
				$(".currentDay").show();
				$("#selectYearDiv").children().remove();
				var yearindex = 0;
				for (var i = this.currentYear - 5; i < this.currentYear + 7; i++) {
					yearindex++;
					if (i == this.currentYear) $("#selectYearDiv").append($("<div class=\"currentYearSd\" id=\"" + yearindex + "\">" + i + "</div>"));
					else $("#selectYearDiv").append($("<div id=\"" + yearindex + "\">" + i + "</div>"));
					if (yearindex == 1 || yearindex == 5 || yearindex == 9) $("#selectYearDiv").find("#" + yearindex).css("border-left-color", "#fff");
					if (yearindex == 4 || yearindex == 8 || yearindex == 12) $("#selectYearDiv").find("#" + yearindex).css("border-right-color", "#fff");
				}
				$("#selectYearDiv>div").css("width", ($("#center").width() - 4) / 4 + "px").css("line-height", ($("#center").height() - 4) / 3 + "px");
				$("#centerMain").animate({
					marginLeft: "0px"
				}, 300);
			},
			CreateSelectMonth: function() {
				$(".currentDay").show();
				$("#selectMonthDiv").children().remove();
				for (var i = 1; i < 13; i++) {


					if (i == this.currentMonth) $("#selectMonthDiv").append($("<div class=\"currentMontSd\" id=\"" + i + "\">" + i + "月</div>"));
					else $("#selectMonthDiv").append($("<div id=\"" + i + "\">" + i + "月</div>"));
					if (i == 1 || i == 5 || i == 9) $("#selectMonthDiv").find("#" + i).css("border-left-color", "#fff");
					if (i == 4 || i == 8 || i == 12) $("#selectMonthDiv").find("#" + i).css("border-right-color", "#fff");
				}
				$("#selectMonthDiv>div").css("width", ($("#center").width() - 4) / 4 + "px").css("line-height", ($("#center").height() - 4) / 3 + "px");
				$("#centerMain").animate({
					marginLeft: -$("#center").width() * 2 + "px"
				}, 300);
			},
			IsRuiYear: function(aDate) {
				return (0 == aDate % 4 && (aDate % 100 != 0 || aDate % 400 == 0));
			},
			CalculateWeek: function(y, m, d) {
				if (m == 1) {
					m = 13;
					y--;
				}
				if (m == 2) {
					m = 14;
					y--;
				}
				var week = (d + 2 * m + 3 * (m + 1) / 5 + y + y / 4 - y / 100 + y / 400) % 7 + 1;
				return week;
			},
			CalculateMonthDays: function(m, y) {
				var mDay = 0;
				if (m == 0 || m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
					mDay = 31;
				} else {
					if (m == 2) {
						//判断是否为芮年
						var isRn = this.IsRuiYear(y);
						if (isRn == true) {
							mDay = 29;
						} else {
							mDay = 28;
						}
					} else {
						mDay = 30;
					}
				}
				return mDay;
			},
			CreateCalendar: function(y, m, d) {
				$dayItem = $("<div class=\"dayItem\"></div>");
				//获取当前月份的天数
				var nowDate = new Date();
				if(y==nowDate.getFullYear()&&m==nowDate.getMonth()+1||(y==0&&m==0))
				$(".currentDay").hide();
				var nowYear = y == 0 ? nowDate.getFullYear() : y;
				this.currentYear = nowYear;
				var nowMonth = m == 0 ? nowDate.getMonth() + 1 : m;
				this.currentMonth = nowMonth;
				var nowDay = d == 0 ? nowDate.getDate() : d;
				$(".selectYear").html(nowYear + "年");
				$(".selectMonth").html(nowMonth + "月");
				var nowDaysNub = this.CalculateMonthDays(nowMonth, nowYear);
				//获取当月第一天是星期几
				//var weekDate = new Date(nowYear+"-"+nowMonth+"-"+1);
				//alert(ss.getDay());
				var nowWeek = parseInt(this.CalculateWeek(nowYear, nowMonth, 1));
				//var nowWeek=weekDate.getDay();
				//获取上个月的天数
				var lastMonthDaysNub = this.CalculateMonthDays((nowMonth - 1), nowYear);

				if (nowWeek != 0) {
					//生成上月剩下的日期
					for (var i = (lastMonthDaysNub - (nowWeek - 1)); i < lastMonthDaysNub; i++) {
						$dayItem.append("<div class=\"item lastItem\"><a>" + (i + 1) + "</a></div>");
					}
				}

				//生成当月的日期
				for (var i = 0; i < nowDaysNub; i++) {
					if (i == (nowDay - 1)) $dayItem.append("<div class=\"item currentItem\"><a>" + (i + 1) + "</a></div>");
					else $dayItem.append("<div class=\"item\"><a>" + (i + 1) + "</a></div>");
				}

				//获取总共已经生成的天数
				var hasCreateDaysNub = nowWeek + nowDaysNub;
				//如果小于42，往下个月推算
				if (hasCreateDaysNub < 42) {
					for (var i = 0; i <= (42 - hasCreateDaysNub); i++) {
						$dayItem.append("<div class=\"item lastItem\"><a>" + (i + 1) + "</a></div>");
					}
				}

				return $dayItem;
			},
			CSS: function() {
				var itemPaddintTop = $(".dayItem").height() / 6;
				$(".item").css({
					"width": $(".week").width() / 7 + "px",
					"line-height": itemPaddintTop + "px",
					"height": itemPaddintTop + "px"
				});
				$(".currentItem>a").css("margin-left", ($(".item").width() - 25) / 2 + "px").css("margin-top", ($(".item").height() - 25) / 2 + "px");
			},
			CalculateNextMonthDays: function() {
				if (this.isRunning == false) {
					$(".currentDay").show();
					var m = this.currentMonth == 12 ? 1 : this.currentMonth + 1;
					var y = this.currentMonth == 12 ? (this.currentYear + 1) : this.currentYear;
					var d = 0;
					var nowDate = new Date();
					if (y == nowDate.getFullYear() && m == nowDate.getMonth() + 1) d = nowDate.getDate();
					else d = 1;
					$calendarItem = this.CreateCalendar(y, m, d);
					$("#Container").append($calendarItem);

					this.CSS();
					this.isRunning = true;
					$($("#Container").find(".dayItem")[0]).animate({
						height: "0px"
					}, 300, function() {
						$(this).remove();
						CalendarHandler.isRunning = false;
					});
				}
			},
			CalculateLastMonthDays: function() {
				if (this.isRunning == false) {
					$(".currentDay").show();
					var nowDate = new Date();					
					var m = this.currentMonth == 1 ? 12 : this.currentMonth - 1;
					var y = this.currentMonth == 1 ? (this.currentYear - 1) : this.currentYear;
					var d = 0;
					
					if (y == nowDate.getFullYear() && m == nowDate.getMonth() + 1) d = nowDate.getDate();
					else d = 1;
					$calendarItem = this.CreateCalendar(y, m, d);
					$("#Container").append($calendarItem);
					var itemPaddintTop = $(".dayItem").height() / 6;
					this.CSS();
					this.isRunning = true;
					$($("#Container").find(".dayItem")[0]).animate({
						height: "0px"
					}, 300, function() {
						$(this).remove();
						CalendarHandler.isRunning = false;
					});
				}
			},
			CreateCurrentCalendar: function() {
				if (this.isRunning == false) {
					$(".currentDay").hide();
					$calendarItem = this.CreateCalendar(0, 0, 0);
					$("#Container").append($calendarItem);
					this.isRunning = true;
					$($("#Container").find(".dayItem")[0]).animate({
						height: "0px"
					}, 300, function() {
						$(this).remove();
						CalendarHandler.isRunning = false;
					});
					this.CSS();
					$("#centerMain").animate({
						marginLeft: -$("#center").width() + "px"
					}, 500);
				}
			},
			RunningTime: function() {
				var mTiming = setInterval(function() {
					var nowDate = new Date();
					var nowTime = nowDate.getHours() + ":" + nowDate.getMinutes() + ":" + nowDate.getSeconds();
					$("#footNow").html(nowTime);
				}, 1000);

			}
		}