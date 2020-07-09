<?php

namespace Home\Controller;


use Think\Controller;

class IndexController extends Controller
{
    /**
     * 屏蔽空操作方法
     */
    public function _empty()
    {
        $this->display('error');
    }

    //登录页
    public function index()
    {
        if (IS_POST) {
            $managerModel = M('manager');
            $map['username'] = $_POST['username'];
            $data = $managerModel->where($map)->find();
            if (!$data) {
                $this->error('用户名 ' . $_POST['username'] . " 不存在");
            } else if ($data['password'] != $_POST['password']) {
                $this->error('密码不正确');
            } else {
                //登录成功，session持久化教师信息，页面跳转到个人信息页面
                session('userId', $data['userId']);
                session('username', $data['username']);
                session('password', $data['password']);
                $this->success('登录成功', 'basicInfo', false);
            }
        } else {
            $this->display();
        }
    }

    public function basicInfo()
    {
        if (IS_POST) {
            $model = M('patientBasicInfo');
            $param = $_POST;
            $param['CJSJ'] = $param['SCRQ'];
            $result = $model->data($param)->add();
            if ($result) {
                $this->success("恭喜您！添加成功!", "advanceInfo?pbid=" . $result);
            } else {
                $this->error("很遗憾， 保存失败， 可能没有任何操作，请修改后重试");
            }
        } else {
            $this->display();
        }
    }

    public function advanceInfo($pbid)
    {
        $map['pbid'] = $pbid;
        $pdinfoModel = M('patientProductInfo');
        $pbinfoModel = M('patientBasicInfo');
        if (IS_POST) {
            $param = $_POST;
            $param['JE'] = $_POST['DJ'] * $_POST['SL'];
            $param['CJSJ'] = $param['SCRQ'];
            $result = $pdinfoModel->data($param)->add();
            $pbdata2Update = $pbinfoModel->where($map)->find();
            $save['HJJE'] =$pbdata2Update['HJJE']+ $param['JE'];
            $pbinfoModel->where($map)->save($save);
            if ($result) {
                $this->success("恭喜您！添加成功!", "advanceInfo?pbid=" . $pbid);
            } else {
                $this->error("很遗憾， 保存失败， 可能没有任何操作，请修改后重试");
            }
        } else {
            $ppdata = $pdinfoModel->where($map)->select();
            $pbdata = $pbinfoModel->where($map)->find();
            $this->assign('pbdata', $pbdata);
            $this->assign('ppdata', $ppdata);
            $this->display();
        }
    }

    public function delete(){
        $ppid = $_GET['ppid'];
        $pbid = $_GET['pbid'];
        $pdinfoModel = M('patientProductInfo');
        $map['ppid'] = $ppid;
        $result = $pdinfoModel->where($map)->delete();
        if ($result) {
            $this->success("恭喜您！删除成功!", "advanceInfo?pbid=".$pbid);
        } else {
            $this->error("很遗憾， 删除失败， 可能没有任何操作，请稍后重试");
        }
    }

}