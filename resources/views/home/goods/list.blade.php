<!DOCTYPE html>
<html>
  <head>
  	<title>搜索 |香满圆-西部农产品电商平台,重庆菜园坝水果市场荣誉出品</title>
	


<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/admin/resource/commons/css/style.css">

<link rel="stylesheet" type="text/css" href="/admin/resource/commons/css/easydialog.css">

	<link rel="stylesheet" type="text/css" href="/admin/resource/css/search/type_search.css">
  </head>
  
  <body>
  	
<style>
	/*作为IT界最前端的技术达人，页面上的每一个元素的样式我们都必须较真，就是滚动条我们也不会忽略。
下面我给大家分享一下如何通过CSS来控制滚动条的样式，代码如下：*/
 /*定义滚动条轨道*/
    #J_wkitMsgContent::-webkit-scrollbar-track
    {
        background-color: #FFF;
    }
    /*定义滚动条高宽及背景*/
    #J_wkitMsgContent::-webkit-scrollbar
    {
        width: 5px;
        background-color: rgba(0, 0, 0, 0.34);
    }
    /*定义滚动条*/
    #J_wkitMsgContent::-webkit-scrollbar-thumb
    {
        background-color: #bde9ab;
        border-radius: 5px;
    }
</style>


<div class="dialog-box" id="qian" style="display:none;border:1px solid #358812;">
  	<div id="title" style=" height: 30px; line-height:30px;font-size:13px;color:#444;border-bottom:1px solid #358812;background-image: linear-gradient(to bottom,#D1F5BF 50%,#bde9AB 50%);padding-left:15px;position:relative;background-color:#bde9ab;">
  	<i class="iconfont" style="margin-right:7px;font-size:16px;">&#xe650;</i>杨桃妹妹
  	<i id="close" class="iconfont" style="float:right;margin-right:15px;background:#FFF;color:#358812;font-size:12px;border:1px solid #358812;line-height:normal;padding:1px 2px;border-radius:3px;position:relative;top:7px;cursor: pointer;z-index:4666;">&#xe676;</i></div>
</div>


<nav>
    

<!-- <div>
	<img alt="" src="/admin/resource/commons/images/top.png" style="width: 100%">
</div> -->

 

<div class="wrap-roof">
   <div class="roof">
       <div class="left">
     	
       		
	           <span>您好，欢迎来到香满圆</span>
	           <ul class="login">
	               <a href="user/login" style="color: gray; float: left;"><li>登录</li></a>
	               <a href="user/register" style="color: gray;float: left;"><li>注册</li></a>
	               
	               <div style="clear: both;"></div>
	            </ul>
            
            
        </div>
        <div class="right">
            <ul class="right-list clearfix">
                <li class="net-all"><i class="iconfont">&#xe600;</i>网站导航
                    <div class="net-nav">
                        <ul>
                        	  
                        		 
		                            <li>
		                                <p class="title" style="background:url(https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/category/20171112/%E7%94%9F%E9%B2%9C.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
		 
                            
                            <li>
                                <p class="title" style="background:url() no-repeat;background-postion:-20px;"><a href="activity/findActivity?show=2" style="color: red;">热销活动</a></p>
                               	<p class="title"><a href="activity/findActivity#bing?show=2">冰点价</a></p>
                               	<p class="title"><a href="activity/findActivity#dayday?show=2">限时抢购</a></p>
                               	<p class="title"><a href="activity/findActivity#buy?show=2">买即赠</a></p>
                               	<p class="title"><a href="activity/findActivity#week?show=2">每周特惠</a></p>
                               	<p class="title"><a href="activity/findActivity#all?show=2">整件惠</a></p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="phone-all"><i class="iconfont phone">&#xe634;</i><span class="phone-span">手机香满圆</span>
                    <div class="phone-code">
                        <div class="img-wrap"><img src="/admin/resource/commons/images/B2Cwx.jpg" alt=""><p>扫码关注微信端</p></div>
                        <div class="img-wrap"><img src="/admin/resource/commons/images/B2Cpc.png" alt=""><p>扫码进入移动端</p></div>
                        <!-- <div style="width:130px;margin-top:-5px;"><img src="/admin/resource/commons/images/new-yh.png" style="width:100%;display:block"></div> -->
                    </div>
                </li>
                <li class="collect">收藏夹<i class="iconfont down">&#xe63b;</i>
                    <ul class="collect-ul">
                        <li class="collect-li"><a href="">收藏宝贝</a></li>
                    </ul>
                </li>
                <a href="cart/shoppingCart" style="color: gray;"><li class="details-all"><i class="iconfont cart">&#xe64f;</i>购物车<b id="cartCount"></b>件
                    <div class="shop-details" id="shoppingcart">
                        
                    </div>
                </li></a>
                <a href="center/centerIndex?set=1" style="color: gray;"><li>我的香满圆</li></a>
            </ul>
        </div>
    </div>
