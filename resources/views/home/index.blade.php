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
				<a href="//http://www.xmy365.com/news/zt/20180422zhuzt?a"><img src="/static/picture/1-1.png" alt=""></a>
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
	<img alt="" src="static/picture/top.png" style="width: 100%">
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
        <div class="right">
            <ul class="right-list clearfix">
                <li class="net-all"><i class="iconfont">&#xe600;</i>网站导航
                    <div class="net-nav">
                        <ul>
                        	
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/水果.png) no-repeat;background-postion:-20px;"><a href="/home/list" style="color: red;">水果</a></p>
		                                
		                                	<p class="title"><a href="/home/list">国产水果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=128">进口水果</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生鲜.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/干果干副.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=137" style="color: red;">干副干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=138">炒货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=139">干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=140">干货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=141">山珍菌类</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/粮油副食.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=143" style="color: red;">粮油副食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=144">调味品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=145">方便速食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=146">米面粮油</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=147">食用油</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/休闲零食.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=148" style="color: red;">休闲零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=149">饼干糕点</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=151">蜜饯果脯</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=152">膨化食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=153">其他零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=154">肉类零食</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/酒水饮料.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=156" style="color: red;">酒水饮料</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=157">白酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=158">牛奶乳制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=159">啤酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=160">葡萄酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=161">饮料/水</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/冲调茶饮.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=162" style="color: red;">冲调茶饮</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=163">茶</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=164">冲调饮品/奶粉</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生活日用.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=172" style="color: red;">生活日用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=173">个人护理</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=174">清洁用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=175">纸品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/跨境专区.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=180" style="color: red;">跨境专区</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=181">家居生活</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=182">美妆个护</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=183">母婴用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=184">生活数码</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=298">食品保健</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
                            
                        		 
                            
                        		 
                            
                            <li>
                                <p class="title" style="background:url() no-repeat;background-postion:-20px;"><a href="/activity/findActivity?show=2" style="color: red;">热销活动</a></p>
                               	<p class="title"><a href="/activity/findActivity#bing?show=2">冰点价</a></p>
                               	<p class="title"><a href="/activity/findActivity#dayday?show=2">限时抢购</a></p>
                               	<p class="title"><a href="/activity/findActivity#buy?show=2">买即赠</a></p>
                               	<p class="title"><a href="/activity/findActivity#week?show=2">每周特惠</a></p>
                               	<p class="title"><a href="/activity/findActivity#all?show=2">整件惠</a></p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="phone-all"><i class="iconfont phone">&#xe634;</i><span class="phone-span">手机香满圆</span>
                    <div class="phone-code">
                        <div class="img-wrap"><img src="static/picture/b2cwx.jpg" alt=""><p>扫码关注微信端</p></div>
                        <div class="img-wrap"><img src="static/picture/b2cpc.png" alt=""><p>扫码进入移动端</p></div>
                        <!-- <div style="width:130px;margin-top:-5px;"><img src="static/picture/new-yh.png" style="width:100%;display:block"></div> -->
                    </div>
                </li>
                <li class="collect">收藏夹<i class="iconfont down">&#xe63b;</i>
                    <ul class="collect-ul">
                        <li class="collect-li"><a href="/center/toCollect?pageIndex=1&set=14&category=null">收藏宝贝</a></li>
                    </ul>
                </li>
                <a href="/cart/shoppingCart" style="color: gray;"><li class="details-all"><i class="iconfont cart">&#xe64f;</i>购物车<b id="cartCount"></b>件
                    <div class="shop-details" id="shoppingcart">
                        
                    </div>
                </li></a>
                <a href="/center/centerIndex?set=1" style="color: gray;"><li>我的香满圆</li></a>
            </ul>
        </div>
    </div>
