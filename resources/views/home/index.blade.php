<!DOCTYPE html>
<html>
  <head>
  	<title>{{$title}}</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/static/css/style.css">

<link rel="stylesheet" type="text/css" href="/static/css/easydialog.css">

	<link rel="stylesheet" type="text/css" href="/static/css/index.css">
  </head>
  <body>
  		
			<div class="outtop">
				<div class="close-icons"><i class="iconfont">&#xe676;</i></div>
				<a href="http://www.xmy365.com/news/zt/20180422zhuzt?a"><img src="/static/picture/1-1.png" alt=""></a>
			</div>
		
  	
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
	<img alt="" src="/static/picture/top.png" style="width: 100%">
</div> -->
<?php 
	
	$users = DB::table('homeusers')->where('uid',session('homeuid'))->first();
	
?>
 

<div class="wrap-roof">
   <div class="roof">
       <div class="left">
  
	           <ul class="login">
				   @if($users)
				   <li>您好 <a href=""><strong>{{$users->username}}</strong></a>，欢迎来到香满圆</li>
	               <li><a href="/home/signout" style="color: gray;">退出登录</a></li>
				   @else
				   <span>您好，欢迎来到香满圆</span>
	               <a href="/home/login" style="color: gray; float: left;"><li>登录</li></a>
	               <a href="/home/register" style="color: gray;float: left;"><li>注册</li></a>
	               @endif
	               <div style="clear: both;"></div>
	            </ul>
            
            
        </div>
       
    </div>
</div>

    <div class="outer" id="top">
        <div class="header">
        	<a href="index">
            	<div class="logo" style="cursor: pointer;"><img src="static/picture/logo.png"/></div>
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
            <div class="tell"><img src="static/picture/400.png"/></div>
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
										<a href="/home/list/{{$v->tid}}" style="color:white;">{{$v->tname}}</a>
									
								
									<div class="meau" style="display: none;">
										<div class="overlay"></div>
										
										<ul class="meau-content clearfix" style="width: 271px;">
												
												@foreach($v->zi as $vv)

				                                	<li class="meau-item">
				                                		<a href="/home/list/{{$vv->tid}}" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="" alt="">{{$vv->tname}}</div>
				                                		</a>
				                                	

				                                		@foreach($vv->zi as $vvv)

														<div class="meau-item-list">
															
				                                				<a href="/home/list/{{$vvv->tid}}">{{$vvv->tname}}</a>
				                               				
				                                			
				                               				
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
				<div class="rr" hidden="hidden" id="imageShow"><img src="static/picture/rr.png"/></div>
			</a>
		</div>
	</div>
</div>




	
	<!--全屏滚动-->
<div class="ad" style="min-width: auto;">
	<div class="b-img">
	
	    <a href="http://www.xmy365.com/news/zt/20180422zhuzt?a" style="background:url(static/images/banner-20180426-01.png) center no-repeat;"></a>
	     
	
	    <a href="http://www.xmy365.com/news/zt/20180422yingtao" style="background:url(static/images/banner1.jpg) center no-repeat;"></a>
	     
	
	    <a href="http://www.xmy365.com/news/zt/20180422caicaisee" style="background:url(static/images/banner-20180426-02.png) center no-repeat;"></a>
	     
	
	    <a href="http://www.xmy365.com/news/zt/20180422zhuzt?c" style="background:url(static/images/banner-20180426-03.png) center no-repeat;"></a>
	     
	
	    
	     <a href="goods/8346/0/0" style="background:url(static/images/pc-banner-20180504-8346-1.png) center no-repeat;"></a>
	
	    
	     <a href="goods/8344/0/0" style="background:url(static/images/pc-banner-20180504-8344-2.png) center no-repeat;"></a>
	
	    
	     <a href="goods/4187/0/0" style="background:url(static/images/pc-banner-20180504-4187-3.png) center no-repeat;"></a>
	
	    
	     <a href="goods/6797/0/0" style="background:url(static/images/pc-banner-20180504-6797-4.png) center no-repeat;"></a>
	
	    
	     <a href="goods/5925/0/0" style="background:url(static/images/pc-banner-20180504-5925-5.png) center no-repeat;"></a>
	
	</div>
	<div class="b-list" style="margin-top:360px;padding-top:0;"></div>
	<!--<a class="bar-left" href="#"><em></em></a><a class="bar-right" href="#"><em></em></a>-->
