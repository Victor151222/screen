<?php
namespace Home\Model;
use Think\Model;
class BusinessModel extends Model
{
	protected $insertFields = array('category','bcategory','bcategory','bdata');
	// 添加和修改管理员时使用的表单验证规则
	protected $_validate = array(
        array('category','require','业务类型不能为空！'),
        array('bcategory','require','子业务不能为空！'),
        array('bcategory','require','地区不能为空！'),
        array('bdata','require','业务数量不能为空!'),
        array('bdata',array(1,10000),'业务数量请输正整数！',1,'between'),
	);
	/************************************ 其他方法 ********************************************/
}