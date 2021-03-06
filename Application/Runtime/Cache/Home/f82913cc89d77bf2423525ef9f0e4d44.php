<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <style type="text/css" media="screen">
        div{display: inline-block;}
        .canvas{margin: 10px;}
    </style>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div class="wrap" style='width: 1450px;'>
         <div id="main" class="canvas" style="height:500px;width: 450px; "></div>
         <div id="main1"  class="canvas" style="height:500px;width: 450px;"></div>
         <div id="main2" class="canvas" style="height:500px;width: 450px;"></div>
    </div>
    <!-- ECharts单文件引入 -->
    <script src="/screen/Public/Home/js/echarts.min.js"></script>
    <script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript">
      /**
         * { 将id转换为数值型，并且根据月份升序排列 }
         *
         * @param      {number}  arr     The arr
         * @return     {number}  { description_of_the_return_value }
         */
        function idSort(arr){
            //将id和data转化为数值型
            for (var i = 0; i < arr.length; i++) {
                arr[i]['id'] = parseInt(arr[i]['id']);
                arr[i]['data'] = parseInt(arr[i]['data']);
            }
            //根据id排序
            for (var k = 0; k < arr.length; k++) {
                for (var j = k + 1; j< arr.length; j++) {
                    if(arr[k]['id'] - arr[j]['id'] > 0){
                        var temp = arr[k];
                        arr[k] = arr[j];
                        arr[j] = temp;
                    }
                }
            }
            return arr;
        }
         /*******************转数据格式***************************/
     /**
      * { function_description }
      *
      * @param      {<type>}           msg     The message 穿入的数组
      * @param      {<type>}           para    The para  需要提取的字段
      * @param      {boolean}          flag    The flag  是否将提取的字段值转换为整型
      * @return     {(Array|boolean)}  { description_of_the_return_value }
      */
     function converdata(msg,para,flag){
        var flag = flag? true:false;
        var arr =[];
        if(typeof msg == 'object'){
           for (var i = 0; i < msg.length; i++) {
                 if(!flag){
                    arr.push(msg[i][para]);
                 }else{
                    arr.push(parseInt(msg[i][para]));
                 }
           }
           return arr;
        }else{
           return false;
        }
     }

     $.ajax({
         type:'post',
         url:"<?php echo U('businesshandle');?>",
         data:'',
         dataType:'json',
         success:function(msg){
        
            // 基于准备好的dom，初始化echarts图表
            var myChart = echarts.init(document.getElementById('main')); 
            
            var option = {
                tooltip: {
                    show: true
                },
                title : {
                    text: '驾驶证业务',
                    x:'center'
                },
                xAxis : [
                    {
                        type : 'category',
                        data : converdata(idSort(msg[0]),'name'),
                        axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}
                    }
                ],
                grid: { // 控制图的大小，调整下面这些值就可以，
                      x: 40,
                      x2: 100,
                      y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
                },
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        "name":"业务量",
                        "type":"bar",
                        "data":converdata(idSort(msg[0]),'data')
                    }
                ]
            };
            // 为echarts对象加载数据 
            myChart.setOption(option); 

             // 基于准备好的dom，初始化echarts图表
            var myChart1 = echarts.init(document.getElementById('main1')); 
            
            var option1 = {
                tooltip: {
                    show: true
                },
                title : {
                    text: '机动车业务量',
                    x:'center'
                },
                xAxis : [
                    {
                        type : 'category',
                        data : converdata(idSort(msg[1]),'name'),
                        axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}
                    }
                ],
                grid: { // 控制图的大小，调整下面这些值就可以，
                      x: 40,
                      x2: 100,
                      y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
                },
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        "name":"业务量",
                        "type":"bar",
                        "data":converdata(idSort(msg[1]),'data')
                    }
                ]
            };
            // 为echarts对象加载数据 
            myChart1.setOption(option1); 
            
             // 基于准备好的dom，初始化echarts图表
            var myChart2 = echarts.init(document.getElementById('main2')); 
            var option2= {
                tooltip: {
                    show: true
                },
                 title : {
                    text: '违法处理业务',
                    x:'center'
                },
                xAxis : [
                    {
                        type : 'category',
                        data : converdata(idSort(msg[2]),'name'),
                        axisLabel:{rotate:70,textStyle:{color:'#000'},interval:0}

                    }
                ],
                 grid: { // 控制图的大小，调整下面这些值就可以，
                      x: 40,
                      x2: 100,
                      y2: 150,// y2可以控制 X轴跟Zoom控件之间的间隔，避免以为倾斜后造成 label重叠到zoom上
                },
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        "name":"业务量",
                        "type":"bar",
                        "data":converdata(idSort(msg[2]),'data')
                    }
                ]
            };
            // 为echarts对象加载数据 
            myChart2.setOption(option2); 



         }
     });
    </script>
</body>