</div>

    <div class="outer" id="top">
        <div class="header">
        	<a href="/index">
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
                	
	                	<a href="/elastic/goods?goodsName=蓝莓">蓝莓</a>
                	
	                	<a href="/elastic/goods?goodsName=芒果">芒果</a>
                	
	                	<a href="/elastic/goods?goodsName=奇异果">奇异果</a>
                	
	                	<a href="/elastic/goods?goodsName=奶粉">奶粉</a>
                	
	                	<a href="/elastic/goods?goodsName=松子">松子</a>
                	
	               <!--  <a href="/elastic/goods?goodsName=脐橙">脐橙</a>
	                <a href="/elastic/goods?goodsName=福临门">福临门</a>
	                <a href="/elastic/goods?goodsName=葡萄酒">葡萄酒</a>
	                <a href="/elastic/goods?goodsName=洗衣液">洗衣液</a> -->
	                <a href="/elastic/goods?goodsName=" class="add-dominant-color">所有商品</a>
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
					<ul class="classify-ul classify-ul-all" style="display:none;">
					
						 
								<li class="classify-li"><div class="publiccategory" value="124"><i class="icon icon1" style="background:url(/static/images/水果.png) no-repeat;"></i>水果</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/home/list" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0101.png" alt="">国产水果</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=666">苹果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=668">梨子</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=673">橙/柚</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=671">猕猴桃</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=669">西瓜/哈密瓜/甜瓜</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=125&wordId=670">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=128" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0102.png" alt="">进口水果</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=2824">凤梨/菠萝</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=2827">葡萄/提子</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=332">火龙果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=333">苹果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=334">橙/柚</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=676">奇异果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=128&wordId=335">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=124" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/6741/0/0"><span class="thepic" style="background:url(/static/images/chelizi10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="129"><i class="icon icon1" style="background:url(/static/images/生鲜.png) no-repeat;"></i>生鲜食品</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=131" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0203.png" alt="">海鲜水产</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=682">贝类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=683">蟹类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=339">鱼类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=340">虾类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=341">其他海产</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=132" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0201.png" alt="">活禽蛋类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=677">鸭蛋</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=342">鸡蛋</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=343">鸭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=344">鸡</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=678">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=133" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0202.png" alt="">精品肉类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=346">鲜牛肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=348">鲜猪肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=679">冰冻牛肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=680">冰冻家禽</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=681">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=134" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0205.png" alt="">精制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=134&wordId=352">半制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=134&wordId=355">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=135" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0204.png" alt="">菌类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=135&wordId=357">牛肝菌</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=135&wordId=359">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=136" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0206.png" alt="">腌腊制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=361">腊猪肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=363">香肠</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=364">板鸭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=365">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=129" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/3462/0/0"><span class="thepic" style="background:url(/static/images/jidan10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="137"><i class="icon icon1" style="background:url(/static/images/干果干副.png) no-repeat;"></i>干副干果</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=138" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0401.png" alt="">炒货</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=368">瓜子</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=370">花生</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=371">豌豆</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=375">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=139" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0402.png" alt="">干果</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=684">巴旦木</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=685">枣</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=377">核桃</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=379">松子</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=380">开心果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=381">碧根果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=139&wordId=386">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=140" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0403.png" alt="">干货</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=389">水产</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=390">滋补食材</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=391">药食同源</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=392">参类滋补</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=398">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=141" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0404.png" alt="">山珍菌类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=401">木耳</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=402">香菇</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=406">姬松茸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=407">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=137" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4147/0/0"><span class="thepic" style="background:url(/static/images/ganguo10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="143"><i class="icon icon1" style="background:url(/static/images/粮油副食.png) no-repeat;"></i>粮油副食</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=144" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0701.png" alt="">调味品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=2849">佐料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=411">芝麻油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=412">花椒油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=413">酱油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=414">醋</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=415">盐</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=416">糖</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=417">味精/鸡精</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=418">豆瓣</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=419">花椒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=420">辣椒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=421">香料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=422">豆豉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=423">豆腐乳</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=424">底料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=144&wordId=690">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=145" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0703.png" alt="">方便速食</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=426">方便面</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=427">方便饭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=429">八宝粥</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=3072">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=146" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0702.png" alt="">米面粮油</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=431">大米</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=432">杂粮</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=433">豆类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=434">面食</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=435">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=147" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0704.png" alt="">食用油</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=147&wordId=442">菜籽油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=147&wordId=444">橄榄油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=147&wordId=445">玉米油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=147&wordId=446">花生油</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=147&wordId=447">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=143" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/5103/0/0"><span class="thepic" style="background:url(/static/images/huoguo10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="148"><i class="icon icon1" style="background:url(/static/images/休闲零食.png) no-repeat;"></i>休闲零食</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=149" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0501.png" alt="">饼干糕点</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=461">饼干</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=462">糕点</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=463">麻花</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=464">沙琪玛</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=465">传统糕点</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=149&wordId=2836">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=151" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0503.png" alt="">蜜饯果脯</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=470">梅类制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=471">葡萄干</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=472">枣类制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=474">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=152" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0502.png" alt="">膨化食品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=476">薯条</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=477">薯片</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=478">爆米花</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=739">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=153" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0505.png" alt="">其他零食</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=2848">胡豆/豌豆</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=686">豆制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=687">瓜子/花生</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=688">糖果</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=689">巧克力</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=482">果冻/布丁</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=483">锅巴</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=153&wordId=740">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=154" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0504.png" alt="">肉类零食</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=154&wordId=2460">牛肉干</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=154&wordId=2461">猪肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=154&wordId=2462">鸡肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=154&wordId=2463">鸭肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=154&wordId=2850">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=148" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4400/0/0"><span class="thepic" style="background:url(/static/images/xiuxian10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="156"><i class="icon icon1" style="background:url(/static/images/酒水饮料.png) no-repeat;"></i>酒水饮料</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=157" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0301.png" alt="">白酒</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=499">泸州老窖</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=500">郎酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=501">茅台</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=502">诗仙太白</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=503">剑南春</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=504">国窖</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=506">五粮液</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=157&wordId=507">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=158" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0304.png" alt="">牛奶乳制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=511">酸奶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=512">纯牛奶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=513">儿童牛奶</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=159" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0303.png" alt="">啤酒</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=515">山城</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=516">超纯</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=517">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=160" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0302.png" alt="">葡萄酒</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=519">红葡萄酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=520">白葡萄酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=521">洋酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=522">起泡酒</a>
				                               				
														</div>
				                                	</li>

				                             
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=161" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0305.png" alt="">饮料/水</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=527">纯净水</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=528">苏打水</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=529">含乳饮料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=530">功能饮料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=531">果汁</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=532">茶饮料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=533">碳酸饮料</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=161&wordId=535">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=156" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4023/0/0"><span class="thepic" style="background:url(/static/images/niunai10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="162"><i class="icon icon1" style="background:url(/static/images/冲调茶饮.png) no-repeat;"></i>冲调茶饮</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=163" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0601.png" alt="">茶</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=538">绿茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=540">沱茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=541">花茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=542">苦荞茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=543">茉莉花茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=544">普洱茶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=163&wordId=539">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=164" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0602.png" alt="">冲调饮品/奶粉</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=550">咖啡</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=551">蜂蜜</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=552">成人奶粉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=558">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=162" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4776/0/0"><span class="thepic" style="background:url(/static/images/cha10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="172"><i class="icon icon1" style="background:url(/static/images/生活日用.png) no-repeat;"></i>生活日用品</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=173" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0901.png" alt="">个人护理</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=702">口腔护理</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=703">女士护肤</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=705">美发护发</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=706">身体女性</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=707">儿童护肤</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=173&wordId=708">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=174" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0902.png" alt="">清洁用品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=695">洗衣液</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=696">洗衣粉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=697">洗手液</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=698">肥皂/香皂</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=699">厨房去污</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=700">洁厕剂</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=174&wordId=701">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=175" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/0903.png" alt="">纸品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=691">卷纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=692">抽纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=693">手帕纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=694">湿巾纸</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=172" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/5458/0/0"><span class="thepic" style="background:url(/static/images/shengh10210011.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
					
						 
								<li class="classify-li"><div class="publiccategory" value="180"><i class="icon icon1" style="background:url(/static/images/跨境专区.png) no-repeat;"></i>跨境专区</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=181" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/1604.png" alt="">家居生活</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=730">家纺</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=731">洗衣液</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=732">清洁剂</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=182" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/1603.png" alt="">美妆个护</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=726">面部护理</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=727">身体护理</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=728">彩妆/香水</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=729">美发护发</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=2851">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=183" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/1602.png" alt="">母婴用品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=722">奶粉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=723">宝宝洗护</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=724">宝宝用品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=725">孕妇用品</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=184" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/1601.png" alt="">生活数码</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=719">家用电器</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=720">家居生活</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=721">厨房餐具/烹饪用具</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=298" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="static/picture/1605.png" alt="">食品保健</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=298&wordId=734">食品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=298&wordId=738">保健品</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=180" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/6254/0/0"><span class="thepic" style="background:url(/static/images/kuaj102100111.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
					
						 
					
						 
					
						 
					
					</ul>
				</li>
				<li class="nav-section">
					<span class="right">></span>
					
						<ul class="clearfix">
							<li class="list-li btn menu cross"><a href="/index?show=1">首页</a></li>
							<li class="list-li btn menu"><a href="/activity/findActivity?show=2">开抢啦</a></li>
							<li class="list-li btn menu"><a href="/category/findCategoryGoods?id=180">跨境专区</a></li>
							<!-- <li class="list-li btn menu" onclick="window.location='fruits/index?show=4'">果琳专区</li> -->
							<li class="list-li btn menu"><a href="/elastic/goods?goodsName=&mainLand=0&show=3">全国配送</a></li>
							<li class="list-li btn menu"><a href="/point/pointStore?show=6">积分商城</a></li>
							<li class="list-li btn menu"><a href="/news/zt/20171118secondpage">企业定制</a></li>
							<li class="list-li btn menu"><a href="/news/zt/aixinshop">爱心购</a></li>
						</ul>
					
					
					
					
					
					
					
					
				</li>
			</ul>
			<a href="/center/toShopCard?pageIndex=1&set=10&status=3">
				<div class="rr" hidden="hidden" id="imageShow"><img src="static/picture/rr.png"/></div>
			</a>
		</div>
	</div>
</div>




	
	<!--全屏滚动-->
<div class="ad" style="min-width: auto;">
	<div class="b-img">
	
	    <a href="/http://www.xmy365.com/news/zt/20180422zhuzt?a" style="background:url(/static/images/banner-20180426-01.png) center no-repeat;"></a>
	     
	
	    <a href="/http://www.xmy365.com/news/zt/20180422yingtao" style="background:url(/static/images/banner1.jpg) center no-repeat;"></a>
	     
	
	    <a href="/http://www.xmy365.com/news/zt/20180422caicaisee" style="background:url(/static/images/banner-20180426-02.png) center no-repeat;"></a>
	     
	
	    <a href="/http://www.xmy365.com/news/zt/20180422zhuzt?c" style="background:url(/static/images/banner-20180426-03.png) center no-repeat;"></a>
	     
	
	    
	     <a href="/goods/8346/0/0" style="background:url(/static/images/pc-banner-20180504-8346-1.png) center no-repeat;"></a>
	
	    
	     <a href="/goods/8344/0/0" style="background:url(/static/images/pc-banner-20180504-8344-2.png) center no-repeat;"></a>
	
	    
	     <a href="/goods/4187/0/0" style="background:url(/static/images/pc-banner-20180504-4187-3.png) center no-repeat;"></a>
	
	    
	     <a href="/goods/6797/0/0" style="background:url(/static/images/pc-banner-20180504-6797-4.png) center no-repeat;"></a>
	
	    
	     <a href="/goods/5925/0/0" style="background:url(/static/images/pc-banner-20180504-5925-5.png) center no-repeat;"></a>
	
	</div>
	<div class="b-list" style="margin-top:360px;padding-top:0;"></div>
	<!--<a class="bar-left" href="/#"><em></em></a><a class="bar-right" href="/#"><em></em></a>-->
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
							 
							<a href="/goods/8223/2/35?time=5月6日&url=">
						
								<span class="date-img">
									<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月6日</p><p>12:00</p></div>
								</span>
								<div class="img-wrap">
									
        





<img alt="" src="static/picture/050400249801-001.jpg" class="shop-img">
        
									
									
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
							 
							<a href="/goods/8228/2/35?time=5月6日&url=">
						
								<span class="date-img">
									<div class="tl-time" style="background: url('static/images/date-img22.png') no-repeat;background-size: 100% auto;"><p>5月6日</p><p>12:00</p></div>
								</span>
								<div class="img-wrap">
									
        





<img alt="" src="static/picture/010105000201-001.jpg" class="shop-img">
        
									
									
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
										
									
        





<img alt="" src="static/picture/010104000701-001.jpg" class="shop-img">
        
									
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
										
									
        





<img alt="" src="static/picture/050400247902-001.jpg" class="shop-img">
        
									
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
										
									
        





<img alt="" src="static/picture/010206000101-001.jpg" class="shop-img">
        
									
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
										
									
        





<img alt="" src="static/picture/070103005402-001.jpg" class="shop-img">
        
									
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
						 
						<a href="/goods/8256/2/36?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tiantiantejia2017.png">
						 
							<span class="date-img">
								<img src="static/picture/tiantiantejia2017.png" alt="">
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/090100002101-001.jpg" class="shop-img">
        
								
								
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
								
        





<img alt="" src="static/picture/010207000101-001.jpg" class="shop-img">
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
								
        





<img alt="" src="static/picture/020501009701-001.jpg" class="shop-img">
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
								
        





<img alt="" src="static/picture/040200021601-001.jpg" class="shop-img">
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
								
        





<img alt="" src="static/picture/010108004501-001.jpg" class="shop-img">
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
								
        





<img alt="" src="static/picture/070300044601-001.jpg" class="shop-img">
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
					<a class="buyandparent" href="/goods/8289/0/27">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/070101006301-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/070300094301-001.jpg" class="shop-img">
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
					<a class="buyandparent" href="/goods/8293/0/28">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/050400249802-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/050400249802-001.jpg" class="shop-img">
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
					<a class="buyandparent" href="/goods/8291/0/29">
						<li class="list-item list-item2 active">
							<div class="p-text" style="color: black;">
								距离活动结束还有 : <span class="showTime"></span>
							</div>
							<div class="give-buy clearfix">
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/070203003701-001.jpg" class="shop-img">
								<div class="robin"><span>买</span></div></div>
								<div class="img-wrap">
								
        





<img alt="" src="static/picture/070103006201-001.jpg" class="shop-img">
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
								
								<a href="/goods/8391/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/010206001501-001.jpg" class="shop-img">
										
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
								
								<a href="/goods/8389/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/030500000401-001.jpg" class="shop-img">
										
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
								
								<a href="/goods/8388/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/090300009101-001.jpg" class="shop-img">
										
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
								
								<a href="/goods/8387/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/070202000703-001.jpg" class="shop-img">
										
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
								
								<a href="/goods/8386/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/070101005901-001.jpg" class="shop-img">
										
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
								
								<a href="/goods/8390/2/38?time=&url=https://xmyoss.oss-cn-hangzhou.aliyuncs.com/goods/watermark/201701013/tj001.png">
								
										<span class="date-img">
											
        





<img alt="" src="static/picture/tj001.png" class="shop-img">
											
										</span>
										<div class="img-wrap">
											
        





<img alt="" src="static/picture/010104000703-001.jpg" class="shop-img">
										
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
					<a href="/goods/7895/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010103001301-001.jpg" class="shop-img">
        
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
					<a href="/goods/7438/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010206002201-001.jpg" class="shop-img">
        
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
					<a href="/goods/7897/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010108004501-001.jpg" class="shop-img">
        
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
					<a href="/goods/3555/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/020501001702-001.jpg" class="shop-img">
        
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
					<a href="/goods/5456/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/090100008901-001.jpg" class="shop-img">
        
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
					<a href="/goods/4941/0/0?time=&url=resource/commons/images/rm.png">
							<span class="date-img">
								<img src="static/picture/rm.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/070202001001-001.jpg" class="shop-img">
        
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
					<a href="/goods/8344/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010108012502-001.jpg" class="shop-img">
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
					<a href="/goods/8346/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010108012401-001.jpg" class="shop-img">
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
					<a href="/goods/8193/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/010108007801-001.jpg" class="shop-img">
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
					<a href="/goods/8159/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/040200020901-001.jpg" class="shop-img">
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
					<a href="/goods/5451/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/090100008501-001.jpg" class="shop-img">
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
					<a href="/goods/7250/0/0?time=&url=resource/commons/images/xpss.png">
							<span class="date-img">
								<img src="static/picture/xpss.png" alt=""><!-- 水印图片 -->
							</span>
							<div class="img-wrap">
								
        





<img alt="" src="static/picture/070203007503-001.jpg" class="shop-img">
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
				<a href="/goods/217/0/0" style="color:#666666;text-decoration:none;" >
					<div class="point-price point1" style=" height:139px;background-image: url(/static/images/010105000204-001.jpg)">
						<div class="point-name" title="[润佳果业] 海南大香蕉 2kg/盒(约10-14支)" >[润佳果业] 海南大香蕉 2kg/盒(约10-14支)</div>
						<p class="price">¥ <span>18.40</span></p>
					</div>
				</a>
				<a href="/goods/6322/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point2" style="margin-top: 12px;height:139px;background-image: url(/static/images/090100001601-001.jpg)">
						<div class="point-name" title="[金喜莱商贸] 唯思青涩抽纸 5包/提">[金喜莱商贸] 唯思青涩抽纸 5包/提</div>
						<p class="price">¥ <span>19.60</span></p>

					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="/goods/177/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point3 lg-point-price" style="height: 310px;background-image: url(/static/images/010101000105-001.jpg)">
						<div class="point-name" title="[金龙乡果业] 甘肃静宁红富士 6个/盒(约1.2kg)">[金龙乡果业] 甘肃静宁红富士 6个/盒(约1.2kg)<p class="price">¥ <span>24.20</span></p></div>
						
					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="/goods/6436/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point4" style="height:139px;background-image: url(/static/images/070101001201-001.jpg)">
						<div class="point-name" title="[中粮旗舰店] 福临门泰国茉莉香米 5kg/袋">[中粮旗舰店] 福临门泰国茉莉香米 5kg/袋</div>
						<p class="price">¥ <span>77.70</span></p>
						
					</div>
				</a>
				<a href="/goods/6751/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point5" style="margin-top: 12px;height:139px;background-image: url(/static/images/010108000300-001.jpg)">
						<div class="point-name" title="[严继业] 云南菠萝 约0.75kg/个">[严继业] 云南菠萝 约0.75kg/个</div>
						<p class="price">¥ <span>6.90</span></p>
					</div>
				</a>
			</div>
			<div class="wrap-point">
				<a href="/goods/7118/0/0" style="color:#666666;text-decoration:none;">
					<div class="point-price point6 lg-point-price" style="height: 310px;background-image:url(/static/images/030400003102-001.jpg);">
						<div class="point-name" title="[聚品坊] 意文黑啤酒 500ml/瓶">[聚品坊] 意文黑啤酒 500ml/瓶<p class="price">¥ <span>6.50</span></p></div>
						
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="activity-img w-1250">
		<div class="sing clearfix sing-bg" style="background-image:url('static/images/甄选导航条-0319.png')">
			
		</div>
		<div class="chunk">
		
		<a href="/goods/6881/0/0"><img src="static/picture/pc-首页甄选-20180504-6881-1.png"/></a>
		</div>
		<div class="chunk">
			<div class="top">
				
	            <a href="/goods/8010/0/0"><img src="static/picture/pc-首页甄选-20180504-8010-2.png"/></a>
            </div>
			
			<div class="top">
				
	            <a href="/goods/4020/0/0"><img src="static/picture/pc-首页甄选-20180504-4020-3.png"/></a></div>
		  </div>
		<div class="chunk">
			<div class="top">
				
	             <a href="/goods/6809/0/0"><img src="static/picture/pc-首页甄选-20180504-6809-4.png"/></a>
	        </div>
	             
			<div class="top">
			     
                <a href="/goods/8269/0/0"><img src="static/picture/pc-首页甄选-20180504-8269-5.png"/></a>
             </div>
		</div>
		<div class="chunk">
			
	        <a href="/goods/292/0/0"><img src="static/picture/pc-首页甄选-20180504-292-6.png"/></a>
        </div>
		<div class="chunk">
			<div class="top">
				
	            <a href="/goods/5790/0/0"><img src="static/picture/pc-首页甄选-20180504-5790-7.png"/></a>
            </div>
			<div class="top">
				
	            <a href="/goods/5442/0/0"><img src="static/picture/pc-首页甄选-20180507-5442-8.png"/></a>
            </div>
		</div>
	</div>
	<!-- 货柜商品 -->
	<div class="lump w-1250">
	
	
	<div class="w-1250 classify">
		<!-- <div class="sing clearfix"><span class="big" value="4" pageindex="1"><i class="iconfont"></i>换一组</span></div> -->
		<div class="chunk-d fenlei4" style="background:url(/static/images/shuiguozuo-112.png) no-repeat;background-size: 100% 100%;">
			<ul class="chunk-d-ul bigContain">
				<li  class="chunk-d-li" value="进口水果">苹果</li>
				<li  class="chunk-d-li" value="进口水果">葡萄/提子</li>
				<li  class="chunk-d-li" value="进口水果">橙/柚</li>
				<li  class="chunk-d-li" value="进口水果">奇异果</li>
				<li  class="chunk-d-li" value="进口水果">火龙果</li>
				<a href="/elastic/searchTypeGoods?id=128" style="text-decoration:none;"><li  class="chunk-d-li" style="color: red;">更多</li></a>
                        
					
			</ul>
		</div>
		<div class="chunk-z" value="4">
			<ul class="chunk-z-ul bigul"> 
				<input type="hidden" class="countpage" value="1">
				<a href="/http://www.xmy365.com/goods/6365/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010202000801-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[宜品生活] 澳大利亚金手指黑提 500g/盒">[宜品生活] 澳大利亚金手指黑提 500g/盒</p>
						<p class="money">￥34.50</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/306/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206000101-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[超奇果业] 越南红心火龙果 1个/盒(约500g)">[超奇果业] 越南红心火龙果 1个/盒(约500g)</p>
						<p class="money">￥17.30</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/7710/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206006201-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[臻品果集] 泰国莲雾 3个/盒(约100g)">[臻品果集] 泰国莲雾 3个/盒(约100g)</p>
						<p class="money">￥16.50</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/7712/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206006101-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[臻品果集] 泰国山竹 约500g/盒">[臻品果集] 泰国山竹 约500g/盒</p>
						<p class="money">￥31.10</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/317/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206004101-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[渝之果] 泰国榴莲 约2.5kg/个">[渝之果] 泰国榴莲 约2.5kg/个</p>
						<p class="money">￥132.50</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/8010/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010207003401-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[臻品果集] 智利黑布林 2个/盒(约450g)">[臻品果集] 智利黑布林 2个/盒(约450g)</p>
						<p class="money">￥15.90</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/318/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206004401-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[渝之果] 都乐菲律宾菠萝 1个/盒(约1.25kg)">[渝之果] 都乐菲律宾菠萝 1个/盒(约1.25kg)</p>
						<p class="money">￥18.40</p>
					</li>
				</a>
				<a href="/http://www.xmy365.com/goods/7711/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010207002901-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[臻品果集] 希腊绿果猕猴桃 约500g/盒">[臻品果集] 希腊绿果猕猴桃 约500g/盒</p>
						<p class="money">￥30.90</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/7713/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010207002801-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[臻品果集] 秘鲁红提 500g/盒">[臻品果集] 秘鲁红提 500g/盒</p>
						<p class="money">￥22.60</p>
					</li>
				</a>
	
				<a href="/http://www.xmy365.com/goods/7903/0/0">
					<li class="chunk-z-li">
						<div class="img">
							<img alt="" src="./static/picture/010206001503-001.jpg" class="shop-img">
						</div>
						<p class="del" title="[宜品生活] 台湾水仙芒 1个/盒(约350g)">[宜品生活] 台湾水仙芒 1个/盒(约350g)</p>
						<p class="money">￥13.80</p>
					</li>
				</a>
			</ul>
		</div>
		<div class="chunk-x">
				
			<div class="chunk-x-top">
			
			<a href="/goods/309/0/0"><img src="static/picture/pc-首页货柜-进口水果-20180428-309-1.png"/></a>
			</div>
		
			<div class="chunk-x-top">
			
			<a href="/goods/7903/0/0"><img src="static/picture/pc-首页货柜-进口水果-20180428-7903-2.png"/></a>
			</div>
				
		</div>
	</div>
	

</div>
<footer>
    <div class="footer-auto">
<!--         <p>
            <a style="color: white;text-decoration:none;" href="/news/index?ter=499&chd=493">关于我们</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="/news/index?ter=499&chd=506">合作伙伴</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="/news/index?ter=499&chd=507">营销中心</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="/news/index?ter=499&chd=508">诚征英才</a><span>|</span>
            <a style="color: white;text-decoration:none;" href="/news/index?ter=499&chd=509">联系我们</a>
        </p >-->
        
        
		 <p>香满圆旗下：重庆菜园坝农产品市场集群（线下） |  B2C电商平台 、 社区超市订购平台（线上）</p>
		 <p class="mt10">Copyright  2009-2013 网上购物 All Rights Reserved 重庆香满圆农产品有限公司</p>
		 <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
		 <p class="mt10"><a href="/http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a></p>
        
        
       <!--  <p class="mt10">Copyright © 2009-2013 网上购物  All Rights Reserved 重庆香满圆农产品有限公司</p>
        <p class="mt10">增值电信业务经营许可证：渝B2-20120004</p>
        <p class="mt10"><a href="/http://www.miitbeian.gov.cn" style="color: white;text-decoration: underline">渝ICP14001106号-8</a> </p> -->
    </div>
    <div class="beian">
        <ul class="beian-ul">
            <a href="/http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"><li class="beian-li"><img src="static/picture/biean1.png"/></li></a>
            <a href="/http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="static/picture/biean2.png"/></li></a>
            <a href="/http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="static/picture/biean3.png"/></li></a>
            <a href="/http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="static/picture/biean4.png"/></li></a>
            <a href="/http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="static/picture/biean5.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div>  
</footer>

<script type="text/javascript" src="static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="static/js/public.js"></script>

<script type="text/javascript" src="static/js/easydialog.min.js"></script>

<script type="text/javascript" src="static/js/laypage.js"></script>
<![if lt IE 9]>
  <script src="static/js/json.js" charset="utf-8"></script>
<![endif]>

<script src="static/js/json.js" charset="utf-8"></script>
<script src="static/js/2d7b7f9cc20348b59717d78adbf27aaa.js" charset="utf-8"></script>
<!-- 搜索js -->
<script type="text/javascript" src="static/js/goods_search.js"></script>




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
		                                <p class="title" style="background:url(/static/images/水果.png) no-repeat;background-postion:-20px;"><a href="/home/list" style="color: red;">水果</a></p>
		                                
		                                	<p class="title"><a href="/home/list">国产水果</a></p>
		                                
		                                	<p class="title"><a href="/home/list">进口水果</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生鲜.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/干果干副.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=137" style="color: red;">干副干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=138">炒货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=139">干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=140">干货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=141">山珍菌类</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/粮油副食.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=143" style="color: red;">粮油副食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=144">调味品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=145">方便速食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=146">米面粮油</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=147">食用油</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/休闲零食.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=148" style="color: red;">休闲零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=149">饼干糕点</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=151">蜜饯果脯</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=152">膨化食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=153">其他零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=154">肉类零食</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/酒水饮料.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=156" style="color: red;">酒水饮料</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=157">白酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=158">牛奶乳制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=159">啤酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=160">葡萄酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=161">饮料/水</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/冲调茶饮.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=162" style="color: red;">冲调茶饮</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=163">茶</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=164">冲调饮品/奶粉</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生活日用.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=172" style="color: red;">生活日用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=173">个人护理</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=174">清洁用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=175">纸品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/跨境专区.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=180" style="color: red;">跨境专区</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=181">家居生活</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=182">美妆个护</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=183">母婴用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=184">生活数码</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=298">食品保健</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
                            
                        		 
                            
                        		 
                            
                            <li>
                                <p class="title" style="background:url() no-repeat;background-postion:-20px;"><a href="/activity/findActivity?show=2" style="color: red;">热销活动</a></p>
                               	<p class="title"><a href="/activity/findActivity#bing?show=2">冰点价</a></p>
                               	<p class="title"><a href="/activity/findActivity#dayday?show=2">限时抢购</a></p>
                               	<p class="title"><a href="/activity/findActivity#buy?show=2">买即赠</a></p>
                               	<p class="title"><a href="/activity/findActivity#week?show=2">每周特惠</a></p>
                               	<p class="title"><a href="/activity/findActivity#all?show=2">整件惠</a></p>
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