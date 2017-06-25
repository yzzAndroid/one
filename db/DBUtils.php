<?php

/**
 * Created by PhpStorm.
 * User: yzz
 * Date: 2017/6/23 0023
 * Time: 下午 8:11
 */
class DBUtils
{
	private $hostName = "";
	private $password = "";
	private $userName = "";
	private $databaseName = "";
	private $port = "";
	
	private $databaseConn = null;
	
	/**
	 * 构造器，初始化必备参数
	 * */
	public function DbUtils(){
		$this->hostName = "localhost";
		$this->password = "";
		$this->userName = "root";
		$this->databaseName = "one";
		$this->port = "3306";
		$this->initDB();
	}
	
	/**
	 * 初始化数据库连接
	 * */
	private function initDB(){
		$this->databaseConn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->databaseName, $this->port);
		if ($this->databaseConn == null) {
			die("could not connection error ");
		}// else echo $this->databaseConn->client_info;
	}
	
	/**
	 * 创建表
	 * *
	 * @param $tName
	 * @param $fields
	 * @param $types
	 * @param $key
	 * @param $isAutoIncrement
	 */
	public function createTable($tName, $fields, $types, $key, $isAutoIncrement)
	{
		try {
			$sql = "create table if NOT  EXISTS " . $tName . "(";
			$sql .= $key . " int Primary Key  AUTO_INCREMENT not null ,";
			if (!(is_array($fields) && is_array($types))) return;
			if (count($fields) != count($types)) return;
			$count = sizeof($fields);
			for ($i = 0; $i <= $count; $i++) {
				if (empty($fields[$i])) {
					continue;
				}
				$sql .= $fields[$i]
					 . " "
					 . $types[$i]
					 . " NOT NULL ";
				echo $fields[$i];
				if ($i < $count - 1) $sql .= " , ";
			}
			$sql .= ")";
			$isSuccess = mysqli_query($this->databaseConn, $sql, 1);
			if ($isSuccess) echo "success"; else echo "failed<br>" . $sql;
		}catch (Exception $e){
			echo $e->getMessage();
		}
		
	}
	
	
	/**
	 * @param $tableName
	 */
	public function selectAll($tableName){
		$sql = "select * from ".$tableName;
		$result = mysqli_query($this->databaseConn,$sql,1);
		echo"<br>".$result->lengths;
		$result->close();
	}
	
	public function insert(){
		
	}
	
	function printInfo(){
		echo "name" . " " . $this->hostName . "<br>";
		echo "password" . " " . $this->password . "<br>";
	}
}
