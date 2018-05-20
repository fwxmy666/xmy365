<!DOCTYPE html>
<html>
  <head>
  	<title>@yield('title')</title>
	



<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/static/css/style_1.css">

<link rel="stylesheet" type="text/css" href="/static/css/easydialog_1.css">

	<link rel="stylesheet" type="text/css" href="/static/css/type_search_1.css">
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
	<img alt="" src="/static/picture/top_1.png" style="width: 100%">
</div> -->

 

<div class="wrap-roof">
   <div class="roof">
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
        <div class="right">
            <ul class="right-list clearfix">
                <li class="net-all"><i class="iconfont">&#xe600;</i>网站导航
                    <div class="net-nav">
                        <ul>
                        	
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/水果_1.png) no-repeat;background-postion:-20px;"><a href="/home/list" style="color: red;">水果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=125">国产水果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=128">进口水果</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生鲜_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/干果干副_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=137" style="color: red;">干副干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=138">炒货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=139">干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=140">干货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=141">山珍菌类</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/粮油副食_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=143" style="color: red;">粮油副食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=144">调味品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=145">方便速食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=146">米面粮油</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=147">食用油</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/休闲零食_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=148" style="color: red;">休闲零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=149">饼干糕点</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=151">蜜饯果脯</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=152">膨化食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=153">其他零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=154">肉类零食</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/酒水饮料_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=156" style="color: red;">酒水饮料</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=157">白酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=158">牛奶乳制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=159">啤酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=160">葡萄酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=161">饮料/水</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/冲调茶饮_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=162" style="color: red;">冲调茶饮</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=163">茶</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=164">冲调饮品/奶粉</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生活日用_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=172" style="color: red;">生活日用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=173">个人护理</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=174">清洁用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=175">纸品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/跨境专区_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=180" style="color: red;">跨境专区</a></p>
		                                
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
                        <div class="img-wrap"><img src="/static/picture/b2cwx_1.jpg" alt=""><p>扫码关注微信端</p></div>
                        <div class="img-wrap"><img src="/static/picture/b2cpc_1.png" alt=""><p>扫码进入移动端</p></div>
                        <!-- <div style="width:130px;margin-top:-5px;"><img src="/static/picture/new-yh_1.png" style="width:100%;display:block"></div> -->
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
            	<div class="logo" style="cursor: pointer;"><img src="/static/picture/logo_1.png"/></div>
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
            <div class="tell"><img src="/static/picture/400_1.png"/></div>
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
					
						 
								<li class="classify-li"><div class="publiccategory" value="124"><i class="icon icon1" style="background:url(/static/images/水果_1.png) no-repeat;"></i>水果</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=125" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0101_1.png" alt="">国产水果</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=128" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0102_1.png" alt="">进口水果</div></a> 
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
										
											<a href="/goods/6741/0/0"><span class="thepic" style="background:url(/static/images/chelizi10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="129"><i class="icon icon1" style="background:url(/static/images/生鲜_1.png) no-repeat;"></i>生鲜食品</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=131" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0203_1.png" alt="">海鲜水产</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=682">贝类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=683">蟹类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=339">鱼类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=340">虾类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=131&wordId=341">其他海产</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=132" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0201_1.png" alt="">活禽蛋类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=677">鸭蛋</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=342">鸡蛋</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=343">鸭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=344">鸡</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=132&wordId=678">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=133" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0202_1.png" alt="">精品肉类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=346">鲜牛肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=348">鲜猪肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=679">冰冻牛肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=680">冰冻家禽</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=133&wordId=681">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=134" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0205_1.png" alt="">精制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=134&wordId=352">半制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=134&wordId=355">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=135" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0204_1.png" alt="">菌类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=135&wordId=357">牛肝菌</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=135&wordId=359">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=136" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0206_1.png" alt="">腌腊制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=361">腊猪肉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=363">香肠</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=364">板鸭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=136&wordId=365">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=129" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/3462/0/0"><span class="thepic" style="background:url(/static/images/jidan10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="137"><i class="icon icon1" style="background:url(/static/images/干果干副_1.png) no-repeat;"></i>干副干果</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=138" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0401_1.png" alt="">炒货</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=368">瓜子</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=370">花生</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=371">豌豆</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=138&wordId=375">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=139" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0402_1.png" alt="">干果</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=140" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0403_1.png" alt="">干货</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=389">水产</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=390">滋补食材</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=391">药食同源</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=392">参类滋补</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=140&wordId=398">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=141" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0404_1.png" alt="">山珍菌类</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=401">木耳</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=402">香菇</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=406">姬松茸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=141&wordId=407">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=137" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4147/0/0"><span class="thepic" style="background:url(/static/images/ganguo10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="143"><i class="icon icon1" style="background:url(/static/images/粮油副食_1.png) no-repeat;"></i>粮油副食</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=144" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0701_1.png" alt="">调味品</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=145" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0703_1.png" alt="">方便速食</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=426">方便面</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=427">方便饭</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=429">八宝粥</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=145&wordId=3072">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=146" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0702_1.png" alt="">米面粮油</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=431">大米</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=432">杂粮</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=433">豆类</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=434">面食</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=146&wordId=435">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=147" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0704_1.png" alt="">食用油</div></a> 
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
										
											<a href="/goods/5103/0/0"><span class="thepic" style="background:url(/static/images/huoguo10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="148"><i class="icon icon1" style="background:url(/static/images/休闲零食_1.png) no-repeat;"></i>休闲零食</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=149" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0501_1.png" alt="">饼干糕点</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=151" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0503_1.png" alt="">蜜饯果脯</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=470">梅类制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=471">葡萄干</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=472">枣类制品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=151&wordId=474">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=152" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0502_1.png" alt="">膨化食品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=476">薯条</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=477">薯片</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=478">爆米花</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=152&wordId=739">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=153" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0505_1.png" alt="">其他零食</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=154" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0504_1.png" alt="">肉类零食</div></a> 
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
										
											<a href="/goods/4400/0/0"><span class="thepic" style="background:url(/static/images/xiuxian10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="156"><i class="icon icon1" style="background:url(/static/images/酒水饮料_1.png) no-repeat;"></i>酒水饮料</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=157" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0301_1.png" alt="">白酒</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=158" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0304_1.png" alt="">牛奶乳制品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=511">酸奶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=512">纯牛奶</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=158&wordId=513">儿童牛奶</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=159" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0303_1.png" alt="">啤酒</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=515">山城</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=516">超纯</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=159&wordId=517">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=160" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0302_1.png" alt="">葡萄酒</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=519">红葡萄酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=520">白葡萄酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=521">洋酒</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=160&wordId=522">起泡酒</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=161" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0305_1.png" alt="">饮料/水</div></a> 
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
										
											<a href="/goods/4023/0/0"><span class="thepic" style="background:url(/static/images/niunai10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="162"><i class="icon icon1" style="background:url(/static/images/冲调茶饮_1.png) no-repeat;"></i>冲调茶饮</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=163" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0601_1.png" alt="">茶</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=164" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0602_1.png" alt="">冲调饮品/奶粉</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=550">咖啡</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=551">蜂蜜</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=552">成人奶粉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=164&wordId=558">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=162" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/4776/0/0"><span class="thepic" style="background:url(/static/images/cha10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
								<li class="classify-li"><div class="publiccategory" value="172"><i class="icon icon1" style="background:url(/static/images/生活日用_1.png) no-repeat;"></i>生活日用品</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=173" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0901_1.png" alt="">个人护理</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=174" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0902_1.png" alt="">清洁用品</div></a> 
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
				                                		<a href="/elastic/typeGoods?typeId=175" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/0903_1.png" alt="">纸品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=691">卷纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=692">抽纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=693">手帕纸</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=175&wordId=694">湿巾纸</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=172" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/5458/0/0"><span class="thepic" style="background:url(/static/images/shengh10210011_1.png) no-repeat"></span></a>
										
									</div>
								</li>
						
					
						 
					
						 
								<li class="classify-li"><div class="publiccategory" value="180"><i class="icon icon1" style="background:url(/static/images/跨境专区_1.png) no-repeat;"></i>跨境专区</div>
									<div class="meau">
										<div class="overlay"></div>
										<ul class="meau-content clearfix">
											
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=181" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/1604_1.png" alt="">家居生活</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=730">家纺</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=731">洗衣液</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=181&wordId=732">清洁剂</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=182" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/1603_1.png" alt="">美妆个护</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=726">面部护理</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=727">身体护理</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=728">彩妆/香水</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=729">美发护发</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=182&wordId=2851">其他</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=183" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/1602_1.png" alt="">母婴用品</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=722">奶粉</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=723">宝宝洗护</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=724">宝宝用品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=183&wordId=725">孕妇用品</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=184" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/1601_1.png" alt="">生活数码</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=719">家用电器</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=720">家居生活</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=184&wordId=721">厨房餐具/烹饪用具</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
												
				                                	<li class="meau-item">
				                                		<a href="/elastic/typeGoods?typeId=298" style="text-decoration: none;color: black;display: block;width: 190px;height: 35px;"><div class="meau-item-title"><img src="/static/picture/1605_1.png" alt="">食品保健</div></a> 
														<div class="meau-item-list">
															
				                                				<a href="/elastic/typeGoods?typeId=298&wordId=734">食品</a>
				                               				
				                                				<a href="/elastic/typeGoods?typeId=298&wordId=738">保健品</a>
				                               				
														</div>
				                                	</li>
			                                	
			                                
										</ul>
										<a href="/elastic/topGoods?oneId=180" class="all-thetype">全部分类 > ></a>
										
											<a href="/goods/6254/0/0"><span class="thepic" style="background:url(/static/images/kuaj102100111_1.png) no-repeat"></span></a>
										
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
				<div class="rr" hidden="hidden" id="imageShow"><img src="/static/picture/rr_1.png"/></div>
			</a>
		</div>
	</div>
</div>




 <!--内容部分-->
<div class="container container-white">
     @section('content')

     @show
		                 
</div>
		              
<!--2017-10-31 新增顶部浮现搜索-->
<div class="floattop fadein">
	<div class="floattop-overlay"></div>
	<div class="floattop-content clearfix">
		<div class="floattop-logo">
			<img src="/static/picture/minlogo_1.png" alt="">
			<div class="net-nav">
                        <ul>
                        	
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/水果_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=124" style="color: red;">水果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=125">国产水果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=128">进口水果</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生鲜_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=129" style="color: red;">生鲜食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=131">海鲜水产</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=132">活禽蛋类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=133">精品肉类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=134">精制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=135">菌类</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=136">腌腊制品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/干果干副_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=137" style="color: red;">干副干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=138">炒货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=139">干果</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=140">干货</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=141">山珍菌类</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/粮油副食_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=143" style="color: red;">粮油副食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=144">调味品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=145">方便速食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=146">米面粮油</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=147">食用油</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/休闲零食_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=148" style="color: red;">休闲零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=149">饼干糕点</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=151">蜜饯果脯</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=152">膨化食品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=153">其他零食</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=154">肉类零食</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/酒水饮料_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=156" style="color: red;">酒水饮料</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=157">白酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=158">牛奶乳制品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=159">啤酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=160">葡萄酒</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=161">饮料/水</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/冲调茶饮_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=162" style="color: red;">冲调茶饮</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=163">茶</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=164">冲调饮品/奶粉</a></p>
		                                
		                            </li>
	                            
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/生活日用_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=172" style="color: red;">生活日用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=173">个人护理</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=174">清洁用品</a></p>
		                                
		                                	<p class="title"><a href="/elastic/typeGoods?typeId=175">纸品</a></p>
		                                
		                            </li>
	                            
                            
                        		 
                            
                        		 
		                            <li>
		                                <p class="title" style="background:url(/static/images/跨境专区_1.png) no-repeat;background-postion:-20px;"><a href="/category/findCategoryGoods?id=180" style="color: red;">跨境专区</a></p>
		                                
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
		<div class="commidi-icon"><img src="/static/picture/ad-1_1.png" alt=""></div>
	</div>
</div>
<!--2017-10-31 新增顶部浮现搜索end-->
  




<div class="floatleft">
	<ul class="floatleft-ul">
		<li class="floatleft-li floatleft-lis cart"><span class="cart"><img src="/static/picture/left-cart_1.jpg"/></span><p onclick="window.location='/cart/shoppingCart'" id="cartnum">购物车0</p>
			<ul class="cart-ul" id="downCart">
				
			</ul>
		</li>
		<li class="floatleft-li collects-li"><span class="floatleft-img"><img onclick="window.location='/center/toCollect?pageIndex=1&set=14&category=null'" src="/static/picture/sc_1.png"/></span>
			<div class="collects">我的收藏</div>
		</li>
		<li class="floatleft-li my-xmy"><span class="floatleft-img"><img onclick="window.location='/center/centerIndex?set=1'" src="/static/picture/wd_1.png"/></span>
			<div class="my-xmys">我的香满圆</div>
		</li>
		<a href="/center/toShopCard?pageIndex=1&set=10&status=3">
			<li class="floatleft-li recharge"><span class="floatleft-img"><img src="/static/picture/c_1.png"/></span>
				<div class="recharges">立即充值</div>
			</li>
		</a>
		<li class="floatleft-li QQ" id="qianniu"><span class="floatleft-img"><img src="/static/picture/information_1.png"/></span>
			<div class="QQs">在线客服</div>
		</li>
	</ul>
	<ul class="floatleft-bottom-ul">
		<li class="floatleft-bottom-li hot-line"><span class="floatleft-img"><img src="/static/picture/dh_1.jpg"/></span>
			<div class="hot-lines"><img src="/static/picture/tb_ipone_number_1.jpg"/></div>
		</li>
		<li class="floatleft-bottom-li ewm">
			<span class="floatleft-img"><img src="/static/picture/ewm_1.jpg"/></span>
			<div class="pop-up">
				<div class="pop-up-over"></div>
				<div class="app">
					<div class="img"><img src="/static/picture/b2cwx_1.jpg"/></div><p class="text">扫码关注微信端<br/>
				</div>
				<div class="app yd">
					<div class="img"><img src="/static/picture/b2cpc_1.png"/></div><p class="text">扫码进入移动端</p>
				</div>
			</div>
		</li>
		<li class="floatleft-bottom-li return-top"><span><i class="iconfont">&#xe629;</i></span><a href="/javascript:scroll(0,0)" style="text-decoration:none;"><p style="color: white;">返回顶部</p></a></li>
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
	           		
	           			
	           				<a href="/news/index?ter=0&chd=0" style="text-decoration:none;" class="detailss-lia"><p>购物流程</p></a>
	           			
	           				<a href="/news/index?ter=0&chd=1" style="text-decoration:none;" class="detailss-lia"><p>免费注册</p></a>
	           			
	           				<a href="/news/index?ter=0&chd=2" style="text-decoration:none;" class="detailss-lia"><p>积分说明</p></a>
	           			
	           				<a href="/news/index?ter=0&chd=3" style="text-decoration:none;" class="detailss-lia"><p>热销活动</p></a>
	           			
	           				<a href="/news/index?ter=0&chd=4" style="text-decoration:none;" class="detailss-lia"><p>帮助中心</p></a>
	           			
	           		
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">支付方式</p>
	           		
	           		
	           			
	           				<a href="/news/index?ter=1&chd=0" style="text-decoration:none;" class="detailss-lia"><p>货到付款</p></a>
	           			
	           				<a href="/news/index?ter=1&chd=1" style="text-decoration:none;" class="detailss-lia"><p>微信支付</p></a>
	           			
	           				<a href="/news/index?ter=1&chd=2" style="text-decoration:none;" class="detailss-lia"><p>网银支付</p></a>
	           			
	           				<a href="/news/index?ter=1&chd=3" style="text-decoration:none;" class="detailss-lia"><p>购物卡支付</p></a>
	           			
	           				<a href="/news/index?ter=1&chd=4" style="text-decoration:none;" class="detailss-lia"><p>支付宝支付</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">配送方式</p>
	           		
	           		
	           			
	           				<a href="/news/index?ter=2&chd=0" style="text-decoration:none;" class="detailss-lia"><p>免运费政策</p></a>
	           			
	           				<a href="/news/index?ter=2&chd=1" style="text-decoration:none;" class="detailss-lia"><p>配送服务及承诺</p></a>
	           			
	           				<a href="/news/index?ter=2&chd=2" style="text-decoration:none;" class="detailss-lia"><p>验货签收</p></a>
	           			
	           				<a href="/news/index?ter=2&chd=3" style="text-decoration:none;" class="detailss-lia"><p>物流查询</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">售后服务</p>
	           		
	           		
	           			
	           				<a href="/news/index?ter=3&chd=0" style="text-decoration:none;" class="detailss-lia"><p>退换货流程</p></a>
	           			
	           				<a href="/news/index?ter=3&chd=1" style="text-decoration:none;" class="detailss-lia"><p>退换货政策</p></a>
	           			
	           				<a href="/news/index?ter=3&chd=2" style="text-decoration:none;" class="detailss-lia"><p>订单取消</p></a>
	           			
	           				<a href="/news/index?ter=3&chd=3" style="text-decoration:none;" class="detailss-lia"><p>退款说明</p></a>
	           			
	           		
	            </li>
            
	            <li class="detailss-li">
	           		<p class="tit">香满圆</p>
	           		
	           		
	           			
	           				<a href="/news/index?ter=4&chd=0" style="text-decoration:none;" class="detailss-lia"><p>公司简介</p></a>
	           			
	           				<a href="/news/index?ter=4&chd=1" style="text-decoration:none;" class="detailss-lia"><p>最新公告</p></a>
	           			
	           				<a href="/news/index?ter=4&chd=2" style="text-decoration:none;" class="detailss-lia"><p>联系客服</p></a>
	           			
	           		
	            </li>
            
            <li class="detailss-li last-li clearfix">
                <p class="img-wrapp first"><img src="/static/picture/b2cwx_1.jpg"><span class="color-green text-center">扫码关注微信端</span></p>
                <p class="img-wrapp"><img src="/static/picture/b2cpc_1.png"><span class="color-green">扫码进入移动端</span></p>
            </li>
            <div style="clear: both;"></div>
        </ul>
        <!-- <div class="logo-wrap" id="downShow" hidden="hidden">
            <img src="/static/picture/logopic_1.png" alt="">
        </div> -->
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
            <a href="/http://www.cqgseb.cn/ztgsgl/WebSiteMonitoring/WebUI/XFWQ/Index.aspx?xh=17" target="_blank"><li class="beian-li"><img src="/static/picture/biean1_1.png"/></li></a>
            <a href="/http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50010302000205" target="_blank"><li class="beian-li"><img src="/static/picture/biean2_1.png"/></li></a>
            <a href="/http://113.207.120.45:7010/wljyzbs/index.html?sfdm=120150115151516296646#/index.html?sfdm=120150115151516296646" target="_blank"><li class="beian-li"><img src="/static/picture/biean3_1.png"/></li></a>
            <a href="/http://www.cqtransit.com/" target="_blank"><li class="beian-li"><img src="/static/picture/biean4_1.png"/></li></a>
            <a href="/http://www.cqgyjt.com/" target="_blank"><li class="beian-li"><img src="/static/picture/biean5_1.png"/></li></a>
            <div style="clear: both;"></div>
        </ul>
    </div>  
</footer>

<script type="text/javascript" src="/static/js/jquery-1.9.1.min_1.js"></script>
<script type="text/javascript" src="/static/js/public_1.js"></script>

<script type="text/javascript" src="/static/js/easydialog.min_1.js"></script>

<script type="text/javascript" src="/static/js/laypage_1.js"></script>
<![if lt IE 9]>
  <script src="/static/js/json_1.js" charset="utf-8"></script>
<![endif]>

<script src="/static/js/json_1.js" charset="utf-8"></script>
<script src="/static/js/5b0b424a2c984f5abcf1f3caed48eef9.js" charset="utf-8"></script>
<!-- 搜索js -->
<script type="text/javascript" src="/static/js/goods_search_1.js"></script>

 


<div class="dialog-box" id="qian" style="display:none;border:1px solid #358812;">
  	<div id="title" style=" height: 30px; line-height:30px;font-size:13px;color:#444;border-bottom:1px solid #358812;background-image: linear-gradient(to bottom,#D1F5BF 50%,#bde9AB 50%);padding-left:15px;position:relative;background-color:#bde9ab;">
  	<i class="iconfont" style="margin-right:7px;font-size:16px;">&#xe650;</i>杨桃妹妹
  	<i id="close" class="iconfont" style="float:right;margin-right:15px;background:#FFF;color:#358812;font-size:12px;border:1px solid #358812;line-height:normal;padding:1px 2px;border-radius:3px;position:relative;top:7px;cursor: pointer;">&#xe676;</i></div>
</div>

  <script type="text/javascript" src="/static/js/goods_search_1.js"></script>
  <script type="text/javascript" src="/static/js/menu_1.js"></script>
  <script type="text/javascript" src="/static/js/type_search_1.js"></script>
 @section('js')

 @show
  </body>
</html>
