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
           <div><a href="<?php echo U('Register/register',array('value'=>$value,'xian'=>$xian)); ?>">用户注册量</a></div>
           <div><a href="<?php echo U('Business/business',array('value'=>$value,'xian'=>$xian)); ?>">业务量</a></div>
        </div>
</body>
<script src="/screen/Public/Home/js/echarts.min.js"></script>
<script src="/screen/Public/Home/js/cq/<?php echo $value; ?>.js"></script>

<script>




  var chart = echarts.init(document.getElementById('main'));

option = {
    backgroundColor: '#fff',
    title: {
        text: '<?php echo $xian;?>节点部署',
        left: 'center',
        textStyle: {
            color: '#000000'
        }
    },
    tooltip : {
        trigger: 'item'
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
    }
};
chart.setOption(option);
</script>
</html>