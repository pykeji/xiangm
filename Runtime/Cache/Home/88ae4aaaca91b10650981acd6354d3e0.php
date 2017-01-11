<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->


<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/bootstrap.css">

	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/TP3.2.3pykj/Public/yeMiancss/binglicx.css">
	<!-- 日历的js -->
	<script type="text/javascript" src="/TP3.2.3pykj/Public/rili/jeDate/jedate.js"></script>
	<!-- 健康档案 -->
	<link rel="stylesheet" href="/TP3.2.3pykj/Public/mrjkda/jkda.css">
    <link rel="stylesheet" href="/TP3.2.3pykj/Public/mrjkda/jiankang.css">
    <script src="/TP3.2.3pykj/Public/mrjkda/Birthday-Calendar.js"></script>


<style type="text/css">
	/*定义滚动条高宽及背景 高宽分别对应横竖滚动条的尺寸*/  
		/*::-webkit-scrollbar  
		{  
		    width: 16px;  
		    height: 16px;  
		    background-color:white; 
		}*/  
		/*定义滚动条轨道 内阴影+圆角*/  
		/*::-webkit-scrollbar-track  
		{  
   		 -webkit-box-shadow: inset 0 0 6px #8CA8E0;  
   		 border-radius: 10px;  
    	 background-color: #F5F5F5;  
		}  */
		/*定义滑块 内阴影+圆角*/  
		/*::-webkit-scrollbar-thumb  
		{  
		    border-radius: 10px;  
		 	-webkit-box-shadow: inset 0 0 6px #8CA8E0;  

		    background-color: #2A3F6A;

		} */ 
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="/TP3.2.3pykj/Public/muban/assets/ico/minus.png">
</head>
<body>
<!-- 开始头 -->
<nav role="navigation" class="navbar navbar-static-top">
	<div class="container-fluid">
		<!-- 头部列表 -->
		<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<!-- 第一个图标 -->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:20px;" class="icon-conversation"></i>
					<div class="noft-red">
						3
					</div>
					</a>
					<ul style="margin: 11px 0 0 9px;" role="menu" class="dropdown-menu dropdown-wrap">
						<li>
							<a href="#">
							<img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/3.jpg"><i>寒冰</i>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
							<img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/4.jpg"><i>盖伦</i>
							</a>
						</li>
					</ul>
				</li>
				<!-- 第二个图标 -->
				<!-- <li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:19px;" class="icon-warning tooltitle"></i>
					<div class="noft-green">
						5
					</div>
					</a>
				</li> -->
			</ul>
			<!-- 中间栏 -->
			<div id="nt-title-container" class="navbar-left running-text visible-lg">
				<ul class="date-top">
					<!-- 动态显示当前时间开始 -->
					<div id="time"></div>
						<script>
							setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1000);  
						</script>
					<!-- 动态显示当前时间结束 -->
				</ul>
				<!-- <ul id="digital-clock" class="digital">
					日期
				</ul> -->
				<!-- 天气 -->
				<ul id="nt-title">
					<div style=" margin-top: -3px; ">
						<iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=10&color=%23FFFFFF&icon=1"></iframe>
					</div>
				</ul>
			</div>
			<!-- 头部最右方的栏 -->
			<ul style="margin-right:0;" class="nav navbar-nav navbar-right">
				<!-- 个人信息 -->
				<li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<img alt="" class="admin-pic img-circle" src="/TP3.2.3pykj/Public/muban/assets/img/canga.jpg">
					Hi, 帅气的xxoo <b class="caret"></b>
					</a>
					<ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
						<li>
						<a href="#">
						<span class="entypo-user"></span>&#160;&#160;个人信息</a>
						</li>
						<li>
						<a href="#">
						<span class="entypo-vcard"></span>&#160;&#160;详细信息</a>
						</li>
					</ul>
				</li>
				<!-- 设置 -->
				<li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="icon-gear"></span>&#160;&#160;Setting</a>
					<!-- 颜色 -->
					<ul role="menu" class="dropdown-setting dropdown-menu">
						<li class="theme-bg">
						<div id="button-bg">
						</div>
						<div id="button-bg2">
						</div>
						<div id="button-bg3">
						</div>
						<div id="button-bg5">
						</div>
						<div id="button-bg6">
						</div>
						<div id="button-bg7">
						</div>
						<div id="button-bg8">
						</div>
						<div id="button-bg9">
						</div>
						<div id="button-bg10">
						</div>
						<div id="button-bg11">
						</div>
						<div id="button-bg12">
						</div>
						<div id="button-bg13">
						</div>
						</li>
					</ul>
				</li>
				<!-- 右侧掩藏栏 -->
				<li class="hidden-xs">
					<a class="toggle-left" href="#">
					<span style="font-size:20px;" class="entypo-list-add">&nbsp;<span style=" font-size: 13px;">知识库</span></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- 结束头 -->
