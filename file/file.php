<html>
<meta http-equiv="Content-Type" content="text/html; charset=gbk"/>

<?php
/**
 * Created by PhpStorm.
 * User: yzz
 * Date: 2017/6/24 0024
 * Time: 下午 6:50
 */
$path = 'C:\Users\Administrator\Desktop\学习路线\李炎辉第一季php资料';
echo basename($path);
echo '<br>';
echo dirname($path);
echo '<br>';
echo trim($path);
echo '<br>';
print_r(pathinfo($path));

require 'FileUtils.php';
$fileUtils = new FileUtils();
$fileUtils->readFile('test.txt',"r");
?>
</html>