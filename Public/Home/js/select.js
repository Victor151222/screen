$(function(){
		var select="";
		var html='';
		// 为下拉框绑定change事件


        $('select').eq(0).change(function(){
              if($(this).context.value=='机动车业务'){
                 html="<option value=''>--请选择--</option><option value='预选机动车号牌'>预选机动车号牌</option><option value='机动车检查预约'>机动车检查预约</option><option value='补领机动车号牌'>补领机动车号牌</option><option value='换领机动车号牌'>换领机动车号牌</option><option value='补领机动车行驶证'>补领机动车行驶证</option><option value='换领机动车行驶证'>换领机动车行驶证</option><option value='补换领机动车检验合格标志'>补换领机动车检验合格标志</option><option value='变更车主联系方式'>变更车主联系方式</option>";
                 $('select').eq(1).html(html);
              }
              if($(this).context.value=='驾驶证业务'){
                 html="<option value=''>--请选择--</option><option value='期满换证'>期满换证</option><option value='超龄换证'>超龄换证</option><option value='损毁换证'>损毁换证</option><option value='遗失补证'>遗失补证</option><option value='延期换证'>延期换证</option><option value='延期审验'>延期审验</option><option value='延期提交身体条件证明'>延期提交身体条件证明</option><option value='考试预约'>考试预约</option><option value='取消考试预约'>取消考试预约</option><option value='打印学习驾驶证明'>打印学习驾驶证明</option><option value='变更联系方式'>变更联系方式</option>";
                 $('select').eq(1).html(html);
              }
              if($(this).context.value=='违法处理业务'){
                 html=" <option value=''>--请选择--</option><option value='电子监控处理'>电子监控处理</option><option value='缴纳罚款'>缴纳罚款</option>";
                 $('select').eq(1).html(html);
              }
        });
  
	});