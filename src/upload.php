<?php
require_once 'function.php';

$target_url = 'http://'.$_SERVER['SERVER_NAME'].'/Uploads/'.date("Y-m-d",time()).'/';

$filepath = './Uploads/'.date("Y-m-d",time()).'/';
if(file_exists($filepath)==false){
    mkdir ($filepath,0777,true);
}
$image_base = decodeFile($_POST['base64']);
$filename = time().'_'.$_POST['size'].'.'.$image_base['type'];
file_put_contents($filepath.$filename,$image_base['fileStream']);

echo json_encode(array('src'=>$target_url.$filename,"error"=>0));