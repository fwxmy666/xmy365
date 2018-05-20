<!DOCTYPE html>
<html>
  <head>
  	<title>{{$title}}</title>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/admin/resource/commons/css/style.css">

<link rel="stylesheet" type="text/css" href="/admin/resource/commons/css/easydialog.css">

	<link rel="stylesheet" type="text/css" href="/admin/resource/css/goods/goods_detail.css">
	<!-- <link rel="stylesheet" href="/admin/resource/commons/css/main.css" /> -->
	<link rel="stylesheet" href="/admin/resource/commons/css/cartscroll.css" />
	<link rel="stylesheet" href="/admin/resource/commons/css/idangerous.swiper2.7.6.css" />
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
	<img alt="" src="resource/commons/images/top.png" style="width: 100%">
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
                
                <li class="phone-all"><i class="iconfont phone">&#xe634;</i><span class="phone-span">手机香满圆</span>
                    <div class="phone-code">
                        <div class="img-wrap"><img src="/admin/resource/commons/images/B2Cwx.jpg" alt=""><p>扫码关注微信端</p></div>
                        <div class="img-wrap"><img src="/admin/resource/commons/images/B2Cpc.png" alt=""><p>扫码进入移动端</p></div>
                        <!-- <div style="width:130px;margin-top:-5px;"><img src="resource/commons/images/new-yh.png" style="width:100%;display:block"></div> -->
                    </div>
                </li>
                <li class="collect">收藏夹<i class="iconfont down">&#xe63b;</i>
                    <ul class="collect-ul">
                        <li class="collect-li"><a href="center/toCollect?pageIndex=1&set=14&category=null">收藏宝贝</a></li>
                    </ul>
                </li>
                <a href="cart/shoppingCart" style="color: gray;"><li class="details-all"><i class="iconfont cart">&#xe64f;</i>购物车<b id="cartCount"></b>件
                    <div class="shop-details" id="shoppingcart">
                        
                    </div>
                </li></a>
                <a href="" style="color: gray;"><li>我的香满圆</li></a>
                <div class="my-xmys"><a href="/">首页</a> </div>
            </ul>
        </div>
    </div>
</div>

    <div class="outer" id="top">
        <div class="header">
        	<a href="index">
            	<div class="logo" style="cursor: pointer;"><img src="/admin/resource/commons/images/logo.png"/></div>
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






<div class="dNav">
	<div class="list">
		<div class="Lnav">
			<ul class="list-ul clearfix">
				<li class="front list-li">
					<span class="all"><i class="iconfont" style="font-weight:100;display: none;" id="one">&#xe600;</i><i class="iconfont"  id="two" style="display: none;">&#xe60d;</i>全部商品分类</span>
				<ul class="classify-ul classify-ul-all" style="">

						 	@foreach($types as $v)
								<li class="classify-li">


									<div class="">
										<a href="" style="color:white;">{{$v->tname}}</a>
									
								
									<div class="meau" style="display: none;">
										<div class="overlay"></div>
										
										<ul class="meau-content clearfix" style="width: 271px;">
												
												@foreach($v->zi as $vv)

				                                	<li class="meau-item">
				                                		<a href="" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="" alt="">{{$vv->tname}}</div>
				                                		</a>
				                                	

				                                		@foreach($vv->zi as $vvv)

														<div class="meau-item-list">
															
				                                				<a href="">{{$vvv->tname}}</a>
				                               				
				                                			
				                               				
														</div>
														@endforeach
														
				                                	</li>
				                                @endforeach
    
											
			                                
										</ul>
										
										<a href="" class="all-thetype"></a>
										
									</div>
									</div>
							
								</li>
							@endforeach



				</ul>
				</li>
				<li class="nav-section">
					<span class="right">></span>
					
						<ul class="clearfix">
							<li class="list-li btn menu cross"><a href="index?show=1">首页</a></li>
							<li class="list-li btn menu"><a href="activity/findActivity?show=2">开抢啦</a></li>
							<li class="list-li btn menu"><a href="category/findCategoryGoods?id=180">跨境专区</a></li>
							<!-- <li class="list-li btn menu" onclick="window.location='fruits/index?show=4'">果琳专区</li> -->
							<li class="list-li btn menu"><a href="elastic/goods?goodsName=&mainLand=0&show=3">全国配送</a></li>
							<li class="list-li btn menu"><a href="point/pointStore?show=6">积分商城</a></li>
							<li class="list-li btn menu"><a href="news/zt/20171118secondpage">企业定制</a></li>
							<li class="list-li btn menu"><a href="news/zt/aixinshop">爱心购</a></li>
						</ul>
					
					
				</li>
			</ul>
			<a href="center/toShopCard?pageIndex=1&set=10&status=3">
				<div class="rr" hidden="hidden" id="imageShow"><img src="/static/picture/rr.png"/></div>
			</a>
		</div>
	</div>
