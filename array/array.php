<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24 0024
 * Time: 下午 5:39
 */
require 'ProductBean.php';
$products;
$pOne = new ProductBean();
$pOne->setPName("苹果");
$pOne->setPNum(50);
$pOne->setPPrice(25.3);

$pTwo = new ProductBean();
$pTwo->setPName("西瓜");
$pTwo->setPNum(120);
$pTwo->setPPrice(10.0);
$products = array($pOne,$pTwo);
echo "名字	数量    价格<br>";
echo "-----------------<br>";
foreach ($products as $p){
	echo $p->getPName()." " .$p->getPNum()." " .$p->getPPrice()."<br>";
}
echo '<br>';
for ($i=0,$size = sizeof($products);$i<$size;$i++){
	echo $products[$i]->getPNum().'<br>';
}
print_r($products);

?>