<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	   <title>驾校信息录入</title>
	   <link rel="stylesheet" href="/screen/Public/Admin/css/bootstrap.css">
     <link rel="stylesheet" href="/screen/Public/Admin/css/main.css">
	   <script src="/screen/Public/Home/js/jquery-1.10.1.min.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
   <div>
      <h3 class='wtitle'>驾校信息录入</h3>
    	<form role="form" method="post" class='form-horizontal'>
      <table class='table table-bordered'>
        <tbody>
          <tr>
            <td> <label for="name" class='control-label'>考场名称</label></td>
            <td><input type="text" name='sname' placeholder="请输入名称"/></td>
            <td> <label for="name">科目类型</label></td>
            <td>
               <select name='subject'>
                     <option value=''>--请选择--</option>
                     <option value='1'>科目一</option>
                     <option value='2'>科目二</option>
                     <option value='3'>科目三</option>
               </select>
             </td>
          </tr>
          <tr>
              <td> <label for="name" class='control-label'>经度</label></td>
              <td><input type="text" name='lat' placeholder="请输入四位精度的小数"/></td>
              <td> <label for="name" class='control-label'>纬度</label></td>
              <td> <input type="text" name='longit' placeholder="请输入四位精度的小数"/></td>
          </tr>
          <tr>
              <td> <label for="name" class='control-label'>地址</label></td>
              <td> <input type="text" name='address' placeholder="请输入考场地址"/></td>
              <td> <label for="name" class='control-label'>电话</label></td>
              <td> <input type="text" name='phone' placeholder="请输入考场电话"/></td>
          </tr>
          <tr>
              <td><label for="name" class='control-label'>考台</label></td>
              <td><input type="text" name='testnum' placeholder="请输入考台数量"/></td>
              <td><label for="name" class='control-label'>车辆台数</label></td>
              <td><input type="text" name='carnum' placeholder="请输入车辆台数"/></td>
          </tr> 
          <tr>
              <td> <label for="name">所属区县</label></td>
              <td>
                     <select name='rid'>
                  <option value=''>--请选择--</option>
                  <option value="1">万州区</option>
                  <option value="2">涪陵区</option>
                  <option value="3">渝中区</option>
                  <option value="4">大渡口区</option>
                  <option value="5">江北区</option>
                  <option value="6">沙坪坝区</option>
                  <option value="7">九龙坡区</option>
                  <option value="8">南岸区</option>
                  <option value="9">北碚区</option>
                  <option value="10">万盛区</option>
                  <option value="11">双桥区</option>
                  <option value="12">渝北区</option>
                  <option value="13">巴南区</option>
                  <option value="14">黔江区</option>
                  <option value="15">长寿区</option>
                  <option value="16">江津区</option>
                  <option value="17">合川区</option>
                  <option value="18">永川区</option>
                  <option value="19">南川区</option>
                  <option value="20">綦江区</option>
                  <option value="21">潼南区</option>
                  <option value="22">铜梁区</option>
                  <option value="23">大足区</option>
                  <option value="24">荣昌区</option>
                  <option value="25">璧山县</option>
                  <option value="26">梁平县</option>
                  <option value="27">城口县</option>
                  <option value="28">丰都县</option>
                  <option value="29">武隆县</option>
                  <option value="30">垫江县</option>
                  <option value="31">忠县</option>
                  <option value="32">开县</option>
                  <option value="33">云阳县</option>
                  <option value="34">奉节县</option>
                  <option value="35">巫山县</option>
                  <option value="36">巫溪县</option>
                  <option value="37">石柱土家族自治县</option>
                  <option value="38">秀山土家族苗族自治县</option>
                  <option value="39">酉阳土家族苗族自治县</option>
                  <option value="40">彭水苗族土家族自治县</option>
           </select>
           </td>
          <td><label for="name" class='control-label'>计划量</label></td>
          <td><input type="text" name='plan' placeholder="请输入计划量"/></td>
          </tr> 
          <tr>
              <td><label for="name" class='control-label'>预约量</label></td>
              <td><input type="text" name='subscribe' placeholder="请输入预约量"/></td>
              <td><label for="name" class='control-label'>参考人数</label></td>
              <td><input type="text" name='attend' placeholder="请输入参考人数"/></td>
          </tr>
          <tr>
              <td><label for="name" class='control-label'>合格人数</label></td>
              <td><input type="text" name='pass' placeholder="请输入合格人数"/></td>
              <td><label for="name" class='control-label'>考试预约计划量</label></td>
              <td><input type="text" name='tplan' placeholder="请输入考试预约计划量"/></td>
          </tr>
          <tr>
              <td><label for="name" class='control-label'>申请量</label></td>
              <td><input type="text" name='apply' placeholder="请输入申请量"/></td>
              <td><label for="name" class='control-label'>预约成功量</label></td>
              <td><input type="text" name='success' placeholder="请输入预约成功量"/></td>
          </tr>
          <tr>
              <td><label for="name" class='control-label'>考场照片</label></td>
              <td><input type="file" name='timg'/></td>
          </tr>
          <tr>
              <td colspan="2"><button type="submit" class="btn btn-success">提交</button></td>
              <td colspan="2"><button type="submit" class="btn btn-info">重置</button></td>
          </tr>
        </tbody>
      </table>
    	</form>
</div>
</body>
</html>