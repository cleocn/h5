<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index(){
		// $this->display('index');
		echo json_encode(array("success" => false,"code"=> 1001,"msg" => "hello api!","obj"=> null,"map"=> null,"list"=> null));
	} 
	
    public function test(){
		// $this->display('index');
		echo json_encode(array("success" => false,"code"=> 1001,"msg" => "hello test!","obj"=> null,"map"=> null,"list"=> null));
	} 
}