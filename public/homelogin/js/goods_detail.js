$(function($){
	var isLogin = $("#isLogin").val();  //是否登录   1未登录
	var activityId=$("#actiId").val();//活动id
	var isPutway = $("#isPutway").val(); //商品上下架状态
	window.setInterval(function(){ShowCountDown($("#endTime").val(),$("#activityTypeId").val(),'#time');}, interval);
	shoppingCart();
	$(".front").click(function(){
    	if($(".classify-ul").hasClass("show")){
    		$(".classify-ul").slideUp().removeClass("show");
    	}else{
    		$(".classify-ul").slideDown().addClass("show");
    	}
    });
    $(".spec").on("click",".etalon",function(){
    	$(this).addClass("cur").siblings().removeClass("cur");
    });
    $(document).ready(function(){
	//加的效果
		$(".add").click(function(){
			var n=$(this).prev().val();
			var num=parseInt(n)+1;
		if(num==0){ return;}
			$(this).prev().val(num);
		});
	//减的效果
		$(".jian").click(function(){
			var n=$(this).next().val();
			var num=parseInt(n)-1;
		if(num==0){ return}
			$(this).next().val(num);
		});
	})
    //商品描述以及旁边的tab切换
    $(".tab-contentt>div:gt(0)").hide();
    $(".tab-navv li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index=$(".tab-navv li").index(this);
        $("div.tab-contentt>div").eq(index).show().siblings().hide()
    });

	//第二个tab切换
    $(".tab-content-sec>div:gt(0)").hide();
    $(".tab-sec li").hover(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index=$(".tab-sec li").index(this);
        $("div.tab-content-sec>div").eq(index).show().siblings().hide();
    });

    //点击左右切换
	/*var n = 1, m = n , str = ""
		//list2 = [],
		item = $(".you-like .list-li");
	$(".next").click(function () {
	    if (n+4 > item.length) return ;
	    var m = n , str = "";
	    for(m;m<n+4;m++){
            str += "<li class='list-li'>" + item.eq(m).html() +"</li>";
		}
        n+4 >= item.length ? item.length : n++;
		$(".you-like .list-ul").html(str) ;
    });

    $(".before").click(function () {
        if (n < 0) return ;
        var m = n , str = "";
        for(m;m<n+4;m++){
            str += "<li class='list-li'>" + item.eq(m).html() +"</li>";
        }
        n <= 0 ? 0 : n--;
        $(".you-like .list-ul").html(str) ;
    })*/
	$(".front2").click(function(){
        if($(this).hasClass("add-add-css")){
            $(this).removeClass("add-add-css");
            $(".classify-ul").stop();
            $(".classify-ul").slideUp();
        }else{
            $(this).addClass("add-add-css");
            $(".classify-ul").slideDown();
        }
    });
    //加入购物车
    $(".add-cart").click(function(){
    	if (isPutway == 1) {
    		warnPop("该商品已下架，不能添加到购物车！");
    		return ;
    	}
    	var goodsnum = $("#goodsNum").val();//得到要加入购物车的数量
    	var reg = /^\+?[1-9]\d*$/;
		if (!reg.test(goodsnum)) {
			$("#goodsNum").val(1)
			warnPop("请输入正确的数量");
			return ;
		}
    	var goodsId = $(this).attr("value");
    	var activityId=$("#actiId").val();//活动id
    	var isby=$("#isby").val();
    	var isLogin=$("#isLogin").val();
    	if(isby==1){
    		//弹窗的确定按钮
    		warnPop("该活动商品不是今天商品请根据抢购日期进行抢购！");
    		return ;
    	}
    	//该商品没有活动的时候
    	if(activityId==0){
    		var mycars=new Array(7992,7993,7994,7995,7996,7997,8105);
	        if(contains(mycars,goodsId)&&isLogin==1){
	        	warnPop("亲，您未登录香满圆，请登陆后进行购买。");
        		return;
	        }
    		$.ajax({
    			url : "cart/add/"+goodsId+"/"+goodsnum,
    			type : "get",
    			success:function(data){
    				if(data == 0){//添加成功
    					shoppingCart();
    					warnPop("商品已添加到购物车！");
    				}else if (data == 50 || data==51){
    					warnPop("您购买的活动商品数量超限！");
    				}else if(data==52){
    					warnPop("此商品限单独购买。您的购物车有其他商品，请先结算后再购买活动商品！");
    				}else if(data==53){
	    					warnPop("购物车有需单独购买的商品，请先结算后再购买！");
    				}else if(data==54){
    					warnPop("亲~您已经购买过或购物车已包含该活动商品，不能重复购买哦！");
    				}else if(data==77){
    					warnPop("此商品已售罄，请购买其他商品！");
    				}else if(data==78){
    					warnPop("您已经购买过此活动商品，请购买其他商品！");
    				}
    			}
    		});
    	}else{
    		$.ajax({
    			url:"commons/user",
    			type:"get",
    			success:function(data){
    				if(data==0){
    					//活动商品添加购物车
    		    		var typeId=$("#typeId").val();//活动类型id
    		    		var activityName=$("#activityName").text();
    		    		var activityPrice=$("#activityPrice").text();
    		    		$.ajax({
    		    			url:"cart/addActivityGoods",
    		    			type:"post",
    		    			data:"activityName="+activityName+"&goodsId="+goodsId+
    		    			"&activityPrice="+activityPrice+"&activityId="+activityId+"&activityType="+typeId+"&num="+goodsnum,
    		    			success:function(data){
    		    				shoppingCart();
    		    				if(data == 0){//添加成功
    		    					shoppingCart();
    		    					warnPop("商品已添加到购物车！");
    		    				}
    		    				if(data==1){
    		    					warnPop("您超过了商品的限购！");
    		    				}
    		    				if(data==2){
    		    					warnPop("您购买的活动商品超过了活动商品的限购数量！");
    		    				}
    		    				if(data==3){
    		    					warnPop("购物车中存在单独购买的商品请先结算！");
    		    				}
    		    			}
    		    		});
    				}else{
    					//弹窗
    					warnPop("该商品是活动商品需要登录后购买！");
    				}
    			}
    		})
    	}
    });
    
    
    //直接购买
    $("#shopping").click(function(){
    	if (isPutway == 1) {
    		warnPop("该商品已下架，不能立即购买！");
    		return ;
    	}
    	var goodsnum = $("#goodsNum").val();//得到要加入购物车的数量
    	var reg = /^\+?[1-9]\d*$/;
		if (!reg.test(goodsnum)) {
			$("#goodsNum").val(1)
			warnPop("请输入正确的数量");
			return ;
		}
    	var goodsId = $("#goodsId").attr("value");
		var typeId=$("#typeId").val();//活动类型id
		var activityName=$("#activityName").text();
		var activityPrice=$("#activityPrice").text();
    	var isby=$("#isby").val();  
    	if (activityId != 0) {  //活动商品必须登录
	    		if (isLogin == 1) {
	    			warnPop("活动商品必须登录才能购买！");
	        		return ;
	    		} else {
	    			if ( isby==1 ) {
	    				warnPop("该活动商品不是今天商品请根据抢购日期进行抢购!");
	    				return ;
	    			}
	    			if (!checkActivityGoods(activityId,goodsId,goodsnum)) {//判断购买活动商品是否符合规则
	    				return ;
	    			} 
	        		$.ajax({
	        			url:"cart/addActivityGoods",
	        			type:"post",
	        			data:"activityName="+activityName+"&goodsId="+goodsId+
	        			"&activityPrice="+activityPrice+"&activityId="+activityId+"&activityType="+typeId+"&num="+goodsnum,
	        			success:function(data){
	        				if(data==3){
	        					warnPop("购物车有需单独购买的商品，请先结算后再购买！");
	        				}else{
	        					window.location.href = "/order/commitOrder/"+goodsId;
	        				}
	        			}
	        		})
	    	}	
    	} else {
    		var mycars=new Array(7992,7993,7994,7995,7996,7997,8105);
	        if(contains(mycars,goodsId)&&isLogin==1){
	        	warnPop("亲，您未登录香满圆，请登陆后进行购买。");
        		return;
	        }
    		$.ajax({
	    		url:"cart/delShoppingCart/"+goodsId,
	    		type : "get",
	    		success:function(data){
	    			$.ajax({
	    	    		url : "cart/add/"+goodsId+"/"+goodsnum,
	    	    		type : "get",
	    	    		success:function(data){
	    					if(data == 0){//添加成功
	    						window.location.href = "/order/commitOrder/"+goodsId;
	    					}else if (data == 50 || data==51){
	        					warnPop("您购买的活动商品数量超限！");
	        				}else if(data==52){
	        					warnPop("此商品限单独购买。您的购物车有其他商品，请先结算后再购买活动商品！");
	        				}else if(data==53){
	    	    					warnPop("购物车有需单独购买的商品，请先结算后再购买！");
	        				}else if(data==54){
	        					warnPop("亲~您已经购买过或购物车已包含该活动商品，不能重复购买哦！");
	        				}else if(data==77){
	        					warnPop("此商品已售罄，请购买其他商品！");
	        				}else if(data==78){
	        					warnPop("您已经购买过此活动商品，请购买其他商品！");
	        				}
	    				}
	    	    	});
	    		}
	    	});
	    }
    });
    window.setInterval(function(){
		time+=1000;
	}
	, interval);
});