</div>

    <div class="outer" id="top">
        <div class="header">
        	<a href="index">
            	<div class="logo" style="cursor: pointer;"><img src="/static/picture/logo.png"/></div>
            </a>
            <div class="max-search">
                <div class="search">
                    <input type="text" id="searchContent">
                    <button type="button" id="search">搜索</button>
                    <div class="search-box" id="searchList" style="display:none;">
                    	<!-- <ul>
                    		<li>dajidjaijdsaoijiad</li>
                    	</ul>
                    	<div class="all-li">总记录数 : <span style="color:red">4564</span></div> -->
                    </div>
                </div>
                <div class="kis"><span>热门搜索 : </span>
                	
	                	<a href="elastic/goods?goodsName=蓝莓">蓝莓</a>
                	
	                	<a href="elastic/goods?goodsName=芒果">芒果</a>
                	
	                	<a href="elastic/goods?goodsName=奇异果">奇异果</a>
                	
	                	<a href="elastic/goods?goodsName=奶粉">奶粉</a>
                	
	                	<a href="elastic/goods?goodsName=松子">松子</a>
                	
	               <!--  <a href="elastic/goods?goodsName=脐橙">脐橙</a>
	                <a href="elastic/goods?goodsName=福临门">福临门</a>
	                <a href="elastic/goods?goodsName=葡萄酒">葡萄酒</a>
	                <a href="elastic/goods?goodsName=洗衣液">洗衣液</a> -->
	                <a href="elastic/goods?goodsName=" class="add-dominant-color">所有商品</a>
                </div>
            </div>
            <div class="tell"><img src="/admin/resource/commons/images/400.png"/></div>
        </div>
    </div>
</nav>






<div class="dNav" style="background-color: rgb(53, 137, 18);">
	<div class="list">
		<div class="Lnav">
			<ul class="list-ul clearfix" style="background-color: rgb(53, 137, 18); color: rgb(255, 255, 255);">
				<li class="front list-li" style="background-color: rgb(45, 119, 14);">
					<span class="all"><i class="iconfont" style="font-weight:100;display: none;" id="one"></i><i class="iconfont" id="two" style=""></i>搜索分类商品</span>
					<ul class="classify-ul classify-ul-all" style="display: none;">

							@foreach($types as $type)

						 		@if($type->tid == $ding)
									<li  >
						 		@else
									<li class="classify-li">
						 		@endif 
								<div class="publiccategory" value="124"><i class="icon icon1"  no-repeat;"></i><a style="color:white;"  href="">{{$type->tname}}</a></div>
									<div class="meau" style="display: none;">
										<div class="overlay"></div>
									</div>
								</li>
							@endforeach
			
					</ul>
				</li>
				<li class="nav-section">
					<span class="right">&gt;</span>
					
						<ul class="clearfix">
							<li class="list-li btn menu cross" style="color: rgb(214, 218, 29); background: rgb(53, 137, 18);"><a href="index?show=1">首页</a></li>
							<li class="list-li btn menu" style="background: rgb(53, 137, 18);"><a href="activity/findActivity?show=2">开抢啦</a></li>
							<li class="list-li btn menu" style="background: rgba(104, 208, 61, 0.5);"><a href="category/findCategoryGoods?id=180">跨境专区</a></li>
							<!-- <li class="list-li btn menu" onclick="window.location='fruits/index?show=4'">果琳专区</li> -->
							<li class="list-li btn menu" style="background: rgb(53, 137, 18);"><a href="elastic/goods?goodsName=&amp;mainLand=0&amp;show=3">全国配送</a></li>
							<li class="list-li btn menu" style="background: rgb(53, 137, 18);"><a href="point/pointStore?show=6">积分商城</a></li>
							<li class="list-li btn menu" style="background: rgb(53, 137, 18);"><a href="news/zt/20171118secondpage">企业定制</a></li>
							<li class="list-li btn menu" style="background: rgb(53, 137, 18);"><a href="news/zt/aixinshop">爱心购</a></li>
						</ul>
					
					
					
					
					
					
					
					
				</li>
			</ul>
			<a href="center/toShopCard?pageIndex=1&amp;set=10&amp;status=3">
				<div class="rr" hidden="hidden" id="imageShow"><img src="/admin/resource/commons/images/rr.png"></div>
			</a>
		</div>
	</div>
