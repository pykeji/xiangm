<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->

	<!-- <link href="/work/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/work/Public/yeMiancss/kaiFang6.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/work/Public/jq/jquery-3.1.1.min.js"></script>
	<!-- bootstrap的引用 -->
    <!-- <script src="/work/Public/bootstrap/js/bootstrap.min.js"></script> -->
    

<link rel="stylesheet" href="/work/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/bootstrap.css">

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
<link rel="shortcut icon" href="/work/Public/muban/assets/ico/minus.png">
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
					<img alt="" class="admin-pic img-circle" src="/work/Public/muban/assets/img/canga.jpg">
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
		<img src="/work/Public/muban/assets/img/pengyu1.png"  alt="logo" style="  width: 150px; margin-left:30px; ">
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
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="自己登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>患者登记</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>患者预约</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>查询</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="健康档案">
						<i class="icon-feed"></i>
						<span>健康档案</span>
						</a>
						<ul>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="自己登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>体质辨识</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>中医调养</span></a>
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
						<a class="tooltip-tip ajax-load" href="mail.html" title="西药开方">
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
			
	<!-- 头 -->
	<div class="toushang">
		<div class="toushangzuo">
			<h4>
			<img src="/work/Public/img/症状.jpeg" style="height: 30px;" alt="图片加载中。。。。">
			<b>症状</b></h4>
		</div>
		<div class="toushangzh">
			<h4><img src="/work/Public/img/症状.jpeg" style="height: 30px;" alt="图片加载中。。。。">
			<b>辩证结果</b></h4>
		</div>
		<div class="toushangyou">
			<h4><img src="/work/Public/img/症状.jpeg" style="height: 30px;" alt="图片加载中。。。。">
			<b>处方选择</b></h4></div>
		<div class="qisfudong"></div>
	</div>
	<!-- 中 -->
	<div class="zhongjinade">
		<div class="zhongzuo">
			<!-- 折叠 -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">
								选择症状
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<!-- 内容 -->
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary" data-toggle="modal" data-target="#myZhilModal" >主症</span>
						    <input type="text" class="form-control input-lg" placeholder="请输入主症">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">兼症</span>
						    <input type="text" class="form-control input-lg" placeholder="请输入兼症">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">舌象</span>
						    <input type="text" class="form-control input-lg" placeholder="请输入舌象">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">脉相</span>
						    <input type="text" class="form-control input-lg" placeholder="请输入脉相">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">某某</span>
						    <input type="text" class="form-control input-lg" placeholder="可不输入">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">某某</span>
						    <input type="text" class="form-control input-lg" placeholder="可不输入">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">辩证</span>
						    <input type="text" class="form-control input-lg" >
						</div>
					</div>
					<!-- 模态框内容开始 -->
					<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			            <div class="modal-dialog" >
		                    <!-- 滚动监听 -->
		                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border-radius:10px;  background-color:#FFFBF0 ">
		                    	<!-- 选项卡 -->
								<ul id="myTabmot" class="nav nav-tabs">
								    <li class="active">
								      <a href="#homemot" data-toggle="tab">
								        分类
								      </a>
								    </li>
								    <li>
								   		<a href="#iosmot" data-toggle="tab">
								   		检索</a>
								   	</li>
								   	<li>
								   		<a href="#changyong" data-toggle="tab">常用选择</a>
								   	</li>
								</ul>
								<div id="myTabContentmot" class="tab-content">
								    <div class="tab-pane fade in active" id="homemot">
								       <!-- 内容 -->
								     	<div class="mtfenlzuo">
								     		<!-- 滚动监听 -->
		                    				<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="mtfenlzuogdjt">
												<p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p><p>头疼</p>
								     		</div>
								     	</div>
								     	<!-- 全选按钮 -->
								     	<div class="mtfenlyou">
								     		<!-- 上 -->
								<div style=" width:100%; height: 80px; background-color: #F0F0F0; text-align: center; ">
									<!-- 按钮 -->
									<div style="  height: 50px; ">
											<input type="text" style="margin-top:10px;  "> 搜索
											<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >确定</button>
										</div>
										
									<div style="margin-top: 5px;">
										<input type="radio" name="a1name" class="btn" id="yixuanSelectAll">
										<label for="yixuanSelectAll">已选</label>
										<input type="radio"  name="a1name" class="btn" id="weixuanSelectAll">
										<label for="weixuanSelectAll">未选</label>
										<input type="radio" name="a1name" class="btn" id="quanXuanselectAll">
										<label for="quanXuanselectAll">全选</label>
										<input type="radio"  name="a1name" class="btn" id="quanBuXuanSelect">
										<label for="quanBuXuanSelect">全不选</label>
										<input type="radio" value="显示全部" name="a1name" class="btn" id="quanbuSelectAll">
										<label for="quanbuSelectAll">显示全部</label>
									</div>

								</div>
								<div style=" width:350px; height: 370px;">
									<ul id="xuanZlist">
										<button  class=" btn btn-info bto-xs" style=" margin-top: 10px; color: #000000; " >设为常用症状</button>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="1"> 1.时间都去哪儿了</label>
										</li>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="2"> 2.海阔天空</label>
										</li>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="3"> 3.真的爱你</label>
										</li>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="4"> 4.不再犹豫</label>
										</li>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="5"> 5.光辉岁月</label>
										</li>
									   <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0; "">
											<label><input type="checkbox" value="6"> 6.喜欢妳</label>
										</li>
									</ul>
								</div>
								     	</div>
								     	<div class="quxiaofdmtfenl"></div>
								    </div>
								    <div class="tab-pane fade" id="iosmot">
								      <!-- 内容 -->
								     收到
								    </div>
								    <div class="tab-pane fade" id="changyong">
								      <!-- 内容 -->
								    	常用选择
								    </div>
								   
								</div>
		                    </div>
			                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:12px;"><button  class="btn ">&times;</button></div>
			            </div><!-- /.modal-dialog -->
			        </div>
					<!-- 模态框内容结束 -->
				</div>
			</div>
		</div>
		<div class="zhongyou">
			<div class="zhongyoushang">
				<div class="zysbiaoge1">
					<!-- 表格 -->
					<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="ka3YouShangDakuaiChuFang">
					    <form action="ads">
							 <table  style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
							 	<tr >
							 		<th style="width:50px; text-align: center; background-color:#D7D715; ">选择</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">证型</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">治则</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">选用类表</th>
							 		<th style="width:300px; text-align: center; background-color:#D7D715;">备注</th>
							 	</tr>

								<tr onclick="dianjiyou(this)">
									<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
										<input type="checkbox" name="aa" value="jlk">
									</td>
									<td style="border: 1px #F0F0F0 solid; ">
										头疼症
									</td>
									<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
									<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
									<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
								</tr>
								<tr onclick="dianjiyou(this)">
									<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
										<input type="checkbox" name="aa" value="jlk">
									</td>
									<td style="border: 1px #F0F0F0 solid; ">
										头疼症
									</td>
									<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
									<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
									<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
								</tr>
								
							 </table>
						</form>
					</div>
				</div>
				<div class="zysbiaoge2">
					<!-- 表格 -->
					<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="ka3YouShangDakuaiChuFang2">
					    <form action="ads">
							 <table  style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
							 	<tr >
							 		<th style="width:50px; text-align: center; background-color:#D7D715; ">选择</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">方剂名称</th>
							 		
							 	</tr>

								<tr onclick="dianjiyou(this)">
									<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
										<input type="checkbox" name="aa" value="jlk">
									</td>
									<td style="border: 1px #F0F0F0 solid; ">
										治头疼的
									</td>
									
								</tr>
								
								
							 </table>
						</form>
					</div>
				</div>
				<div class="quxiaofudzysbiaoge"></div>
			</div>
			<div>
				<div class="zhongyouxia">
					<!-- 选项卡 -->
					<!-- 选项卡 -->
					<ul id="myTab" class="nav nav-tabs">
					   <li class="active">
					      <a href="#home" data-toggle="tab">
					        <img src="/work/Public/img/bg.png"  alt="别急图片马上出来">药解
					      </a>
					   </li>
					   <li><a href="#ios" data-toggle="tab">
					   		<img src="/work/Public/img/fj.png" alt="别急图片马上出来">方解</a>
					   	</li>
					   	<li>
					   		<!-- 按钮 -->
					   		<!-- <div class="xuandinagcfang" >
					    		<button  class="btn  btn-success" style="width: 100px; " ><b style="color: #000000; ">选定此方</b></button>
					    		<button  class="btn btn-warning" style="width: 100px; margin-left: 20px; " ><b style="color: #000000; ">退出</b></button>
					    	</div> -->
					   	</li>
					</ul>
					<div id="myTabContent" class="tab-content">
					   <div class="tab-pane fade in active" id="home">
					       <!-- 内容 -->
					       <!-- 下侧处方 -->
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="ka3xiaCeChuFang">
							<table>
								<div  class="ka3xiaCeChuFangZI">
									<strong>方剂名称:<尽量快圣诞节（爱思）></strong>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
								<div style="width: 700px;">
									<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
										<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
										<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
										<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
										<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
									</div>
								</div>
							</table>
						</div>
						
				    	
					   </div>
					   <div class="tab-pane fade" id="ios">
					      <!-- 内容 -->
					      <div style="border: 1px #FFFBF0 solid;width: 600px; height: 50px; text-align:center; font-size:20px;color:#8E852D">
										<strong>方剂名称:<尽量快圣诞节（爱思）></strong>	
							</div>
							<div style=" width: 600px; margin:20px; ">
								<strong>方解：</strong>家里卡手机登录方可将阿里卡世纪东方
							</div>
							<div style=" width: 600px; margin:20px; "><strong>来源：</strong></div>
							<div style=" width: 600px; margin:20px; "><strong>功效：</strong></div>
							<div style=" width: 600px; margin:20px; "><strong>主治：</strong></div>
							<div style=" width: 600px; margin:20px; "><strong>用法：</strong></div>
					   </div>
					   
					</div>
				</div>
				<div class="zhongyouanniu">
					<!-- 按钮 -->
					<div>
						<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
					</div>
					<br>
		    		<div>
		    			<button  class="btn btn-warning" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
		    		</div>
				</div>
				<div class="qingchuzhongyouanniu"></div>
			</div>
				
		</div>
		<div class="qichuzhongfudong"></div>
	</div>
    <!-- 全选 未选 已选 -->
	<script type="text/javascript">
		$("#yixuanSelectAll").click(function () {
			// alert(123)
		        // 把选择的显示为选择的隐藏
		    $("#xuanZlist :checkbox").each(function () { 
		        	$(this).parents("li").show(); 
		        	if(!$(this).prop("checked")){
		        		$(this).parents("li").hide();
		        	}
		        });
			});
			// 把所有的显示
			$("#quanbuSelectAll").click(function(){
				$("#xuanZlist :checkbox").each(function () {  
		           $(this).parents("li").show();  
		        });
			});
			// 未选
			$("#weixuanSelectAll").click(function(){
				$("#xuanZlist :checkbox").each(function () { 
					$(this).parents("li").show(); 
		        	if($(this).prop("checked")){
		        		$(this).parents("li").hide();
		        	}
		        });
			});
			//全选  
		    $("#quanXuanselectAll").click(function () {
		        $("#xuanZlist :checkbox,#all").prop("checked", true); 
		        //再次点击变为全不选 
		        $(this).click(function(){
		        	 $("#xuanZlist :checkbox,#all").prop("checked", false);
		        }); 
		    }); 
		    //全不选
		    $("#quanBuXuanSelect").click(function () {  
		         $("#xuanZlist :checkbox,#all").prop("checked", false);  
		    }); 
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
    <script type="text/javascript" src="/work/Public/muban/assets/js/jquery.js"></script>
    <!-- <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script> -->
    <!-- <script src="assets/js/progress-bar/number-pb.js"></script> -->
    <!-- <script src="assets/js/progress-bar/progress-app.js"></script> -->



    <!-- MAIN EFFECT -->
    <!-- <script type="text/javascript" src="assets/js/preloader.js"></script> -->
    <script type="text/javascript" src="/work/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/main.js"></script>

<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">鹏宇公司</a></p>
</div>
</body>

</html>