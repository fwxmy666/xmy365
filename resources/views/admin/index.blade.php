@extends('layout.admin')


@section('title',$title)


@section('content')
<center style="font-size: 20px;"> 
    <span>现在是北京时间:</span>
    <br/><br/>
    <div id="dvs"></div>

    <marquee id='text' behavior="" direction="left" style='font-size:40px;width:800px;height:40px;margin-top:150px;line-height:40px;'>欢迎您登录香满圆后台管理系统!</marquee>
</center>


@endsection



@section('js')

<script>

    var dvs = document.getElementById('dvs');
        
        setInterval(function(){

            var d = new Date();

            //获取年
            var y = d.getFullYear();

            //获取月份 0-11  1-12
            var m = d.getMonth()+1;
            if(d < 10){
                d = '0'+d;
            }

            // 获取天
            var t = d.getDate();
            if(t < 10){
                t = '0'+t;
            }

            // 获取小时
            var h = d.getHours();
            if(h < 10){
                h = '0'+h;
            }

            //获取分钟
            var ms = d.getMinutes();
            if(ms < 10){
                ms = '0'+ms;
            }

            //获取秒  添加前导零
            var s = d.getSeconds();
            if(s < 10){
                s = '0'+s;
            }

            // 获取星期
            var ds = d.getDay();
            switch(ds){
                case 1: ds = '星期一';break;
                case 2: ds = '星期二';break;
                case 3: ds = '星期三';break;
                case 4: ds = '星期四';break;
                case 5: ds = '星期五';break;
                case 6: ds = '星期六';break;
                case 0: ds = '星期日';break;
            }


            dvs.innerHTML = y+'年'+m+'月'+t+'日&nbsp;&nbsp;&nbsp;'+h+':'+ms+':'+s+'&nbsp;&nbsp;&nbsp;'+ds;

           
        },1000)

</script>


@endsection