</div>




 <!--内容部分-->
<div class="container container-white">
    <div class="list-content recomed w-1250">

    <input type="hidden" value="138" id="goodsName" />
    <input type="hidden" value="368" id="word" />

    <div class="list-content screen-all w-1250">
        <div class="search-content">
            <span>排序 : </span>
            <div class="screen">
                <button type="button" class="screen-btn active" value="0">综合 <i class="iconfont">&#xe649;</i></button>
                <button type="button" class="screen-btn" value="1">人气 <i class="iconfont">&#xe649;</i></button>
                <button type="button" class="screen-btn" value="2">销量 <i class="iconfont">&#xe649;</i></button>
                <button type="button" class="screen-btn select-price" value="3">价格 <i class="iconfont top">&#xe629;</i> <i class="iconfont bottom">&#xe603;</i></button>
                <button type="button" class="screen-btn" value="4">新品 <i class="iconfont">&#xe649;</i></button>
            </div>
            <div class="area"><span>配送范围 : </span> <button type="button" class="screen-btn" value="1">重庆主城</button> <button type="button" class="screen-btn" value="0">全国配送</button></div>
           
        </div>
        <div class="shop-content-list">
            <ul class="clearfix shop-con" id="goods">
            	<!-- 存放商品信息 -->


       	@foreach($goods as $good)
       		 <a href="/home/goods/{{$good->id}}">
			<li class="" style="height: 400px; width: 225px;">
				
		     	<div class="">

					<img alt="" style="height: 200px; width: 200px;" src="{{$good->img}}" class="shop-img">
        
		    	</div>
		     <div class="shop-price"><span class="price">¥ {{$good->price}}元</span>
			
		     <div class="shop-name" title="{{$good->gname}}">{{$good->gname}}</div>



		     <div class="item-last">
		     	<span class="saled">累计成交
		     		 <span><?php echo rand(200,500);?>笔</span>

		      </span>
		     
		    </div>

		 </li>
		 </a>
		@endforeach
		
            </ul>
            <div id="biuuu_city" style="float:right"></div>
            
        </div>
    </div>
    <input type="hidden" value="5" id="countPage"/>
    <div class="list-content add-bg w-1250">
        <div class="search2">
            <input type="text" id="sousuoContent">
            <button type="button" id="sousuo">搜索</button>
        </div>
    </div>
</div>


