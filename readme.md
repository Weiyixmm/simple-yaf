
# Simple-yaf Framework for PHP 

根据源生Yaf框架，封装的框架。

## 版本

#### Version 1.0.0
> 源生Yaf框架(使用yaf_cg生成)，未做任何修改。

#### Version 2.*
> 根据源生Yaf框架，进行了简单的封装，未引入composer包(引入composer，会影响框架性能，后续版本会引入)。数据库类包使用Medoo，日志使用Seaslog扩展。

## 要求
> 扩展安装请注意相对应的PHP版本要求，框架并未严格要求PHP版本，最低版本要求为PHP 7以上。

- [Yaf](https://pecl.php.net/package/yaf) 扩展
- [Seaslog](https://pecl.php.net/package/seaslog) 扩展(2.*)

## 安装

```bash
$ composer create-project weiyixmm/yaf simple-yaf [1.0.0]
```

## 目录结构(2.*)

```
+ application
  |+ controllers                # 默认控制器目录
     |- Index.php               # 默认控制器
  |+ cron                       # Cli脚本目录
     |- Demo.php                # Cli示例文件
  |+ library                    # 类库目录
     |+ cron                    # 核心类文件目录
        |- ErrorCode.php        # 错误状态码文件
        |- Request.php          # 请求处理类
        |- Response.php         # 响应处理类
     |+ database                # 数据库类库目录
        |- BaseDB.php           # 数据库Model基类
        |- Medoo.php            # 数据库操作类包
     |- BaseApi.php             # modules下Api基类(路径改变，命名空间会有问题)
  |+ models                     # model目录
     |- Demo.php                # 示例Model
     |- Sample.php              # 源生Model文件，未删除
  |+ modules                    # 模块目录
     |+ api                     # api模块
        |+ controllers          # 控制器目录
           |- Demo.php          # 示例控制器
        |+ service              # 逻辑处理目录
           |- DemoService.php   # 示例逻辑处理
  |+ plugins                    # 插件目录(中间件)
     |- Common.php              # 通用中间件
     |- Sample.php              # 源生中间件文件
  |+ views                      # 模板目录
     |+ index   
        |- index.phtml
  |- Bootstrap.php              # 引导文件
+ conf
  |- application.ini            # 配置文件  
+ public                        # 公共目录
  |- cli.php                    # Cli入口文件
  |- index.php                  # 入口文件
```

## 使用
框架内有使用示例，关于Yaf框架，请参照[Yaf 手册](https://www.laruence.com/manual/index.html)