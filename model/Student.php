<?php

/**
 * Created by PhpStorm.
 * User: yzz
 * Date: 2017/6/24 0024
 * Time: 上午 11:38
 */
class Student
{
	private $name;
	private $age;
	private $sex;
	
	/**
	 * Student constructor.
	 * @param $name
	 * @param $age
	 * @param $sex
	 */
	
	public function __construct($name, $age, $sex)
	{
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
	
	
	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getAge()
	{
		return $this->age;
	}
	
	/**
	 * @param mixed $age
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}
	
	/**
	 * @return mixed
	 */
	public function getSex()
	{
		return $this->sex;
	}
	
	/**
	 * @param mixed $sex
	 */
	public function setSex($sex)
	{
		$this->sex = $sex;
	}
}