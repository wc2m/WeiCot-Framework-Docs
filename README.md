
# WeiCot Framework 快速开发教程 -框架的目录结构说明

## 框架简介
WeiCot Framework  是一个高度模块化低耦合可拆分的适用于快速开发的PHP框架
## 目录结构
### api:      
框架的API接口请求目录(用于存放不同版本的接口处理程序)
外部程序通过这个目录的v2.php (接口版本.php) 转发到相应的控制下,  
例子
- cms.user.list   则会转发到  app/code/Cms/Controller/User.php ->list()  
- cms.list       则会转发到  app/code/Cms/Controller/Api.php ->list() 默认的 Api.php 控制器下面

###  app:  
用来存放框架中的实际应用程序以及配置和加载文件 
其中 包含
#### app/code  应用代码目录
此目录可以不止一个 如  app/erp  支持多种不同类型的程序共用一套框架通过域名区分适用于多站点程序 或者多个不同类型的人程序

#### 以Cms模块为例 
- Cms 模块代码所在的目录结构
> * app/code/Cms
> * app/code/Cms/Block
> * app/code/Cms/Controller
> * app/code/Cms/Data
> * app/code/Cms/Model
> * app/code/Cms/View 
 
- Block  视图以及静态块逻辑所在的目录 
> * 完整路径  app/code/Cms/Block   
> *  Cms/View 中的模板调用的就这个目录的方法,主要存储视图中公用的方法或者html混编的方法等,以及一些html 组件和前端互动组件等.
> *  继承自 Weicot\Core\Block  里面有自动生成各种html 组件的方法,以及其他通用方法等。
- Controller    控制器所在的目录 
> * 完整路径  app/code/Cms/Controller   
> * 前端的所有访问的url 都将调用相应模块或应用下面的控制器中的方法, 
> * 继承自  Weicot\Core\Controller 。里面有Controller 常用的方法以及权限控制等 ，里面还有标准的读写查询批量操作以及删除的标准函数名，请按照基类的标准读写查询函数名进行规范书写方便做各种权限控制。
- Data  提供数据库安装以及其他操作所在的目录 
> * 完整路径 app/code/Cms/Data
> * 提供供数据库安装以及其他操作，这个为数据与Model的中间层 。方便做数据迁移 ，此目录为非必须。
- Model  此为存放业务逻辑的目录 
> * 完整路径 app/code/Cms/Model 
> *  提供一些基础的读写查询方法 可以和 think-php5 的ORM 集成使用  也可以使用自带的Pdo 类
> * 继承自  Weicot\Coer\Model; 
- View 
> *  完整路径 app/code/Cms/View 
> *  html模板以xxx.phtml结尾，及其他静态文件。
> *  此目录的文件可以进行迁移 到 skin/frontend/template 目录下面 
只要将配置 app/etc/Config.php 文件中的 template  dir 改为  skin/frontend/template 然后运行迁移工具即可
```php
 'template' => [
        'dir' => "app/code/"  //模板路径默认路径 app / code / 前后端分离的路径  skin / frontend / template
    ],
    
    
```
####  app/etc     用于存放各种配置文件的地方
> *   Config.php 主要配置文件 
> *  完整路径  app/etc/Config.php
> *  此配置文件可以通过 __config($key = '', $value = '')  获取 全局有效
> *  注： app\code\System\Model\Config.php  System 模块下的配置文件可以通过 Config::get($key, $default = null)  获取 这个是存储到数据库中的
> *  app/etc/Config.ini  默认为空   [ 自由配置文件 通过    $config = File::getConfig();  获取]    
> *  app/etc/Initialization.php  初始化文件 里面有各种初始化信息
####  app\bootstrap.php 用于加载整个系统的文件
####  bin： 命令行工具存放目录
####  lib： 依赖库
> *  依赖库 lib/Core  核心依赖库
####   media  媒体文件


####   skin 前端样式
-   skin/frontend 前台样式
> *  skin/frontend/css css 文件
> *  skin/frontend/file 其他文件
> *  skin/frontend/fonts 字体
> *  skin/frontend/images 图片
> *  skin/frontend/js js 文件
> *  skin/frontend/template
> * 用于存放从模块/应用中迁移过来的前端代码以及模板等，用于前后端分离。
> * 如果模块默认配置的话，则模块的默认视图路径 app/code/Cms/View/list.phtml
> * 迁移后的路径 skin/frontend/template/Cms/list.phtml
- skin\adminhtml  后台样式目录结构与前端样式一样
- skin\package  前端的各种依赖包
> *  skin\package\city-picker city-picker 包
> *  skin\package\ECharts ECharts包


#### var 系统产生的临时文件存放目录 
>* 如 session cache 等  里面的文件可以删除 但是不会哦影响系统使用
#### vendor使用 composer命令加载vendor类库
#### composer.json  composer  配置文件
#### cron.php 计划任务
#### task.php 多进程任务
#### index.php 入口程序
