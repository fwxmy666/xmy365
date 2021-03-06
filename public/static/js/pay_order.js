$(document).ready(function () {
    $(".sum>.level:gt(0)").hide();
  
    $(".choice-ul").on("click","li",function(){
    	if ($(this).text() == "货到付款") {
    		if ($("#isCrossGodods").val() == 0) { //含有跨境商品不能选择货到付款
    			pop("含有跨境商品或果琳专区的订单尚不支持货到付款！")
    			return;
    		}
    		if (!checkConsigneeAddress($("#address").val())) { //重庆以外尚不支持货到付款
    			pop("重庆主城以外尚不支持货到付款！")
    			return;
    		}
        }
        $(this).addClass("active").siblings().removeClass("active");
        $(this).find(".hx").show();
        $(this).siblings().find(".hx").hide();
        var index=$(".choice-ul li").index(this);
        $(".sum>.level").eq(index).show().siblings().hide();
        if($(this).text() == "支付宝支付"){
	    	 var orderId=$(".select").val();
	    	 var select=checkSelect();
			//网页支付宝支付
	    	 if(select){
	 			var balance = $("#payMentyMoney").val().trim();
	 			var total = $(".payment").children().first().text();
	 			if(parseFloat(balance) == parseFloat(total)){
	 				pop("个人账户已足额支付订单金额，无需选择其他支付方式！");
	 			}else{
	 				$("#curpopup").fadeIn();
	 				window.open("pay/appliy?orderid="+orderId+"&paytype=8&payAmount="+balance,true);
	 			}
	 		}else{
	 			$("#curpopup").fadeIn();
	 			window.open("pay/appliy?orderid="+orderId+"&paytype=8",true);
	 		}
        }
        if($(this).text()=="银联支付"){
        	 var orderId=$(".select").val();//订单id
	    	 var select=checkSelect();//是否选中了购物卡支付
	    	 if(select){
	    		 var balance = $("#payMentyMoney").val().trim();
	 			 var total = $(".payment").children().first().text();
	 			 if(parseFloat(balance) == parseFloat(total)){
	 			 	 pop("个人账户已足额支付订单金额，无需选择其他支付方式！");
	 			 }else{
	 				 $("#curpopup").fadeIn();
	 				 window.open("pay/appliy?orderid="+orderId+"&paytype=5&payAmount="+balance,true);
	 			 }
	    	 }else{
	    		 $("#curpopup").fadeIn();
	    		 window.open("pay/appliy?orderid="+orderId+"&paytype=5",true);
	    	 }
        }
    });
    //支付余额修改时
    $("#payMentyMoney").change(function(){
    	$("#pay").hide();
    	var val=$(this).val();
    	var select=checkSelect();
    	var regMoney = /^\d+(\.\d+)?$/;
    	var balance = $(".balance").text();
    	var autal = $(".payment").children().first().text();
    	if(!regMoney.test(val)){
    		pop("你的余额支付金额有问题！");
    		$(this).val("");
    	}
    	if(parseFloat(val) > parseFloat(balance)){
    		pop("您输入的金额不能大于的余额！");
    		$(this).val(balance);
		}
    	if(parseFloat(val)>parseFloat(autal)){
    		pop("您输入的金额不能大于的实际支付的金额！");
    		if(parseFloat(val) > parseFloat(balance) && (balance) < parseFloat(autal)){
        		$(this).val(balance);
    		}else{
    			$(this).val(autal);
    			if(parseFloat($(this).val()) == parseFloat(autal)){
    	    		$("#pay").show();
    	    		return false;
    	    	}else{
    	    		$("#pay").hide();
    	    	}
    		}
    	}
    	if(parseFloat($(this).val()) == parseFloat(autal)){
    		$("#pay").show();
    		return false;
    	}else{
    		$("#pay").hide();
    	}
		if(select){
			var balance = $("#payMentyMoney").val().trim();
			//微信支付
			weixinPay(balance);
		}else{
			//微信支付
			weixinPay(0);
		}
    });
    
    
    $(".option-ul").on("click","li",function(){
        $(this).find(".chunk").addClass("active");
        $(this).siblings().find(".chunk").removeClass("active");
        if($(this).find(".chunk").hasClass("active")){
            $(this).find(".active").append("<div class='xz'></div>");
        };
    });
   
    //支付倒计时
    var setTime = 40;
    var time=parseFloat($("#time").text());
    setTime=setInterval(function(){
        if(time<=0){
            clearInterval(setTime);
            return;
        }
        time--;
        $("#time").text(time);
    },1000);
    
    //激活购物卡弹窗
    $(".activate").click(function(){
    	if ($("#islogin").val() == 1) {
    		pop("请注册后再激活购物卡");
    	} else {
    		$("#activate-modal").fadeIn();
    	}
      
    });
    
    //提示弹框
    $(".opennewwindow").click(function(){
    	//$("#curpopup").fadeIn();
    })
  
    //已完成付款
    $(".curpopup-btnred").click(function(){
    	var orderId = $(".select").val();
    	window.location.href="order/detail/"+orderId;
    })
    
    //个人账户支付
    $(".select").click(function(){
    	var balance = $(".balance").text();
		var select=checkSelect();
		if(select){
			var autal = $(".payment").children().first().text();
			var pay = $(".pay").children().first().val();
			if(pay != "0" && pay !=""){
				$(".pay").children().first().val("");
				$("#pay").hide();
			}else{
				if(parseFloat(balance) >= parseFloat(autal)){
					$(".pay").children().first().val(autal);
					$("#pay").show();
				}else{
					$(".pay").children().first().val(balance);
				}
			}
    		document.getElementById("payMentyMoney").readOnly=false;
		}else{
			$(".pay").children().first().val("");
			$("#pay").hide();
			//微信支付
			weixinPay(0);
			document.getElementById("payMentyMoney").readOnly=true;
		}
    });
    
    var orderTotal = $(".status").find("input[name='orderTotal']").val(); //订单支付金额
    var cardBalance = $(".status").find("input[name='cardBalance']").val();  //购物余额
    //购物卡余额支付
    $("#pay").click(function(){
    	var select=checkSelect();
    	if(select){
    		if (parseFloat(cardBalance) >= parseFloat(orderTotal) ) {
    			var pay = $(".pay").children().first().val();
    			if (pay != '' && pay !="0") {
    				if(parseFloat(pay)>=parseFloat(orderTotal)) {
    					$("#balancePay").val(pay); //支付金额
    					$("#payMethod").val(4);//购物卡支付
    					$("#payOrder").submit();//提交表单
    				} else pop("支付金额小于订单总金额");
    			}
    		} else {
    			pop("购物卡余额不足");
    		}
    	}else{
    		pop("请勾选余额支付！")
    	}
    	
    });
    
    //货到付款支付
    $(".confirm").children().first().click(function(){
    	var specileGoods=$("#containsSpecileGoods").val();
    	if(specileGoods==0){
    		pop("该订单包含的商品不能货到付款！");
    		return false;
    	}
    	var pay = $(".pay").children().first().val();
    	var balance = $(".balance").text();
    	var check = null;
    	$(".select").each(function(){
    		check = this.checked;
    	})
    	if(check){
    		if(balance == "0"){
    			$("#balancePay").val("0.00");
    		}else{
    			$("#balancePay").val(pay);
    		}
    	}else{
    		$("#balancePay").val("0.00");
    	}
    	$("#payMethod").val(5);//货到付款
    	$("#payOrder").submit();//提交表单
    });
    //激活购物卡
    $(".action-active").click(function(){
    	var cardNo = $("#cardNo").val();
    	var cardPwd = $("#cardPwd").val();
    	var orderId = $(".select").val();
    	$.ajax({
    		url:"card/addShopingCard/"+cardNo+"/"+cardPwd+"/"+orderId,
    		type:"post",
    		success:function(data){
    			if(data == 0){
    				var text = "绑定购物卡成功";
    				var btnFn = function(){
    					easyDialog.close();
    					window.location.href = "order/payOrder/"+orderId;
    				  return false;
    				};
    				easyDialog.open({
    				  container : {
    				    header : '提示',
    				    content : text,
    				    yesFn : btnFn
    				  }
    				});
    			}
    			if(data == 1){
    				var text = "购物卡编号或密码错误！";
    				pop(text);
    			}
    			if(data == 2){
    				var text = "该卡已经被用户使用请用户核实！";
    				pop(text);
    			}
    		}
    	})
    });
    //没有余额支付时
    var select=checkSelect();
    if(select){
    	var balance = $("#payMentyMoney").val().trim();
    	var autal = $(".payment").children().first().text();
    	if(parseFloat(balance)<parseFloat(autal)){
    		weixinPay(balance);
    	}else{
    		weixinPay(0);
    	}
    }else{
    	weixinPay(0);
    }
});


