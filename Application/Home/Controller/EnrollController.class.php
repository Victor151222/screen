<?php
namespace Home\Controller;
use Think\Controller;
class EnrollController extends Controller {
    
    public function index(){
        $this->display();
    }
    
    public function register(){
        $this->display();
    }

    public function registerhandle(){
        $data = array();
        $model = D('register');
        $person = $model->field('user,SUM(rdata) as rdata')->where(array('usertype'=>'个人用户'))->group('user')->select();
        $data[] = $person;
        $company = $model->field('user,SUM(rdata) as rdata')->where(array('usertype'=>'单位用户'))->group('user')->select();
        $data[] = $company;
        echo json_encode($data);
    }

    public function business(){  
        $this->display();
    }
    
    public function businesshandle(){
        $data = array();
        $model = D('business');
        $driver = $model->field('bcategory,SUM(bdata) as bdata')->where(array('category'=>'驾驶证业务'))->group('bcategory')->select();
        $data[] = $driver;
        $car = $model->field('bcategory,SUM(bdata) as bdata')->where(array('category'=>'机动车业务'))->group('bcategory')->select();
        $data[] = $car;
        $illegal = $model->field('bcategory,SUM(bdata) as bdata')->where(array('category'=>'违法处理业务'))->group('bcategory')->select();
        $data[] = $illegal;
        echo json_encode($data);
    }

    public function feedback(){
        $this->display();
    }

    public function feedbackhandle(){
        $data = array();
        $model = D('feedback');
        //处理ajax请求
        if(I('post.month')){
            $month = (int)I('post.month');
            $where = array('month'=>$month);
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where($where)->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'已回复','month'=>$month))->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'未回复','month'=>$month))->group('category.id,category.categories')->select();
        }
        if(!I('post.month')){
            //累计数据
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'已回复'))->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'未回复'))->group('category.id,category.categories')->select();
                /*当月的数据*/
            //获取查询的年份，默认是2017年
            $month = (int)date('m',time());
            $where = array('month'=>$month);

            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where($where)->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'已回复','month'=>$month))->group('category.id,category.categories')->select();
            $data[] = $model->field('category.categories as category,category.id as id,SUM(feedback.data) as data')->join('category on category.id=feedback.fid')->where(array('ftype'=>'未回复','month'=>$month))->group('category.id,category.categories')->select();
        }
        echo json_encode($data);
    }

    
}