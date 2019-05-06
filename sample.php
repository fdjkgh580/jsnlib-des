<?php
include_once 'vendor/autoload.php';

use Jsnlib\DES;

$data = [
    'id' => 'A123456',
    'name' => 'Cary',
    'expired' => '2099-01-01'
];

// 建立一把鑰匙
$key = 'huhgreoga9t34t8938t3o';

// 使用的加密方式
$method = 'DES-ECB';

// 輸出選用 BASE64 輸出字串
$des = new DES($key, $method, DES::OUTPUT_BASE64);

// 加密
$encrypt = $des->encrypt(json_encode($data));
//echo $encrypt; // output: GHzMZbmc6vBSvNYdzVoj35KpLVztixJv5fkym89wPHBo46qM91LYn/JcFKDnDjs0lKqZ9U2br3M=

// 解密
$descrypt = $des->decrypt($encrypt);
//print_r(json_decode($descrypt)); // output: stdClass Object ( [id] => A123456 [name] => Cary [expired] => 2099-01-01 )