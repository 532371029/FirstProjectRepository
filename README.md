这是一个轻量级的PHP框架，在这里你可以自由加载你需要的扩展包。
引入自动加载，medoo数据库操作扩展，自定义了日志类，twig模板引擎。
基本实现了MVC三层结果

目录结果如下
app---项目入口文件夹
      ---controller 控制器文件夹
      ---model 模型文件夹
      ---view 视图文件夹
core---框架核心文件夹
      ---common 公用函数库
      ---config 自定义配置文件夹
      ---lib 框架核心类库
rutime---系统运行日志缓存文件目录
      ---log 日志文件
vendor---第三方库类支持composer

composer.json----composer文件
composer.lock----composer文件
index.php----框架入口文件
