<?php
namespace app\admin\controller;
use app\BaseController;
use think\facade\View;
/**
 * 
 */
class Index extends BaseController
{
	public function index()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('index', ['title' => '主页']);
	}

	public function welcome()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '子页']);
	}
}