//公共弹窗方法 简单的 
function pop(text){
	var btnFn = function(){
		easyDialog.close();
	  return false;
	};
	easyDialog.open({
	  container : {
	    header : '提示',
	    content : text,
	    yesFn : btnFn
	  }
	});
}
/**
 * 判断余额支付是否勾选
 */
function checkSelect(){
	var flag = false;
	$(".select").each(function(index,item){
		if(item.checked){
			flag = true;
		}
	});
	return flag;
}
function weixinPay(balance){
	//生成微信支付二维码
	var orderId=$(".select").val();
	$.ajax({
		url: "pay/goods",
		type:"post",
		data:"orderid="+orderId+"&paytype=7&payAmount="+balance,
		success:function(data){
			$("canvas").hide();
			$("#ewms").qrcode(data.code_url);
		}
	});
}
//判断收货人地址是否在重庆主城以内
function checkConsigneeAddress(area){
	if (area == '渝中区') {
		return true;
	}
	if (area == '江北区') {
		return true;
	}
	if (area == '沙坪坝区') {
		return true;
	}
	if (area == '南岸区') {
		return true;
	}
	if (area == '九龙坡区') {
		return true;
	}
	if (area == '渝北区') {
		return true;
	}
	if (area == '北碚区') {
		return true;
	}
	if (area == '大渡口区') {
		return true;
	}
	if (area == '巴南区') {
		return true;
	}
}
