# jsnlib-des
實現 DES 加密方式，如 
- ECB DES-ECB、DES-EDE3
- CBC DES-CBC、DES-EDE3-CBC、DESX-CBC
- CFB DES-CFB8、DES-EDE3-CFB8
- CTR
- OFB

#範例
````php
use Jsnlib\DES;

$des = new DES('key123456', 'DES-ECB', DES::OUTPUT_BASE64);
$data = [
    'id' => 'A123456',
    'name' => 'Cary',
    'expired' => '2099-01-01'
];
$encrypt = $des->encrypt(json_encode($data));
$descrypt = $des->decrypt($encrypt);
````