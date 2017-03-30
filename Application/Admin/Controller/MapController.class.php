<?php
namespace Admin\Controller;
use Think\Controller;
class MapController extends Controller {
    public function index(){

//        if(IS_POST)
//        {
//
//            $model = D('map');
//
//            if($model->create(I('post.'), 1))
//            {
//                // 插入到数据库中
//                if($model->add())  // 在add()里又先调用了_before_insert方法
//                {
//                    // 显示成功信息并等待1秒之后跳转
//                    //$this->success('操作成功！');
//                    var_dump($_POST);die;
//                    exit;
//                }
//            }
//            // 如果走到 这说明上面失败了在这里处理失败的请求
//            // 从模型中取出失败的原因
//            $error = $model->getError();
//            // 由控制器显示错误信息,并在3秒跳回上一个页面
//            $this->error($error);
//        }
        $this->display();
    }
    public function top() {

        $this->display();
    }
    public function menu() {

        $this->display();
    }
    public function register() {

        if(IS_POST)
        {

            $model = D('Home/Register');

            if($model->create(I('post.'), 1))
            {
                // 插入到数据库中
                if($model->add())  // 在add()里又先调用了_before_insert方法
                {
                    // 显示成功信息并等待1秒之后跳转
                    $this->success('操作成功！');

                    exit;
                }
            }
            // 如果走到 这说明上面失败了在这里处理失败的请求
            // 从模型中取出失败的原因
            $error = $model->getError();
            // 由控制器显示错误信息,并在3秒跳回上一个页面
            $this->error($error);
        }
        $this->display();
    }
    public function business() {


        if(IS_POST)
        {

            $model = D('Home/Business');

            if($model->create(I('post.'), 1))
            {
                // 插入到数据库中
                if($model->add())  // 在add()里又先调用了_before_insert方法
                {
                    // 显示成功信息并等待1秒之后跳转
                    $this->success('操作成功！');

                    exit;
                }
            }
            // 如果走到 这说明上面失败了在这里处理失败的请求
            // 从模型中取出失败的原因
            $error = $model->getError();
            // 由控制器显示错误信息,并在3秒跳回上一个页面
            $this->error($error);
        }
        $this->display();

    }
}