</div>
<!--end 全屏滚动-->
 <!--内容部分-->
<div class="container" style="margin-bottom:0px;background:#EFEFEF url('static/images/page-bg.png') 50.2% no-repeat fixed;padding-top:25px;">
	<div class="tab-nav w-1250">
		<ul>
			<li class="active">冰点价</li>
			<li>天天特价</li>
			<li>买即赠</li>
			<li>每周特价</li>
			<li>热卖商品</li>
			<li>新品上市</li>
			<li>热销好货</li>
		</ul>
	</div>
	<input type="text" value="2018/05/07 11:59:49" style="display: none;" id="daoji"/>
	<div class="tab-content clearfix w-1250">
		<!-- 冰点价 -->
		<div class="point-all" style="height:330px;">
			<div class="time-esc"><img src="static/picture/ico-kql-mx@2x.png" alt="" class="time-icon"><span class="cost" style="color: black;">距离活动结束还有 : <span id="freeActivityTime"></span><span class="date-cost">(每日<span>12:00</span>-次日<span>12:00</span>开抢)</span></div>
			<ul class="rob-list">
				
					
							<li class="list-item active">
							 
							<a href="goods/8223/2/35?time=5月6日&url=">
						
								<span class="date-img">
									<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月6日</p><p>12:00</p></div>
								</span>
								<div class="img-wrap">
									
        





<img alt="" src="/static/picture/050400249801-001.jpg" class="shop-img">
        
									
									
								</div>
								<div class="rob-last">
									<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
								</div>
								<div class="shop-name" title="[聚品坊] 爱莲巧榛子花生味饼干 190g/袋">[聚品坊] 爱莲巧榛子花生味饼干 190g/袋</div>
								<div class="rob-last">
									 
									<button type="button" class="btn-rob-g re">立即购买</button>
									
									 
								</div>
							 
							</a>
							
							</li>
					
					
				
					
							<li class="list-item active">
							 
							<a href="goods/8228/2/35?time=5月6日&url=">
						
								<span class="date-img">
									<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月6日</p><p>12:00</p></div>
								</span>
								<div class="img-wrap">
									
        





<img alt="" src="/static/picture/010105000201-001.jpg" class="shop-img">
        
									
									
								</div>
								<div class="rob-last">
									<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
								</div>
								<div class="shop-name" title="[润佳果业] 海南大香蕉 2支/盒(约200g)">[润佳果业] 海南大香蕉 2支/盒(约200g)</div>
								<div class="rob-last">
									 
									<button type="button" class="btn-rob-g re">立即购买</button>
									
									 
								</div>
							 
							</a>
							
							</li>
					
					
				
					
					
							<li class="list-item">
								
									<span class="date-img">
										<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月7日</p><p>12:00</p></div>
									</span>
									<div class="img-wrap">
										
									
        





<img alt="" src="/static/picture/010104000701-001.jpg" class="shop-img">
        
									
										<img src="static/picture/xqyg.png" alt="" class="xqyg">
									</div>
									<div class="rob-last">
										<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
									</div>
									<div class="shop-name" title="[刘智力] 陕西徐香猕猴桃 6个/盒(约600g)">[刘智力] 陕西徐香猕猴桃 6个/盒(约600g)</div>
									<div class="rob-last">
										<button type="button" class="btn-rob-g">立即购买</button>
									</div>
								<!-- </a> -->
							</li>
					
				
					
					
							<li class="list-item">
								
									<span class="date-img">
										<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月7日</p><p>12:00</p></div>
									</span>
									<div class="img-wrap">
										
									
        





<img alt="" src="/static/picture/050400247902-001.jpg" class="shop-img">
        
									
										<img src="static/picture/xqyg.png" alt="" class="xqyg">
									</div>
									<div class="rob-last">
										<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
									</div>
									<div class="shop-name" title="[聚品坊] 甜猫绿茶味卷心酥威化饼干 100g/盒">[聚品坊] 甜猫绿茶味卷心酥威化饼干 100g/盒</div>
									<div class="rob-last">
										<button type="button" class="btn-rob-g">立即购买</button>
									</div>
								<!-- </a> -->
							</li>
					
				
					
					
							<li class="list-item">
								
									<span class="date-img">
										<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月8日</p><p>12:00</p></div>
									</span>
									<div class="img-wrap">
										
									
        





