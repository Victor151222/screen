<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="height:250px"></div>
    <div id="main1" style="height:250px"></div>
    <select name="date" id='sdata' style="width:140px;margin: 0 auto;display:block;">
        <option value="2017">--请选择查询月份--</option>
        <option value="1">1月</option>
        <option value="2">2月</option>
        <option value="3">3月</option> 
        <option value="4">4月</option>
        <option value="5">5月</option>
        <option value="6">6月</option>
        <option value="7">7月</option>
        <option value="8">8月</option> 
        <option value="9">9月</option>
        <option value="10">7月</option>
        <option value="11">11月</option> 
        <option value="12">12月</option>
    </select>
    <!-- ECharts单文件引入 -->
    <script src="/screen/Public/Home/js/echarts.min.js"></script>
    <script src="/screen/Public/Home/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript">
          /**
         * { 将月份转换为数值型，并且根据月份升序排列 }
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
            url:"<?php echo U('feedbackhandle'); ?>",
            data:'',
            dataType:'json',
            success:function(msg){
                console.log(converdata(idSort(msg[0]),'category'));
                console.log(converdata(idSort(msg[0]),'data'));
                console.log(converdata(idSort(msg[3]),'category'));
                console.log(converdata(idSort(msg[4]),'data'));
            // 基于准备好的dom，初始化echarts图表
            var myChart = echarts.init(document.getElementById('main')); 
            var option = {
                    title : {
                        text: '累计的数据',
                        y:'top',
                        x:'center'
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    legend: {
                        data:['反馈数量','已回复','未回复'],
                        x:'right'
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            data :  converdata(idSort(msg[0]),'category')
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name:'反馈数量',
                            type:'bar',
                            data: converdata(idSort(msg[0]),'data')
                        },
                        {
                            name:'已回复',
                            type:'bar',
                            data:converdata(idSort(msg[1]),'data')
                        },
                         {
                            name:'未回复',
                            type:'bar',
                            data:converdata(idSort(msg[2]),'data')
                        }
                    ]
                };
                        
            // 为echarts对象加载数据 
            myChart.setOption(option); 

            // 基于准备好的dom，初始化echarts图表
            var myChart1 = echarts.init(document.getElementById('main1')); 
            var option1 = {
                    title : {
                        text: '当月的数据',
                        y:'top',
                        x:'center'
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    legend: {
                        data:['反馈数量','已回复','未回复'],
                        x:'right'
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            data : converdata(idSort(msg[0]),'category')
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name:'反馈数量',
                            type:'bar',
                            data:converdata(idSort(msg[3]),'data')
                        },
                        {
                            name:'已回复',
                            type:'bar',
                            data:converdata(idSort(msg[4]),'data')
                        },
                         {
                            name:'未回复',
                            type:'bar',
                            data:converdata(idSort(msg[5]),'data')
                        }
                    ]
                };
                        
            // 为echarts对象加载数据 
            myChart1.setOption(option1); 


            }
        });
      

      $('#sdata').bind({
        'change':function(){
             var data = 'month='+$(this).val();
             $.ajax({
                type:'post',
                url:'<?php echo U('feedbackhandle');?>',
                data:data,
                dataType:'json',
                success:function(msg){
                    // 基于准备好的dom，初始化echarts图表
                var myChart1 = echarts.init(document.getElementById('main1')); 
                var option1 = {
                        title : {
                            text: '当月的数据',
                            y:'top',
                            x:'center'
                        },
                        tooltip : {
                            trigger: 'axis'
                        },
                        legend: {
                            data:['反馈数量','已回复','未回复'],
                            x:'right'
                        },
                        calculable : true,
                        xAxis : [
                            {
                                type : 'category',
                                data : ['预选号码','考试预约','违法处理','机车业务','驾驶证业务','系统反馈','其他意见']
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value'
                            }
                        ],
                        series : [
                            {
                                name:'反馈数量',
                                type:'bar',
                                data:converdata(idSort(msg[0]),'data')
                            },
                            {
                                name:'已回复',
                                type:'bar',
                                data:converdata(idSort(msg[1]),'data')
                            },
                             {
                                name:'未回复',
                                type:'bar',
                                data:converdata(idSort(msg[2]),'data')
                            }
                        ]
                    };
                            
                // 为echarts对象加载数据 
                myChart1.setOption(option1); 
                }
            });
        }
    });

    </script>
</body>