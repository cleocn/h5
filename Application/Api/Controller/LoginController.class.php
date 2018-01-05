<?php
namespace Api\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index(){

		
		// $this->display('index');
		echo json_encode(array("success" => signature(),"code"=> 1001,"msg" => "login index!","obj"=> null,"map"=> null,"list"=> null));
	} 
	public function test(){
		// $this->display('index');
		echo json_encode(array("success" => false,"code"=> 1001,"msg" => "login test!","obj"=> null,"map"=> null,"list"=> null));
	} 
	
   
}