<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/public/statics/css/index.css" />
    <title>JetPHP制作简易留言板</title>
</head>
<body>
<div id="header">
    <h3>JetPHP制作简易留言板</h3>
</div>
<div class="message">
    <?php
        echo $_GET['msg'];
    ?>
</div>
<div id="footer">
    <h3>JetPHP留言板 @copyright 2018 JetPHP版权所有 </h3>
</div>
</body>
</html>