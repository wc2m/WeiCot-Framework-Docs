##  WeiCot Framework  快速开发教程 -www.weicot.com 

### 简介
**WeiCot Framework  是一个高度模块化低耦合可拆分的适用于快速开发的PHP框架**  
此框架自2016/5/23开发完成, 一直处于使用和完善中。我们用它开发了多个项目 如购车商城、站群管理工具、采集工具、供销存系统、OA、定制设计系统、图床、普通商城、ERP、微信小程序后台、微服务系统、分布式系统等。
### 支持的PHP 版本
**php 5.6 - php7**
> * 我们分别在 php5.6、php7.1、php7.2、php-7.3 的环境中进行了实际测试，全部通过。
> * 由于php 7以上不在支持 mysql 扩展所以默认使用 Weicot\Core\Pdo 类 
> 或 think-orm 进行数据库操作，但为了为兼容特殊情况版本我们保留了 Weicot\Core\Database 这种支持mysql 扩展的数据库操作类 


### 当前框架版本
**WeiCot Framework  Version （框架版本版本号） 2.57**

### 快速入门
- [服务器环境搭建教程](http://www.weicot.com/centos7mysqlmariadbsendmailnginxphp-%e7%8e%af%e5%a2%83%e6%90%ad%e5%bb%ba%e4%b8%80%e6%9d%a1%e9%be%99/ "服务器环境搭建教程")
- [框架的nginx或Apache规则配置文件](框架的nginx或Apache规则配置文件.md "框架的nginx或Apache规则配置文件")
- [基础配置文件说明](基础配置文件说明.md "基础配置文件说明")
- [框架的目录结构说明](框架的目录结构说明.md "框架的目录结构说明")
- [如何手动创建一个模块以Cms为例](如何手动创建一个模块以Cms为例.md "如何手动创建一个模块以Cms为例")
- [一些Class和Function说明](一些Class和Function说明.md "一些Class和Function说明")

 
### 涉及的开源项目
**前端主要使用的开源项目 layui 用于CURD自动生成(非深度绑定 可用 VUE 、ElementUI、Mint UI 组件进行替换 )**
- [layui](https://www.layui.com/ "layui")
- [layui 文档](https://www.layui.com/doc/ "layui 文档")

**后端经常使用的ORM  think-orm**
- [think-orm](https://github.com/top-think/think-orm "think-orm")
- [think-orm 文档](https://www.kancloud.cn/manual/think-orm/1257998 "think-orm 文档")


### 联系我们
- 邮箱 1050653098@qq.com
- [博客 weicot.com](http://www.weicot.com/ "作者博客")
