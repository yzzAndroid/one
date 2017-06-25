<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23 0023
 * Time: 下午 8:59
 */
require 'DBUtils.php';
$dbUtils = new DBUtils();
$fields = array("name","sex","age");
$types = array("varchar(20)","varchar(2)","int");
$dbUtils->createTable("t_student",$fields,$types,"_id",true);
$dbUtils->selectAll("t_student");