</div>






 	<!--内容部分-->
<div class="container-white">
	<input type="text" value="2018/05/18 16:04:09" style="display: none;" id="daoji"/>
	<input type="hidden" id="isLogin" value="1">
	<input type="hidden" id="actiId" value="0"/>
	<input type="hidden" id="typeId" value="0"/> <!-- 活动类型 -->
	<input type="hidden" id="isby" value=""/>
	<input type="hidden" id="isPutway" value="0">
	<input type="hidden" id="activityTypeId" value=""><!--限时限量活动类型  判断如何倒计时的 -->
	<div class="content w-1250">
		<div class="head-top">
			<a href="/" style="color:black;"><span class="" style="cursor: pointer;">首页</span></a>>>
			<a href="" style="color:black;"><span class="generalities" style="cursor: pointer;">详情页</span></a>
			
		</div>
		<div class="chunk">
			<div class="chunk-left">
				<div class="fdj-wrap">
					<div class="preview">
						<div class="state-img">
							<!-- 商品水印图片 -->
		
						</div>
						<div id="vertical" class="bigImg" >

							
							<img src="{{$data}}" alt=""   id="midimg"  />

							<div style="display:none;" id="winSelector"></div>

						</div><!--bigImg end-->

						<div class="smallImg">

							<div class="scrollbutton smallImgUp disabled"></div>

							<div id="imageMenu">

								<ul>
								@foreach($gimgs as $v)
										
										<li><img src="{{$v->gimgs}}" alt="{{$v->gimgs}}" /></li>
								@endforeach
									

								</ul>

							</div>

							<div class="scrollbutton smallImgDown"></div>

						</div><!--smallImg end-->

						<div id="bigView" style="display:none;"><img width="800" height="800" alt="" src="" /></div>

					</div>
					
				</div>
				<div class="clearfix or-shop"><span id="bookMark" style="cursor: pointer; color: #999;" value="318" tname=",进口水果,"><i class="iconfont">&#xe88b;</i> 收藏商品<span></span></span><span class="pull-right"></span></div>
			</div>
			<div class="chunk-center">
				<h2 class="titled" style="position:relative">
					<span id="goodsName" title="{{$res->gname}}">{{$res->gname}}</span>
					
				</h2>
				<div class="pMsg">
					<ul class="clearfix">
						<li>
						<p style="font-size: 17px;">
							<span>销售价</span>￥
							<a id="activityPrice">
								
								{{$res->price}}
							</a>元
						</p>
						</li>
						
					</ul>
				</div>
				<div class="xsum">
					<ul class="clearfix">
						<li>
							<p class="tit">
							<?php echo rand(6000,9999)?>
							
							</p>
							<p>累计销量</p>
						</li>
						<li>
							<p class="tit">
								<?php echo rand(1000,6500)?>
								
							</p>
							<p>累计评价</p>
						<div class="xinD"><span style="width:98%"></span></div>
						</li>
						<li class="end">
							<p class="tit"><?php echo rand(1,32)?></p><p>送香满圆积分</p>
						</li>
					</ul>
				</div>
				<div class="qss">
					<p><span class="tit">商品编码</span><span><?php echo rand(111111111,999999999); ?></span></p>
					<p><span class="tit">商家</span><span><a href="">渝之果   </a></span></p>

					<p><span class="tit">配送范围</span>
					<span style="color:red;margin-left:-3px;">全国配送</span></p>
					<p><span class="tit">库存量</span><span><a href="">{{$res->stock}}</a></span></p>
					
					
							<div class="mt5 spec">
								<span class="tit">商品规格</span>
									
									
									<div class="etalon-wrap">
									
										<a href="" class="etalon cur">1个(约<?php echo rand(1,5)?>kg)</a>
									
									
									
									
									</div>
									
							</div>
					

					
				</div>
				<div class="buysum clearfix"><span class="tit">购买数量</span><div class="gw_num"><em class="jian">-</em><input id="goodsNum" type="text" value="1" class="num"/><em class="add"><img src="/admin/resource/commons/images/em-add.png" style="width:25px;height:25px;" /></em></div></div>
				<div class="ml20 mt15"><a href="javascript:void(0);" class="btn btn-success add-cart" id="goodsId" value="318"><i class="icon icon12"></i>加入购物车</a><a href="javascript:void(0);" class="btn btn-danger buy-now ml10" id="shopping">立即购买</a></div>
			</div>
			
			<!-- 看了又看 -->
			<div class="chunk-right">
				<div class="seeAgin">
					<div class="title">
						<u>新品推荐</u>
					</div>

					<ul class="buyz mt15">
						@foreach($good as $kkk)
						
						<a href="/home/goods/{{$kkk->id}}">
						<div>
							<img alt="" style="height: 80px;height: 100px;" src="{{$kkk->img}}" class="shop-img">
						</div>
							
		        
								<em>￥{{$kkk->price}}</em></p>
								<p class="tit">{{$kkk->gname}}</p></li>
						</a>
						@endforeach
						
					</ul>
				</div>
			</div>
		</div>
		<div class="content-details w-1250">
			<div class="clearfix">
				<div class="details-left">
					<div class="chunk-classify1">
						<div class="head-titled">相关品类</div>
						<div class="del">
							
								<a href="" style="text-decoration: none;">国产水果</a>

							
						</div>
					</div>			
					<div class="chunk-classify1">
						<div class="head-titled">水果销售</div>
						<ul class="list-ul">
							
				
						@foreach($goods as $abc)
						
								<li class="list-li">
									<div class="img">
										<img alt="" src="{{$abc->img}}" class="shop-img">
									</div>
										<p class="tit">{{$abc->gname}}1个/盒(约<?php echo rand(1,20); ?>)</p>
										<p class="price">¥ {{$abc->price}}</p>

										<p class="tit">累计销量：<?php echo rand(10000,65000)?>笔</p>
										
								</li>
							
						@endforeach
							
						</ul>
					</div>
					
				</div>
				<div class="details-right">
					<div class="tab-navv">
						<ul>
							<li class="active">商品详情</li>
							<li onclick="getComment(318,1)">商品简介</li>
							<li onclick="getDeal(318,1)">最新成交记录</li>
						</ul>
					</div>
					<div class="tab-contentt">
						<div>
							<ul class="tab-con-top clearfix">
								
								<li style="margin-right:25px;">地址 : <span>菜园坝水果市场内香满圆</span></li>
								<li style="margin-right:40px;">商品 : <span>{{$res->gname}}</span></li>
								<li>包装方式 : <span>包装</span></li>
								<li style="margin-right:40px;">存储方式 : <span>冷藏</span></li>
								<li>商家 : <span>渝之果</span></li>
							</ul>

							@foreach($gimg as $two)
							<div>

								<p>
									<img style="width: 710px;height:535px;" src="{{$two->gimg}}"/>
								</p>
									<p>
										<br/>
									</p>

							</div>	
							@endforeach	
						</div>
						
						
					</div>
				</div>

			</div>
			
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
			<div class="my-xmys"><a href="/">首页</a> </div>
		</li>
		<li class="floatleft-li my-xmy"><span class="floatleft-img"><img onclick="window.location='/center/centerIndex?set=1'" src="/admin/resource/commons/images/wd.png"/></span>
			<div class="my-xmys">我的香满圆</div>
		</li>

		
		
		<li class="floatleft-li QQ" id="qianniu"><span class="floatleft-img"><img src="/admin/resource/commons/images/information.png"/></span>
			<div class="QQs">在线客服</div>
		</li>
	</ul>
	<ul class="floatleft-bottom-ul">
		<li class="floatleft-bottom-li hot-line"><span class="floatleft-img"><img src="/admin/resource/commons/images/dh.jpg"/></span>
			<div class="hot-lines"><img src="/admin/resource/commons/images/tb_ipone_number.jpg"/></div>
		</li>
		<li class="floatleft-bottom-li ewm">
			
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
            <img src="resource/commons/images/logopic.png" alt="">
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
            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="/admin/resource/commons/images/biean2.png"/></li></a>
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

  
<!--2017-10-31 新增顶部浮现搜索-->
<div class="floattop fadein">
	<div class="floattop-overlay"></div>
	<div class="floattop-content clearfix">
		<div class="floattop-logo">
			<img src="/admin/resource/commons/images/minlogo.png" alt="">
			
		</div>
		<div class="floattop-search">
			<input type="text" id="topSearchContent">
			<button type="submit" id="topSearch">搜索</button>
		</div>
		<div class="commidi-icon"><img src="/admin/resource/commons/images/ad-1.png" alt=""></div>
	</div>