<div class="floatleft">
	<ul class="floatleft-ul">
		<li class="floatleft-li floatleft-lis cart"><span class="cart"><img src="/admin/resource/commons/images/left-cart.jpg"/></span><p onclick="window.location='/cart/shoppingCart'" id="cartnum">购物车0</p>
			<ul class="cart-ul" id="downCart">
				
			</ul>
		</li>
		<li class="floatleft-li collects-li"><span class="floatleft-img"><img onclick="window.location='/center/toCollect?pageIndex=1&set=14&category=null'" src="/admin/resource/commons/images/sc.png"/></span>
			<div class="collects">我的收藏</div>
		</li>
		<li class="floatleft-li my-xmy"><span class="floatleft-img"><img onclick="window.location='/center/centerIndex?set=1'" src="/admin/resource/commons/images/wd.png"/></span>
			<div class="my-xmys">我的香满圆</div>
		</li>
		<a href="center/toShopCard?pageIndex=1&set=10&status=3">
			<li class="floatleft-li recharge"><span class="floatleft-img"><img src="/admin/resource/commons/images/c.png"/></span>
				<div class="recharges">立即充值</div>
			</li>
		</a>
		<li class="floatleft-li QQ" id="qianniu"><span class="floatleft-img"><img src="/admin/resource/commons/images/information.png"/></span>
			<div class="QQs">在线客服</div>
		</li>
	</ul>
	<ul class="floatleft-bottom-ul">
		<li class="floatleft-bottom-li hot-line"><span class="floatleft-img"><img src="/admin/resource/commons/images/dh.jpg"/></span>
			<div class="hot-lines"><img src="/admin/resource/commons/images/tb_ipone_number.jpg"/></div>
		</li>
		<li class="floatleft-bottom-li ewm">
			<span class="floatleft-img"><img src="/admin/resource/commons/images/ewm.jpg"/></span>
			<div class="pop-up">
				<div class="pop-up-over"></div>
				<div class="app">
					<div class="img"><img src="/admin/resource/commons/images/B2Cwx.jpg"/></div><p class="text">扫码关注微信端<br/>
				</div>
				<div class="app yd">
					<div class="img"><img src="/admin/resource/commons/images/B2Cpc.png"/></div><p class="text">扫码进入移动端</p>
				</div>
			</div>
		</li>
		<li class="floatleft-bottom-li return-top"><span><i class="iconfont">&#xe629;</i></span><a href="javascript:scroll(0,0)" style="text-decoration:none;"><p style="color: white;">返回顶部</p></a></li>
	</ul>
</div>


<div class="add-bg-w sec-control">
<div class="base">
    <div class="virtue">
        <ul class="virtue-ul">
            <li class="virtue-li"><div class="xta"><p class="tit">香满圆</p><p class="details">100%保证商品新鲜度，及时送达顾客手中</p></div></li>
            <li class="virtue-li"><div class="xtb"><p class="tit">所有商家经官方认证</p><p class="details">官方认证，所有商家具有合法个体经营身份或企业资质</p></div></li>
            <li class="virtue-li remove"><div class="xtc"><p class="tit">网站担保交易</p><p class="details">网站官方担保交易，收到商品后再结算，有问题随时投诉</p></div></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
    <div class="detailss">
        <ul class="detailss-ul">
        	
	            <li class="detailss-li">
	           		<p class="tit">新手指南</p>
	           		
	           			
	           				<a href="news/index?ter=0&chd=0" style="text-decoration:none;" class="detailss-lia"><p>购物流程</p></a>
	           			
	           				<a href="news/index?ter=0&chd=1" style="text-decoration:none;" class="detailss-lia"><p>免费注册</p></a>
	           			
	           				<a href="news/index?ter=0&chd=2" style="text-decoration:none;" class="detailss-lia"><p>积分说明</p></a>
	           			
	           				<a href="news/index?ter=0&chd=3" style="text-decoration:none;" class="detailss-lia"><p>热销活动</p></a>
	           			
	           				<a href="news/index?ter=0&chd=4" style="text-decoration:none;" class="detailss-lia"><p>帮助中心</p></a>
	           			
	           		
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">支付方式</p>
	           		
	           		
	           			
	           				<a href="news/index?ter=1&chd=0" style="text-decoration:none;" class="detailss-lia"><p>货到付款</p></a>
	           			
	           				<a href="news/index?ter=1&chd=1" style="text-decoration:none;" class="detailss-lia"><p>微信支付</p></a>
	           			
	           				<a href="news/index?ter=1&chd=2" style="text-decoration:none;" class="detailss-lia"><p>网银支付</p></a>
	           			
	           				<a href="news/index?ter=1&chd=3" style="text-decoration:none;" class="detailss-lia"><p>购物卡支付</p></a>
	           			
	           				<a href="news/index?ter=1&chd=4" style="text-decoration:none;" class="detailss-lia"><p>支付宝支付</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">配送方式</p>
	           		
	           		
	           			
	           				<a href="news/index?ter=2&chd=0" style="text-decoration:none;" class="detailss-lia"><p>免运费政策</p></a>
	           			
	           				<a href="news/index?ter=2&chd=1" style="text-decoration:none;" class="detailss-lia"><p>配送服务及承诺</p></a>
	           			
	           				<a href="news/index?ter=2&chd=2" style="text-decoration:none;" class="detailss-lia"><p>验货签收</p></a>
	           			
	           				<a href="news/index?ter=2&chd=3" style="text-decoration:none;" class="detailss-lia"><p>物流查询</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">售后服务</p>
	           		
	           		
	           			
	           				<a href="news/index?ter=3&chd=0" style="text-decoration:none;" class="detailss-lia"><p>退换货流程</p></a>
	           			
	           				<a href="news/index?ter=3&chd=1" style="text-decoration:none;" class="detailss-lia"><p>退换货政策</p></a>
	           			
	           				<a href="news/index?ter=3&chd=2" style="text-decoration:none;" class="detailss-lia"><p>订单取消</p></a>
	           			
	           				<a href="news/index?ter=3&chd=3" style="text-decoration:none;" class="detailss-lia"><p>退款说明</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">香满圆</p>
	           		
	           		
	           			
	           				<a href="news/index?ter=4&chd=0" style="text-decoration:none;" class="detailss-lia"><p>公司简介</p></a>
	           			
	           				<a href="news/index?ter=4&chd=1" style="text-decoration:none;" class="detailss-lia"><p>最新公告</p></a>
	           			
	           				<a href="news/index?ter=4&chd=2" style="text-decoration:none;" class="detailss-lia"><p>联系客服</p></a>
	           			
	           		
	            </li>
            
            <li class="detailss-li last-li clearfix">
                <p class="img-wrapp first"><img src="/admin/resource/commons/images/B2Cwx.jpg"><span class="color-green text-center">扫码关注微信端</span></p>
                <p class="img-wrapp"><img src="/admin/resource/commons/images/B2Cpc.png"><span class="color-green">扫码进入移动端</span></p>
            </li>
            <div style="clear: both;"></div>
        </ul>
        <!-- <div class="logo-wrap" id="downShow" hidden="hidden">
            <img src="/admin/resource/commons/images/logopic.png" alt="">
        </div> -->
    </div>