<img alt="" src="/static/picture/010206000101-001.jpg" class="shop-img">
        
									
										<img src="static/picture/xqyg.png" alt="" class="xqyg">
									</div>
									<div class="rob-last">
										<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">9.90</span> </div>
									</div>
									<div class="shop-name" title="[超奇果业] 越南红心火龙果 1个/盒(约500g)">[超奇果业] 越南红心火龙果 1个/盒(约500g)</div>
									<div class="rob-last">
										<button type="button" class="btn-rob-g">立即购买</button>
									</div>
								<!-- </a> -->
							</li>
					
				
					
					
							<li class="list-item">
								
									<span class="date-img">
										<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月8日</p><p>12:00</p></div>
									</span>
									<div class="img-wrap">
										
									
        





<img alt="" src="/static/picture/070103005402-001.jpg" class="shop-img">
        
									
										<img src="static/picture/xqyg.png" alt="" class="xqyg">
									</div>
									<div class="rob-last">
										<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
									</div>
									<div class="shop-name" title="[聚品坊] 陈克明华夏一面经典原味挂面 800g/袋">[聚品坊] 陈克明华夏一面经典原味挂面 800g/袋</div>
									<div class="rob-last">
										<button type="button" class="btn-rob-g">立即购买</button>
									</div>
								<!-- </a> -->
							</li>
					
				
			</ul>
		</div>
		<!-- 天天特价 -->
		<div class="point-all" style="height:330px;">
			<div class="time-esc"><img src="static/picture/ico-kql-mx@2x.png" alt="" class="time-icon"><span class="cost" style="color: black;">距离活动结束 : <span id="dayActivityTime">01</span></span><span class="date-cost">(每天<span>0</span>点开抢)</span></div>
			<ul class="rob-list">
				
				
						<li class="list-item active">
						 
						<a href="goods/8256/2/36?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tiantiantejia2017.png">
						 
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/090100002101-001.jpg" class="shop-img">
        
								
								
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">24.00</span> </div>
							</div>
							<div class="shop-name" title="[金喜莱商贸] 心相印柔厚新升级金装180g卷纸 10卷/提">[金喜莱商贸] 心相印柔厚新升级金装180g卷纸 10卷/提</div>
							<div class="rob-last">
								 
									<button type="button" class="btn-rob-g re">立即购买</button>
								
								 
							</div>
						 
						</a>
						
						</li>
				
				
				
				
				
					<li class="list-item">
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010207000101-001.jpg" class="shop-img">
								<img src="static/picture/xqyg.png" alt="" class="xqyg">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">16.00</span> </div>
							</div>
							<div class="shop-name" title="[宜品生活] 智利蓝莓 125g/盒">[宜品生活] 智利蓝莓 125g/盒</div>
							<div class="rob-last">
								<button type="button" class="btn-rob-g">立即购买</button>
							</div>
					</li>
				
				
				
				
					<li class="list-item">
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/020501009701-001.jpg" class="shop-img">
								<img src="static/picture/xqyg.png" alt="" class="xqyg">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">1.00</span> </div>
							</div>
							<div class="shop-name" title="[捷翱商贸] 双汇香辣香脆肠 35g/袋">[捷翱商贸] 双汇香辣香脆肠 35g/袋</div>
							<div class="rob-last">
								<button type="button" class="btn-rob-g">立即购买</button>
							</div>
					</li>
				
				
				
				
					<li class="list-item">
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/040200021601-001.jpg" class="shop-img">
								<img src="static/picture/xqyg.png" alt="" class="xqyg">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">26.00</span> </div>
							</div>
							<div class="shop-name" title="[精益良果] 八零后腰果 180g/罐">[精益良果] 八零后腰果 180g/罐</div>
							<div class="rob-last">
								<button type="button" class="btn-rob-g">立即购买</button>
							</div>
					</li>
				
				
				
				
					<li class="list-item">
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010108004501-001.jpg" class="shop-img">
								<img src="static/picture/xqyg.png" alt="" class="xqyg">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">12.00</span> </div>
							</div>
							<div class="shop-name" title="[拓丰果品] 攀枝花油桃 3个/盒(约300g)">[拓丰果品] 攀枝花油桃 3个/盒(约300g)</div>
							<div class="rob-last">
								<button type="button" class="btn-rob-g">立即购买</button>
							</div>
					</li>
				
				
				
				
					<li class="list-item">
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070300044601-001.jpg" class="shop-img">
								<img src="static/picture/xqyg.png" alt="" class="xqyg">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">10.50</span> </div>
							</div>
							<div class="shop-name" title="[张武食品] 上海梅林午餐肉罐头 340g/罐">[张武食品] 上海梅林午餐肉罐头 340g/罐</div>
							<div class="rob-last">
								<button type="button" class="btn-rob-g">立即购买</button>
							</div>
					</li>
				
				
			</ul>
		</div>
		<!-- 买即赠  -->
		<div class="point-all" style="height:330px;">
			<ul class="rob-list rob-list2">
				
				<input type="hidden" value="2018/05/31 23:59:59" class="buyAndPersent"/>
					<a class="buyandparent" href="goods/8289/0/27">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070101006301-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070300094301-001.jpg" class="shop-img">
								<div class="robin robin2"><span>赠</span></div></div>
								<div class="shop-name col-50" title="[聚品坊] 泰味泰国茉莉香米 5kg/袋">[聚品坊] 泰味泰国茉莉香米 5kg/袋</div>
								<div class="shop-name col-50" title="[中粮旗舰店] 福达坊传统小磨香油 510ml/瓶">[中粮旗舰店] 福达坊传统小磨香油 510ml/瓶</div>
							</div>
							<div class="rob-last" style="text-align:center;padding:0">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">99.00</span> <small class="left-price-small add-lineh">节省了14.50</small></div><button type="button" class="btn-rob-g re">立即购买</button>
							</div>
						</li>
					</a>
				
				<input type="hidden" value="2018/05/31 23:59:59" class="buyAndPersent"/>
					<a class="buyandparent" href="goods/8293/0/28">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/050400249802-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/050400249802-001.jpg" class="shop-img">
								<div class="robin robin2"><span>赠</span></div></div>
								<div class="shop-name col-50" title="[聚品坊] 爱莲巧草莓牛奶味饼干 190g/袋">[聚品坊] 爱莲巧草莓牛奶味饼干 190g/袋</div>
								<div class="shop-name col-50" title="[聚品坊] 爱莲巧草莓牛奶味饼干 190g/袋">[聚品坊] 爱莲巧草莓牛奶味饼干 190g/袋</div>
							</div>
							<div class="rob-last" style="text-align:center;padding:0">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">11.50</span> <small class="left-price-small add-lineh">节省了11.50</small></div><button type="button" class="btn-rob-g re">立即购买</button>
							</div>
						</li>
					</a>
				
				<input type="hidden" value="2018/05/31 23:59:59" class="buyAndPersent"/>
					<a class="buyandparent" href="goods/8291/0/29">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070203003701-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070103006201-001.jpg" class="shop-img">
								<div class="robin robin2"><span>赠</span></div></div>
								<div class="shop-name col-50" title="[中粮旗舰店] 鲁花压榨特香菜籽油 5L/桶">[中粮旗舰店] 鲁花压榨特香菜籽油 5L/桶</div>
								<div class="shop-name col-50" title="[聚品坊] 陈克明高钙挂面 280g/袋">[聚品坊] 陈克明高钙挂面 280g/袋</div>
							</div>
							<div class="rob-last" style="text-align:center;padding:0">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">90.90</span> <small class="left-price-small add-lineh">节省了5.90</small></div><button type="button" class="btn-rob-g re">立即购买</button>
							</div>
						</li>
					</a>
				
			</ul>
		</div>
		<!-- 每周特价 -->
		<div class="point-all" style="height:330px;">
			<input type="hidden" value="2018/05/13 23:59:59" id="weekActivity"/>
			<div class="time-esc"><img src="static/picture/ico-kql-mx@2x.png" alt="" class="time-icon"><span class="cost" style="color: black;">距离活动结束 : <span id="weekActivityTime">01</span></div>
			<ul class="rob-list">
				
							<li class="list-item active">
								
								<a href="goods/8391/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/010206001501-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">48.00</span> </div>
										</div>
										<div class="shop-name" title="[宜品生活] 台湾水仙芒 4个/盒(约1.4kg)">[宜品生活] 台湾水仙芒 4个/盒(约1.4kg)</div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
							<li class="list-item active">
								
								<a href="goods/8389/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/030500000401-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">53.00</span> </div>
										</div>
										<div class="shop-name" title="[隆霆商贸] 蒙牛纯甄酸牛奶 200g*12盒/件">[隆霆商贸] 蒙牛纯甄酸牛奶 200g*12盒/件</div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
							<li class="list-item active">
								
								<a href="goods/8388/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/090300009101-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">43.80</span> </div>
										</div>
										<div class="shop-name" title="[三千禾] 妈妈壹选天然皂液倍柔洗衣液 3kg/瓶">[三千禾] 妈妈壹选天然皂液倍柔洗衣液 3kg/瓶</div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
							<li class="list-item active">
								
								<a href="goods/8387/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/070202000703-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">23.50</span> </div>
										</div>
										<div class="shop-name" title="[中粮旗舰店] 福达坊头道香初榨芝麻油 518ml/瓶 ">[中粮旗舰店] 福达坊头道香初榨芝麻油 518ml/瓶 </div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
							<li class="list-item active">
								
								<a href="goods/8386/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/070101005901-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">59.00</span> </div>
										</div>
										<div class="shop-name" title="[中粮旗舰店] 卡普蒂亚柬埔寨香米 5kg/袋">[中粮旗舰店] 卡普蒂亚柬埔寨香米 5kg/袋</div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
							<li class="list-item active">
								
								<a href="goods/8390/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="/static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="/static/picture/010104000703-001.jpg" class="shop-img">
										
										</div>
										<div class="rob-last">
											<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">14.00</span> </div>
										</div>
										<div class="shop-name" title="[刘智力] 陕西徐香猕猴桃 1kg/盒(9-11个)">[刘智力] 陕西徐香猕猴桃 1kg/盒(9-11个)</div>
										<div class="rob-last">
											 
												<button type="button" class="btn-rob-g re">立即购买</button>
											
											 
										</div>
										
								</a>
								
							</li>
				
			</ul>
		</div>
		<!-- 热卖商品 -->
		<div class="point-all" style="height:330px;">
			<ul class="rob-list rob-list-top">
				
						<li class="list-item active" >
					<a href="">
							<span class="date-img">
								<img src="/static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010103001301-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">28.80</span> </div>
							</div>
							<div class="shop-name" title="[李广伦] 海南黑美人西瓜 约3kg/个">[李广伦] 海南黑美人西瓜 约3kg/个</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active" >
					<a href="">
							<span class="date-img">
								<img src="/static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010206002201-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">10.40</span> </div>
							</div>
							<div class="shop-name" title="[黄晓琼] 台芒 3个/盒(约400g)">[黄晓琼] 台芒 3个/盒(约400g)</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active" >
					<a href="">
							<span class="date-img">
								<img src="/static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010108004501-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">13.80</span> </div>
							</div>
							<div class="shop-name" title="[拓丰果品] 攀枝花油桃 3个/盒(约300g)">[拓丰果品] 攀枝花油桃 3个/盒(约300g)</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active" >
					<a href="">
							<span class="date-img">
								<img src="/static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/020501001702-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">4.60</span> </div>
							</div>
							<div class="shop-name" title="[新华干副] 沈师傅鸡蛋干 150g/袋">[新华干副] 沈师傅鸡蛋干 150g/袋</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active" >
					<a href="goods/5456/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/090100008901-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">13.80</span> </div>
							</div>
							<div class="shop-name" title="[金喜莱商贸] 亨奇璞竹抽取式面巾纸150抽 3包/提">[金喜莱商贸] 亨奇璞竹抽取式面巾纸150抽 3包/提</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active" >
					<a href="goods/4941/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070202001001-001.jpg" class="shop-img">
        
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">26.50</span> </div>
							</div>
							<div class="shop-name" title="[新华干副] 川味乡纯芝麻油 410ml/瓶">[新华干副] 川味乡纯芝麻油 410ml/瓶</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
			</ul>
		</div>
		<!-- 新品上市 -->
		<div class="point-all" style="height:330px;">
			<ul class="rob-list rob-list-top">
				
						<li class="list-item active">
					<a href="goods/8344/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010108012502-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">23.00</span> </div>
							</div>
							<div class="shop-name" title="[拓丰果品] 云南沃柑 1kg/盒(约6-8个)">[拓丰果品] 云南沃柑 1kg/盒(约6-8个)</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active">
					<a href="goods/8346/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010108012401-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">19.00</span> </div>
							</div>
							<div class="shop-name" title="[拓丰果品] 云南黑提 750g/盒">[拓丰果品] 云南黑提 750g/盒</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active">
					<a href="goods/8193/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/010108007801-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">8.10</span> </div>
							</div>
							<div class="shop-name" title="[拓丰果品] 海南青椰子 约2kg/个">[拓丰果品] 海南青椰子 约2kg/个</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active">
					<a href="goods/8159/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/040200020901-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">28.80</span> </div>
							</div>
							<div class="shop-name" title="[港月果品] 越南炭烧腰果 250g/袋">[港月果品] 越南炭烧腰果 250g/袋</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active">
					<a href="goods/5451/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/090100008501-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">6.90</span> </div>
							</div>
							<div class="shop-name" title="[金喜莱商贸] 洁柔百花香味手帕纸 12包/条">[金喜莱商贸] 洁柔百花香味手帕纸 12包/条</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
						<li class="list-item active">
					<a href="goods/7250/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="/static/picture/070203007503-001.jpg" class="shop-img">
							</div>
							<div class="rob-last">
								<div class="left-price left-price-r"><span class="zh-money">¥</span> <span class="left-price-choos">59.00</span> </div>
							</div>
							<div class="shop-name" title="[中粮旗舰店] 福临门精炼一级双低菜籽油 5L/桶">[中粮旗舰店] 福临门精炼一级双低菜籽油 5L/桶</div>
							<div class="rob-last rob-last-top">
								<button type="button" class="btn-rob-g re">立即购买</button>
							</div>
					</a>
						</li>
				
			</ul>
		</div>
		<!-- 热销好货 -->
		<div class="point-all" style="height: 330px;">
			<div class="wrap-point" >
				<a href="goods/217/0/0" style="color:#666666;text-decoration:none;" >
					<div class="point-price point1" style=" height:139px;background-image: url(static/images/010105000204-001.jpg)">
						<div class="point-name" title="[润佳果业] 海南大香蕉 2kg/盒(约10-14支)" >[润佳果业] 海南大香蕉 2kg/盒(约10-14支)</div>
						<p class="price">¥ <span>18.40</span></p>
					</div>
				</a>
				<a href="goods/6322/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point2" style="margin-top: 12px;height:139px;background-image: url(static/images/090100001601-001.jpg)">
						<div class="point-name" title="[金喜莱商贸] 唯思青涩抽纸 5包/提">[金喜莱商贸] 唯思青涩抽纸 5包/提</div>
						<p class="price">¥ <span>19.60</span></p>

					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="goods/177/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point3 lg-point-price" style="height: 310px;background-image: url(static/images/010101000105-001.jpg)">
						<div class="point-name" title="[金龙乡果业] 甘肃静宁红富士 6个/盒(约1.2kg)">[金龙乡果业] 甘肃静宁红富士 6个/盒(约1.2kg)<p class="price">¥ <span>24.20</span></p></div>
						
					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="goods/6436/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point4" style="height:139px;background-image: url(static/images/070101001201-001.jpg)">
						<div class="point-name" title="[中粮旗舰店] 福临门泰国茉莉香米 5kg/袋">[中粮旗舰店] 福临门泰国茉莉香米 5kg/袋</div>
						<p class="price">¥ <span>77.70</span></p>
						
					</div>
				</a>
				<a href="goods/6751/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point5" style="margin-top: 12px;height:139px;background-image: url(static/images/010108000300-001.jpg)">
						<div class="point-name" title="[严继业] 云南菠萝 约0.75kg/个">[严继业] 云南菠萝 约0.75kg/个</div>
						<p class="price">¥ <span>6.90</span></p>
					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="goods/7118/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point6 lg-point-price" style="height: 310px;background-image:url(static/images/030400003102-001.jpg);">
						<div class="point-name" title="[聚品坊] 意文黑啤酒 500ml/瓶">[聚品坊] 意文黑啤酒 500ml/瓶<p class="price">¥ <span>6.50</span></p></div>
						
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="activity-img w-1250">
			<div class="sing clearfix sing-bg" style="background-image:url('static/images/甄选导航条-0319.png')">
				
			</div>
		@foreach($good as $val)
		<a href="/home/goods/{{$val->id}}">
		<div class="chunk">
			
			
			<div class="img">
				<img alt="" style="width: 300px; height: 300px;" src="{{$val->img}}" class="shop-img">
			</div>
				<p class="del" title="{{$val->gname}}">{{$val->gname}}</p>
				<p class="money">{{number_format($val->price,2)}}元</p>
			
		</div>
		</a>
		@endforeach
	
	<!-- 货柜商品 -->
	<div class="lump w-1250">
	
	
	<div class="w-1250 classify">
		<!-- <div class="sing clearfix"><span class="big" value="4" pageindex="1"><i class="iconfont"></i>换一组</span></div> -->
		<div class="chunk-d fenlei4" style="background:url(static/images/shuiguozuo-112.png) no-repeat;background-size: 100% 100%;">
			<ul class="chunk-d-ul bigContain">
				<li  class="chunk-d-li" value="进口水果">苹果</li>
				<li  class="chunk-d-li" value="进口水果">葡萄/提子</li>
				<li  class="chunk-d-li" value="进口水果">橙/柚</li>
				<li  class="chunk-d-li" value="进口水果">奇异果</li>
				<li  class="chunk-d-li" value="进口水果">火龙果</li>
				
                        
					
			</ul>
		</div>
		<div class="chunk-z" value="4">
			<ul class="chunk-z-ul bigul"> 
				<input type="hidden" class="countpage" value="1">
			@foreach($goods as $v)
				<a href="/home/goods/{{$v->id}}">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="{{$v->img}}" class="shop-img">
						</div>
						<p class="del" title="{{$v->gname}}">{{$v->gname}}</p>
						<p class="money">{{number_format($v->price,2)}}元</p>
					</li>
				</a>
			@endforeach

			</ul>
		</div>
		<div class="chunk-x">
				
			<div class="chunk-x-top">
			

			<a href=""><img src="static/picture/pc-首页货柜-进口水果-20180428-309-1.png"/></a>
			</div>
		
			<div class="chunk-x-top">
			
			<a href=""><img src="static/picture/pc-首页货柜-进口水果-20180428-7903-2.png"/></a>
			</div>
				
		</div>
	</div>
	

