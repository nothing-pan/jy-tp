<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     	$this -> display();
    }

    public function jy1(){
    	Vendor('jy.StartCaptchaServlet');
    }

    // public function jy2(){
    // 	Vendor('jy.VerifyLoginServlet');
    // }
}