//提示弹框
function warnPop(text) {
	var btnFn = function(){
		easyDialog.close();
		return false;
	}
	easyDialog.open({
	  container : {
	    header : "提示",
	    content : text,
	    yesFn : btnFn
	  }
	});
}

//检查是否符合购买活动商品规则
function checkActivityGoods(acttivityId,goodsId,num) {
 var flag = true;	
 $.ajax({ 
		url: "goods/checkActivityGoods",
		type: "POST",
		data:{"activityId":acttivityId,"goodsId":goodsId,"num":num},
		dataType: "JSON",
		async: false,
		success:function(result){
			 if (result.data == 1) {
				 flag = false;
				 warnPop("您已抢购过该活动的商品不能再次购买");
			 } 
			 if (result.data == 2){
				 flag = false;
				 warnPop("您购买的商品数量超过了活动限购的商品数量");
			 }
		}
	})
  return flag;
}

//请求评论类容
function getComment(goodsId,pageIndex){
	if(pageIndex != 1){
		pageIndex =parseInt($("#pageIndex").val())+1;
	}
	 $.ajax({
 		url: "goods/comment/list/"+goodsId+"/"+pageIndex,
 		type: "get",
 		success: function(data){
 					$("#comment").html(data);
 		   		}
 	});
}
//请求销售记录
function getDeal(goodsId,pageIndex){
	if(pageIndex != 1){
		pageIndex =parseInt($("#pageNo").val())+1;
	}
	 $.ajax({
 		url: "goods/deal/list/"+goodsId+"/"+pageIndex,
 		type: "get",
 		success: function(data){
 					$("#deal").html(data);
 		   		}
 	});
}
//倒计时
var interval = 1000; 
var nowDate = $("#daoji").val();
var wocao = new Date(nowDate);
var time=wocao.getTime();
function ShowCountDown(date,activityType,divname) 
{ 
	
	var now = new Date(time); 
	var endDate = new Date(time);
	if(activityType == 1){//冰点价
		if(endDate.getHours()>=12){
			//alert("---");
			var oneDay =  1000*60*60*24;
			//endDate=new Date(endDate+oneDay);//明天的时间
			endDate.setHours(12, 0, 0, 0);
		}else{
			endDate.setHours(12, 0, 0, 0);
		}
	}
	if(activityType == 2){//天天特价
		endDate.setHours(23, 59, 59, 59);
	}
	if(activityType == 3){
		endDate = new Date(date);
	}
	if(activityType == 0){
		endDate = new Date(date);
	}
	var leftTime=endDate.getTime()-now.getTime();
	var leftsecond = parseInt(leftTime/1000); 
	//var day1=parseInt(leftsecond/(24*60*60*6)); 
	var day1=Math.floor(leftsecond/(60*60*24)); 
	var hour=Math.floor((leftsecond-day1*24*60*60)/3600); 
	var minute=Math.floor((leftsecond-day1*24*60*60-hour*3600)/60); 
	var second=Math.floor(leftsecond-day1*24*60*60-hour*3600-minute*60);
	if(activityType==1 || activityType == 2){
		if(hour>9){
			$(divname).text("优惠还剩"+hour+"时"+minute+"分"+second+"秒开始");
		}else{
			$(divname).text("优惠还剩"+"0"+hour+"时"+minute+"分"+second+"秒开始");
		}
	}else{
		$(divname).text("优惠还剩"+day1+"天"+hour+"时"+minute+"分"+second+"秒开始");
	}
	//"脚本之家提示距离"+year+"年"+month+"月"+day+"日还有："+day1+"天"+hour+"小时"+minute+"分"+second+"秒"
}
function contains(arr, obj) {  
    var i = arr.length;  
    while (i--) {  
        if (arr[i] == obj) {  
            return true;  
        }  
    }  
    return false;  
}  
