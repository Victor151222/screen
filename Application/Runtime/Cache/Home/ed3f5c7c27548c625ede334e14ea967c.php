<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <style>
      *{margin: 0;padding: 0;}
      body{background: #fff;}
      div{float: left;}
      #main{height: 700px;width: 800px;}
      #main1{position: relative;height: 700px;width: 500px;color:green;}
      .rank{
           width: 260px;height: 120px;position: absolute;
           top:50%;
           left:50%;
           margin-top:-60px;
           margin-left:-130px; 
           text-align: left; 
      }
    </style>
</head>
<body>
	<div id="main"></div>
    <div id="main1">
        <div class='rank'>
            <h3>重庆业务数据排名</h3>
            <ul>
                <li>业务排名 89.9分  第一</li>
                <li>大中型车辆驾驶人注册率 1%  第一</li>
                <li>道路运输企业注册率 2% 第一</li>
                <li>网上考试预约占比 3% 第一</li>
                <li>网上办牌办证业务占比  4% 第一</li>
            </ul>
        </div>
    </div>
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/china.js"></script>
<script>
var chart = echarts.init(document.getElementById('main'));
chart.setOption({
    // 鼠标悬浮
    tooltip: {
        trigger: 'item',
        formatter: '{a0}: {c0}'
    },
    backgroundColor: '#fff',
	title: {
        text: '全国业务排名',
        left: 'center',
        textStyle: {
            color: '#000'
        }
    },
    series: [
           {
            name: '业务排名',
            type: 'map',
            mapType: 'china',
            //鼠标是否允许缩放和漫游
            roam: false,
            // 地图标签
            label: {
                normal: {
                    show: true,
                },
                emphasis: {
                    show: true
                }
            },
            itemStyle:{
                normal:{label:{show:true}},
                emphasis:{label:{show:true}}
            },
            data:[
                {name: '北京', value:1},
                {name: '天津',value:1},
                {name: '上海', value:123},
                {name: '重庆', value:123},
                {name: '河北', value:123},
                {name: '河南', value:123},
                {name: '云南', value:123},
                {name: '辽宁', value:123},
                {name: '黑龙江',value:123},
                {name: '湖南',value:123},
                {name: '安徽', value:123},
                {name: '山东', value:123},
                {name: '新疆',value:123},
                {name: '江苏', value:123},
                {name: '浙江', value:123},
                {name: '江西', value:123},
                {name: '湖北', value:123},
                {name: '广西', value:123},
                {name: '甘肃', value:123},
                {name: '山西', value:123},
                {name: '内蒙古', value:123},
                {name: '陕西', value:123},
                {name: '吉林', value:123},
                {name: '福建', value:123},
                {name: '贵州', value:123},
                {name: '广东', value:123},
                {name: '青海', value:123},
                {name: '西藏', value:123},
                {name: '四川', value:123},
                {name: '宁夏', value:123},
                {name: '海南', value:123},
                {name: '台湾', value:123},
                {name: '香港', value:123},
                {name: '澳门', value:123}
            ]
        }
    ],
      animation: false
});
chart.on('click', function (params){
    if(params.name=='重庆'){
        window.open('<?php echo U('Chongqing/chongqing'); ?>','_blank','height=700,width=1340,top=00,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no,fullscreen=yes');
    }
});
</script>
</html>