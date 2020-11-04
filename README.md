# huaweicloud-sdk-php-obs

#### 介绍
此依赖根据华为的[obs/esdk-obs-php](https://packagist.org/packages/obs/esdk-obs-php)修改版，不作为任何商业目的

Version 3.19.9 更新发布版本号，新的版本号命名方式：主版本号.年标识.月标识。

新特性：

资料&demo:

修复问题：

修复OBS请求时，Host偶尔被异常替换的问题；
修复特殊场景下，日志模块无法正常工作的问题；
修复header中的正常特殊字符被url编码的问题；
Version 3.1.3 新特性：

资料&demo:

修复问题：

修复连接OBS服务超时时，解析request-id报错导致异常信息被截断的问题；

#### 安装教程

```bash
composer require chimukeji/esdk-obs-php
```