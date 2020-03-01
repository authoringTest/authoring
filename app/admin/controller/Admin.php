<?php
namespace app\admin\controller;
use app\BaseController;
use think\facade\View;
/**
 * 
 */
class Admin extends BaseController
{
	public function adminList()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}
	public function adminRule()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}
	public function adminRole()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}
	public function adminEdit()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}
	public function adminCate()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}
	public function adminAdd()
	{
        // 不带任何参数 自动定位当前操作的模板文件
		return view('', ['title' => '管理员列表']);
	}

	
}