</div>
<!--2017-10-31 新增顶部浮现搜索end-->
  <script type="text/javascript" src="/admin/resource/js/common/goods_search.js"></script>
  <!-- <script type="text/javascript" src="/admin/resource/js/goods/goods_detail.js-v=20182231540"></script> -->
   <script type="text/javascript" src="/admin/resource/commons/js/cartscroll.js"></script>
   <script type="text/javascript" src="/admin/resource/commons/js/idangerous.swiper2.7.6.min.js"></script>
  <script src="/admin/resource/js/common/menu.js"></script>
  <script type="text/javascript">
  
  console.log("0")
	var isLogin = "1" ;
 	//收藏商品
	$("#bookMark").click(function(){
		if (isLogin == 1) {
			popMsg("登录过后才能收藏商品！");
			return ;
		}
		var goodsId = $(this).attr("value");//商品id
		var categoryName = $(this).attr("tname");//商品分类名称
		var activityType = $("#typeId").val(); //活动类型
		var activityId = $("#actiId").val(); //活动id
		$.ajax({
			url:"cart/addCollection",
			type:"post",
			data:{"goodsId":goodsId,"categoryName":categoryName,"activityType":activityType,"activityId":activityId},
			dataType: "JSON",
			success:function (data) {
				if (data == 1) {
					popMsg("收藏夹已存在该商品！");
				} else {
					$("#bookMark").css("color","#358912");
					popMsg("已加入收藏夹！");
				}
			}
		})
		
	})
	function popMsg(Msg){
		var btnFn = function(){
			easyDialog.close();
		}
		easyDialog.open({
			  container : {
			    header : '提示',
			    content : Msg,
			    yesFn : btnFn
			  }
		});
	}
	$(function(){
		var mySwiper = new Swiper ('.swiper-container', {

            direction: 'horizontal',
            height: 300,//你的slide高度
            width : 720,
            loop: true,
            slidesPerView : 4,
            simulateTouch : false,

            // 如果需要分页器
            //pagination: '.swiper-pagination',

            // 如果需要前进后退按钮

            // 如果需要滚动条
            //scrollbar: '.swiper-scrollbar',
        })
        $('.before').click(function(){
            mySwiper.swipePrev();
        })
        $('.next').click(function(){
            mySwiper.swipeNext();
        });
        /* 
        $(".smallImgDown").click(function(){
        	if($(this).prev().find("#imageMenu li").size()<6){
        		alert("s")
        	}
        }) */
        
        var goodsname="[渝之果] 都乐菲律宾菠萝 1个/盒(约1.25kg)";
        var guige=goodsname.substr(goodsname.lastIndexOf(' '),goodsname.length);
        $("#guige").text(guige);
	})
  </script>
  </body>
</html>
