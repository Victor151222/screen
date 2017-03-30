<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <style>
        *{margin: 0;padding: 0;}
        div{display: inline-block;}
    </style>
</head>
<body>
<div id="main1" style="height: 300px;width: 100%;"></div>
<div id="main2" style="height: 300px;width: 32%;margin-top: -100px;"></div>
<div id="main" style="height: 300px;width: 32%;margin-top: -100px;"></div>
<div id="main3" style="height: 450px;width: 35%;margin-top: -100px;"></div>
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/cq/<?php echo $value; ?>.js"></script>
<script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
<script>
    var names1 = [];
    var names2 = [];
    $.ajax({
        type : "POST",
        url : "<?php echo U('Register/getajax'); ?>",
        dataType:"json",
        success : function(data)
        {
            function contains1(obj) {
                var i = data['dat1']['rid'].length;
                while (i--) {
                    if (data['dat1']['rid'][i] === obj) {
                        return data['dat1']['sum(a.rdata)'][i];
                    }
                }
                return false;
            }

            function contains2(obj) {
                var i = data['tes1']['rid'].length;
                while (i--) {
                    if (data['tes1']['rid'][i] === obj) {
                        return data['tes1']['sum(a.rdata)'][i];
                    }
                }
                return false;
            }


            (contains1("1")) ? names1.push(contains1("1")) : names1.push(0);
            (contains1("2")) ? names1.push(contains1("2")) : names1.push(0);
            (contains1("3")) ? names1.push(contains1("3")) : names1.push(0);
            (contains1("4")) ? names1.push(contains1("4")) : names1.push(0);



            (contains2("5")) ? names2.push(contains2("5")) : names2.push(0);
            (contains2("6")) ? names2.push(contains2("6")) : names2.push(0);
            (contains2("7")) ? names2.push(contains2("7")) : names2.push(0);
            (contains2("8")) ? names2.push(contains2("8")) : names2.push(0);
            (contains2("9")) ? names2.push(contains2("9")) : names2.push(0);
            (contains2("10")) ? names2.push(contains2("10")) : names2.push(0);
            (contains2("11")) ? names2.push(contains2("11")) : names2.push(0);
            (contains2("12")) ? names2.push(contains2("12")) : names2.push(0);
            (contains2("13")) ? names2.push(contains2("13")) : names2.push(0);
            (contains2("14")) ? names2.push(contains2("14")) : names2.push(0);

            console.log(names2);



            var chart = echarts.init(document.getElementById('main'));
            chart.setOption({
                backgroundColor: '#fff',
                title: {
                    text: '',
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


            var chart1 = echarts.init(document.getElementById('main1'));
            option1= {
                title : {
                    text: data['xian'],
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
                    data: ['个人用户','企业用户']
                },
                series : [
                    {
                        name: '访问来源',
                        type: 'pie',
                        radius : '60%',
                        center: ['50%', '60%'],
                        data:[
                            {value:data['total02'], name:'个人用户'},
                            {value:data['total01'], name:'单位用户'}

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
            chart1.setOption(option1);

            var chart2 = echarts.init(document.getElementById('main2'));
            option2 = {
                title : {
                    text: '个人用户',
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
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis : [
                    {
                        type : 'category',
                        data : ['学员用户', '新车车主用户', '窗口用户', '车驾用户'],
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
                        data:names1
                    }
                ]
            };
            chart2.setOption(option2);

            var chart3 = echarts.init(document.getElementById('main3'));
            option3 = {
                title : {
                    text: '单位用户',
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
                        data : ['医院', '学校', '安监部门', '教育行政部门', '检测站', '汽车销售商家','道路运输企业','道路运输管理部门','驾驶培训企业','其他'],
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
            chart3.setOption(option3);




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