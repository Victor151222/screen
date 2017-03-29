<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="/screen/Public/Admin/js/jquery-1.4.4.js" type="text/javascript" charset="utf-8" ></script>
	<script type="text/javascript" src="/screen/Public/Admin/js/select.js"></script>
	<style type="text/css" media="screen">
		table{width: 30%;margin: 0 auto;}
	</style>
</head>
<body>
   <form action="<?php echo U('Admin/Map/main')?>" method="post" accept-charset="utf-8">
	 <table>
	 	<tbody>
	 	    <tr>
	 			<td colspan="2" align="center">用户注册量和业务录入</td>
	 		</tr>
	 		<tr>
	 			<td>用户名</td>
	 			<td><input type="text" name="username"></td>
	 		</tr>
	 		<tr>
	 			<td>地址</td>
	 			<td><input type="text" name="address"></td>
	 		</tr>
	 		<tr>
	 			<td>电话</td>
	 			<td><input type="text" name="cellphone"></td>
	 		</tr>
	 		<tr>
	 			<td>用户分类</td>
	 			<td><select name="usercategory">
	 			    <option value="">--请选择--</option>
	 				<option value="个人用户">个人用户</option>
	 				<option value="单位用户">单位用户</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>下级用户</td>
	 			<td><select name="subuser">
	 			    <option value="">--请选择--</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>业务</td>
	 			<td><select name="business">
	 			    <option value="">--请选择--</option>
	 				<option value="机动车业务">机动车业务</option>
	 				<option value="驾驶证业务">驾驶证业务</option>
	 				<option value="违法处理业务">违法处理业务</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>子业务</td>
	 			<td><select name="subbusiness">
	 			    <option value="">--请选择--</option>
	 				<option value="期满换证">期满换证</option>
	 				<option value="超龄换证">超龄换证</option>
	 				<option value="损毁换证">损毁换证</option>
	 				<option value="遗失补证">遗失补证</option>
	 				<option value="延期换证">延期换证</option>
	 				<option value="延期审验">延期审验</option>
	 				<option value="延期提交身体条件证明">延期提交身体条件证明</option>
	 				<option value="考试预约">考试预约</option>
	 				<option value="取消考试预约">取消考试预约</option>
	 				<option value="打印学习驾驶证明">打印学习驾驶证明</option>
	 				<option value="变更联系方式">变更联系方式</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>预约</td>
	 			<td><select name="issuccess">
	 			    <option value="">--请选择--</option>
	 				<option value="预约">预约</option>
	 				<option value="计划">计划</option>
	 				<option value="成功">成功</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>地区</td>
	 			<td><select name="region">
	 			    <option value="">--请选择--</option>
	 				<option value="万州区">万州区</option>
	 				<option value="涪陵区">涪陵区</option>
	 				<option value="渝中区">渝中区</option>
	 				<option value="大渡口区">大渡口区</option>
	 				<option value="江北区">江北区</option>
	 				<option value="沙坪坝区">沙坪坝区</option>
	 				<option value="九龙坡区">九龙坡区</option>
	 				<option value="南岸区">南岸区</option>
	 				<option value="北碚区">北碚区</option>
	 				<option value="万盛区">万盛区</option>
	 				<option value="双桥区">双桥区</option>
	 				<option value="渝北区">渝北区</option>
	 				<option value="巴南区">巴南区</option>
	 				<option value="黔江区">黔江区</option>
	 				<option value="长寿区">长寿区</option>
	 				<option value="江津区">江津区</option>
	 				<option value="合川区">合川区</option>
	 				<option value="永川区">永川区</option>
	 				<option value="南川区">南川区</option>
	 				<option value="綦江区">綦江区</option>
	 				<option value="潼南区">潼南区</option>
	 				<option value="铜梁区">铜梁区</option>
	 				<option value="大足区">大足区</option>
	 				<option value="荣昌区">荣昌区</option>
	 				<option value="璧山县">璧山县</option>
	 				<option value="梁平县">梁平县</option>
	 				<option value="城口县">城口县</option>
	 				<option value="丰都县">丰都县</option>
	 				<option value="武隆县">武隆县</option>
	 				<option value="垫江县">垫江县</option>
	 				<option value="忠县">忠县</option>
	 				<option value="开县">开县</option>
	 				<option value="云阳县">云阳县</option>
	 				<option value="奉节县">奉节县</option>
	 				<option value="巫山县">巫山县</option>
	 				<option value="巫溪县">巫溪县</option>
	 				<option value="石柱土家族自治县">石柱土家族自治县</option>
	 				<option value="秀山土家族苗族自治县">秀山土家族苗族自治县</option>
	 				<option value="酉阳土家族苗族自治县">酉阳土家族苗族自治县</option>
	 				<option value="彭水苗族土家族自治县">彭水苗族土家族自治县</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 		  <td align="center"><input type='submit'  value="新增" /></td>
	 		  <td align="center"><input type='button'  value="重置" /></td>
	 		</tr>
	 	</tbody>
	 </table>
   </form>
</body>
</html>