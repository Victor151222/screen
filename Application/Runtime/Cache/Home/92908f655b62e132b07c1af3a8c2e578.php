<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <style>
      *{margin: 0;padding: 0;}
      div{float: left;}
    </style>

</head>
<body>
	 <div style="width: 33.33%;">
        <div id="main4" style="height: 300px;width:100%;"></div>
        <div id="main5" style="height: 400px;width: 100%;margin-left: 50px;"></div>
     </div>    
        <div id="main" style="height: 600px;width: 33%;"></div>
     <div style="width: 33.33%;">
        <div id="main6" style="height: 350px;width: 100%;"></div>
        <div id="main7" style="height: 300px;width: 100%;"></div>
     </div>   
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/cq/<?php echo $value; ?>.js"></script>
<script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
<script>
    var names1 = [];
    var names2 = [];
    var names3 = [];
    $.ajax({
        type : "POST",
        url : "<?php echo U('Business/getajax'); ?>",
        dataType:"json",
        success : function(data)
        {
            function contains1(obj) {
                var i = data['dat1']['rid'].length;
                while (i--) {
                    if (data['dat1']['rid'][i] === obj) {
                        return data['dat1']['sum(a.bdata)'][i];
                    }
                }
                return false;
            }

            function contains2(obj) {
                var i = data['dat2']['rid'].length;
                while (i--) {
                    if (data['dat2']['rid'][i] === obj) {
                        return data['dat2']['sum(a.bdata)'][i];
                    }
                }
                return false;
            }
            function contains3(obj) {
                var i = data['dat3']['rid'].length;
                while (i--) {
                    if (data['dat3']['rid'][i] === obj) {
                        return data['dat3']['sum(a.bdata)'][i];
                    }
                }
                return false;
            }
            console.log(data['value']);
            console.log(data['dat1']['rid']);
            (contains1("18")) ? names1.push(contains1("18")) : names1.push(0);
            (contains1("19")) ? names1.push(contains1("19")) : names1.push(0);
            (contains1("20")) ? names1.push(contains1("20")) : names1.push(0);
            (contains1("21")) ? names1.push(contains1("21")) : names1.push(0);
            (contains1("22")) ? names1.push(contains1("22")) : names1.push(0);
            (contains1("23")) ? names1.push(contains1("23")) : names1.push(0);
            (contains1("24")) ? names1.push(contains1("24")) : names1.push(0);
            (contains1("25")) ? names1.push(contains1("25")) : names1.push(0);



            (contains2("26")) ? names2.push(contains2("26")) : names2.push(0);
            (contains2("27")) ? names2.push(contains2("27")) : names2.push(0);
            (contains2("28")) ? names2.push(contains2("28")) : names2.push(0);
            (contains2("29")) ? names2.push(contains2("29")) : names2.push(0);
            (contains2("30")) ? names2.push(contains2("30")) : names2.push(0);
            (contains2("31")) ? names2.push(contains2("31")) : names2.push(0);
            (contains2("32")) ? names2.push(contains2("32")) : names2.push(0);
            (contains2("33")) ? names2.push(contains2("33")) : names2.push(0);
            (contains2("34")) ? names2.push(contains2("34")) : names2.push(0);
            (contains2("35")) ? names2.push(contains2("35")) : names2.push(0);
            (contains2("36")) ? names2.push(contains2("36")) : names2.push(0);


            (contains3("37")) ? names3.push(contains3("37")) : names3.push(0);
            (contains3("37")) ? names3.push(contains3("38")) : names3.push(0);



            console.log(names2);

            var chart = echarts.init(document.getElementById('main'));
chart.setOption({
    backgroundColor: '#fff',
	title: {
        text: data['xian']+'业务量',
        left: 'center',
        textStyle: {
            color: '#000'
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
                areaColor: '#fff',
                borderColor: '#111'
            },
            emphasis: {
                areaColor: '#2a333d'
            }
        }
    },
     animation: false
});


var chart4 = echarts.init(document.getElementById('main4'));
option4= {
    title : {
        text: '业务办理总量',
        subtext: '纯属虚构',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        right: 'right',
        data: ['机动车业务','驾驶证业务','违法处理业务']
    },
    series : [
        {
            name: '访问来源',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:data['dat4'], name:'机动车业务'},
                {value:data['dat5'], name:'驾驶证业务'},
                {value:data['dat6'], name:'违法处理业务'}
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};
chart4.setOption(option4);

var chart5= echarts.init(document.getElementById('main5'));
option5 = {
    title : {
        text: '机动车业务',
        subtext: '纯属虚构',
        x:'center'
    },
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },

    xAxis : [
        {
            type : 'category',
            data : ['变更车主联系方式', '换领机动车号牌', '换领机动车行驶证', '机动车检查预约', '补换领机动车检验合格标志', '补领机动车号牌', '补领机动车行驶证','预选机动车号牌'],
            axisTick: {
                alignWithLabel: true
            },
            axisLabel:{
                interval: 0,
                rotate:45,
                margin:2,
                textStyle:{color:"#222"}
            },

        }
    ],

    grid: {
        x: 40,
        x2: 100,
        y2: 150,
    },
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data: names1
        }
    ]
};
chart5.setOption(option5);

var chart6= echarts.init(document.getElementById('main6'));
option6 = {
    title : {
        text: '驾驶证业务',
        subtext: '纯属虚构',
        x:'center'
    },
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        x: 40,
        x2: 100,
        y2: 150,
    },
    xAxis : [
        {
            type : 'category',
            data : ['取消考试预约', '变更联系方式', '延期审验', '延期换证', '延期提交身体条件证明', '打印学习驾驶证明', '损毁换证','期满换证','考试预约','超龄换证','遗失补证'],
            axisTick: {
                alignWithLabel: true
            },
            axisLabel:{
                interval: 0,
                rotate:45,
                margin:2,
                textStyle:{color:"#222"}
            },
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data:names2
        }
    ]
};
chart6.setOption(option6);

var chart7 = echarts.init(document.getElementById('main7'));
option7 = {
    title : {
        text: '违法处理业务',
        subtext: '纯属虚构',
        x:'center'
    },
    color: ['#3398DB','#B5C334'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['电子监控处理', '缴纳罚款'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data:names3
        }
    ]
};
chart7.setOption(option7);


            //end ajax
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
        }
    });

</script>
</html>