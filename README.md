这是一个轻量级的PHP框架，在这里你可以自由加载你需要的扩展包。<br/>
引入自动加载，medoo数据库操作扩展，自定义了日志类，twig模板引擎。<br/>
基本实现了MVC三层结构<br/>

目录结果如下<br/>
app---项目入口文件夹<br/>
      ---controller 控制器文件夹<br/>
      ---model 模型文件夹<br/>
      ---view 视图文件夹<br/>
core---框架核心文件夹<br/>
      ---common 公用函数库<br/>
      ---config 自定义配置文件夹<br/>
      ---lib 框架核心类库<br/>
rutime---系统运行日志缓存文件目录<br/>
      ---log 日志文件<br/>
vendor---第三方库类支持composer<br/>

composer.json----composer文件<br/>
composer.lock----composer文件<br/>
index.php----框架入口文件<br/>