</div>
<footer>
    <div class="footer-auto">
         <p>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=493">关于我们</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=506">合作伙伴</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=507">营销中心</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=508">诚征英才</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="news/index?ter=499&chd=509">联系我们</a>
        </p >
        
        
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
            <a href="http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"><li class="beian-li"><img src="static/picture/biean1.png"/></li></a>
            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="static/picture/biean2.png"/></li></a>
            <a href="http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="static/picture/biean3.png"/></li></a>
            <a href="http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="static/picture/biean4.png"/></li></a>
            <a href="http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="static/picture/biean5.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div>  
</footer>

<script type="text/javascript" src="/static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/static/js/public.js"></script>

<script type="text/javascript" src="/static/js/easydialog.min.js"></script>

<script type="text/javascript" src="/static/js/laypage.js"></script>
<![if lt IE 9]>
  <script src="/static/js/json.js" charset="utf-8"></script>
<![endif]>

<script src="/static/js/json.js" charset="utf-8"></script>
<script src="/static/js/2d7b7f9cc20348b59717d78adbf27aaa.js" charset="utf-8"></script>
<!-- 搜索js -->
<script type="text/javascript" src="/static/js/goods_search.js"></script>




<div class="dialog-box" id="qian" style="display:none;border:1px solid #358812;">
  	<div id="title" style=" height: 30px; line-height:30px;font-size:13px;color:#444;border-bottom:1px solid #358812;background-image: linear-gradient(to bottom,#D1F5BF 50%,#bde9AB 50%);padding-left:15px;position:relative;background-color:#bde9ab;">
  	<i class="iconfont" style="margin-right:7px;font-size:16px;">&#xe650;</i>杨桃妹妹
  	<i id="close" class="iconfont" style="float:right;margin-right:15px;background:#FFF;color:#358812;font-size:12px;border:1px solid #358812;line-height:normal;padding:1px 2px;border-radius:3px;position:relative;top:7px;cursor: pointer;">&#xe676;</i></div>
