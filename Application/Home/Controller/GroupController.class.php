<?php
namespace Home\Controller;
use Think\Controller;
class GroupController extends Controller {
   public function index(){
        
           // $datas = $_GET;
            //print_r($datas);
            echo '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"id":1358750,"name":"ii"},{"id":1346,"name":"场景秀"}]}'; 
       
        
    }
	
  public function lists(){
      echo '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"id":1358750,"name":"ii"},{"id":1346,"name":"微上宝开发团队"}]}'; 
      
  }        
public function pageTplList(){
    
   $data= '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"id":470456,"sceneId":1301,"num":1,"name":null,"properties":{"thumbSrc":"group1/M00/9C/E7/yq0KA1TAsbyABvjkAAAOSxrgZfA035.png"},"elements":null,"scene":null},{"id":473876,"sceneId":1301,"num":2,"name":null,"properties":{"thumbSrc":"group1/M00/88/A8/yq0KA1TZaf6AYeITAACPwwriLzA715.jpg"},"elements":null,"scene":null},{"id":18906685,"sceneId":1301,"num":3,"name":null,"properties":{"thumbSrc":"group1/M00/BB/EC/yq0KA1TdYQWAURDBAAEhD-YENKE023.jpg"},"elements":null,"scene":null},{"id":26143278,"sceneId":1301,"num":4,"name":null,"properties":{"thumbSrc":"group1/M00/2E/4E/yq0KA1TvAgSAdhFbAADCW7al4xA369.jpg"},"elements":null,"scene":null},{"id":31023468,"sceneId":1301,"num":5,"name":null,"properties":{"thumbSrc":"group1/M00/93/8A/yq0KA1T9B_qAJ5UWAADU_JzN78k345.jpg"},"elements":null,"scene":null},{"id":37817758,"sceneId":1301,"num":6,"name":null,"properties":{"thumbSrc":"group1/M00/E9/2B/yq0KA1UGOZyAZsuAAADdZjilSWE193.jpg"},"elements":null,"scene":null},{"id":37818290,"sceneId":1301,"num":7,"name":null,"properties":{"thumbSrc":"group1/M00/E9/23/yq0KA1UGOQKAFSevAA9JVqGtSXU825.gif"},"elements":null,"scene":null},{"id":16939356,"sceneId":1301,"num":8,"name":null,"properties":{"thumbSrc":"group1/M00/82/69/yq0KA1TYjTaAbujbAAFkSEEnF7Q362.jpg"},"elements":null,"scene":null},{"id":29740231,"sceneId":1301,"num":9,"name":null,"properties":{"thumbSrc":"group1/M00/F2/C8/yq0KA1Th19SAZ-hRAABDS2mw3So653.jpg"},"elements":null,"scene":null},{"id":16939928,"sceneId":1301,"num":10,"name":null,"properties":{"fallingObject":{"src":{"name":"雪花","path":"http://as.eqxiu.com/assets/images/create/fallings/snow.png","rotate":0,"vy":1},"density":2},"thumbSrc":"group1/M00/49/62/yq0KA1TTMICAa9J4AADXMVEHDjU018.jpg"},"elements":null,"scene":null},{"id":16939131,"sceneId":1301,"num":11,"name":null,"properties":{"thumbSrc":"group1/M00/82/3E/yq0KA1S85xCAKJSQAABsMaTkIfw890.jpg"},"elements":null,"scene":null},{"id":482130,"sceneId":1301,"num":12,"name":null,"properties":{"fallingObject":{"src":{"name":"雪花","path":"http://as.eqxiu.com/assets/images/create/fallings/snow.png","rotate":0,"vy":1},"density":2},"thumbSrc":"group1/M00/47/E0/yq0KA1TTI7uAfOytAAEz9772BNo535.jpg"},"elements":null,"scene":null},{"id":473225,"sceneId":1301,"num":13,"name":null,"properties":{"thumbSrc":"group1/M00/49/41/yq0KA1Swmv2ALHOJAACw4lstbGg803.jpg"},"elements":null,"scene":null},{"id":40868938,"sceneId":1301,"num":14,"name":null,"properties":{"thumbSrc":"group1/M00/81/CB/yq0KA1T6YVGASJUuAADtIkTp7Uk240.jpg"},"elements":null,"scene":null},{"id":475201,"sceneId":1301,"num":15,"name":null,"properties":{"thumbSrc":"group1/M00/C5/4E/yq0KA1SHr52AdE8fAAFANilZiXI335.jpg"},"elements":null,"scene":null},{"id":470687,"sceneId":1301,"num":16,"name":null,"properties":{"thumbSrc":"group1/M00/C5/38/yq0KA1SHo5aAakjJAAAiQCwUSaE210.jpg"},"elements":null,"scene":null},{"id":10625776,"sceneId":1301,"num":17,"name":null,"properties":{"thumbSrc":"group1/M00/E6/DD/yq0KA1TJ2gCAGZpbAACDllUN9tw761.jpg"},"elements":null,"scene":null},{"id":26143781,"sceneId":1301,"num":18,"name":null,"properties":{"thumbSrc":"group1/M00/47/98/yq0KA1TTIWiAcOAIAACQEqOa2FA965.jpg"},"elements":null,"scene":null},{"id":482706,"sceneId":1301,"num":19,"name":null,"properties":{"thumbSrc":"group1/M00/C5/80/yq0KA1SHxM6AMOllAAEhSr5h3nk957.jpg"},"elements":null,"scene":null},{"id":11287602,"sceneId":1301,"num":20,"name":null,"properties":{"thumbSrc":"group1/M00/C0/29/yq0KA1TF86OAOIoWAACGMKBEioU387.jpg"},"elements":null,"scene":null},{"id":482743,"sceneId":1301,"num":21,"name":null,"properties":{"thumbSrc":"group1/M00/8A/36/yq0KA1S-HZ2ATcQ2AADbGm7DKjQ190.jpg"},"elements":null,"scene":null},{"id":28946469,"sceneId":1301,"num":22,"name":null,"properties":{"thumbSrc":"group1/M00/38/E2/yq0KA1TxJbSAHqilAAB4zfMKJf8792.jpg"},"elements":null,"scene":null},{"id":486012,"sceneId":1301,"num":23,"name":null,"properties":{"thumbSrc":"group1/M00/57/39/yq0KA1S0jQmAO_m1AAC_KGI1KnM085.jpg"},"elements":null,"scene":null},{"id":10626066,"sceneId":1301,"num":24,"name":null,"properties":{"thumbSrc":"group1/M00/E4/F1/yq0KA1TJwUCAVarBAABgKz32g3Y898.jpg"},"elements":null,"scene":null},{"id":26194449,"sceneId":1301,"num":25,"name":null,"properties":{"thumbSrc":"group1/M00/FF/E9/yq0KA1TjIwqAMzsqAAETgT_8a4o836.jpg"},"elements":null,"scene":null},{"id":7453718,"sceneId":1301,"num":26,"name":null,"properties":{"thumbSrc":"group1/M00/94/D5/yq0KA1S_h5yAW3RnAAB9mmYEapg038.jpg"},"elements":null,"scene":null},{"id":7459858,"sceneId":1301,"num":27,"name":null,"properties":{"thumbSrc":"group1/M00/94/D6/yq0KA1S_h7eACZbWAACbmTLnQrI479.jpg"},"elements":null,"scene":null},{"id":7460213,"sceneId":1301,"num":28,"name":null,"properties":{"thumbSrc":"group1/M00/82/3D/yq0KA1S85v-AGOdvAADdGaICBCk630.jpg"},"elements":null,"scene":null},{"id":7460665,"sceneId":1301,"num":29,"name":null,"properties":{"thumbSrc":"group1/M00/49/3C/yq0KA1Swmg2AUCzhAACIrK1ZHLA558.jpg"},"elements":null,"scene":null},{"id":7572348,"sceneId":1301,"num":30,"name":null,"properties":{"thumbSrc":"group1/M00/F5/45/yq0KA1SbdG2AI4btAAAUVFp18O4362.png"},"elements":null,"scene":null}]}';
   
    $src2 = 'bj1/';
   $src3 = preg_replace("/(group1\/\w+\/\w+\/\w+\/)/", $src2, $data);
   echo $src3;
   
 
}


public function my_file_exists($file)
{
	if(preg_match('/^http:\/\//',$file)){
		//远程文件
		if(ini_get('allow_url_fopen')){
			if(@fopen($file,'r')) return true;
		}
		else{
			$parseurl=parse_url($file);
			$host=$parseurl['host'];
			$path=$parseurl['path'];
			$fp=fsockopen($host,80, $errno, $errstr, 10);
			if(!$fp)return false;
			fputs($fp,"GET {$path} HTTP/1.1 \r\nhost:{$host}\r\n\r\n");
			if(preg_match('/HTTP\/1.1 200/',fgets($fp,1024))) return true;
		}
		return false;
	}
	return file_exists($file);
}
public function save_pic($url, $savepath = '')
{ 
    // 处理地址
    $url = trim($url);
    $url = str_replace(" ", "%20", $url); 
    // 读文件
    $string = $this -> read_filetext($url);

    if (empty($string))
    {
        echo '读取不了文件';
        exit;
    } 
    // 文件名
    $filename = $this -> get_filename($url); 
    // 存放目录;
    // print_r($savepath);exit;
    $this -> make_dir($savepath); //建立存放目录   
    // 文件地址
    $filepath = $savepath . $filename; 
    // 写文件
    $this -> write_filetext($filepath, $string);
    return $filename;
} 
public function get_filename($filepath)
{
    $fr = explode("/", $filepath);
    $count = count($fr)-1;
    return $fr[$count];
} 
public function read_filetext($filepath)
{
    $filepath = trim($filepath);
    $htmlfp = @fopen($filepath, "r"); 
    // 远程
    if (strstr($filepath, "://"))
    {
        while ($data = @fread($htmlfp, 500000))
        {
            $string .= $data;
        } 
    } 
    // 本地
    else
    {
        $string = @fread($htmlfp, @filesize($filepath));
    } 
    @fclose($htmlfp);
    return $string;
} 

public function write_filetext($filepath, $string)
{ 
    // $string=stripSlashes($string);
    $fp = @fopen($filepath, "w");
    @fputs($fp, $string);
    @fclose($fp);
} 
public function make_dir($path)
{
    if (!file_exists($path)) // 不存在则建立
        {
         $mk = @mkdir($path,0777,true);
        @chmod($path, 0777);
    } 
    return true;
} 

}

