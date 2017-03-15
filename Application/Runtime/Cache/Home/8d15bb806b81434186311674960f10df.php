<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <style>
      *{padding: 0;margin: 0;}
      .link{position: absolute;top:30%;left:20%;z-index: 5;}
      .link > div {margin-bottom: 20px; }
      .link > div > a{cursor: pointer;text-decoration: none;}
    </style>
</head>
<body>
        <div id="main" style="height: 700px;width:100%;"> </div>
        <div class="link">
           <div><a href="register.html">用户注册量</a></div>
           <div><a href="business.html">业务量</a></div>
        </div>
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/cq/<?php echo $value; ?>.js"></script>
<script>
  var chart = echarts.init(document.getElementById('main'));
  var data = [
	     {name: '鄂尔多斯', value: 120},
	     {name: '招远', value: 120},
	     {name: '舟山', value: 120},
	     {name: '齐齐哈尔', value: 140},
	     {name: '乳山', value: 180},
	     {name: '金昌', value: 190}
  ];
 var geoCoordMap = {
	    '鄂尔多斯':[107.60,29.608266],
	    '招远':[106.9844,29.608266],
	    '舟山':[107.207216,29.585295],
	    '齐齐哈尔':[107.3023,29.687295],
	    '乳山':[107.28,29.785295],
	    '金昌':[107.188043,29.675295]
  };
	var convertData = function (data) {
	    var res = [];
	    for (var i = 0; i < data.length; i++) {
	        var geoCoord = geoCoordMap[data[i].name];
	        if (geoCoord) {
	            res.push({
	                name: data[i].name,
	                value: geoCoord.concat(data[i].value)
	            });
	        }
	    }
	    return res;
	};
option = {
    backgroundColor: '#404a59',
    title: {
        text: '<?php echo $xian;?>节点部署',
        left: 'center',
        textStyle: {
            color: '#fff'
        }
    },
    tooltip : {
        trigger: 'item'
    },
    legend: {
        orient: 'vertical',
        y: 'bottom',
        x:'right',
        data:['无线传感路由器'],
        textStyle: {
            color: '#fff'
        }
    },
    geo: {
        map: 'wangzhou',
        label: {
            emphasis: {
                show: false
            }
        },
        roam: true,
        itemStyle: {
            normal: {
                areaColor: '#323c48',
                borderColor: '#111'
            },
            emphasis: {
                areaColor: '#2a333d'
            }
        }
    },
    series : [
        {
            name: '无线传感路由器',
            type: 'scatter',
            coordinateSystem: 'geo',
            data: convertData(data),
            symbolSize: function (val) {
                return val[2] / 10;
            },
            label: {
                normal: {
                    formatter: '{b}',
                    position: 'right',
                    show: false
                },
                emphasis: {
                    show: true
                }
            },
            itemStyle: {
                normal: {
                    color: '#ddb926'
                }
            }
        }
    ]
};
chart.setOption(option);
</script>
</html>