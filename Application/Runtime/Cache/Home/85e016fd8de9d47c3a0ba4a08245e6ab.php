<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <style>
      *{margin: 0;padding: 0;}
      .link{position: absolute;top:30%;left:20%;z-index: 5;}
      .link > div {margin-bottom: 20px; }
      .link > div > a{cursor: pointer;text-decoration: none;}
    </style>
</head>
<body>
	<div id="main" style="width: 100%;height: 680px;"></div>
    <div class="link">
       <div><a href="<?php echo U('Register/register',array('value'=>'chongqing','xian'=>'重庆市')); ?>">用户注册量</a></div>
       <div><a href="<?php echo U('Business/business',array('value'=>'chongqing','xian'=>'重庆市')); ?>">业务量</a></div>
    </div>
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/chongqing.js"></script>
<script>
var chart = echarts.init(document.getElementById('main'));
chart.setOption({
    backgroundColor: '#fff',
	title: {
        text: '重庆市',
        left: 'center',
        textStyle: {
            color: '#000'
        }
    },
	legend: {
                orient : 'vertical',
                x : 'left',
                data:['在线','离线']
            },
    series: [{
            tooltip: {
                trigger: 'item',
                formatter: '{b}'
            },
            name: '选择器',
            type: 'map',
            mapType: '重庆',
            roam: true,
            selectedMode : 'single',
            itemStyle:{
                //normal:{label:{show:true}},
                emphasis:{label:{show:true}}
            },
            data:[
                {name: '渝中区', selected:false},
                {name: '江北区', selected:false},
                {name: '南岸区', selected:false},
                {name: '九龙坡区', selected:false},
                {name: '沙坪坝区', selected:false},
                {name: '渝北区', selected:false},
                {name: '大渡口区', selected:false},
                {name: '巴南区', selected:false},
                {name: '北碚区', selected:false},
                {name: '万州区', selected:false},
                {name: '涪陵区(fulin)', selected:false},
                {name: '长寿区', selected:false},
                {name: '黔江区', selected:false},
                {name: '江津区', selected:false},
                {name: '合川区', selected:false},
                {name: '永川区', selected:false},
                {name: '南川区', selected:false},
                {name: '万盛区', selected:false},
                {name: '双桥区', selected:false},
                {name: '綦江县', selected:false},
                {name: '潼南县', selected:false},
                {name: '铜梁县', selected:false},
                {name: '大足县', selected:false},
                {name: '荣昌县', selected:false},
                {name: '璧山县', selected:false},
                {name: '垫江县', selected:false},
                {name: '武隆县', selected:false},
                {name: '丰都县', selected:false},
                {name: '城口县', selected:false},
                {name: '梁平县', selected:false},
                {name: '开县', selected:false},
                {name: '巫溪县', selected:false},
                {name: '巫山县', selected:false},
                {name: '奉节县', selected:false},
                {name: '云阳县', selected:false},
                {name: '秀山土家族苗族自治县', selected:false},
                {name: '忠县', selected:false},
                {name: '石柱土家族自治县', selected:false},
                {name: '彭水苗族土家族自治县', selected:false},
                {name: '酉阳土家族苗族自治县', selected:false}
            ]
        }
    ],
     animation: false
});

chart.on('click', function (params){
    $.ajax({
        type : "POST",
        url : "<?php echo U('Region/get'); ?>",
        data : {s : params.name},

        success : function(data)
        {

            window.open(data,'_blank','height=700,width=1340,top=00,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no,fullscreen=yes');
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
        }
    });




});
</script>
<script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
</html>