<!-- 开始 左侧菜单-->
<div id="skin-select">
	<!-- logo -->
	<div style=" margin-top:-20px; " >
		<img src="/TP3.2.3pykj/Public/muban/assets/img/pengyu1.png"  alt="logo" style="  width: 150px; margin-left:30px; ">
	</div>
	<!-- 显示隐藏的图标 -->
	<a id="toggle">
	<span class="entypo-menu"></span>
	</a>
	<!-- 左侧 下方 菜单 -->
	<div class="skin-part">
		<div id="tree-wrap">
			<div class="side-bar">
				<!-- 第一类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<!-- <span class="widget-menu"></span> -->
						<span>不知道叫什么</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="登记">
						<i class="icon-document-edit"></i>
						<span>接诊区</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/home','');?>" title="接诊区">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>接诊区</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/dengji','');?>" title="自己登记">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>患者登记</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/yuyue','');?>" title="患者预约">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>患者预约</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/chaxun','');?>" title="查询">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>查询</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="健康档案">
						<i class="icon-document-edit"></i>
						<span>健康档案</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/jiankang','');?>" title="健康档案">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>健康档案</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tizhi','');?>" title="体质辨识">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>体质辨识</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tiaoyang','');?>" title="中医调养">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>中医调养</span></a>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="media.html" title="不知道是啥">
						<i class="icon-camera"></i>
						<span>不知道是啥</span>
						</a>
					</li> -->
				</ul>
				<!-- 第二类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<span>开方</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="中药开发">
						<i class="icon-window"></i>
						<span>中药开方</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bingMing');?>" title="病名开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>病名开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhengxing');?>" title="证型开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>证型开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhiLiaoZhinan');?>" title="治疗指南开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>诊疗指南开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingDian');?>" title="取经典方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经典方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingYan');?>" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经验方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bianZheng');?>" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>辩证开方</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="<?php echo U('Kaifang/west');?>" title="西药开方">
						<i class="icon-mail"></i>
						<span>西（中成）药开方</span>
						<div class="noft-blue">
							9
						</div>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="西药开方">
						<i class="icon-mail"></i>
						<span>审核</span>
						<div class="noft-blue">
							9
						</div>
						</a>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="icon.html" title="自定义开方">
						<i class="icon-preview"></i>
						<span>自定义开方</span>
						<div class="noft-blue" style="display: inline-block; float: none;">
							New
						</div>
						</a>
					</li> -->
				</ul>
				<!-- 第三类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<span>第三类大标题</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="划价收费">
						<i class="icon-window"></i>
						<span>划价收费</span>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="划价收费">
						<i class="icon-window"></i>
						<span>统计查询</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="病名开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>收费综合查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="证型开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>费用汇总</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="治疗指南开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>药品使用统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('TongJi/binglicx');?>" title="取经典方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>病例查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>中医诊治查询统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>西医诊治查询统计</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="结束开放">
						<i class="icon-mail"></i>
						<span>完成就诊</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 结束 左侧菜单 -->
<!-- 开始右侧主题 -->

