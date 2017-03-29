<?php
namespace Home\Controller;
use Think\Controller;
class BusinessController extends Controller {
    public function business(){
        $value = $_GET['value'];
        $xian = $_GET['xian'];
        $_SESSION['value1'] = $value;
        $_SESSION['xian1'] = $xian;
        $this->assign(array(
            'value' => $value,
            'xian' => $xian,
        ));
        echo($this->value);
        $this->display();
    }

    public function getajax() {
        $value = session('value1');
        $xian = session('xian1');

        $reg = D('Admin/Map/business');


        if ($xian == '重庆市') {
            $dat1 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(

                    'a.category' => array('eq', '机动车业务'),
                ))->group('a.bcategory')
                ->select();
            $dat2 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(

                    'a.category' => array('eq', '驾驶证业务'),
                ))->group('a.bcategory')
                ->select();
            $dat3 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(

                    'a.category' => array('eq', '违法处理业务'),
                ))->group('a.bcategory')
                ->select();
        }else {
            $dat1 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '机动车业务'),
                ))->group('a.bcategory')
                ->select();
            $dat2 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '驾驶证业务'),
                ))->group('a.bcategory')
                ->select();
            $dat3 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '违法处理业务'),
                ))->group('a.bcategory')
                ->select();
            $dat4 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '机动车业务'),
                ))->select();
            $dat5 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '驾驶证业务'),
                ))->select();
            $dat6 = $reg->alias('a')
                ->field('sum(a.bdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.category' => array('eq', '违法处理业务'),
                ))->select();

        }



        foreach ($dat1 as $k => $v) {

            $data['dat1'][$k] = $v['sum(a.bdata)'];
        }
        foreach ($dat2 as $k => $v) {

            $data['dat2'][$k] = $v['sum(a.bdata)'];
        }
        foreach ($dat3 as $k => $v) {

            $data['dat3'][$k] = $v['sum(a.bdata)'];
        }
        $data['dat4'] = $dat4[0]['sum(a.bdata)'];
        $data['dat5'] = $dat5[0]['sum(a.bdata)'];
        $data['dat6'] = $dat6[0]['sum(a.bdata)'];

        $data['value'] = $value;
        $data['xian'] = $xian;
        $data = json_encode($data);
        echo $data;
    }
}