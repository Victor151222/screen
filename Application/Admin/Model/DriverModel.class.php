<?php
namespace Admin\Model;
use Think\Model;
class DriverModel extends Model
{   
	//允许插入的字段
	protected $insertFields = array('lat','longit','rid','subject','sname','address','phone','testnum','carnum','plan','subscribe','attend','pass','tplan','apply','success','timg');
	//字段验证
	protected $_validate = array(
		array('lat', '/^[1-9]\d*\.\d*|0\.\d*[1-9]\d*$/i', '经度必须为浮点型数据！'),
		array('lat', 'require', '经度不能为空！', 1,'regex', 3),
		array('longit', '/^[1-9]\d*\.\d*|0\.\d*[1-9]\d*$/i', '纬度必须为浮点型数据！'),
		array('subject', 'require', '所属科目不能为空！', 1,'regex', 3),
		array('sname', 'require', '驾校名称不能为空！', 1,'regex', 3),
	);

	/*******************插入之前**********************/
	protected function _before_insert(&$data,$option){
        
	}
	
}