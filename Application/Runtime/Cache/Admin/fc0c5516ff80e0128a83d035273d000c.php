<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	   <title>员工注册</title>
	   <link rel="stylesheet" href="/screen/Public/Admin/css/bootstrap.css">
     <link rel="stylesheet" href="/screen/Public/Admin/css/main.css">
	   <script src="/screen/Public/Admin/js/jquery-1.4.4.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body id="skin-blur-blue">
   <div class='wrap'>
      <h3 class='wtitle'>新进员工信息录入</h3>
    	<form role="form" method="post" class='form-horizontal' enctype="multipart/form-data">
      	   <div class="form-group">
      	      <label for="name" class='control-label'>员工姓名</label>
      	      <input type="text" id='wname' name='wname' placeholder="请输入员工姓名"/>
      	   </div>
      	   <div class="form-group">
      	      <label for="name" class='control-label'>员工工号</label>
      	      <input type="text" name='wid' id='wid' placeholder="请输入员工工号"/>
      	   </div>
      	   <div class="form-group">
      	      <label for="inputfile">上传员工照片</label>
      	      <input type="file" name='img' style="display: inline-block;"/>
      	   </div>
           <div id="wsubmit">
      	   <button type="submit" class="btn btn-success" id='submit'>提交</button> <button type="submit" class="btn btn-info">重置</button>
           </div>
    	</form>
</div>
</body>
<script type="text/javascript">
    /***********************************************************************/
	$('#wname').bind({
        blur:function(){
           //获得输入框中的数据
           var name = $(this).val();
           var data = 'wname='+name;
           $.ajax({
           	  type:'post',
           	  url:"<?php echo U('wnameisExist');?>",
           	  data:data,
           	  dataType:'text',
           	  success:function(msg){
                  if(msg){
                      alert('用户已经存在！');
                      $('#wname').css({color:'red'});
                      $('#submit').addClass('disabled');
                  }
           	  }
           });
        },
        focus:function(){
           /*将字体颜色改为原来的白色，判断提交按钮是否有disabled,如果有，则删去disabled*/	
           $(this).css({color:'#000'});
           if($('#submit').hasClass('disabled')){
              $('#submit').removeClass('disabled');
           }
        }   
	});
	/***********************************************************************/
	$('#wid').bind({
		blur:function(){
           //获得输入框中的数据
           var id = $(this).val();
           var data = 'wid='+id;
           $.ajax({
           	  type:'post',
           	  url:"<?php echo U('widisExist');?>",
           	  data:data,
           	  dataType:'text',
           	  success:function(msg){
                  if(msg){
                      alert('工号已经存在！');
                      $('#wid').css({color:'red'});
                      $('#submit').addClass('disabled');
                  }
           	  }
           });
        },
        focus:function(){
        	/*将字体颜色改为原来的白色，判断提交按钮是否有disabled,如果有，则删去disabled*/	
           $(this).css({color:'#000'});
           if($('#submit').hasClass('disabled')){
              $('#submit').removeClass('disabled');
           }
        } 
	});
</script>
</html>