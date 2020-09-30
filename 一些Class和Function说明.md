  
# WeiCot Framework  快速开发教程 -一些Class和Function说明
### WeiCot Framework  快速开发教程 -www.weicot.com 
 
**Run::routeDetails() 获取路由详情**
- \Weicot\Core\Run::routeDetails()
```php
array(6) {
   ["app"]=>
   string(3) "cms"   //应用/模块 名称
   ["controller"]=>  // 控制器名称
   string(7) "content"
   ["class"]=>  //控制类名
   string(29) "Weicot\Cms\Controller\Content"
   ["action"]=>
   string(12) "page"   //action 方法名
   ["path"]=>
   string(24) "cms/content/page"   //路由路径
   ["route"]=>
   string(24) "cms/content/page" //路由
 }


```
**Db::table ;   tp-orm**
- \think\Db
```php
$query = Db::table($this->model->table)->field($this->model->field);
```
**Help**
-  \Weicot\Base\Model\Help;
> 各种辅助工具的集合


**__config($key = '', $value = '')**
-   app/etc/Config.php;
> 获取配置文件的数据 通过 __config($key = '', $value = '')  获取 全局有效


**Config::get($key, $default = null)**
-   app\code\System\Model\Config.php 
> 获取System 数据库中的配置文件 通过 Config::get($key, $default = null)  获取 全局有效


 
 