<div class="wrap-fluid" style="height: 85%;">
	<!-- 主题左上角 折起来 -->
    <div class="container-fluid paper-wrap bevel tlbr" style="height: 100%;">
		<!-- 这写主题 -->
		<!-- <div> -->
			
	<!-- 查询条件 -->
	<div class="zuokuaicxtj">
		<div class="chaxtjhanzi"><b>查询条件</b></div>
		<div class="chaxtjxinxi">
			<!-- 内容 -->
			<!-- 折叠 -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"  href="#collapseOne">
								<b>选择条件</b>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<!-- 内容 -->
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary"><p style="width:50px; height: 0px;"><b>病历号</b></p></span>
						    <input type="text" class="form-control input-lg"  placeholder="请输入病历号">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">
						    	<p style="width:50px; height: 0px;"><b>姓名</b></p>
						    </span>
						    <input type="text" class="form-control input-lg" placeholder="请输入姓名">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">
						    	<p style="width:50px; height: 0px;"><b>身份证号</b></p>
						    </span>
						    <input type="text" class="form-control input-lg" placeholder="请输入身份证号">
						</div>
						<br>
						<div class="input-group" >
						    <button class="btn" style="width: 75px; background-color:#EEEEEE; color: 
						    #555555; ">
						    	<b>性别</b>
						    </button>
						    <span style="text-align: center; margin-left: 30px;">
						    	男  &nbsp; &nbsp;<input type="radio" name="optionsRadios" > &nbsp; &nbsp; &nbsp; &nbsp;
						     	女  &nbsp; &nbsp; <input type="radio"  name="optionsRadios" >
						    </span>
						     	
						</div>
						<br>
						<!-- 日历 -->
						<div>
							<p class="datep">
								<button class="btn" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})"  style="width: 75px; background-color:#EEEEEE; color: 
							    #555555; ">
							    	<b>开始日期</b>
							    </button>
								<input class="datainp" style="color: #000; width: 73%; border-radius: 5px; border: 1px #C7D5E0 solid;" id="datebut" type="text" placeholder="请选择"  readonly>
								
							</p>
						</div>
						<br>
						<div>
							<p class="datep">
								<button class="btn" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})"  style="width: 75px; background-color:#EEEEEE; color: 
							    #555555; ">
							    	<b>结束日期</b>
							    </button>
								<input class="datainp"  style="color: #000; width: 73%; border-radius: 5px; border: 1px #C7D5E0 solid;" id="datebut1" type="text" placeholder="请选择"  readonly>
								
							</p>
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">
						    	<p style="width:50px; height: 0px;"><b>某某</b></p>
						    </span>
						    <input type="text" class="form-control input-lg" placeholder="请输入某某">
						</div>
						<br>
						<div class="chaxtjxinxianniu">
							<button class="btn"><b>查询</b></button>
							<button class="btn" style="margin-left: 40px;"><b>全部</b></button>
						</div>
							
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- 信息 -->
	<div class="youkuaixinx">
		<!-- 内容 -->
		<!-- 病人信息 -->
		<div class="bingrxinxi">
			<div class="bingrxinxihz"><b>病人信息</b></div>
			<!-- 表格 -->
			<div  class="bingrxinxibaog">
				<div class="chaochubufyc">
					<table class="table table-bordered" >
						<tr>
							<th><b>病历号</b></th>
							<th><b>姓名</b></th>
							<th><b>性别4</b></th>
							<th><b>出生年月</b></th>
							<th><b>身份证号</b></th>
							<th><b>单位</b></th>
							<th><b>电话</b></th>
							<th><b>传真</b></th>
							<th><b>E Mail</b></th>
						</tr>
						<tr>
							<td>004</td>
							<td>张三54</td>
							<td>男</td>
							<td>1852-44-22</td>
							<td>6284456489474654</td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr><tr>
							<td>001</td>
							<td>张三</td>
							<td>男</td>
							<td>1852-44-22</td>
							<td>6284456489474654</td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr><tr>
							<td>001</td>
							<td>张三</td>
							<td>男</td>
							<td>1852-44-22</td>
							<td>6284456489474654</td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- 就诊记录 -->
		<div class="jiuzhengjiru">
			<div class="jiuzhengjiruhz"><b>就诊记录</b></div>
			<div class="jiuzhengjirubiaog">
				<table class="table table-striped">
					<tr data-toggle="modal" data-target="#myZhilModal">
						<th>就诊日期</th>
						<td>2087-56-45 17:34:23</td>
					</tr><tr>
						<th>就诊日期</th>
						<td>2087-56-45 17:34:23</td>
					</tr><tr>
						<th>就诊日期</th>
						<td>2087-56-45 17:34:23</td>
					</tr><tr>
						<th>就诊日期</th>
						<td>2087-56-45 17:34:23</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 模态框内容开始 -->
			<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog" style="  width: 1200px;" >
	                <!-- 滚动监听 -->
	                <div  style="height:530px; ">
        <!--健康档案-->
        <div class="right">
            <!--健康档案-->
            <div class="right-center">
                <div class="health-file center">
                    <form action="#" method="post">
                        <table border="1" cellspacing="1" class="jkda-table table-bordered" width="100%">
                            <div class="title">中医健康档案</div>
                            <div class="title2">
                                <div>
                                    <span>就诊日期：</span>
                                    <span id="jzrq"></span>
                                </div>
                                <div>
                                    <span>病历号：</span>
                                    <span id="blnum">000011</span>
                                </div>
                            </div>
                            <tr>
                                <th width="12%"><label for="name">姓名</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" value="小白" onkeyup="this.size=(this.value.length>3?this.value.length:3);" size="3" id="name">
									</span>
                                </td>
                                <th width="6%"><label for="sex">性别</label></th>
                                <td width="7%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sex">
									</span>
                                </td>
                                <th width="7%"><label for="age">年龄</label></th>
                                <td width="7%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="age">
									</span>
                                </td>
                                <th width="7%"><label for="birthday">出生日期</label></th>
                                <td width="11%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="birthday">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="userID">身份证号</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="userID">
									</span>
                                </td>
                                <th colspan="2"><label for="phone">联系方式</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>15?this.value.length:15);" size="15" id="phone">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="duo">工作单位</label></th>
                                <td colspan="8">
									<span>
										<!-- <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>20?this.value.length:20);" size="20" id="work"> -->
										<textarea name="" id="duo" cols="70" rows="3"></textarea>
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="main">主诉</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>30?this.value.length:30);" size="30" id="main">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="jws">既往史</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="jws">
									</span>,
                                    <span>确认时间：</span>
									<span>
										<!-- <input type="date" name="" style="width:130px;"> -->
										<input type="text" onfocus="new Calendar().show(this)" readonly="readonly">
									</span>
                                    <!-- <br/> -->
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>,
                                    <span>确认时间：</span>
                                    <!-- <span>
                                        <input type="text" class="year" maxlength="4">
                                    </span>年
                                    <span>
                                        <input type="text" class="month" maxlength="2">
                                    </span>月
                                    <span>
                                        <input type="text" class="day" maxlength="2">
                                    </span>日； -->
									<span>
										<!-- <input type="date" name="" style="width:130px;"> -->
										<input type="text" onfocus="new Calendar().show(this)" readonly="readonly">
									</span>
                                </td>
                            </tr>
                            <!-- <script>
                                $(".year").keydown(function(){
                                    if($(this).val().length>=4){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                                $(".month").keydown(function(){
                                    if($(this).val().length>=2){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                            </script> -->
                            <tr style="position:relative;">
                                <th rowspan="2"><label for="fq">家庭史</label></th>
                                <td colspan="5">
                                    <span><label for="fq">父亲：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="fq">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw1">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                                <div class="jtsFar">
                                    <input type="text" id="jtsFarinp" style="border:1px solid #ccc;">
                                    <input type="button" value="提交" id="jtsFartj">
                                    <label><input type="radio" name="jt" class="jtscheck" value="无"><span>无</span></label>
                                    <label><input type="radio" name="jt" class="jtscheck" value="有"><span>有</span></label>
                                </div>
                                <td colspan="3">
                                    <span><label for="mq">母亲：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mq">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <span><label for="xdjm">兄弟姐妹：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xdjm">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                                <td colspan="3">
                                    <span><label for="zn">子女：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zn">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                            <tr style="position:relative;">
                                <th><label for="gms">过敏史</label></th>
                                <td colspan="6" style="width:395px;">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>15?this.value.length:15);" size="15" id="gms">
									</span>
                                </td>
                                <div class="gm">
                                    <div>
                                        <input type="text" id="gmsinp" style="border:1px solid #ccc;">
                                        <input type="button" value="提交" id="gmstj">
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="无"><span>无</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="否认药物及食物过敏史"><span>否认药物及食物过敏史</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="青霉素"><span>青霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="链霉素"><span>链霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="普鲁卡因"><span>普鲁卡因</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="血清"><span>血清</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="头孢菌素"><span>头孢菌素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="磺胺类药物"><span>磺胺类药物</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="海鲜"><span>海鲜</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="花粉"><span>花粉</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="鱼"><span>鱼</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="虾"><span>虾</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="蟹"><span>蟹</span></label>
                                    </div>
                                </div>
                                <th><label for="weight">体重</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="weight">
									</span>
                                    <span>KG</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tw">生命体征</label></th>
                                <td colspan="2">
                                    <span><label for="tw">体温:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tw">
									</span>
                                    <span>℃</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="mb">脉搏:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mb">
									</span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="hx">呼吸:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="hx">
									</span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="xy">血压:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xy">
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                    <span>mmHg</span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="3"><label for="wshen">整体状况</label></th>
                                <th><label for="wshen">忘神</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wshen">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="wse">忘色</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wse">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th width="5%"><label for="tt">忘形</label></th>
                                <th width="5%"><label for="tt">体态</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tt">
									</span>
                                </td>
                                <th colspan="2"><label for="tx">体形</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tx">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="5"><label for="zl">现在状况</label></th>
                                <th><label for="zl">睡眠</label></th>
                                <th><label for="zl">质量</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zl">
									</span>
                                </td>
                                <th colspan="2"><label for="sj">时间</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sj">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="sy">食欲</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sy">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="kw">口味</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="kw">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="dbc">大便</label></th>
                                <th><label for="dbc">便次</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dbc">
									</span>
                                </td>
                                <th colspan="2"><label for="bz">便质</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bz">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xbc">小便</label></th>
                                <th><label for="xbc">便次</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xbc">
									</span>
                                </td>
                                <th colspan="2"><label for="bs">便色</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bs">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xq">情致</label></th>
                                <th><label for="xq">性情</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xq">
									</span>
                                </td>
                                <th colspan="2"><label for="xg">性格</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xg">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xj">心悸</label></th>
                                <td colspan="8">[
                                    <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="xj">]
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2"><label for="ss">舌诊</label></th>
                                <th><label for="ss">舌色</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ss">
									</span>
                                </td>
                                <th><label for="st">舌体</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="st">
									</span>
                                </td>
                                <th colspan="2"><label for="dt">动态</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dt">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tz">苔质</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tz">
									</span>
                                </td>
                                <th><label for="ts">苔色</label></th>
                                <td colspan="5">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ts">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="mz">脉诊</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mz">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tzbs">体质辨识</label></th>
                                <td colspan="8">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="tzbs" value="体质辨识">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zyzd">中医诊断</label></th>
                                <td colspan="4">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzd" value="中医诊断">]
									</span>
                                </td>
                                <th><label for="xyzd">西医诊断</label></th>
                                <td colspan="3">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="xyzd" value="西医诊断">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zybz">辩证</label></th>
                                <td colspan="4">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zybz" value="中医辩证">]
									</span>
                                </td>
                                <th><label for="zyzz">治则</label></th>
                                <td colspan="3">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzz" value="中医治则">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th>处置</th>
                                <td colspan="8">
                                    <!-- <div>
                                        <span>[</span>
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="4" id="zycz" value="中医处置">]
                                        </span>
                                        <span>]</span>
                                    </div> -->
                                    <div class="chufang">
                                        <div>
                                            <span>【中药处方】：</span>
                                            <span>大青龙汤</span>
                                            <span>(<span>7</span><span>剂</span>)</span>
                                        </div>
                                        <div>
                                            <ul>
                                                <li><span>麻黄</span><span>6</span><span>克</span></li>
                                                <li><span>苦杏仁</span><span>6</span><span>克</span></li>
                                                <li><span>炙甘草</span><span>6</span><span>克</span></li>
                                                <li><span>生姜</span><span>6</span><span>克</span></li>
                                                <li><span>生石膏</span><span>15</span><span>克</span></li>
                                                <li><span>桂枝</span><span>6</span><span>克</span></li>
                                                <li><span>大枣</span><span>12</span><span>克</span></li>
                                            </ul>
                                        </div>
                                        <div style="clear:both;">
                                            <span>【医嘱】：<span></span></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>其他治疗计划</th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
	                </div>
	                <div data-dismiss="modal" style=" width:40px;  position:absolute; top:5px;right:65px;"><button  class="btn ">&times;</button></div>
	                <div data-dismiss="modal" style=" width:40px;  position:absolute; top:5px;left:65px;"><button  class="btn "><b>打印病历</b></button></div>
	            </div><!-- /.modal-dialog -->
	        </div>
			<!-- 模态框内容结束 -->
	</div>
	<!-- 清除浮动 -->
	<div class="qingchudakfd"></div>
    <script src="/TP3.2.3pykj/Public/mrjkda/bingshi.js"></script>

	<!-- 日历的js -->
	<script type="text/javascript">
    //jeDate.skin('gray');
	jeDate({
		dateCell:"#indate",//isinitVal:true,
		format:"YYYY-MM",
		isTime:false, //isClear:false,
		minDate:"2015-10-19 00:00:00",
		maxDate:"2016-11-8 00:00:00"
	})
    jeDate({
		dateCell:"#dateinfo",
		format:"YYYY年MM月DD日 hh:mm:ss",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	})
</script>

		<!-- </div> -->
    </div>
</div>

<!-- 结束右侧主题 -->
    <!--开始 最右侧隐藏的菜单 -->
    <div class="sb-slidebar sb-right">
    	<!-- 第一类 -->
        <div class="right-wrapper">
            <div class="row">
				 <div class="col-lg-12">
                    <span class="label label-warning label-chat">四大名著</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>伤寒论</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>黄帝内经</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>金匮要略</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>温病条辨</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div><br><br></div>
                 <div class="col-lg-12">
                    <span class="label label-warning label-chat">不知道叫啥</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>我的文档</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>临床诊断</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>中医药学会诊断指南</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- 第二类 -->
        <!-- <div style="margin-top:0;" class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-chat"></i>&nbsp; &nbsp;第二类</span>
                </h3>
                <a href=""><p>我的文档</p></a>
                <a href=""><p>中医药学会诊断指南</p></a>
                <div class="col-lg-12">
                    <span class="label label-warning label-chat">标题</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>知识库</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>和知识库一类</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>&nbsp;</p>
                 <div class="col-lg-12">
                    <span class="label label-warning label-chat">又一个标题</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>收费</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>不知道写啥</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>

    <!-- 结束 最右侧隐藏的菜单-->
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/jquery.js"></script>
    <!-- <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script> -->
    <!-- <script src="assets/js/progress-bar/number-pb.js"></script> -->
    <!-- <script src="assets/js/progress-bar/progress-app.js"></script> -->



    <!-- MAIN EFFECT -->
    <!-- <script type="text/javascript" src="assets/js/preloader.js"></script> -->
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/main.js"></script>
	<script src="/TP3.2.3pykj/Public/js/shijian.js"></script>
	<!--<script src="/TP3.2.3pykj/Public/js/bingshi.js"></script>-->
	
<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家" style="color: #9ea7b3;">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank" style="color: #9ea7b3;">鹏宇公司</a></p>
</div>
</body>

</html>