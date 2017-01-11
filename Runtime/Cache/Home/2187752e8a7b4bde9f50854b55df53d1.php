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

    <link rel="stylesheet" href="/TP3.2.3pykj/Public/css/tiaoyang.css">

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
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="病名开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>病名开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="证型开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>证型开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="治疗指南开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>诊疗指南开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经典方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>取经典方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>取经验方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>自定义开方</span>
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
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>收费综合查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="证型开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>费用汇总</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="治疗指南开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>药品使用统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经典方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>病例查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
									<span>中医诊治查询统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i>
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
			
    <div class="bg">
        <div class="xxk">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                    <a href="#home1" data-toggle="tab">
                        6-12月龄
                    </a>
                </li>
                <li><a href="#home2" data-toggle="tab">18-24月龄</a></li>
                <li><a href="#home3" data-toggle="tab">30-36月龄</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active healthGui" id="home1">
                    <form action="#" method="post">
                        <!--数据库存放-->
                        <div class="title">6-12月龄中医药健康指导</div>
                        <p class="content">该期是小儿生长发育极其旺盛阶段，对营养要求高，而消化系统不能适应对大量食物的消化吸收，易发生营养和消化紊乱；同时来自母体的抗体减少，易生病。</p>
                        <p class="title2">（一）饮食指导</p>
                        <p class="content">a、养成良好的哺乳习惯，尽量延长夜间喂奶的时间间隔。（不能死守书本，睡时不喂）</p>
                        <p class="content">b、防止乳食无度。</p>
                        <p class="content">c、婴幼儿脾胃功能较薄弱，添加辅食宜细、软、烂、碎，从小量、单品种开始，渐加至多样。（指牙未出齐前）</p>
                        <p class="title2">（二）起居调摄：</p>
                        <p class="content">a、保证充足的睡眠时间，逐步养成夜间睡眠、白天活动的作息习惯。</p>
                        <p class="content">b、养成良好的小便习惯，适时把尿；培养每日定时大便的习惯。（尿不湿，遗尿）</p>
                        <p class="content">c、衣着要宽松，以棉质透气为主，不可紧束而妨碍气血流通，影响骨骼生长发育。</p>
                        <p class="content">d、春季注意保暖，正确理解“春捂”；夏季纳凉要适度，避免直吹电风扇，空调温度不宜过低；秋季避免保暖过度，提倡 “三分寒”，正确理解“秋冻”；冬季室内不宜过度密闭保暖，应适当通风，保持空气新鲜。</p>
                        <p class="content">e、经常到户外晒太阳，促进钙吸收。</p>
                        <p class="title2">（三）常用按揉部位及方法：</p>
                        <p class="title3">1、摩腹</p>
                        <p class="content">（1）位置：腹部（肚脐）。</p>
                        <p class="content">（2）操作：操作者用手掌掌面或示指、中指、环指的指面附着于小儿腹部，以腕关节连同前臂反复做环形有节律的移动，每次1～3分钟。</p>
                        <p class="content">（3）功效：具有改善脾胃功能，促进消化吸收的作用。</p>
                        <p class="careTitle"> *注意：</p>
                        <p class="careInf">力度：适中，至表皮</p>
                        <p class="careInf">频率：一般120次/分</p>
                        <p class="careInf">方向：顺时针</p>
                        <p class="careInf">疾病：及时就医</p>
                        <p class="title3">2、捏脊</p>
                        <p class="content">（1）位置：背脊正中，督脉两侧的大椎至尾骨末端处。</p>
                        <p class="content">（2）操作：操作者用双手的中指、环指和小指握成空拳状，示指半屈，拇指伸直并对准示指的前半段（见图1）。施术从长强穴开始，操作用双手示指与拇指合作，在示指向前轻推患儿皮肤的基础上与拇指一起将长强穴的皮肤捏拿起来，然后沿督脉两侧，自下而上，左右两手交替合作，按照推、捏、捻、放、提的前后顺序，自长强穴向前捏拿至脊背上端的大椎穴捏一遍。如此循环，根据病情及体质可捏拿4～6遍。从第2遍开始的任何一遍中，操作者可根据不同脏腑出现的症状，采用“重提”的手法，有针对性的刺激背部的脏腑俞穴，以便加强疗效。在第5遍捏拿儿童脊背时，在儿童督脉两旁的脏腑俞穴处，用双手的拇指与示指合作分别将脏腑俞穴的皮肤，用较重的力量在捏拿的基础上，提拉一下。捏拿第6遍结束后，用双手拇指指腹在儿童腰部的肾俞穴处，在原处揉动的动作中，用拇指适当地向下施以一定的压力，揉按结合（见图2）。</p>
                        <p class="content">（3）功效：具有消食积、健脾胃、通经络的作用。</p>
                        <img src="/TP3.2.3pykj/Public/img/zyty1.png" alt="图片加载失败！">
                        <p class="careTitle"> *注意：</p>
                        <p class="careInf">体位（呈一定弧度；肥胖儿视情况）</p>
                        <p class="careInf">力度（适中）</p>
                        <p class="careInf">感觉（第2、3天有一定的酸痛感）</p>
                        <p class="careInf">长期坚持</p>
                        <!--数据库存放-->
                    </form>
                </div>
                <div class="tab-pane fade healthGui" id="home2">
                    <form action="#" method="post">
                        <!--数据库存放-->
                        <div class="title">18-24月龄中医药健康指导</div>
                        <p class="title2">（一）饮食指导</p>
                        <p class="content">a、适时断奶，渐过度至成人饮食。</p>
                        <p class="content">b、养成良好饮食习惯， 避免偏食、挑食。</p>
                        <p class="content">c、小儿脾胃虚弱，消化功能差，加餐时量不宜过多，（尤其是夜间入睡前）次数不宜过频。</p>
                        <p class="content">d、寒凉食物要适度。</p>
                        <p class="title2">（二）起居调摄：</p>
                        <p class="content">a、保证充足的睡眠时间，养成良好的作息习惯。（午睡时间短）</p>
                        <p class="content">b、培养每日定时大便的习惯。</p>
                        <p class="content">c、衣着要宽松，以棉质透气为主，款式简单，不要复杂、装饰过多。（“三分寒”）</p>
                        <p class="title2">（三）常用按揉部位及方法：</p>
                        <p class="title3">1、足三里穴</p>
                        <p class="content">（1）位置：在小腿前外侧，当犊鼻下3寸，距胫骨前缘一横指处（见图3）。</p>
                        <p class="content">（2）操作：操作者用拇指端按揉，每次1～3分钟。</p>
                        <p class="content">（3）功效：具有健脾益胃、强壮体质的作用。</p>
                        <img src="/TP3.2.3pykj/Public/img/zyty2.png" alt="图片加载失败">
                        <p class="content">（4）现代研究：证明针灸足三里穴能提高小鼠运动能力。其机理可能与纠正运动小鼠神经 -内分泌 -免疫调节紊乱有关；亦有研究证明与纠正运动小鼠自由基代谢失衡有关。</p>
                        <p class="careTitle"> *注意：</p>
                        <p class="careInf">力度（至皮腠即可，不用深到肌层，强调“摩”以调气）</p>
                        <p class="careInf">中指（亦可）</p>
                        <p class="careInf">方向 顺时针</p>
                        <p class="title3">2、迎香穴</p>
                        <p class="content">（1）位置：在鼻翼外缘中点旁，当鼻唇沟中（见图4）</p>
                        <p class="content">（2）操作：双手拇指分别按于同侧下颌部，中指分别按于同侧迎香穴，其余3指则向手心方向弯曲，然后使中指在迎香穴处做顺时针方向按揉，每次1～3分钟。</p>
                        <p class="content">（3）功效：具宣通鼻窍的作用。（防感冒）</p>
                        <img src="/TP3.2.3pykj/Public/img/zyty3.png" alt="图片加载失败！">
                        <p class="content">（4）现代研究：透刺迎香穴为主治疗过敏性鼻炎的临床疗效明显优于内服鼻炎康的对照组；低频电脉冲刺激迎香穴治疗慢性单纯性鼻炎疗效确切；迎香穴位按摩可以有效促进腹部手术患者肠功能恢复；术后早期指压迎香穴可促进胃肠道蠕动,恢复胃肠道排气。</p>
                        <p class="careTitle"> *注意：</p>
                        <p class="careInf">力度：适中</p>
                        <p class="careInf">鼻翼：妨碍呼吸</p>
                        <p class="careInf">简便方法：一手项后固定，另一手食指、拇指按揉或上下推揉。</p>
                        <!--数据库存放-->
                    </form>
                </div>
                <div class="tab-pane fade healthGui" id="home3">
                    <form action="#" method="post">
                        <!--数据库存放-->
                        <div class="title">30-36月龄中医药健康指导</div>
                        <p class="title2">（一）饮食指导</p>
                        <p class="content">a、养成良好饮食习惯，按时进食，避免偏食，节制零食，控制肉食及辛辣、油腻等易上火食物的摄入，多食新鲜蔬菜、水果。</p>
                        <p class="content">b、提倡“三分饥”。</p>
                        <p class="content">c、 严格控制冷饮，寒凉食物的摄入。（形寒饮冷则伤肺，饮料、冷饮伤胃伤肺、夏季急性胃肠炎。）</p>
                        <p class="title2">（二）起居调摄：</p>
                        <p class="content">a、保证充足的睡眠时间，养成良好的作息习惯。</p>
                        <p class="content">b.、培养每日定时大便的习惯。</p>
                        <p class="content">c、衣着要宽松、舒适，少穿少捂。（“童子不衣裘帛”， “三分寒”）</p>
                        <p class="content">d、正确理解“春捂”与“秋冻” 。（抗寒、耐热要适度）</p>
                        <p class="careTitle">*注意：</p>
                        <p class="careInf">吃得太饱与穿得太暖所致。</p>
                        <p class="careInf">“四时欲得小儿安，常要三分饥与寒；但愿人皆依此法，自然诸疾不相干。”</p>
                        <p class="careInf">经常到户外活动，多见风日，增强体质。</p>
                        <p class="title2">（三）常用按揉部位及方法：</p>
                        <p class="title3">四神聪穴</p>
                        <p class="content">（1）位置：在头顶部，百会前后左右各旁开1寸处，共4穴（见图5）。</p>
                        <p class="content">（2）操作：用手指逐一按揉，先按左右神聪穴，再按前后神聪穴，每次1～3分钟。</p>
                        <p class="content">（3）功效：具有醒神益智的作用。</p>
                        <img src="/TP3.2.3pykj/Public/img/zyty4.png" alt="图片加载失败！">
                        <p class="content">（4）现代研究：针刺四神聪治疗失眠症疗效显著；电针智三针穴、四神聪穴对血管性痴呆的日常生活能力、神经功能缺损所形成的功能障碍,以及主要症状有改善作用；采用针刺四神聪的方法可明显改善AD大鼠的学习记忆能力,并能提高其脑内SOD的活性；针刺四神聪延长睡眠时间和改善大鼠睡眠结构的机理可能与改变大鼠脑内的单胺类递质含量有关。</p>
                        <p class="careTitle"> *注意：</p>
                        <p class="careInf">囟门未闭合不能操作</p>
                        <p class="careInf">可2指同时操作</p>
                        <p class="careInf">（成人：缓解疲劳、降压、止头痛，可敲打。）</p>
                        <!--数据库存放-->
                    </form>
                </div>
            </div>
            <div class="button">
                <button type="button" class="btn btn-warning">另<br/>存<br/>为</button>
                <button type="button" class="btn btn-warning">打<br/>印</button>
            </div>
        </div>
    </div>

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
	
    <!--<script type="text/javascript" src="/TP3.2.3pykj/Public/js/tizhi.js"></script>-->

<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家" style="color: #9ea7b3;">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank" style="color: #9ea7b3;">鹏宇公司</a></p>
</div>
</body>

</html>