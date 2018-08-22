## pfcexpress api
这个是皇家物流的api封装, 提供跨境电商用户将此api集成在自己的后台

### 项目正在开发阶段， 欢迎提交PR, 开发方式
- 在[皇家物流官网](http://www.pfcexpress.com)注册账号, 获取api key, user id
- git clone https://github.com/kk0501/pfcexpress.git
- composer dump-autoload
- 根目录新建test.php文件, 添加
```
require_once __DIR__.'/vendor/autoload.php';
$apiKey = 'your api key';
$userId = 'your user id';
$obj = new \Kk0501\Pfcexpress\Api($apiKey, $userId);
$countrys = $obj->getCountry();
var_dump($countrys);
$packages = $obj->getPackage('订单号或追踪单号');
var_dump($packages);
```
- [开发文档地址](http://www.pfcexpress.com/webservice/APIDoc.html)