</div>

</div>

<!--2017-10-31 新增顶部浮现搜索-->
<div class="floattop fadein">
	<div class="floattop-overlay"></div>
	<div class="floattop-content clearfix">
		<div class="floattop-logo">
			<img src="static/picture/minlogo.png" alt="">
			<div class="net-nav">
                        <ul>
                        	
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/水果.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=124" style="color: red;">水果</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=125">国产水果</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=128">进口水果</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/生鲜.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/干果干副.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=137" style="color: red;">干副干果</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=138">炒货</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=139">干果</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=140">干货</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=141">山珍菌类</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/粮油副食.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=143" style="color: red;">粮油副食</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=144">调味品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=145">方便速食</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=146">米面粮油</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=147">食用油</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/休闲零食.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=148" style="color: red;">休闲零食</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=149">饼干糕点</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=151">蜜饯果脯</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=152">膨化食品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=153">其他零食</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=154">肉类零食</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/酒水饮料.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=156" style="color: red;">酒水饮料</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=157">白酒</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=158">牛奶乳制品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=159">啤酒</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=160">葡萄酒</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=161">饮料/水</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/冲调茶饮.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=162" style="color: red;">冲调茶饮</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=163">茶</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=164">冲调饮品/奶粉</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/生活日用.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=172" style="color: red;">生活日用品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=173">个人护理</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=174">清洁用品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=175">纸品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(static/images/跨境专区.png) no-repeat;background-postion:-20px;"><a href="category/findCategoryGoods?id=180" style="color: red;">跨境专区</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=181">家居生活</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=182">美妆个护</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=183">母婴用品</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=184">生活数码</a></p>
		                                
		                                	<p class="title"><a href="elastic/typeGoods?typeId=298">食品保健</a></p>
		                                
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
		</div>
		<div class="floattop-search">
			<input type="text" id="topSearchContent">
			<button type="submit" id="topSearch">搜索</button>
		</div>
		<div class="commidi-icon"><img src="static/picture/ad-1.png" alt=""></div>
	</div>
