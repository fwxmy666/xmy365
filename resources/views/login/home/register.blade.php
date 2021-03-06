<!DOCTYPE html>
<html>
  <head>
  	<title>创建新帐号 | 香满圆-西部农产品电商平台,重庆菜园坝水果市场荣誉出品</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="/homelogin/css/style_1.css">

<link rel="stylesheet" type="text/css" href="/homelogin/css/easydialog_1.css">
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="/homelogin/css/drag_1.css">
<link rel="stylesheet" type="text/css" href="/homelogin/css/register_1.css">
<style type="text/css">
	.grey{color:#999;}
	.form-group{height:auto;}
	 label.error ,label.ext-error{color: red;text-align:left;width:100%;}
	 .easyDialog_wrapper .easyDialog_content{height:auto;}
</style>
</head>

<body>
  	

<nav>
    <div class="outer">
        <div class="header">
        	<a href="/">
            	<div class="logo gutter"><img src="/homelogin/picture/logo_1.png"/></div>
            </a>
        </div>
    </div>
</nav>


  	<div class="ad-img"></div>
 	<div class="container"  style="background-color: #fff;">
	    <div class="register w-1250">
	        <div class="step clearfix  gutter-mar">
	            <div class="col-50 active"><span><i class="iconfont">&#xe62e;</i></span>填写信息</div>
	            <div class="col-50"><span><i class="iconfont">&#xe62f;</i></span>完成</div>
	        </div>
	    </div>

		@if (count($errors) > 0)
		<center>
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style="color:red;font-size:17px;list-style:none;">{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</center>
		@endif

		@if(session('warning'))
		<center>
	        <div class="mws-form-message error">
	            <ol style="color:red;list-style:none;font-size:17px;">
	                <li>{{session('warning')}}</li>
	            </ol>
	        </div>
        </center>
        @endif

	    <form action="/home/check" method="post" id="myform"  style="background-color: #EFEFEF;">
	    <div class="register clearfix w-1250"  style="background-color: #fff;">
	        <div class="form-group col-50 clearfix">
	            <label for="name">用户名</label><div class="wrap-input clearfix"><input type="text" placeholder="推荐用手机号作为用户名" name="username" id="ipt1">
	            </div><span class="sp1" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="password">登录密码</label><div class="wrap-input clearfix"><input type="password" placeholder="请输入登录密码" name="password" id="ipt2"></div>
	            <span class="sp2" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="again_password">确认密码</label><div class="wrap-input clearfix"><input type="password" placeholder="请确认密码" name="repass" id="ipt3"></div>
	            <span class="sp3" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="mobile_phone">手机号码</label><div class="wrap-input clearfix"><input type="text" placeholder="请输入手机号码" name="phone" id="ipt4"></div>
	            <span class="sp4" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label for="mobile_code">手机验证码</label>
	            <div class="wrap-input clearfix">
	            	<input type="text" placeholder="请输入验证码" name="code" id="ipt5">
	            	<button type="button" class="btn-get" style="font-size:12px;">获取验证码</button>
	            </div>
	            <span class="sp5" style="margin-left:35px;"></span>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <label>滑动验证</label>
	            <div class="wrap-input clearfix">
	            	<div id="drag" style="position:relative;color:black;">
	            		<div id="bg" style="position: absolute;height:100%;background-color:rgb(103,186,72);"></div>
	            		<div id="hua" style="height:34px;width:40px;background:url('/admin/images/core/zhen.jpg');position:absolute;left:0px;">
	            		</div>
	            		拖动滑块验证
	            	</div>
	            	<label class="ext-error" id="v_drag">
	            		<img id="dui" src="/admin/images/core/dui.jpg" style="position:absolute;right:35px;top:1px;display:none">
	            	</label>
	        	</div>
	        </div>
	        <div class="form-group col-50 clearfix">
	            <div class="wrap-input wp-add"><input type="checkbox" class="checkbox" id="agree" style="outline:0!important;"><label for="agree">同意</label><a href="javascript:void(0);" onclick="regText()" class="word-tips">《香满圆服务协议》</a></div>
	        </div>
	        <div class="form-group col-50 clearfix">
	        		{{csrf_field()}}
	            <div class="wrap-input wp-add">
	            	<button type="submit" class="toregister" id="register">立即注册</button>
	            </div>
	        </div>
	    </div>
	    </form>
	</div>
	
<div class="base">
    <div class="virtue">
        <ul class="virtue-ul">
            <li class="virtue-li"><div class="xta"><p class="tit">香满圆</p><p class="details">100%保证商品新鲜度，及时送达顾客手中</p></div></li>
            <li class="virtue-li"><div class="xtb"><p class="tit">所有商家经官方认证</p><p class="details">官方认证，所有商家具有合法个体经营身份或企业资质</p></div></li>
            <li class="virtue-li remove"><div class="xtc"><p class="tit">网站担保交易</p><p class="details">网站官方担保交易，收到商品后再结算，有问题随时投诉</p></div></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
</div>

<footer>
    <div class="footer-auto">
       	<p>香满圆旗下：重庆菜园坝农产品市场集群（线下） |  B2C电商平台 | 社区超市订购平台（线上）</p>
		 <p class="mt10">Copyright  2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司</p>
		 <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
		 <p class="mt10"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a></p>
    </div>
   <div class="beian">
        <ul class="beian-ul">
           <a href="http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"> <li class="beian-li"><img src="/homelogin/picture/biean1_1.png"/></li></a>
           <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean2_1.png"/></li></a>
           <a href="http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean3_1.png"/></li></a>
           <a href="http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean4_1.png"/></li></a>
           <a href="http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="/homelogin/picture/biean5_1.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div> 
</footer>


<div id="overlay" style="margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; background: rgb(51, 51, 51); opacity: 0.6; z-index: 9999; position: fixed; top: 0px; left: 0px; display: none;"></div>


<div id="easyDialogBox" style="margin: -214px 0px 0px -378px; padding: 0px; border: none; z-index: 10000; position: fixed; top: 56%; left: 50%; display: none;"><div id="easyDialogWrapper" class="easyDialog_wrapper" style="display: block; margin: 0px;"><div class="easyDialog_content"><h4 class="easyDialog_title" id="easyDialogTitle" style="cursor: move;"><a href="javascript:void(0)" onclick="closeText()" title="关闭窗口" class="close_btn" id="closeBtn" style="font-size: 30px;">×</a>香满圆服务协议</h4><div class="easyDialog_text">
	   <p>
		    <strong><span style="font-size:16px;font-family:宋体">第一条 会员章程的确认和接纳</span></strong><span style="font-size: 16px;font-family:宋体"> <br> 本章程由您（“会员”）与香满圆网站（“网站”）运营方重庆香满圆农产品有限公司（以下可简称为“香满圆”）订立。在您申请注册成为香满圆网站会员前，请您仔细阅读本章程。当您勾选“同意《香满圆服务协议》”（或类似同意按钮） 并完成会员注册程序后，或以香满圆允许的其他方式实际使用会员服务时，即表示您自愿接受本协议。若您不同意本协议，或对本协议的条款存在任何疑问，您可停止进行香满圆网站注册程序。<br> <strong>第二条 定义与说明</strong> <br> 1、积分：香满圆会员在购物、参与活动等行为后，根据页面公示或相关规则，获得的可兑换礼品的电子财产，此积分每年12月31日清零，请在清零前使用。<br> 2、恶意购物行为：包括恶意下单、恶意购买、恶意差评等，指从事了相关购物行为，但积极主动终止购物目的或结果，或追求一般购物以外的目的或结果，对他人或香满圆（可能）造成消极影响的行为。<br> <strong>第三条 服务简介</strong> <br> 1、香满圆网站首页域名为www.xmy365.com（日后变更首页域名的，以变更后的为准）；香满圆会员通过香满圆网站（含香满圆网站移动客户端及其他登录客户端）为您提供网络交易平台服务，会员根据其会员权限可相应在香满圆网站上查询商品和服务信息、达成交易意向并进行交易、对购买的商品和服务进行评价、参加本网站活动以及使用其他信息服务及技术服务（以下可简称为“会员服务”）等；为改善会员体验或经营需要，会员服务的项目和内容可能会不时调整，调整前7天将在网站公示。<br> 2、会员服务的条件和规则包含于本章程以及香满圆在香满圆网站内统一发布的服务条款、说明、通知公告、操作规则、活动说明、温馨提示等规则（合称“网站规则”）中；请您在阅读并同意遵守本协议及网站规则后，再享受会员服务，否则由此带来的不便和责任由您自行承担;如不同意您可立即停止注册会员，以免给您带来不便。<br> 3、您应自行准备如下设备并承担如下开支：<br> (1) 上网设备：包括但不限于计算机、调制解调器或其他必备的上网装置；<br> (2) 上网开支：包括但不限于网络接入费、手机流量费等费用。<br> <strong>第四条 会员管理</strong> <br> 1、香满圆仅向依法能够且有权订立具有法律约束力合约的自然人提供会员服务。因此，您应是具备完全民事权利能力和民事行为能力的自然人。<br> 2、您申请成为香满圆网站会员时，应自行向香满圆提供真实、准确、完整、合法有效的注册资料，并且当您的注册资料发生变动时，应及时进行更新。如果您提供的注册资料不合法、不真实、不准确、不详尽，您须承担因此引起的相应责任及后果。<br> 3、涉及您姓名、地址、电子邮箱、账号和电话号码等个人信息的，香满圆将予以严格保密，除非：<br> （1）事先获得您的明确授权；<br> （2）相应的法律程序及相关政府部门要求香满圆提供的。<br> 4、成功注册成为香满圆网站会员后，您将得到会员账户，登录会员账户时您可以使用您提供或确认的用户名、邮箱、手机号码或者香满圆网站允许的方式作为会员账户登录名进行登录，但在登录时您必须输入您设定并保管的会员账户密码；您应妥善保管您的会员账户的密码；为保护您的权益，您在设定会员账户密码时，请勿使用重复性或者连续数字的简单密码；请勿将密码告知他人，因密码保管不善而造成的经济损失由您自行承担。<br> 5、会员用户名不得侵犯他人合法权益；如您设置的会员用户名涉嫌侵犯他人合法权益的，香满圆有权终止为您提供会员服务，注销您的账号。<br> 6、除非有法律规定或依生效司法裁决，或者符合香满圆公布的条件，否则您的用户名、密码不得以任何方式转让、赠与或继承，并且转让、赠与或继承需提供香满圆要求的合格的文件材料并根据香满圆制定的操作流程办理。<br> 7、您需要对通过您的会员账户所进行的活动和事件负全责，请勿将在香满圆网站注册获得的会员账号借给他人使用；如果您发现任何非法使用您会员账户的情况，请立即通告香满圆。<br> 8、您可以通过在香满圆网站参与购买、网站活动等方式获得积分。通过参与香满圆活动，您也可能会获得电子券购物卡。积分和电子券购物卡都具有特定的使用规则和有效期，逾期将被清零或者作废；请您不时关注您的电子券购物卡有效期，在电子券购物卡有效期届满前，香满圆不再另行作特别通知；香满圆不对逾期清零的积分和电子券购物卡负责。<br> 9、依据国家相关法律法规规章，您同意严格遵守以下义务：<br> （1）不得传输或发表：煽动抗拒、破坏宪法和法律、行政法规实施的言论，煽动颠覆国家政权，推翻社会主义制度的言论，煽动分裂国家、破坏国家统一的言论，煽动民族仇恨、民族歧视、破坏民族团结的言论；<br> （2）从中国大陆向境外传输资料信息时必须符合中国有关法律法规；<br> （3）不得利用本网站从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；<br> （4）不得干扰本网站的正常运转，不得侵入本网站及国家计算机信息系统；<br> （5）不得传输或发表任何违法犯罪的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的、淫秽的、不文明的等信息资料；<br> （6）不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；<br> （7）不得教唆他人从事本条所禁止的行为；<br> （8）不得利用在本网站注册的账户进行牟利性经营活动（如批发、炒货、转卖）<br> （9）不得发布任何侵犯他人著作权、商标权等知识产权及其他合法权利的内容。<br> 若您未遵守以上规定，您须对自己的言论和行为承担法律责任。<br> <strong>第五条 商品信息</strong><br> 1、香满圆网站上的商品信息随时有可能发生变动。香满圆将尽力通过合理的商业努力，使网站内展示的商品参数、说明、价格、库存等商品信息尽可能准确、详细，但由于网站上商品信息的数量极其庞大，且受互联网技术发展水平等因素的限制，网页显示的信息可能会有一定的滞后性或差错，对此情形您充分知悉并予以理解。如您发现商品信息错误的或有疑问的，请您不要提交订单，并在第一时间告诉香满圆。<br> 2、为表述便利，商品和服务可统称为“商品”或“货物”。<br> 3、除另有特别说明外，本网站展示的商品的价格都为含税价格。送货运费需由您另行支付，当然，根据您选择的商品、价格、区域和送货方式不同，香满圆可能对运费进行适当减免 （详见网站内的公告或说明）。<br> 4、如果发生了意外情况，您提交订单后，由于供应商提价、税额变化或者由于网页信息错误等造成商品价格变化，您可以自行或者委托香满圆为您取消订单。<br> <strong>第六条 购物卡</strong><br> 1、香满圆购物卡是香满圆网站制作及发售，用于会员在香满圆网站中充值并购买商品的电子有价证券，该卡仅用于香满圆网站消费，不作提现使用，该卡产生的消费退款也仅能够退回该卡的充值账户。<br> 2、香满圆购物卡是无记名卡，由该卡第一个充值账户进行使用，请您注意保管或及时充值并使用。<br> 3、香满圆购物卡具有特定的使用规则和有效期，逾期将被清零或者作废；请您不时关注您的购物卡有效期，在购物卡有效期届满前，香满圆不再另行作特别通知；香满圆不对逾期清零的购物卡负责，请您及时充值并使用。<br> <strong>第七条 订单成立及履约基本规则</strong><br> 1、当您下订单时，请您仔细确认所购商品的名称、价格、数量、型号、规格、尺寸、联系地址、电话、收货人等信息。收货人与您本人不一致的，收货人的行为和意思表示视为您的行为和意思表示，您应对收货人的行为及意思表示的法律后果承担连带责任。<br> 如果因为您填写的收货人联系电话、地址等信息错误，导致香满圆（或香满圆委托的配送公司）将货物交付给非您本意的收货人的，由此造成的损失需由您自行承担。<br> 2、香满圆将尽量满足您的购物需求，避免您选购的商品无货，但是由于技术障碍以及各类商品众多难以控制和避免的因素，香满圆无法保证符合您提交的订单中所有要求的商品都有货；如您订购的商品无货，香满圆将及时与您联系，您有权取消订单。<br> 3、订单因任何原因取消后，如香满圆无法通过您的付款渠道将您所付商品价款退还给您时，可以转款至您指定的银行卡上。<br> 4、若您拟购买商品超过网站内公示的购买数量限制，请您与香满圆网站销售部门联系。<br> 5、如您在购物过程中有任何疑问与纠纷的，您可以通过香满圆12315维权服务站进行咨询和投诉，如协调不成可向工商管理部门投诉。<br> 6、自提<br> 若您购买香满圆商品，且送达方式选择“自提”，您可凭有效证明在约定时间内到香满圆公司自提商品并签字确定。<br> 7、配送<br> 若您购买的商品送达方式选择配送，商家将会把商品通过物流公司送到您所指定的收货地址（收货地址在配送范围外的除外），请您在收货前验视所送货物，当您或您指定的收货人、代理人在配送单或其他凭证上签字，即视为您完成收货，并认可收货商品。您必须准确地填写自己的真实姓名、送货地址及联系方式。因如下情况造成订单延迟或无法配送等，香满圆不会承担迟延配送或无法配送的责任 ：<br> （1）您提供的送货地址、联系方式等信息错误或不够详细；<br> （2）货物送达无人签收；<br> （3）情势变更因素；<br> （4）不可抗力，例如：自然灾害、交通戒严、罢工、骚乱、政府行为、突发战争等。<br> 所有在香满圆网站上列出的配送送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点等因素的基础上估计得出的；参考时间不属于承诺到货时间，也不等于实际到货时间。<br> <strong>第八条 所有权及知识产权条款</strong><br> 1、香满圆作为香满圆网站的运营商，拥有香满圆网站内容及资源的著作权等合法权利，受国家法律保护。<br> 2、除法律另有强制性规定外，未经香满圆明确的特别书面许可,任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用本站的信息内容，否则，香满圆有权追究其法律责任。<br> 3、香满圆网站所刊登的资料信息（诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件），均是香满圆或其内容提供者的财产，受中国和国际版权法律的保护。香满圆网站上所有内容的汇编是香满圆的排他财产，受中国和国际版权法律的保护。香满圆网站上所有软件都是香满圆或其关联公司或其软件供应商的财产，受中国和国际版权法律的保护。<br> <strong>第九条 条款更新及您的关注义务</strong><br> 本章程包含了您使用会员服务的基本规范，您在使用会员服务时，还需遵循网站公示的具体规范，即网站规则，如网站服务条款、通知公告、操作规则、温馨提示等网站规则；网站规则属于会员章程的有机组成部分。 根据国家法律法规变化及网站运营需要，香满圆有权修改本会员协议，并不定期更新网站规则，一旦前述信息发生变化，香满圆将及时将相关信息通过网站公示等方式通知您，您可随时登录香满圆网站查阅最新会员协议条款及网站规则，相关信息在通知之日起7日后正式生效；如果您不接受所改动的内容，您有权立即停止接受香满圆所提供的会员服务；如果您未明示拒绝接受改动的内容或继续使用香满圆提供的会员服务，则视为接受会员章程条款的变动。 如果会员协议或网站规则条款中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分的且并不影响任何其余条款的有效性和可执行性。<br> <strong>第十条 责任限制</strong><br> 1、除非另有明确的书面说明，香满圆及其所包含的或以其它方式通过本站提供给您的全部信息、内容、材料、产品（包括软件）和服务，均是在“按现状”和“按现有”的基础上提供的。<br> 2、如因不可抗力或其它本站无法控制的原因使本站销售系统崩溃或无法正常使用导致网上交易无法完成或丢失有关信息、记录等的，香满圆会合理合法地尽力协助处理善后事宜。<br> <strong>第十一条 服务限制与终止</strong><br> 1、出现以下情况之一时，香满圆有权对您的会员账户的部分或者全部权限或功能（包括但不限于：货到付款、网页回复评价、在线评价、门店付款、下单、参加促销活动等）进行限制：<br> （1）使用货到付款支付方式，短期内多次在付款前取消订单的；<br> （2）多次在评论区或咨询区发布与所售商品无关的广告、辱骂等信息的或多次恶意进行负面评价的；<br> （3）无故对香满圆人员进行辱骂、人身攻击的；<br> （4）符合本条第2款规定的相关情形的。<br> 2、出现以下情况时，香满圆有权直接以注销会员账户的方式终止本协议，并有权永久冻结或注销您的账户在香满圆网站权限，并收回会员账户对应的会员昵称：<br> （1）您通过网络攻击、大量发布广告等行为影响网站正常经营或影响网站为其他会员提供服务的；<br> （2）您通过外挂工具、网络攻击或其他不正当行为非法获取积分、电子券购物卡等虚拟财产的（对此香满圆有权在不进行提前告知的情况下对违规账户进行冻结清算处理，并保留追究相关人员法律责任的权利）；<br> （3）会员章程及网站规则变更时，您明示并通知香满圆不愿接受该等变更的；<br> （4）您有其他影响网站正常经营秩序或违法行为的。<br> 第十二条 适用法律及争议解决<br> 本会员章程适用中华人民共和国大陆地区适用之有效法律。如发生本章程或网站规则与中华人民共和国法律相抵触，则这些内容将完全按法律规定重新解释，而其它条款则依旧保持对您的约束力。<br> 若您和香满圆就会员协议的订立和履行等事宜产生争议的，您可以将此争议提交到双方管辖法院中的任意一方进行诉讼。<br> （温馨提示：在点击同意前，请确定你已完全阅读并理解此协议的类容，若您勾选确认并点击注册则视为您已经完全阅读并同意此协议的内容）</span>
		</p>
		<p>
		    <br>
		</p>
	</div><div class="easyDialog_footer"><button class="btn_highlight" onclick="closeText()" id="easyDialogYesBtn">确定</button></div></div></div></div>

<script type="text/javascript" src="/homelogin/js/jquery-1.9.1.min_1.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>


<script>

	//表单提交信息错误时显示和消失
	$('.mws-form-message').delay(3000).slideUp(1000);


	var DV;
	//滑动验证
	var hua = document.getElementById('hua');
	var dui = document.getElementById('dui');
	var drag = document.getElementById('drag');
	var bg = document.getElementById('bg');

	var x = 0;
	var l = 0;

	var isDown = false;//鼠标的按下状态 默认是false

	//按下
	hua.onmousedown = function(e){
		this.style.cursor = 'move';
		x = e.clientX;
		l = hua.offsetLeft;

		isDown = true;
	}
	//移动
	hua.onmousemove = function(e){
		
		//检测  如果鼠标没有按下的话 直接返回
		if(isDown){
			var _x = e.clientX;

			var newLeft = _x - (x - l);

			if(newLeft <= 0){
				newLeft = 0;
			}

			if(newLeft >= 266){
				hua.style.display = 'none';
				dui.style.display = '';
				drag.textContent = '验证成功';
				drag.style.backgroundColor = 'rgb(103,186,72)';
				drag.style.color = 'white';
				DV = true;
			}

			//样式的设置
			hua.style.left = newLeft + 'px';
			bg.style.width = newLeft + 'px';
		}

	}
	// 抬起
	hua.onmouseup = function(){
		isDown = false;
		this.style.cursor = 'default';
		hua.style.left = 0 + 'px';
		bg.style.width = 0 + 'px';
	}

		
		
		

	var UV;
    var PV;
    var RV;
    var NV;

    
    //用户名验证
    $('#ipt1').focus(function(){

        $('.sp1').text(' *请输入8~16位用户名').css('color','black');

    });



    $('#ipt1').blur(function(){

        var tv = $(this).val();

    
        //正则
        var reg = /^\w{8,16}$/;

        //判断
        if(!reg.test(tv)){
        
            $('.sp1').text(' *用户名格式不正确').css('color','red');
            
            UV = false;

        } else {
        
            //发送ajax
            $.get('/home/zajax',{username:tv},function(data){

                if(data == '1'){
                    $('.sp1').text(' *用户名已经存在').css('color','red');
                    
                    UV = false;
                } else {
                    $('.sp1').text(' √').css('color','green');
                    
                    UV = true;
                }
                
                
            })
            
        }



    });





    //密码验证
    $('#ipt2').focus(function(){
        
        $('.sp2').text(' *请输入8~16位密码').css('color','black');
    })
    
    
    $('#ipt2').blur(function(){
    
        //获取输入的密码
        var pv = $(this).val();

        
        //正则
        var reg = /^\S{8,16}$/;
        
        //判断
        if(!reg.test(pv)){
        
            $('.sp2').text(' *密码格式不正确').css('color','red');
            
            PV = false;
        } else {
        
            $('.sp2').text(' √').css('color','green');
            
            PV = true;
        }
        
        
    })



    //确认密码
    $('#ipt3').focus(function(){
        
        $('.sp3').text(' *再次输入密码').css('color','black');
    })
    
    
    $('#ipt3').blur(function(){
    
        //获取值
        var rpv = $(this).val();
        
        //获取输入密码的值
        var pv = $('#ipt2').val();


         //正则
        var reg = /^\S{8,16}$/;

        //判断
        if(!reg.test(rpv)){
        
            $('.sp3').text(' *密码格式不正确').css('color','red');
            
            RV = false;

            return;
        }
        
    

        if(rpv != pv){
        
            $('.sp3').text(' *两次密码不一致').css('color','red');

            RV = false;
            
        } else {
        
            $('.sp3').text(' √').css('color','green');

            RV = true;
            
        }

    })




    //手机验证
    $('#ipt4').focus(function(){
        
        $('.sp4').text(' *请输入正确的手机号码').css('color','black');
    })
    
    
    $('#ipt4').blur(function(){
    
        //获取输入的手机号
        var nv = $(this).val();

        
        //正则
        var reg = /^1[345678]\d{9}$/;
        
        //判断
        if(!reg.test(nv)){
        
            $('.sp4').text(' *手机号码格式不正确').css('color','red');
            
            NV = false;
        } else {
        
            $('.sp4').text(' √').css('color','green');
            
            NV = true;
        }
        
        
    })


    

	//手机验证码发送
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	var phoneCode;
	$('.btn-get').click(function(){

		$(this).attr('disabled','disabled');

		var djs = 30;

		var info = setInterval(function(){

			$('.btn-get').text(djs-- + '秒后重新获取');

			if(djs < 0){

				clearInterval(info);
				$('.btn-get').removeAttr('disabled');
				$('.btn-get').text('获取验证码');
			}
			
		},1000)


		//获取手机号码
		var phone = $('#ipt4').val();

		//发送ajax
		$.post('/home/yzm',{number:phone},function(data){

			phoneCode = data;
		})

	})



	//手机验证码
	var CV;

    $('#ipt5').focus(function(){
        
        $('.sp5').text(' *请输入手机验证码').css('color','black');
    })


    $('#ipt5').blur(function(){
    
        //获取输入的验证码
        // console.log($(this).val());
        console.log(phoneCode);
        
        //判断
        if($(this).val() != phoneCode){
        
            $('.sp5').text(' *手机验证码不正确').css('color','red');
            
            CV = false;
        } else {
        
            $('.sp5').text(' √').css('color','green');
            
            CV = true;
        }
        
        
    })





    //同意服务协议
	var che = document.getElementsByClassName('checkbox')[0];
	
	
	//提交的验证
	$('#register').click(function(){
		
		if(UV && PV && RV && NV && DV && CV){

        	if(che.checked){
        		return true;
        	}

        	alert('您没有同意香满圆服务协议!');
        	return false;
        }
        
        return false;

	})



	//香满圆服务协议弹窗
	function regText()
	{
		$('#overlay').css('display','');
		$('#easyDialogBox').css('display','');
	}

	//关闭香满圆服务协议弹窗
	function closeText()
	{
		$('#overlay').css('display','none');
		$('#easyDialogBox').css('display','none');
	}

</script>
</body>
</html>