</div>
</div>
<footer>
    <div class="footer-auto">
<!--         <p>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=493">关于我们</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=506">合作伙伴</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=507">营销中心</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=508">诚征英才</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=509">联系我们</a>
        </p >-->
        
        
		 <p>香满圆旗下：重庆菜园坝农产品市场集群（线下） |  B2C电商平台 、 社区超市订购平台（线上）</p>
		 <p class="mt10">Copyright  2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司</p>
		 <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
		 <p class="mt10"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a></p>
        
        
       <!--  <p class="mt10">Copyright © 2009-2013 网上购物  All Rights Reserved 重庆香满圆农产品有限公司</p>
        <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
        <p class="mt10"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a> </p> -->
    </div>
    <div class="beian">
        <ul class="beian-ul">
            <a href="http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean1.png"/></li></a>
            <a href="" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean2.png"/></li></a>
            <a href="http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean3.png"/></li></a>
            <a href="http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean4.png"/></li></a>
            <a href="http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean5.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div>  
</footer>

<script type="text/javascript" src="/admin/resource/commons/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/admin/resource/commons/js/public.js"></script>

<script type="text/javascript" src="/admin/resource/commons/js/easydialog.min.js"></script>

<script type="text/javascript" src="/admin/resource/commons/js/laypage.js"></script>

<!-- 搜索js -->
<script type="text/javascript" src="/admin/resource/js/common/goods_search.js"></script>




<div class="dialog-box" id="qian" style="display:none;border:1px solid #358812;">
  	<div id="title" style=" height: 30px; line-height:30px;font-size:13px;color:#444;border-bottom:1px solid #358812;background-image: linear-gradient(to bottom,#D1F5BF 50%,#bde9AB 50%);padding-left:15px;position:relative;background-color:#bde9ab;">
  	<i class="iconfont" style="margin-right:7px;font-size:16px;">&#xe650;</i>杨桃妹妹
  	<i id="close" class="iconfont" style="float:right;margin-right:15px;background:#FFF;color:#358812;font-size:12px;border:1px solid #358812;line-height:normal;padding:1px 2px;border-radius:3px;position:relative;top:7px;cursor: pointer;">&#xe676;</i></div>
</div>

  <script type="text/javascript" src="/admin/resource/js/common/goods_search.js"></script>
  <script type="text/javascript" src="/admin/resource/js/common/menu.js"></script>
  <script type="text/javascript" src="/admin/resource/js/search/type_search.js"></script>
  </body>
</html>
