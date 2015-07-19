$(function()
{
		//修改个人密码
		$("#btn_ch").click(function(){
		if($("#name").val()!=$("#passwd").val()) 
		{
		alert("两次密码不一致");
		$("#passwd").text()="";
		}
		else{
		$.post("conn/conn.php?type=changePasswd",
		{
			passwd:$("#passwd").val(),
		},
		function(data,status)
		{		
			if(data==1) $("#show_success").show();
			if(data==0) $("#show_error").show();
		}	
		);
		}
	});

		//添加管理员
		$("#add_manager_btn").click(function(){
		if($("#add_manager_name").val()=="" && $("#add_manager_passwd").val()=="") 
		{
		alert("不能有空项");
		}
		else{
		$.post("conn/conn.php?type=addManager",
		{
			name:$("#add_manager_name").val(),
			passwd:$("#add_manager_passwd").val()
		},
		function(data,status)
		{		
			if(data==1) $("#add_manager_success").show();
			if(data==0) $("#add_manager_error").show();
		}	
		);
		}
	});

		//添加分类
		$("#add_fenlei_btn").click(function(){
		if($("#add_fenlei_name").val()=="") 
		{
		alert("不能有空项");
		}
		else{
		$.post("conn/conn.php?type=addFenLei",
		{
			name:$("#add_fenlei_name").val(),
		},
		function(data,status)
		{		
			if(data==1) $("#add_fenlei_success").show();
			if(data==0) $("#add_fenlei_error").show();
		}	
		);
		}
	});

		//修改分类
		$("#ch_fenlei_btn").click(function(){
		if(""==$("#ch_fenlei_nname").val()) 
		{
			alert("不能有空项");

		}
		else{
		$.post("conn/conn.php?type=changeFenLei",
		{
			oname:$("#ch_fenlei_oname").val(),
			nname:$("#ch_fenlei_nname").val()
		},
		function(data,status)
		{	
			if(data==1) $("#ch_fenlei_success").show();
			if(data==0) $("#ch_fenlei_error").show();
		}	
		);
		}
	});		
	
	
		//添加课件
		$("#add_kejian_btn").click(function(){
		var pos=$("#file").val().lastIndexOf("\\");
		var file=$("#file").val().substring(pos+1);

		if(""== $("#add_kejian_biaoqian").val()) 
		{
			alert("请选择标签");
		}
		else{
		$.post("conn/conn.php?type=addKeJian",
		{
			name:$("#add_kejian_biaoqian").val(),
			file:file,
            content:$("#kejian_content").val()
		},
		function(data,status)
		{	
			if(data==1) 
			{
				if(""==file)
                {
					$("#add_kejian_success").show();
                 }else
                 {
                    $("#upload_kejian").submit();
                 }
			}	
			if(data==0) $("#add_kejian_error").show();
		}	
		);
		}
		

	});	


		//添加通知
		$("#add_note_btn").click(function(){
		if(""==$("#add_note").val()) 
		{
			alert("通知不能为空");

		}
		else{
		$.post("conn/conn.php?type=addNote",
		{
			name:$("#add_note").val(),
		},
		function(data,status)
		{	
			if(data==1) $("#add_note_success").show();
			if(data==0) $("#add_note_error").show();
		}	
		);
		}
	});		
})