</div>
<!--2017-10-31 新增顶部浮现搜索end-->
<!--2017-10-31 新增左部浮现搜索-->
<div class="float-icon">
<div class="float-icon-overlay"></div>
	<ul class="float-icon-content">
		<li class="float-icon-item"><span class="icon-item icon-item1"></span><span class="icon-word icon-word1">进口水果</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item2"></span><span class="icon-word icon-word2">国产水果</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item3"></span><span class="icon-word icon-word3">跨境专区</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item4"></span><span class="icon-word icon-word4">干副干果</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item5"></span><span class="icon-word icon-word5">小吃零食</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item6"></span><span class="icon-word icon-word6">粮油副食</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item7"></span><span class="icon-word icon-word7">生活用品</span></li>
		<li class="float-icon-item"><span class="icon-item icon-item8"></span><span class="icon-word icon-word8">酒水饮料</span></li>
	</ul>
</div>
<!--2017-10-31 新增左部浮现搜索end-->
  <script type="text/javascript" src="/static/js/index.js"></script>
  <script type="text/javascript" src="/static/js/goods_search.js"></script>
  <script src="/static/js/sli.js"></script>
  <script type="text/javascript">
  $(function(){
	  $(".floattop-logo").hover(function(){
		 $(this).find(".net-nav").fadeIn(300); 
	  },function(){
		  
		  $(this).find(".net-nav").hide(); 
	  });
      $(".float-icon-item").mouseover(function (e) {
          e.stopPropagation();
          $(this).find(".icon-item").hide().next().show();
      });
      $(".float-icon-item").mouseout(function (e) {
          e.stopPropagation();
          $(this).find(".icon-item").show().next().hide();
      });

     /*  var lump = $(".lump").offset().top; */
      var classify0 = $(".classify").eq(0).offset().top;
      // var classify1 = $(".classify").eq(1).offset().top;
      // var classify2 = $(".classify").eq(2).offset().top;
      // var classify3 = $(".classify").eq(3).offset().top;
      // var classify4 = $(".classify").eq(4).offset().top;
      // var classify5 = $(".classify").eq(5).offset().top;
      // var classify6 = $(".classify").eq(6).offset().top;
      // var lumpp = $(".wrap-lump").offset().top;
          
          $('.float-icon .icon-word1').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify0-50}, 500);});
          $('.float-icon .icon-word2').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify1-50}, 500);});
          $('.float-icon .icon-word3').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify2-50}, 500);});
          $('.float-icon .icon-word4').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify3-50}, 500);});
          $('.float-icon .icon-word5').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:lumpp-50}, 500);});
          $('.float-icon .icon-word6').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify4-50}, 500);});
          $('.float-icon .icon-word7').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify5-50}, 500);});
          $('.float-icon .icon-word8').click(function(e){e.stopPropagation();$('html,body').animate({scrollTop:classify6-50}, 500);});
  })
  
  
  
  </script>
  </body>
</html>