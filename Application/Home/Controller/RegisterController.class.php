<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function register(){
        $value = $_GET['value'];
        $xian = $_GET['xian'];
        $_SESSION['value'] = $value;
        $_SESSION['xian'] = $xian;
        $this->assign(array(
            'value' => $value,
            'xian' => $xian,
        ));

        $this->display();
    }

    public function getajax() {
        $value = session('value');
        $xian = session('xian');



        $reg = D('Admin/Map/register');

        if ($xian == "重庆市"){

            $dat1 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'a.usertype' => array('eq', '个人用户'),
                ))->group('a.user')
                ->select();

            $tes1 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'a.usertype' => array('eq', '单位用户'),
                ))->group('a.user')
                ->select();

            $total01 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'a.usertype' => array('eq', '单位用户'),
                ))->select();
            $total02 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'a.usertype' => array('eq', '个人用户'),
                ))->select();


        }else{
            $dat1 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.usertype' => array('eq', '个人用户'),
                ))->group('a.user')
                 ->select();

            $tes1 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.usertype' => array('eq', '单位用户'),
                ))->group('a.user')
                ->select();

            $total01 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.usertype' => array('eq', '单位用户'),
                ))->select();
            $total02 = $reg->alias('a')
                ->field('sum(a.rdata)')
                ->join('LEFT JOIN __REGION__ b ON a.rid = b.rid')
                ->where(array(
                    'b.rname' => array('eq', $xian),
                    'a.usertype' => array('eq', '个人用户'),
                ))->select();


        }
        foreach ($dat1 as $k => $v) {

            $data['dat1'][$k] = $v['sum(a.rdata)'];
        }
        foreach ($tes1 as $k => $v) {

            $data['tes1'][$k] = $v['sum(a.rdata)'];
        }
        $data['total01'] = $total01[0]['sum(a.rdata)'];
        $data['total02'] = $total02[0]['sum(a.rdata)'];



        $data['value'] = $value;
        $data['xian'] = $xian;
        $data = json_encode($data);
        echo $data;
    }
}