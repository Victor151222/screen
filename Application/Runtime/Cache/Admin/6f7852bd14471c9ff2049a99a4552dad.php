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
   <form action="<?php echo U('Admin/Map/register')?>" method="post" accept-charset="utf-8">
	 <table>
	 	<tbody>
	 	    <tr>
	 			<td colspan="2" align="center">用户注册量</td>
	 		</tr>




	 		<tr>
	 			<td>用户分类</td>
	 			<td><select name="usertype">
	 			    <option value="">--请选择--</option>
	 				<option value="个人用户">个人用户</option>
	 				<option value="单位用户">单位用户</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td>下级用户</td>
	 			<td><select name="user">
	 			    <option value="">--请选择--</option>
	 			</select></td>
	 		</tr>



	 		<tr>
	 			<td>地区</td>
	 			<td><select name="rid">
	 			    <option value="">--请选择--</option>
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
	 			</select></td>
	 		</tr>
			<tr>
				<td>用户注册量</td>
				<td><input type="text" name="rdata"></td>
			</tr>
	 		<tr>
	 		  <td align="center"><input type='submit'  value="新增" /></td>
	 		</tr>
	 	</tbody>
	 </table>
   </form>
</body>
</html>