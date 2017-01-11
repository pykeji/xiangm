<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->


<link rel="stylesheet" href="/work/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/bootstrap.css">

	<link rel="stylesheet" href="/work/Public/css/xykf.css">
	<script type="text/javascript" src="/work/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/work/Public/js/xykf.js"></script>


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
			
	<!-- 最外围大div -->
	<div id="big">
		<div id="title">
			处方信息录入
		</div>
		<div id="content">
			<div id="inter">
				<table id="ttab">
					<tr class="tr1">
						<th class="th1">
							编号
						</th>
						<th class="th1">
							药品编码
						</th>
						<th class="th1">
							药品名称
						</th>
						<th class="th1">
							药品规格
						</th>
						<th class="th1">
							药品含量
						</th>
						<th class="th1">
							最小包装
						</th>
						<th class="th1">
							数量
						</th>
						<th class="th1">
							总量
						</th>
						<th class="th1">
							给药途径
						</th>
						<th class="th1">
							次用量
						</th>
						<th class="th1">
							日次数
						</th>
						<th class="th1">
							特殊用法
						</th>
						<th class="th1">
							处方天数
						</th>
					</tr>
					<tr class="tr2">
						<td class="td1">
							<b class="b1">1</b>
						</td>
						<td class="td1">
							<input type="text" class="textlon">
						</td>
						<td class="td1">
							<input type="text"  class="ypname">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<select class="textlon"><option value="1">静滴</option></select>
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<select class="textlon"><option value="1">1次/日</option></select>
						</td>
						<td class="td1">
							<input type="radio" name="tsyf">无<input type="radio" name="tsyf">皮试<input type="radio" name="tsyf">小壶
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
					</tr>

				</table>
				<div id="aja">
					
				</div>
				<button class="btn btn-success" id="jia">加一味药</button><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
			<div id="bzz">
				备注
			</div>
			<div id="bzy">
				<textarea id="bztext"></textarea>
				
			</div>
			<button class="btn btn-info" id="qdcf">确定此方</button>
			<button class="btn btn-danger" id="ys">预审</button>

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
	<script src="/work/Public/js/shijian.js"></script>
	<!--<script src="/work/Public/js/bingshi.js"></script>-->
	
<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家" style="color: #9ea7b3;">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank" style="color: #9ea7b3;">鹏宇公司</a></p>
</div>
</body>

</html>