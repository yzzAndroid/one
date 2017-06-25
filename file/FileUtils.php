<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24 0024
 * Time: 下午 11:34
 */
class FileUtils
{
	public function readFile($path,$readModel){
		if (empty($path))return;
		echo "<br>";
		echo realpath($path);
		$rs = fopen($path,$readModel);
		echo '<br>';
		while (!feof($rs)){
			echo fgets($rs)."<br>";
		}
		fclose($rs);
	}
}