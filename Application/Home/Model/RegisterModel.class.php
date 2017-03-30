<?php
namespace Home\Model;
use Think\Model;
class RegisterModel extends Model
{
    protected $insertFields = array('usertype','user','rid','rdata');
    // 添加和修改管理员时使用的表单验证规则
    protected $_validate = array(
        array('usertype','require','用户分类不能为空！'),
        array('user','require','下级用户不能为空！'),
        array('rid','require','地区不能为空！'),
        array('rdata','require','用户注册量不能为空!'),
        array('rdata',array(1,10000),'用户注册量请输正整数！',1,'between'),
    );
	/************************************ 其他方法 ********************************************/
}